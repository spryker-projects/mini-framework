<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\PaymentProvider\Communication\Plugin\AppPayment;

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
use Generated\Shared\Transfer\InitializePaymentRequestTransfer;
use Generated\Shared\Transfer\InitializePaymentResponseTransfer;
use Generated\Shared\Transfer\PaymentMethodConfigurationRequestTransfer;
use Generated\Shared\Transfer\PaymentMethodConfigurationResponseTransfer;
use Generated\Shared\Transfer\PaymentPageRequestTransfer;
use Generated\Shared\Transfer\PaymentPageResponseTransfer;
use Generated\Shared\Transfer\PaymentStatusRequestTransfer;
use Generated\Shared\Transfer\PaymentStatusResponseTransfer;
use Generated\Shared\Transfer\RefundPaymentRequestTransfer;
use Generated\Shared\Transfer\RefundPaymentResponseTransfer;
use Generated\Shared\Transfer\WebhookRequestTransfer;
use Generated\Shared\Transfer\WebhookResponseTransfer;
use Spryker\Zed\AppKernelExtension\Dependency\Plugin\AppKernelPlatformPluginInterface;
use Spryker\Zed\AppPayment\Dependency\Plugin\AppPaymentPlatformCancelPreOrderPluginInterface;
use Spryker\Zed\AppPayment\Dependency\Plugin\AppPaymentPlatformConfirmPreOrderPluginInterface;
use Spryker\Zed\AppPayment\Dependency\Plugin\AppPaymentPlatformPaymentMethodsPluginInterface;
use Spryker\Zed\AppPayment\Dependency\Plugin\AppPaymentPlatformPaymentPagePluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Pyz\Zed\PaymentProvider\Business\PaymentProviderFacadeInterface getFacade()
 * @method \Pyz\Zed\PaymentProvider\PaymentProviderConfig getConfig()
 */
class PaymentProviderPaymentPlatformPlugin extends AbstractPlugin implements AppPaymentPlatformPaymentPagePluginInterface, AppPaymentPlatformPaymentMethodsPluginInterface, AppPaymentPlatformConfirmPreOrderPluginInterface, AppPaymentPlatformCancelPreOrderPluginInterface, AppKernelPlatformPluginInterface
{
    public function validateConfiguration(AppConfigTransfer $appConfigTransfer): AppConfigValidateResponseTransfer
    {
        return $this->getFacade()->validateConfiguration($appConfigTransfer);
    }

    public function configurePaymentMethods(
        PaymentMethodConfigurationRequestTransfer $paymentMethodConfigurationRequestTransfer
    ): PaymentMethodConfigurationResponseTransfer {
        return $this->getFacade()->configurePaymentMethods($paymentMethodConfigurationRequestTransfer);
    }

    public function initializePayment(InitializePaymentRequestTransfer $initializePaymentRequestTransfer): InitializePaymentResponseTransfer
    {
        return $this->getFacade()->initializePayment($initializePaymentRequestTransfer);
    }

    public function confirmPreOrderPayment(ConfirmPreOrderPaymentRequestTransfer $confirmPreOrderPaymentRequestTransfer): ConfirmPreOrderPaymentResponseTransfer
    {
        return $this->getFacade()->confirmPreOrderPayment($confirmPreOrderPaymentRequestTransfer);
    }

    public function cancelPreOrderPayment(CancelPreOrderPaymentRequestTransfer $cancelPreOrderPaymentRequestTransfer): CancelPreOrderPaymentResponseTransfer
    {
        return $this->getFacade()->cancelPreOrderPayment($cancelPreOrderPaymentRequestTransfer);
    }

    public function getPaymentPage(PaymentPageRequestTransfer $paymentPageRequestTransfer): PaymentPageResponseTransfer
    {
        return $this->getFacade()->getPaymentPage($paymentPageRequestTransfer);
    }

    public function handleWebhook(WebhookRequestTransfer $webhookRequestTransfer, WebhookResponseTransfer $webhookResponseTransfer): WebhookResponseTransfer
    {
        return $this->getFacade()->handleWebhook($webhookRequestTransfer, $webhookResponseTransfer);
    }

    public function capturePayment(CapturePaymentRequestTransfer $capturePaymentRequestTransfer): CapturePaymentResponseTransfer
    {
        return $this->getFacade()->capturePayment($capturePaymentRequestTransfer);
    }

    public function cancelPayment(CancelPaymentRequestTransfer $cancelPaymentRequestTransfer): CancelPaymentResponseTransfer
    {
        return $this->getFacade()->cancelPayment($cancelPaymentRequestTransfer);
    }

    public function refundPayment(RefundPaymentRequestTransfer $refundPaymentRequestTransfer): RefundPaymentResponseTransfer
    {
        return $this->getFacade()->refundPayment($refundPaymentRequestTransfer);
    }

    public function getPaymentStatus(PaymentStatusRequestTransfer $paymentStatusRequestTransfer): PaymentStatusResponseTransfer
    {
        return $this->getFacade()->getPaymentStatus($paymentStatusRequestTransfer);
    }
}
