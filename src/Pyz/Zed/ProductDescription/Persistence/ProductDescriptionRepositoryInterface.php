<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Persistence;

use Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionTransfer;
use Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer;

interface ProductDescriptionRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    public function getProductDescriptionCollection(
        ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
    ): ProductDescriptionCollectionTransfer;

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    public function getProductDescriptionDeleteCollection(
        ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
    ): ProductDescriptionCollectionTransfer;
}
