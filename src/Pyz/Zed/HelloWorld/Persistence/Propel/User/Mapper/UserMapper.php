<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Persistence\Propel\User\Mapper;

use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Generated\Shared\Transfer\UserCollectionTransfer;
use Generated\Shared\Transfer\UserTransfer;
use Orm\Zed\HelloWorld\Persistence\SpyUser;
use Propel\Runtime\Collection\ObjectCollection;

class UserMapper
{
    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     * @param \Orm\Zed\HelloWorld\Persistence\SpyUser $userEntity
     *
     * @return \Orm\Zed\HelloWorld\Persistence\SpyUser
     */
    public function mapUserTransferToUserEntity(UserTransfer $userTransfer, SpyUser $userEntity): SpyUser
    {
        return $userEntity->fromArray($userTransfer->modifiedToArray());
    }

    /**
     * @param \Orm\Zed\HelloWorld\Persistence\SpyUser $userEntity
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function mapUserEntityToUserTransfer(SpyUser $userEntity, UserTransfer $userTransfer): UserTransfer
    {
        return $userTransfer->fromArray($userEntity->toArray(), true);
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection|\Orm\Zed\HelloWorld\Persistence\SpyUser[] $userEntityCollection
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function mapUserEntityCollectionToUserCollectionResponseTransfer(
        ObjectCollection $userEntityCollection,
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): UserCollectionResponseTransfer {
        foreach ($userEntityCollection as $userEntity) {
            $userCollectionResponseTransfer->addUser($this->mapUserEntityToUserTransfer($userEntity, new UserTransfer()));
        }

        return $userCollectionResponseTransfer;
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection|\Orm\Zed\HelloWorld\Persistence\SpyUser[] $userEntityCollection
     * @param \Generated\Shared\Transfer\UserCollectionTransfer $userCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    public function mapUserEntityCollectionToUserCollectionTransfer(
        ObjectCollection $userEntityCollection,
        UserCollectionTransfer $userCollectionTransfer
    ): UserCollectionTransfer {
        foreach ($userEntityCollection as $userEntity) {
            $userCollectionTransfer->addUser($this->mapUserEntityToUserTransfer($userEntity, new UserTransfer()));
        }

        return $userCollectionTransfer;
    }
}
