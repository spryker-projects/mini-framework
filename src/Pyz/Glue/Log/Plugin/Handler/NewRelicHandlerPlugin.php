<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\Log\Plugin\Handler;

use Monolog\Handler\HandlerInterface;
use Monolog\Handler\NewRelicHandler;
use Spryker\Glue\Log\Plugin\Handler\AbstractHandlerPlugin;

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
