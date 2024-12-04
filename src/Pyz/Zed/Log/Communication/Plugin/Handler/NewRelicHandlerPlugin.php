<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Log\Communication\Plugin\Handler;

use Monolog\Handler\HandlerInterface;
use Monolog\Handler\NewRelicHandler;
use Spryker\Zed\Log\Communication\Plugin\Handler\AbstractHandlerPlugin;

/**
 * @method \Spryker\Zed\Log\Business\LogFacadeInterface getFacade()
 * @method \Spryker\Zed\Log\Communication\LogCommunicationFactory getFactory()
 * @method \Spryker\Zed\Log\LogConfig getConfig()
 */
class NewRelicHandlerPlugin extends AbstractHandlerPlugin
{
    protected function getHandler(): HandlerInterface
    {
        if ($this->handler === null) {
            $this->handler = new NewRelicHandler(); // level is ERROR by default
        }

        return $this->handler;
    }
}
