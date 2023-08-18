<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\MessageBroker;

use Generated\Shared\Transfer\UserCreatedTransfer;

class UserCreatedMessageHandler implements UserCreatedMessageHandlerInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserCreatedTransfer $userCreatedTransfer
     *
     * @return void
     */
    public function handleUserCreated(UserCreatedTransfer $userCreatedTransfer): void
    {
        // Handle the message here
    }
}
