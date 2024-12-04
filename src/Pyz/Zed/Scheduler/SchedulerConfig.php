<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Scheduler;

use Spryker\Zed\Scheduler\SchedulerConfig as SprykerSchedulerConfig;

class SchedulerConfig extends SprykerSchedulerConfig
{
    /**
     * Specification:
     * - Returns the path to PHP file to retrieve schedule for particular scheduler
     *
     * @api
     */
    public function getPhpSchedulerReaderPath(string $idScheduler): string
    {
        return implode(DIRECTORY_SEPARATOR, [
            APPLICATION_ROOT_DIR,
            'config',
            'backoffice',
            'cronjobs',
            $idScheduler . '.php',
        ]);
    }
}
