<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\MessageBroker;

use Generated\Shared\Transfer\GreetUserTransfer;

interface GreetUserMessageHandlerInterface
{
    /**
     * @param \Generated\Shared\Transfer\GreetUserTransfer $greetUserTransfer
     *
     * @return void
     */
    public function handleGreetUser(GreetUserTransfer $greetUserTransfer): void;
}
