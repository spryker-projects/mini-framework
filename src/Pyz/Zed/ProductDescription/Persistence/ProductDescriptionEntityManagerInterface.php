<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Persistence;

use Generated\Shared\Transfer\ProductDescriptionTransfer;

interface ProductDescriptionEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function createProductDescription(
        ProductDescriptionTransfer $productDescriptionTransfer
    ): ProductDescriptionTransfer;

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function updateProductDescription(
        ProductDescriptionTransfer $productDescriptionTransfer
    ): ProductDescriptionTransfer;

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function deleteProductDescription(
        ProductDescriptionTransfer $productDescriptionTransfer
    ): ProductDescriptionTransfer;
}
