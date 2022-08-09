<?php

namespace Pyz\Zed\Twig;

use Spryker\Zed\Scheduler\Communication\Plugin\Twig\SchedulerTwigPlugin;
use Spryker\Zed\Twig\TwigDependencyProvider as SprykerTwigDependencyProvider;

class TwigDependencyProvider extends SprykerTwigDependencyProvider
{
    /**
     * @return array<\Spryker\Zed\Scheduler\Communication\Plugin\Twig\SchedulerTwigPlugin>
     */
    protected function getTwigPlugins(): array
    {
        return [
            new SchedulerTwigPlugin(),
        ];
    }
}
