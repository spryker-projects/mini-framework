<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\MessageBroker\Business\Worker;

use Generated\Shared\Transfer\MessageBrokerWorkerConfigTransfer;
use Spryker\Zed\MessageBroker\Business\Worker\Worker as SprykerWorker;
use Symfony\Component\Messenger\EventListener\StopWorkerOnFailureLimitListener;
use Symfony\Component\Messenger\EventListener\StopWorkerOnMemoryLimitListener;
use Symfony\Component\Messenger\EventListener\StopWorkerOnMessageLimitListener;
use Symfony\Component\Messenger\EventListener\StopWorkerOnTimeLimitListener;

class Worker extends SprykerWorker
{
    public function runWorker(MessageBrokerWorkerConfigTransfer $messageBrokerWorkerConfigTransfer): void
    {
        if (!$this->config->isEnabled()) {
            $this->logger->error('Message broker is not enabled. No workers will be started.');

            return;
        }

        if ($messageBrokerWorkerConfigTransfer->getLimit()) {
            $this->eventDispatcher->addSubscriber(new StopWorkerOnMessageLimitListener($messageBrokerWorkerConfigTransfer->getLimit(), $this->logger));
        }

        if ($messageBrokerWorkerConfigTransfer->getFailureLimit()) {
            $this->eventDispatcher->addSubscriber(new StopWorkerOnFailureLimitListener($messageBrokerWorkerConfigTransfer->getFailureLimit(), $this->logger));
        }

        if ($messageBrokerWorkerConfigTransfer->getMemoryLimit()) {
            $this->eventDispatcher->addSubscriber(new StopWorkerOnMemoryLimitListener($messageBrokerWorkerConfigTransfer->getMemoryLimit(), $this->logger));
        }

        if ($messageBrokerWorkerConfigTransfer->getTimeLimit()) {
            $this->eventDispatcher->addSubscriber(new StopWorkerOnTimeLimitListener($messageBrokerWorkerConfigTransfer->getTimeLimit(), $this->logger));
        }

        $channels = $messageBrokerWorkerConfigTransfer->getChannels();
        if (!$channels) {
            $channels = $this->config->getDefaultWorkerChannels();
        }

        $options = [
            'queues' => $channels,
        ];

        if ($messageBrokerWorkerConfigTransfer->getSleep()) {
            $options['sleep'] = $messageBrokerWorkerConfigTransfer->getSleep();
        }

        $receivers = $this->prepareReceiverPlugins($channels, $messageBrokerWorkerConfigTransfer->getTransport());
        $this->run($options, $receivers);
    }

    /**
     * @param array<int, string> $channels
     * @param string|null $requestedTransport
     *
     * @return array<string, \Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageReceiverPluginInterface>
     */
    protected function prepareReceiverPlugins(array $channels, ?string $requestedTransport = null): array
    {
        $receivers = [];
        $receiverTransports = $this->getReceiverTransports($channels);

        foreach ($this->messageReceiverPlugins as $messageReceiverPlugin) {
            if (!$this->isMessageReceiverPluginAllowed($messageReceiverPlugin, $receiverTransports)) {
                continue;
            }

            if (!$this->isTransportRequested($messageReceiverPlugin->getTransportName(), $requestedTransport)) {
                continue;
            }

            $receivers[$messageReceiverPlugin->getTransportName()] = $messageReceiverPlugin;
        }

        return $receivers;
    }

    /**
     * @param string $requestedTransport
     */
    protected function isTransportRequested(string $transportName, ?string $requestedTransport = null): bool
    {
        if ($requestedTransport === null || $requestedTransport === '') {
            return true;
        }

        return $transportName === $requestedTransport;
    }
}
