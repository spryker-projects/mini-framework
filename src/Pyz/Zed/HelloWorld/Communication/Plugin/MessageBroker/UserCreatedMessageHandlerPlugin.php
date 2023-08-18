<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Communication\Plugin\MessageBroker;

use Generated\Shared\Transfer\UserCreatedTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageHandlerPluginInterface;

/**
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldFacadeInterface getFacade()
 * @method \Pyz\Zed\HelloWorld\HelloWorldConfig getConfig()
 */
class UserCreatedMessageHandlerPlugin extends AbstractPlugin implements MessageHandlerPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserCreatedTransfer $userCreatedTransfer
     *
     * @return void
     */
    public function onUserCreated(UserCreatedTransfer $userCreatedTransfer): void
    {
        $this->getFacade()->handleUserCreated($userCreatedTransfer);
    }

    /**
     * Return an array where the key is the class name to be handled and the value is the callable that handles the message.
     *
     * @return array<string, callable>
     */
    public function handles(): iterable
    {
        yield UserCreatedTransfer::class => [$this, 'onUserCreated'];
    }
}
