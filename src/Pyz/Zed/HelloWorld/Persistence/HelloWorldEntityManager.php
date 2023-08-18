<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Persistence;

use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserTransfer;
use Orm\Zed\HelloWorld\Persistence\SpyUser;
use Orm\Zed\HelloWorld\Persistence\SpyUserQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldPersistenceFactory getFactory()
 */
class HelloWorldEntityManager extends AbstractEntityManager implements HelloWorldEntityManagerInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function createUser(UserTransfer $userTransfer): UserTransfer
    {
        $userEntity = $this->getFactory()->createUserMapper()->mapUserTransferToUserEntity($userTransfer, new SpyUser());
        $userEntity->save();

        return $this->getFactory()->createUserMapper()->mapUserEntityToUserTransfer($userEntity, $userTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function updateUser(UserTransfer $userTransfer): UserTransfer
    {
        $userEntity = $this->getFactory()->createUserQuery()->filterByIdUser($userTransfer->getIdUserOrFail())->findOne();
        $userMapper = $this->getFactory()->createUserMapper();
        $userEntity = $userMapper->mapUserTransferToUserEntity($userTransfer, $userEntity);
        $userEntity->save();

        return $userMapper->mapUserEntityToUserTransfer($userEntity, $userTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function deleteUser(UserTransfer $userTransfer): UserTransfer
    {
        $userEntity = $this->getFactory()->createUserQuery()->filterByIdUser($userTransfer->getIdUserOrFail())->findOne();
        $userMapper = $this->getFactory()->createUserMapper();
        $userEntity = $userMapper->mapUserTransferToUserEntity($userTransfer, $userEntity);
        $userEntity->delete();

        return $userMapper->mapUserEntityToUserTransfer($userEntity, $userTransfer);
    }

    /**
     * @param \Orm\Zed\HelloWorld\Persistence\SpyUserQuery $userQuery
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Orm\Zed\HelloWorld\Persistence\SpyUserQuery
     */
    protected function applyUserDeleteFilters(
        SpyUserQuery $userQuery,
        UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
    ): SpyUserQuery {
        if ($userCollectionDeleteCriteriaTransfer->getUserIds()) {
            $userQuery->filterByIdUser($userCollectionDeleteCriteriaTransfer->getUserIds(), Criteria::IN);
        }
        if ($userCollectionDeleteCriteriaTransfer->getUuids()) {
            $userQuery->filterByUuid($userCollectionDeleteCriteriaTransfer->getUuids(), Criteria::IN);
        }

        return $userQuery;
    }
}
