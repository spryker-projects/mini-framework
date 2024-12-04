<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\MessageBroker;

use Spryker\Shared\MessageBrokerAws\MessageBrokerAwsConstants;
use Spryker\Zed\MessageBroker\MessageBrokerConfig as SprykerMessageBrokerConfig;

class MessageBrokerConfig extends SprykerMessageBrokerConfig
{
    /**
     * @return list<string>
     */
    public function getDefaultWorkerChannels(): array
    {
        return [
            'payment-commands',
        ];
    }

    public function isMb2Enabled(): bool
    {
        // this is needed to understand if MB2 is enabled on current env
        return $this->getConfig()->hasKey(MessageBrokerAwsConstants::HTTP_CHANNEL_SENDER_BASE_URL) && $this->get(MessageBrokerAwsConstants::HTTP_CHANNEL_SENDER_BASE_URL)
            && $this->getConfig()->hasKey(MessageBrokerAwsConstants::HTTP_CHANNEL_RECEIVER_BASE_URL) && $this->get(MessageBrokerAwsConstants::HTTP_CHANNEL_RECEIVER_BASE_URL, '');
    }

    public function isMb1Enabled(): bool
    {
        // this is needed to understand if MB1 is enabled on current env
        return $this->getConfig()->hasKey(MessageBrokerAwsConstants::SQS_RECEIVER_CONFIG) && $this->get(MessageBrokerAwsConstants::SQS_RECEIVER_CONFIG)
            && (
                ($this->getConfig()->hasKey(MessageBrokerAwsConstants::HTTP_SENDER_CONFIG) && $this->get(MessageBrokerAwsConstants::HTTP_SENDER_CONFIG))
                || ($this->getConfig()->hasKey(MessageBrokerAwsConstants::SNS_SENDER_CONFIG) && $this->get(MessageBrokerAwsConstants::SNS_SENDER_CONFIG))
            );
    }
}
