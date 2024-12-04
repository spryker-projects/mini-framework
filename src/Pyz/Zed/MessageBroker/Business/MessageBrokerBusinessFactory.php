<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\MessageBroker\Business;

use Pyz\Zed\MessageBroker\Business\Worker\Worker;
use Spryker\Zed\MessageBroker\Business\MessageBrokerBusinessFactory as SprykerMessageBrokerBusinessFactory;
use Spryker\Zed\MessageBroker\Business\Worker\WorkerInterface;

/**
 * @method \Pyz\Zed\MessageBroker\MessageBrokerConfig getConfig()
 */
class MessageBrokerBusinessFactory extends SprykerMessageBrokerBusinessFactory
{
    public function createWorker(): WorkerInterface
    {
        return new Worker(
            $this->getMessageReceiverPlugins(),
            $this->createMessageBus(),
            $this->getEventDispatcher(),
            $this->getConfig(),
            $this->createLogger(),
        );
    }

    /**
     * @return list<\Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageReceiverPluginInterface>
     */
    public function getMessageReceiverPlugins(): array
    {
        /** @var list<\Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageReceiverPluginInterface> $messageReceiverPlugins */
        $messageReceiverPlugins = parent::getMessageReceiverPlugins();

        return $messageReceiverPlugins;
    }
}
