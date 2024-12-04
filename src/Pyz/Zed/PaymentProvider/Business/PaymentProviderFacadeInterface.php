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
use Generated\Shared\Transfer\GlueRequestTransfer;
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

interface PaymentProviderFacadeInterface
{
    /**
     * Specification:
     * - Validates the configuration for the PaymentProvider payment method.
     * - Returns `AppConfigValidateResponseTransfer` with success status and message if configuration is valid.
     * - Returns `AppConfigValidateResponseTransfer` with error status and message if configuration is not valid.
     *
     * @api
     */
    public function validateConfiguration(AppConfigTransfer $appConfigTransfer): AppConfigValidateResponseTransfer;

    /**
     * Specification:
     * - Configures Payment methods to be used on the Tenant side.
     * - Receives a `PaymentMethodConfigurationRequestTransfer`.
     * - Passes the `PaymentMethodConfigurationRequestTransfer.appConfig`.
     * - Returns `PaymentMethodConfigurationResponseTransfer` with payment methods to add.
     * - Returns `PaymentMethodConfigurationResponseTransfer` with payment methods to delete.
     *
     * @api
     */
    public function configurePaymentMethods(
        PaymentMethodConfigurationRequestTransfer $paymentMethodConfigurationRequestTransfer
    ): PaymentMethodConfigurationResponseTransfer;

    /**
     * Specification:
     * - Initializes payment for provided `InitializePaymentRequestTransfer`.
     * - Returns `InitializePaymentResponseTransfer` with success status and message if initialization was successful.
     * - Returns `InitializePaymentResponseTransfer` with error status and message if initialization was not successful.
     *
     * @api
     */
    public function initializePayment(InitializePaymentRequestTransfer $initializePaymentRequestTransfer): InitializePaymentResponseTransfer;

    /**
     * Specification:
     * - Confirms a pre-order payment for provided transactionId.
     * - Updates the PaymentIntent description so the Order Reference is displayed in the PaymentProvider UI.
     * - Returns `ConfirmPreOrderPaymentResponseTransfer` with success status and message if capture was successful.
     * - Returns `ConfirmPreOrderPaymentResponseTransfer` with error status and message if capture was not successful.
     *
     * @api
     */
    public function confirmPreOrderPayment(
        ConfirmPreOrderPaymentRequestTransfer $confirmPreOrderPaymentRequestTransfer
    ): ConfirmPreOrderPaymentResponseTransfer;

    /**
     * Specification:
     * - Cancels a pre-order payment for provided transactionId.
     * - Returns `CancelPreOrderPaymentResponseTransfer` with success status and message if capture was successful.
     * - Returns `CancelPreOrderPaymentResponseTransfer` with error status and message if capture was not successful.
     *
     * @api
     */
    public function cancelPreOrderPayment(CancelPreOrderPaymentRequestTransfer $cancelPreOrderPaymentRequestTransfer): CancelPreOrderPaymentResponseTransfer;

    /**
     * Specification:
     * - Requests payment page for provided `PaymentPageRequestTransfer`.
     * - Returns `PaymentPageResponseTransfer` with success status and message if payment page was found.
     * - Returns `PaymentPageResponseTransfer` with error status and message if payment page was not found.
     *
     * @api
     */
    public function getPaymentPage(PaymentPageRequestTransfer $paymentPageRequestTransfer): PaymentPageResponseTransfer;

    /**
     * Specification:
     * - Captures payment for provided transactionId.
     * - Returns `CapturePaymentResponseTransfer` with success status and message if capture was successful.
     * - Returns `CapturePaymentResponseTransfer` with error status and message if capture was not successful.
     *
     * @api
     */
    public function capturePayment(CapturePaymentRequestTransfer $capturePaymentRequestTransfer): CapturePaymentResponseTransfer;

    /**
     * Specification:
     * - Cancel payment for provided transactionId.
     * - Returns `CancelPaymentResponseTransfer` with success status and message if capture was successful.
     * - Returns `CancelPaymentResponseTransfer` with error status and message if capture was not successful.
     *
     * @api
     */
    public function cancelPayment(CancelPaymentRequestTransfer $cancelPaymentRequestTransfer): CancelPaymentResponseTransfer;

    /**
     * Specification:
     * - Creates refund for provided transactionId and amount.
     * - Returns `RefundPaymentRequestTransfer` with success status and message if refund was successful.
     * - Returns `RefundPaymentResponseTransfer` with error status and message if refund was not successful.
     *
     * @api
     */
    public function refundPayment(RefundPaymentRequestTransfer $refundPaymentRequestTransfer): RefundPaymentResponseTransfer;

    /**
     * Specification:
     * - Handles webhook request.
     * - Supports only `payment_intent.succeeded` and `payment_intent.payment_failed` events.
     * - Returns `WebhookResponseTransfer` with success status and `Payment.status` if webhook was handled successfully.
     * - Returns `WebhookResponseTransfer` with error status and message if webhook was not handled successfully.
     *
     * @api
     */
    public function handleWebhook(WebhookRequestTransfer $webhookRequestTransfer, WebhookResponseTransfer $webhookResponseTransfer): WebhookResponseTransfer;

    /**
     * Specification:
     * - Extracts `transactionId` from `PaymentStatusRequestTransfer`.
     * - Requests the payment intent for the given `transactionId` from PaymentProvider API.
     * - When payment intent is found and was successful, returns `PaymentStatusResponseTransfer` with success status.
     * - When payment intent is not found or failed, returns `PaymentStatusResponseTransfer` with failed status.
     *
     * @api
     */
    public function getPaymentStatus(PaymentStatusRequestTransfer $paymentStatusRequestTransfer): PaymentStatusResponseTransfer;
}
