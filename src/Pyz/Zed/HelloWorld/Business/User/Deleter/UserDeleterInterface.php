<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\User\Deleter;

use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;

interface UserDeleterInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function deleteUserCollection(
        UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
    ): UserCollectionResponseTransfer;
}
