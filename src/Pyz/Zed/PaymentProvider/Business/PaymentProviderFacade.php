<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\PaymentProvider\Business;

use Generated\Shared\Transfer\AppConfigTransfer;
use Generated\Shared\Transfer\AppConfigValidateResponseTransfer;
use Generated\Shared\Transfer\CancelPaymentRequestTransfer;
use Generated\Shared\Transfer\CancelPaymentResponseTransfer;
use Generated\Shared\Transfer\CancelPreOrderPaymentRequestTransfer;
use Generated\Shared\Transfer\CancelPreOrderPaymentResponseTransfer;
use Generated\Shared\Transfer\CapturePaymentRequestTransfer;
use Generated\Shared\Transfer\CapturePaymentResponseTransfer;
use Generated\Shared\Transfer\ConfirmPreOrderPaymentRequestTransfer;
use Generated\Shared\Transfer\ConfirmPreOrderPaymentResponseTransfer;
use Generated\Shared\Transfer\DashboardUrlResponseTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\InitializePaymentRequestTransfer;
use Generated\Shared\Transfer\InitializePaymentResponseTransfer;
use Generated\Shared\Transfer\MerchantAppOnboardingDetailsTransfer;
use Generated\Shared\Transfer\MerchantAppOnboardingRequestTransfer;
use Generated\Shared\Transfer\MerchantAppOnboardingResponseTransfer;
use Generated\Shared\Transfer\PaymentMethodConfigurationRequestTransfer;
use Generated\Shared\Transfer\PaymentMethodConfigurationResponseTransfer;
use Generated\Shared\Transfer\PaymentPageRequestTransfer;
use Generated\Shared\Transfer\PaymentPageResponseTransfer;
use Generated\Shared\Transfer\PaymentStatusRequestTransfer;
use Generated\Shared\Transfer\PaymentStatusResponseTransfer;
use Generated\Shared\Transfer\PaymentTransmissionsRequestTransfer;
use Generated\Shared\Transfer\PaymentTransmissionsResponseTransfer;
use Generated\Shared\Transfer\RefundPaymentRequestTransfer;
use Generated\Shared\Transfer\RefundPaymentResponseTransfer;
use Generated\Shared\Transfer\WebhookRequestTransfer;
use Generated\Shared\Transfer\WebhookResponseTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\PaymentProvider\Business\PaymentProviderBusinessFactory getFactory()
 */
class PaymentProviderFacade extends AbstractFacade implements PaymentProviderFacadeInterface
{
    public function validateConfiguration(AppConfigTransfer $appConfigTransfer): AppConfigValidateResponseTransfer
    {
        // @todo Implement logic
    }

    public function configurePaymentMethods(
        PaymentMethodConfigurationRequestTransfer $paymentMethodConfigurationRequestTransfer
    ): PaymentMethodConfigurationResponseTransfer {
        // @todo Implement logic
    }

    public function initializePayment(InitializePaymentRequestTransfer $initializePaymentRequestTransfer): InitializePaymentResponseTransfer
    {
        // @todo Implement logic
    }

    public function confirmPreOrderPayment(ConfirmPreOrderPaymentRequestTransfer $confirmPreOrderPaymentRequestTransfer): ConfirmPreOrderPaymentResponseTransfer
    {
        // @todo Implement logic
    }

    public function cancelPreOrderPayment(CancelPreOrderPaymentRequestTransfer $cancelPreOrderPaymentRequestTransfer): CancelPreOrderPaymentResponseTransfer
    {
        // @todo Implement logic
    }

    public function getPaymentPage(PaymentPageRequestTransfer $paymentPageRequestTransfer): PaymentPageResponseTransfer
    {
        // @todo Implement logic
    }

    /**
     * {@inheritDoc}
     */
    public function capturePayment(CapturePaymentRequestTransfer $capturePaymentRequestTransfer): CapturePaymentResponseTransfer
    {
        // @todo Implement logic
    }

    /**
     * {@inheritDoc}
     */
    public function cancelPayment(CancelPaymentRequestTransfer $cancelPaymentRequestTransfer): CancelPaymentResponseTransfer
    {
        // @todo Implement logic
    }

    /**
     * {@inheritDoc}
     */
    public function refundPayment(RefundPaymentRequestTransfer $refundPaymentRequestTransfer): RefundPaymentResponseTransfer
    {
        // @todo Implement logic
    }

    /**
     * {@inheritDoc}
     */
    public function handleWebhook(WebhookRequestTransfer $webhookRequestTransfer, WebhookResponseTransfer $webhookResponseTransfer): WebhookResponseTransfer
    {
        // @todo Implement logic
    }

    public function getPaymentStatus(PaymentStatusRequestTransfer $paymentStatusRequestTransfer): PaymentStatusResponseTransfer
    {
        // @todo Implement logic
    }
}
