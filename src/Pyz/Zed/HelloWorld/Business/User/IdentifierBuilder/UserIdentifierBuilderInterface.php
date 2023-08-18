<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder;

use Generated\Shared\Transfer\UserTransfer;

interface UserIdentifierBuilderInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     *
     * @return string
     */
    public function buildIdentifier(UserTransfer $userTransfer): string;
}
