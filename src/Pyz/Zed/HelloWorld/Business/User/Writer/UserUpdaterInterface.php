<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\User\Writer;

use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;

interface UserUpdaterInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserCollectionRequestTransfer $userCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function updateUserCollection(
        UserCollectionRequestTransfer $userCollectionRequestTransfer
    ): UserCollectionResponseTransfer;
}
