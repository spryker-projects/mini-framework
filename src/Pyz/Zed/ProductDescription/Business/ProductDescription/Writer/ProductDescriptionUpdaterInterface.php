<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business\ProductDescription\Writer;

use Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;

interface ProductDescriptionUpdaterInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function updateProductDescriptionCollection(
        ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
    ): ProductDescriptionCollectionResponseTransfer;
}
