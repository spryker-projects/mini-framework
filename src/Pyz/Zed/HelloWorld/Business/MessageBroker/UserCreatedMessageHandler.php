<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\MessageBroker;

use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserCreatedTransfer;
use Generated\Shared\Transfer\UserTransfer;
use Pyz\Zed\HelloWorld\Business\HelloWorldFacadeInterface;

class UserCreatedMessageHandler implements UserCreatedMessageHandlerInterface
{
    /**
     * @param HelloWorldFacadeInterface $helloWorldFacade
     */
    public function __construct(private HelloWorldFacadeInterface $helloWorldFacade)
    {
    }

    /**
     * @param \Generated\Shared\Transfer\UserCreatedTransfer $userCreatedTransfer
     *
     * @return void
     */
    public function handleUserCreated(UserCreatedTransfer $userCreatedTransfer): void
    {
        $userTransfer = new UserTransfer();
        $userTransfer->fromArray($userCreatedTransfer->toArray(), true);

        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        $this->helloWorldFacade->createUserCollection($userCollectionRequestTransfer);
    }
}
