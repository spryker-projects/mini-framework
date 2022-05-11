<?php

namespace Pyz\Zed\Twig;

use Spryker\Zed\Scheduler\Communication\Plugin\Twig\SchedulerTwigPlugin;
use Spryker\Zed\Twig\TwigDependencyProvider as SprykerTwigDependencyProvider;

class TwigDependencyProvider extends SprykerTwigDependencyProvider
{
    protected function getTwigPlugins(): array
    {
        return [
            new SchedulerTwigPlugin(),
        ];
    }
}
