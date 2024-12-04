<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PyzTest\Zed\Stripe;

use ArrayObject;
use Codeception\Actor;
use Generated\Shared\Transfer\CurrencyTransfer;
use Generated\Shared\Transfer\MerchantOnboardingStateTransfer;
use Generated\Shared\Transfer\MerchantTransfer;
use Generated\Shared\Transfer\PaymentTransfer;
use Generated\Shared\Transfer\PaymentTransmissionsRequestTransfer;
use Generated\Shared\Transfer\PaymentTransmissionTransfer;
use Generated\Shared\Transfer\StripeConfigTransfer;
use Generated\Shared\Transfer\StripeMerchantConfigTransfer;
use Orm\Zed\Stripe\Persistence\SpyStripeWebhookEndpoint;
use Orm\Zed\Stripe\Persistence\SpyStripeWebhookEndpointQuery;
use Ramsey\Uuid\Uuid;
use Spryker\Zed\AppMerchant\Business\MerchantAppOnboarding\MerchantAppOnboardingStatus;
use Stripe\WebhookEndpoint;

/**
 * Inherited Methods
 *
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(\PyzTest\Zed\PaymentProvider\PHPMD)
 *
 * @method \Pyz\Zed\PaymentProvider\Business\StripeFacade getFacade()
 */
class PaymentProviderCommunicationTester extends Actor
{
    use _generated\StripeCommunicationTesterActions;

    /**
     * @param array<string, string> $stateConfig
     * @param \ArrayObject<int, \Generated\Shared\Transfer\MerchantOnboardingStateTransfer> $merchantOnboardingStateTransfers
     */
    public function assertMerchantOnboardingState(string $stateName, array $stateConfig, ArrayObject $merchantOnboardingStateTransfers): void
    {
        $foundState = false;

        foreach ($merchantOnboardingStateTransfers as $merchantOnboardingStateTransfer) {
            if ($merchantOnboardingStateTransfer->getName() === $stateName) {
                $foundState = $merchantOnboardingStateTransfer;
            }
        }

        $this->assertInstanceOf(MerchantOnboardingStateTransfer::class, $foundState);

        /** @phpstan-var \Generated\Shared\Transfer\MerchantOnboardingStateTransfer $foundState */
        $stateAttributes = $foundState->getAttributes();

        foreach ($stateConfig as $key => $value) {
            $this->assertSame($value, $stateAttributes[$key]);
        }
    }

    public function havePositivePaymentTransmissionsRequestTransfer(
        int $numberOfMerchants = 1,
        string $merchantAppOnboardingStatus = MerchantAppOnboardingStatus::STATUS_COMPLETED
    ): PaymentTransmissionsRequestTransfer {
        return $this->preparePaymentTransmissionsRequestTransfer($numberOfMerchants, $merchantAppOnboardingStatus);
    }

    public function haveNegativePaymentTransmissionsRequestTransfer(
        int $numberOfMerchants = 1,
        string $merchantAppOnboardingStatus = MerchantAppOnboardingStatus::STATUS_COMPLETED
    ): PaymentTransmissionsRequestTransfer {
        // Add a previous payment transmission with a transfer_id of the previously made transfer
        $paymentTransmissionTransfer = new PaymentTransmissionTransfer();
        $paymentTransmissionTransfer
            ->setTransferId(Uuid::uuid4()->toString());

        return $this->preparePaymentTransmissionsRequestTransfer($numberOfMerchants, $merchantAppOnboardingStatus, $paymentTransmissionTransfer);
    }

    public function haveNegativePaymentTransmissionsRequestTransferWithoutPreviouslyMadeTransfer(
        int $numberOfMerchants = 1,
        string $merchantAppOnboardingStatus = MerchantAppOnboardingStatus::STATUS_COMPLETED
    ): PaymentTransmissionsRequestTransfer {
        return $this->preparePaymentTransmissionsRequestTransfer($numberOfMerchants, $merchantAppOnboardingStatus, new PaymentTransmissionTransfer());
    }

    protected function preparePaymentTransmissionsRequestTransfer(
        int $numberOfMerchants,
        string $merchantAppOnboardingStatus,
        ?PaymentTransmissionTransfer $paymentTransmissionTransfer = null
    ): PaymentTransmissionsRequestTransfer {
        $accountId = Uuid::uuid4()->toString();
        $tenantIdentifier = Uuid::uuid4()->toString();
        $transactionId = Uuid::uuid4()->toString();
        $orderReference = Uuid::uuid4()->toString();

        $paymentTransfer = $this->havePayment([
            PaymentTransfer::TENANT_IDENTIFIER => $tenantIdentifier,
            PaymentTransfer::TRANSACTION_ID => $transactionId,
            PaymentTransfer::ORDER_REFERENCE => $orderReference,
        ]);

        $appConfigTransfer = $this->haveAppConfigForTenant($tenantIdentifier, [StripeConfigTransfer::ACCOUNT_ID => $accountId, StripeConfigTransfer::MODE => 'test']);

        $paymentTransmissionsRequestTransfer = new PaymentTransmissionsRequestTransfer();
        $paymentTransmissionsRequestTransfer
            ->setTenantIdentifier($tenantIdentifier)
            ->setAppConfig($appConfigTransfer);

        // This adds as many Merchants splitting needed for testing.
        for ($i = 0; $i < $numberOfMerchants; $i++) {
            $accountId = Uuid::uuid4()->toString();
            $merchantTransfer = $this->haveMerchantPersisted([
            MerchantTransfer::TENANT_IDENTIFIER => $tenantIdentifier,
            MerchantTransfer::CONFIG => [
                StripeMerchantConfigTransfer::ACCOUNT_ID => $accountId,
                StripeMerchantConfigTransfer::MERCHANT_ONBOARDING_STATUS => $merchantAppOnboardingStatus,
            ]]);

            $innerPaymentTransmissionTransfer = $this->getPaymentTransmissionTransfer($transactionId, $orderReference, $merchantTransfer, $paymentTransmissionTransfer);
            $innerPaymentTransmissionTransfer->setPayment($paymentTransfer);

            $paymentTransmissionsRequestTransfer->addPaymentTransmission($innerPaymentTransmissionTransfer);
        }

        return $paymentTransmissionsRequestTransfer;
    }

    protected function getPaymentTransmissionTransfer(
        string $transactionId,
        string $orderReference,
        MerchantTransfer $merchantTransfer,
        ?PaymentTransmissionTransfer $previousPaymentTransmissionTransfer = null
    ): PaymentTransmissionTransfer {
        $paymentTransmissionTransfer = new PaymentTransmissionTransfer();
        $paymentTransmissionTransfer
            ->setTransactionId($transactionId)
            ->setOrderReference($orderReference)
            ->setMerchant($merchantTransfer)
            ->setCurrency((new CurrencyTransfer())->setCode('EUR'))
            ->setAmount($previousPaymentTransmissionTransfer ? '-100' : '100');

        // Unset the previous payment transmission transfer if it has no transfer_id to simulate a transfer reversal without a previous made payment
        if ($previousPaymentTransmissionTransfer instanceof PaymentTransmissionTransfer && $previousPaymentTransmissionTransfer->getTransferId()) {
            $paymentTransmissionTransfer->setTransferId($previousPaymentTransmissionTransfer->getTransferId());
        }

        return $paymentTransmissionTransfer;
    }

    public function assertWebhookEndpointIsPersisted(WebhookEndpoint $webhookEndpoint, string $tenantIdentifier, bool $isConnect): void
    {
        $webhookEndpointEntity = SpyStripeWebhookEndpointQuery::create()
            ->filterByTenantIdentifier($tenantIdentifier)
            ->filterById($webhookEndpoint->id)
            ->findOne();

        $this->assertNotNull($webhookEndpointEntity);
        $this->assertSame($webhookEndpoint->url, $webhookEndpointEntity->getUrl());
        $this->assertSame($webhookEndpoint->livemode, $webhookEndpointEntity->isLive());
        $this->assertSame($isConnect, $webhookEndpointEntity->getIsConnect());
        $this->assertSame($webhookEndpoint->secret, $webhookEndpointEntity->getSecret());
    }

    public function haveStripeWebhookEndPoint(array $seedData): SpyStripeWebhookEndpoint
    {
        $spyStripeWebhookEndpointEntity = (new SpyStripeWebhookEndpoint())->fromArray($seedData);
        $spyStripeWebhookEndpointEntity->save();

        return $spyStripeWebhookEndpointEntity;
    }
}
