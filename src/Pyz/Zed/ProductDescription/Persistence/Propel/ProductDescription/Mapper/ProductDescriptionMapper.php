<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Persistence\Propel\ProductDescription\Mapper;

use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;
use Orm\Zed\ProductDescription\Persistence\SpyProductDescription;
use Propel\Runtime\Collection\ObjectCollection;

class ProductDescriptionMapper
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     * @param \Orm\Zed\ProductDescription\Persistence\SpyProductDescription $productDescriptionEntity
     *
     * @return \Orm\Zed\ProductDescription\Persistence\SpyProductDescription
     */
    public function mapProductDescriptionTransferToProductDescriptionEntity(
        ProductDescriptionTransfer $productDescriptionTransfer,
        SpyProductDescription $productDescriptionEntity
    ): SpyProductDescription {
        return $productDescriptionEntity->fromArray($productDescriptionTransfer->modifiedToArray());
    }

    /**
     * @param \Orm\Zed\ProductDescription\Persistence\SpyProductDescription $productDescriptionEntity
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function mapProductDescriptionEntityToProductDescriptionTransfer(
        SpyProductDescription $productDescriptionEntity,
        ProductDescriptionTransfer $productDescriptionTransfer
    ): ProductDescriptionTransfer {
        return $productDescriptionTransfer->fromArray($productDescriptionEntity->toArray(), true);
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection|\Orm\Zed\ProductDescription\Persistence\SpyProductDescription[] $productDescriptionEntityCollection
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function mapProductDescriptionEntityCollectionToProductDescriptionCollectionResponseTransfer(
        ObjectCollection $productDescriptionEntityCollection,
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        foreach ($productDescriptionEntityCollection as $productDescriptionEntity) {
            $productDescriptionCollectionResponseTransfer->addProductDescription($this->mapProductDescriptionEntityToProductDescriptionTransfer($productDescriptionEntity, new ProductDescriptionTransfer()));
        }

        return $productDescriptionCollectionResponseTransfer;
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection|\Orm\Zed\ProductDescription\Persistence\SpyProductDescription[] $productDescriptionEntityCollection
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    public function mapProductDescriptionEntityCollectionToProductDescriptionCollectionTransfer(
        ObjectCollection $productDescriptionEntityCollection,
        ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
    ): ProductDescriptionCollectionTransfer {
        foreach ($productDescriptionEntityCollection as $productDescriptionEntity) {
            $productDescriptionCollectionTransfer->addProductDescription($this->mapProductDescriptionEntityToProductDescriptionTransfer($productDescriptionEntity, new ProductDescriptionTransfer()));
        }

        return $productDescriptionCollectionTransfer;
    }
}
