<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Persistence;

use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;

interface HelloWorldRepositoryInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    public function getUserCollection(UserCriteriaTransfer $userCriteriaTransfer): UserCollectionTransfer;

    /**
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    public function getUserDeleteCollection(
        UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
    ): UserCollectionTransfer;
}
