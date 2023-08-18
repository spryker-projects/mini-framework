<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Persistence;

use Generated\Shared\Transfer\PaginationTransfer;
use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;
use Orm\Zed\HelloWorld\Persistence\SpyUserQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldPersistenceFactory getFactory()
 */
class HelloWorldRepository extends AbstractRepository implements HelloWorldRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    public function getUserCollection(UserCriteriaTransfer $userCriteriaTransfer): UserCollectionTransfer
    {
        $userCollectionTransfer = new UserCollectionTransfer();
        $userQuery = $this->getFactory()->createUserQuery();
        // Filter
        $userQuery = $this->applyUserFilters($userQuery, $userCriteriaTransfer);
        // Sort
        $userQuery = $this->applyUserSorting($userQuery, $userCriteriaTransfer);
        // Paginate only if the transfer is present
        $paginationTransfer = $userCriteriaTransfer->getPagination();
        if ($paginationTransfer !== null) {
            $userQuery = $this->applyUserPagination($userQuery, $paginationTransfer);
            $userCollectionTransfer->setPagination($paginationTransfer);
        }
        $objectCollection = $userQuery->find();

        return $this->getFactory()->createUserMapper()->mapUserEntityCollectionToUserCollectionTransfer($objectCollection, $userCollectionTransfer);
    }

    /**
     * @param \Orm\Zed\HelloWorld\Persistence\SpyUserQuery $userQuery
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Orm\Zed\HelloWorld\Persistence\SpyUserQuery
     */
    protected function applyUserFilters(SpyUserQuery $userQuery, UserCriteriaTransfer $userCriteriaTransfer): SpyUserQuery
    {
        $userConditionsTransfer = $userCriteriaTransfer->getUserConditions();
        if ($userConditionsTransfer === null) {
            return $userQuery;
        }

        return $this->buildQueryByConditions($userConditionsTransfer->modifiedToArray(), $userQuery);
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    public function getUserDeleteCollection(
        UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
    ): UserCollectionTransfer {
        $userCollectionTransfer = new UserCollectionTransfer();
        $userQuery = $this->getFactory()->createUserQuery();
        $userEntities = $this->applyUserDeleteFilters($userQuery, $userCollectionDeleteCriteriaTransfer)->find();
        if (!$userEntities->count()) {
            return $userCollectionTransfer;
        }

        return $this->getFactory()->createUserMapper()->mapUserEntityCollectionToUserCollectionTransfer($userEntities, $userCollectionTransfer);
    }

    /**
     * @param \Orm\Zed\HelloWorld\Persistence\SpyUserQuery $userQuery
     * @param \Generated\Shared\Transfer\PaginationTransfer $paginationTransfer
     *
     * @return \Propel\Runtime\ActiveQuery\ModelCriteria
     */
    protected function applyUserPagination(
        SpyUserQuery $userQuery,
        PaginationTransfer $paginationTransfer
    ): ModelCriteria {
        if ($paginationTransfer->getOffset() !== null || $paginationTransfer->getLimit() !== null) {
            $userQuery->offset($paginationTransfer->getOffsetOrFail())->setLimit($paginationTransfer->getLimitOrFail());

            return $userQuery;
        }
        $paginationModel = $userQuery->paginate($paginationTransfer->getPageOrFail(), $paginationTransfer->getMaxPerPageOrFail());
        $paginationTransfer->setNbResults($paginationModel->getNbResults())->setFirstIndex($paginationModel->getFirstIndex())->setLastIndex($paginationModel->getLastIndex())->setFirstPage($paginationModel->getFirstPage())->setLastPage($paginationModel->getLastPage())->setNextPage($paginationModel->getNextPage())->setPreviousPage($paginationModel->getPreviousPage());

        // Map the propel pagination model data to the transfer as needed
        return $paginationModel->getQuery();
    }

    /**
     * @param \Orm\Zed\HelloWorld\Persistence\SpyUserQuery $userQuery
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Orm\Zed\HelloWorld\Persistence\SpyUserQuery
     */
    protected function applyUserSorting(SpyUserQuery $userQuery, UserCriteriaTransfer $userCriteriaTransfer): SpyUserQuery
    {
        $sortCollection = $userCriteriaTransfer->getSortCollection();
        foreach ($sortCollection as $sortTransfer) {
            $userQuery->orderBy($sortTransfer->getField(), $sortTransfer->getIsAscending() ? Criteria::ASC : Criteria::DESC);
        }

        return $userQuery;
    }

    /**
     * @param \Orm\Zed\HelloWorld\Persistence\SpyUserQuery $userQuery
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Orm\Zed\HelloWorld\Persistence\SpyUserQuery
     */
    protected function applyUserDeleteFilters(SpyUserQuery $userQuery, UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer): SpyUserQuery
    {
        return $this->buildQueryByConditions($userCollectionDeleteCriteriaTransfer->modifiedToArray(), $userQuery);
    }

    /**
     * @param array $conditions
     * @param \Orm\Zed\HelloWorld\Persistence\SpyUserQuery $userQuery
     *
     * @return \Orm\Zed\HelloWorld\Persistence\SpyUserQuery
     */
    protected function buildQueryByConditions(array $conditions, SpyUserQuery $userQuery): SpyUserQuery
    {
        if (isset($conditions['user_ids'])) {
            $userQuery->filterByIdUser($conditions['user_ids'], Criteria::IN);
        }
        if (isset($conditions['uuids'])) {
            $userQuery->filterByUuid($conditions['uuids'], Criteria::IN);
        }

        return $userQuery;
    }
}
