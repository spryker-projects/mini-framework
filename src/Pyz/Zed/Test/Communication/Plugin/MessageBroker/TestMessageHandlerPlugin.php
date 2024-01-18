<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Test\Communication\Plugin\MessageBroker;

use Generated\Shared\Transfer\TestMessageTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\MessageBrokerExtension\Dependency\Plugin\MessageHandlerPluginInterface;

/**
 * @method \Pyz\Zed\Test\Business\TestFacadeInterface getFacade()
 * @method \Pyz\Zed\Test\TestConfig getConfig()
 */
class TestMessageHandlerPlugin extends AbstractPlugin implements MessageHandlerPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\TestMessageTransfer $paymentCancelReservationRequestedTransfer
     *
     * @return void
     */
    public function onTestMessage(TestMessageTransfer $paymentCancelReservationRequestedTransfer): void
    {
        // Handle received message here
    }

    /**
     * Return an array where the key is the class name to be handled and the value is the callable that handles the message.
     *
     * @return array<string, callable>
     */
    public function handles(): iterable
    {
        yield TestMessageTransfer::class => [$this, 'onTestMessage'];
    }
}
