<?php

namespace Pyz\Zed\Scheduler;

use Pyz\Shared\Scheduler\SchedulerConfig;
use Spryker\Zed\Scheduler\Communication\Plugin\Scheduler\PhpScheduleReaderPlugin;
use Spryker\Zed\SchedulerJenkins\Communication\Plugin\Adapter\SchedulerJenkinsAdapterPlugin;

class SchedulerDependencyProvider extends \Spryker\Zed\Scheduler\SchedulerDependencyProvider
{
    protected function getSchedulerAdapterPlugins(): array
    {
        return [
            SchedulerConfig::SCHEDULER_JENKINS => new SchedulerJenkinsAdapterPlugin(),
        ];
    }

    protected function getScheduleReaderPlugins(): array
    {
        return [
            new PhpScheduleReaderPlugin(),
        ];
    }
}
