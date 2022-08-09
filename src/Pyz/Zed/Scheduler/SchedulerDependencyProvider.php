<?php

namespace Pyz\Zed\Scheduler;

use Pyz\Shared\Scheduler\SchedulerConfig;
use Spryker\Zed\Scheduler\Communication\Plugin\Scheduler\PhpScheduleReaderPlugin;
use Spryker\Zed\Scheduler\SchedulerDependencyProvider as SprykerSchedulerDependencyProvider;
use Spryker\Zed\SchedulerJenkins\Communication\Plugin\Adapter\SchedulerJenkinsAdapterPlugin;

class SchedulerDependencyProvider extends SprykerSchedulerDependencyProvider
{
    /**
     * @return array<\Spryker\Zed\SchedulerJenkins\Communication\Plugin\Adapter\SchedulerJenkinsAdapterPlugin>
     */
    protected function getSchedulerAdapterPlugins(): array
    {
        return [
            SchedulerConfig::SCHEDULER_JENKINS => new SchedulerJenkinsAdapterPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Zed\Scheduler\Communication\Plugin\Scheduler\PhpScheduleReaderPlugin>
     */
    protected function getScheduleReaderPlugins(): array
    {
        return [
            new PhpScheduleReaderPlugin(),
        ];
    }
}
