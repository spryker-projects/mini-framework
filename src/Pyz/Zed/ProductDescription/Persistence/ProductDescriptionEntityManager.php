<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Persistence;

use Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;
use Orm\Zed\ProductDescription\Persistence\SpyProductDescription;
use Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionPersistenceFactory getFactory()
 */
class ProductDescriptionEntityManager extends AbstractEntityManager implements ProductDescriptionEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function createProductDescription(
        ProductDescriptionTransfer $productDescriptionTransfer
    ): ProductDescriptionTransfer {
        $productDescriptionEntity = $this->getFactory()->createProductDescriptionMapper()->mapProductDescriptionTransferToProductDescriptionEntity($productDescriptionTransfer, new SpyProductDescription());
        $productDescriptionEntity->save();

        return $this->getFactory()->createProductDescriptionMapper()->mapProductDescriptionEntityToProductDescriptionTransfer($productDescriptionEntity, $productDescriptionTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function updateProductDescription(
        ProductDescriptionTransfer $productDescriptionTransfer
    ): ProductDescriptionTransfer {
        $productDescriptionEntity = $this->getFactory()->createProductDescriptionQuery()->filterByIdProductDescription($productDescriptionTransfer->getIdProductDescriptionOrFail())->findOne();
        $productDescriptionMapper = $this->getFactory()->createProductDescriptionMapper();
        $productDescriptionEntity = $productDescriptionMapper->mapProductDescriptionTransferToProductDescriptionEntity($productDescriptionTransfer, $productDescriptionEntity);
        $productDescriptionEntity->save();

        return $productDescriptionMapper->mapProductDescriptionEntityToProductDescriptionTransfer($productDescriptionEntity, $productDescriptionTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function deleteProductDescription(
        ProductDescriptionTransfer $productDescriptionTransfer
    ): ProductDescriptionTransfer {
        $productDescriptionEntity = $this->getFactory()->createProductDescriptionQuery()->filterByIdProductDescription($productDescriptionTransfer->getIdProductDescriptionOrFail())->findOne();
        $productDescriptionMapper = $this->getFactory()->createProductDescriptionMapper();
        $productDescriptionEntity = $productDescriptionMapper->mapProductDescriptionTransferToProductDescriptionEntity($productDescriptionTransfer, $productDescriptionEntity);
        $productDescriptionEntity->delete();

        return $productDescriptionMapper->mapProductDescriptionEntityToProductDescriptionTransfer($productDescriptionEntity, $productDescriptionTransfer);
    }

    /**
     * @param \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery $productDescriptionQuery
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
     *
     * @return \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery
     */
    protected function applyProductDescriptionDeleteFilters(
        SpyProductDescriptionQuery $productDescriptionQuery,
        ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
    ): SpyProductDescriptionQuery {
        if ($productDescriptionCollectionDeleteCriteriaTransfer->getProductDescriptionIds()) {
            $productDescriptionQuery->filterByIdProductDescription($productDescriptionCollectionDeleteCriteriaTransfer->getProductDescriptionIds(), Criteria::IN);
        }
        if ($productDescriptionCollectionDeleteCriteriaTransfer->getUuids()) {
            $productDescriptionQuery->filterByUuid($productDescriptionCollectionDeleteCriteriaTransfer->getUuids(), Criteria::IN);
        }

        return $productDescriptionQuery;
    }
}
