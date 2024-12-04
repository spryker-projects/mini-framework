<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\AppPaymentBackendApi\Mapper\Payment;

use Generated\Shared\Transfer\CancelPreOrderPaymentRequestTransfer;
use Generated\Shared\Transfer\ConfirmPreOrderPaymentRequestTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Glue\AppPaymentBackendApi\Mapper\Payment\GlueRequestPaymentMapper as SprykerGlueRequestPaymentMapper;

class GlueRequestPaymentMapper extends SprykerGlueRequestPaymentMapper
{
    public function mapGlueRequestTransferToConfirmPreOrderPaymentRequestTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): ConfirmPreOrderPaymentRequestTransfer {
        $confirmPreOrderPaymentRequestTransfer = parent::mapGlueRequestTransferToConfirmPreOrderPaymentRequestTransfer($glueRequestTransfer);

        /** @phpstan-var array<string, mixed> $requestData */
        $requestData = json_decode((string)$glueRequestTransfer->getContent(), true);

        /** @phpstan-var array<string, string> $preOrderPaymentData */
        $preOrderPaymentData = $requestData['preOrderPaymentData'];

        $confirmPreOrderPaymentRequestTransfer->setTransactionId($preOrderPaymentData['transactionId']);

        return $confirmPreOrderPaymentRequestTransfer;
    }

    public function mapGlueRequestTransferToCancelPreOrderPaymentRequestTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): CancelPreOrderPaymentRequestTransfer {
        $cancelPreOrderPaymentRequestTransfer = parent::mapGlueRequestTransferToCancelPreOrderPaymentRequestTransfer($glueRequestTransfer);

        /** @phpstan-var array<string, mixed> $requestData */
        $requestData = json_decode((string)$glueRequestTransfer->getContent(), true);

        /** @phpstan-var array<string, string> $preOrderPaymentData */
        $preOrderPaymentData = $requestData['preOrderPaymentData'];

        $cancelPreOrderPaymentRequestTransfer->setTransactionId($preOrderPaymentData['transactionId']);

        return $cancelPreOrderPaymentRequestTransfer;
    }
}
