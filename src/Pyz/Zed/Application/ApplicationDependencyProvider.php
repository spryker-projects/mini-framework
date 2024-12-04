<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Application;

use Spryker\Zed\Application\ApplicationDependencyProvider as SprykerApplicationDependencyProvider;
use Spryker\Zed\ErrorHandler\Communication\Plugin\Application\ErrorHandlerApplicationPlugin;
use Spryker\Zed\EventDispatcher\Communication\Plugin\Application\BackofficeEventDispatcherApplicationPlugin;
use Spryker\Zed\Http\Communication\Plugin\Application\HttpApplicationPlugin;
use Spryker\Zed\Propel\Communication\Plugin\Application\PropelApplicationPlugin;
use Spryker\Zed\Router\Communication\Plugin\Application\BackofficeRouterApplicationPlugin;
use Spryker\Zed\Session\Communication\Plugin\Application\SessionApplicationPlugin;
use Spryker\Zed\Store\Communication\Plugin\Application\BackofficeStoreApplicationPlugin;
use Spryker\Zed\Twig\Communication\Plugin\Application\TwigApplicationPlugin;
use Spryker\Zed\WebProfiler\Communication\Plugin\Application\WebProfilerApplicationPlugin;

class ApplicationDependencyProvider extends SprykerApplicationDependencyProvider
{
    /**
     * @return array<\Spryker\Shared\ApplicationExtension\Dependency\Plugin\ApplicationPluginInterface>
     */
    protected function getBackofficeApplicationPlugins(): array
    {
        $plugins = [
            new TwigApplicationPlugin(),
            new PropelApplicationPlugin(),
            new BackofficeRouterApplicationPlugin(),
            new HttpApplicationPlugin(),
            new ErrorHandlerApplicationPlugin(),
            new BackofficeStoreApplicationPlugin(),
            new BackofficeEventDispatcherApplicationPlugin(),
            new SessionApplicationPlugin(),
        ];

        if (class_exists(WebProfilerApplicationPlugin::class)) {
            $plugins[] = new WebProfilerApplicationPlugin();
        }

        return $plugins;
    }
}
