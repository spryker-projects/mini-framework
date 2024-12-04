<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\MessageBroker;

use Spryker\Zed\AppPayment\Communication\Plugin\MessageBroker\CancelPaymentMessageHandlerPlugin;
use Spryker\Zed\AppPayment\Communication\Plugin\MessageBroker\CapturePaymentMessageHandlerPlugin;
use Spryker\Zed\AppPayment\Communication\Plugin\MessageBroker\RefundPaymentMessageHandlerPlugin;
use Spryker\Zed\MessageBroker\Communication\Plugin\MessageBroker\CorrelationIdMessageAttributeProviderPlugin;
use Spryker\Zed\MessageBroker\Communication\Plugin\MessageBroker\TimestampMessageAttributeProviderPlugin;
use Spryker\Zed\MessageBroker\MessageBrokerDependencyProvider as SprykerMessageBrokerDependencyProvider;
use Spryker\Zed\MessageBrokerAws\Communication\Plugin\MessageBroker\Receiver\AwsSqsMessageReceiverPlugin;
use Spryker\Zed\MessageBrokerAws\Communication\Plugin\MessageBroker\Receiver\HttpChannelMessageReceiverPlugin;
use Spryker\Zed\MessageBrokerAws\Communication\Plugin\MessageBroker\Sender\HttpChannelMessageSenderPlugin;
use Spryker\Zed\MessageBrokerAws\Communication\Plugin\MessageBroker\Sender\HttpMessageSenderPlugin;
use Spryker\Zed\OauthClient\Communication\Plugin\MessageBroker\AccessTokenMessageAttributeProviderPlugin;

/**
 * @method \Pyz\Zed\MessageBroker\MessageBrokerConfig getConfig()
 */
class MessageBrokerDependencyProvider extends SprykerMessageBrokerDependencyProvider
{
    /**
     * @return list<\Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageSenderPluginInterface>
     */
    public function getMessageSenderPlugins(): array
    {
        // this structure is required for now and allows to enable any combination of message buses, even both
        $plugins = [];

        if ($this->getConfig()->isMb1Enabled()) {
            $plugins[] = new HttpMessageSenderPlugin();
        }

        if ($this->getConfig()->isMb2Enabled()) {
            $plugins[] = new HttpChannelMessageSenderPlugin();
        }

        return $plugins;
    }

    /**
     * @return list<\Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageReceiverPluginInterface>
     */
    public function getMessageReceiverPlugins(): array
    {
        // this structure is required for now and allows to enable any combination of message buses, even both
        $plugins = [];

        if ($this->getConfig()->isMb1Enabled()) {
            $plugins[] = new AwsSqsMessageReceiverPlugin();
        }

        if ($this->getConfig()->isMb2Enabled()) {
            $plugins[] = new HttpChannelMessageReceiverPlugin();
        }

        return $plugins;
    }

    /**
     * @return array<\Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageAttributeProviderPluginInterface>
     */
    public function getMessageAttributeProviderPlugins(): array
    {
        return [
            new CorrelationIdMessageAttributeProviderPlugin(),
            new TimestampMessageAttributeProviderPlugin(),
            new AccessTokenMessageAttributeProviderPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageHandlerPluginInterface>
     */
    public function getMessageHandlerPlugins(): array
    {
        return [
            new CancelPaymentMessageHandlerPlugin(),
            new CapturePaymentMessageHandlerPlugin(),
            new RefundPaymentMessageHandlerPlugin(),
        ];
    }
}
