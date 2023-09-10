<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder;

use Generated\Shared\Transfer\ProductDescriptionTransfer;

class ProductDescriptionIdentifierBuilder implements ProductDescriptionIdentifierBuilderInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return string
     */
    public function buildIdentifier(ProductDescriptionTransfer $productDescriptionTransfer): string
    {
        return $productDescriptionTransfer->getIdProductDescription() !== null ? (string)$productDescriptionTransfer->getIdProductDescription() : spl_object_hash($productDescriptionTransfer);
    }
}
