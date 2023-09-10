<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Persistence;

use Generated\Shared\Transfer\PaginationTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionTransfer;
use Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer;
use Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionPersistenceFactory getFactory()
 */
class ProductDescriptionRepository extends AbstractRepository implements ProductDescriptionRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    public function getProductDescriptionCollection(
        ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
    ): ProductDescriptionCollectionTransfer {
        $productDescriptionCollectionTransfer = new ProductDescriptionCollectionTransfer();
        $productDescriptionQuery = $this->getFactory()->createProductDescriptionQuery();
        // Filter
        $productDescriptionQuery = $this->applyProductDescriptionFilters($productDescriptionQuery, $productDescriptionCriteriaTransfer);
        // Sort
        $productDescriptionQuery = $this->applyProductDescriptionSorting($productDescriptionQuery, $productDescriptionCriteriaTransfer);
        // Paginate only if the transfer is present
        $paginationTransfer = $productDescriptionCriteriaTransfer->getPagination();
        if ($paginationTransfer !== null) {
            $productDescriptionQuery = $this->applyProductDescriptionPagination($productDescriptionQuery, $paginationTransfer);
            $productDescriptionCollectionTransfer->setPagination($paginationTransfer);
        }
        $objectCollection = $productDescriptionQuery->find();

        return $this->getFactory()->createProductDescriptionMapper()->mapProductDescriptionEntityCollectionToProductDescriptionCollectionTransfer($objectCollection, $productDescriptionCollectionTransfer);
    }

    /**
     * @param \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery $productDescriptionQuery
     * @param \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
     *
     * @return \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery
     */
    protected function applyProductDescriptionFilters(
        SpyProductDescriptionQuery $productDescriptionQuery,
        ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
    ): SpyProductDescriptionQuery {
        $productDescriptionConditionsTransfer = $productDescriptionCriteriaTransfer->getProductDescriptionConditions();
        if ($productDescriptionConditionsTransfer === null) {
            return $productDescriptionQuery;
        }

        return $this->buildQueryByConditions($productDescriptionConditionsTransfer->modifiedToArray(), $productDescriptionQuery);
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    public function getProductDescriptionDeleteCollection(
        ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
    ): ProductDescriptionCollectionTransfer {
        $productDescriptionCollectionTransfer = new ProductDescriptionCollectionTransfer();
        $productDescriptionQuery = $this->getFactory()->createProductDescriptionQuery();
        $productDescriptionEntities = $this->applyProductDescriptionDeleteFilters($productDescriptionQuery, $productDescriptionCollectionDeleteCriteriaTransfer)->find();
        if (!$productDescriptionEntities->count()) {
            return $productDescriptionCollectionTransfer;
        }

        return $this->getFactory()->createProductDescriptionMapper()->mapProductDescriptionEntityCollectionToProductDescriptionCollectionTransfer($productDescriptionEntities, $productDescriptionCollectionTransfer);
    }

    /**
     * @param \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery $productDescriptionQuery
     * @param \Generated\Shared\Transfer\PaginationTransfer $paginationTransfer
     *
     * @return \Propel\Runtime\ActiveQuery\ModelCriteria
     */
    protected function applyProductDescriptionPagination(
        SpyProductDescriptionQuery $productDescriptionQuery,
        PaginationTransfer $paginationTransfer
    ): ModelCriteria {
        if ($paginationTransfer->getOffset() !== null || $paginationTransfer->getLimit() !== null) {
            $productDescriptionQuery->offset($paginationTransfer->getOffsetOrFail())->setLimit($paginationTransfer->getLimitOrFail());

            return $productDescriptionQuery;
        }
        $paginationModel = $productDescriptionQuery->paginate($paginationTransfer->getPageOrFail(), $paginationTransfer->getMaxPerPageOrFail());
        $paginationTransfer->setNbResults($paginationModel->getNbResults())->setFirstIndex($paginationModel->getFirstIndex())->setLastIndex($paginationModel->getLastIndex())->setFirstPage($paginationModel->getFirstPage())->setLastPage($paginationModel->getLastPage())->setNextPage($paginationModel->getNextPage())->setPreviousPage($paginationModel->getPreviousPage());

        // Map the propel pagination model data to the transfer as needed
        return $paginationModel->getQuery();
    }

    /**
     * @param \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery $productDescriptionQuery
     * @param \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
     *
     * @return \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery
     */
    protected function applyProductDescriptionSorting(
        SpyProductDescriptionQuery $productDescriptionQuery,
        ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
    ): SpyProductDescriptionQuery {
        $sortCollection = $productDescriptionCriteriaTransfer->getSortCollection();
        foreach ($sortCollection as $sortTransfer) {
            $productDescriptionQuery->orderBy($sortTransfer->getField(), $sortTransfer->getIsAscending() ? Criteria::ASC : Criteria::DESC);
        }

        return $productDescriptionQuery;
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
        return $this->buildQueryByConditions($productDescriptionCollectionDeleteCriteriaTransfer->modifiedToArray(), $productDescriptionQuery);
    }

    /**
     * @param array $conditions
     * @param \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery $productDescriptionQuery
     *
     * @return \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery
     */
    protected function buildQueryByConditions(
        array $conditions,
        SpyProductDescriptionQuery $productDescriptionQuery
    ): SpyProductDescriptionQuery {
        if (isset($conditions['productDescription_ids'])) {
            $productDescriptionQuery->filterByIdProductDescription($conditions['productDescription_ids'], Criteria::IN);
        }
        if (isset($conditions['uuids'])) {
            $productDescriptionQuery->filterByUuid($conditions['uuids'], Criteria::IN);
        }

        return $productDescriptionQuery;
    }
}
