<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\GlueBackendApiApplication;

use Pyz\Glue\TestApi\Plugin\TestResource;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\RequestResourceFilterPlugin;
use Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin\RequestResourceFilterPluginInterface;
use Spryker\Glue\GlueBackendApiApplication\GlueBackendApiApplicationDependencyProvider as SprykerGlueBackendApiApplicationDependencyProvider;
use Spryker\Glue\GlueBackendApiApplication\Plugin\GlueBackendApiApplication\CustomRouteRouteMatcherPlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\GlueBackendApiApplication\CustomRouteRouterPlugin;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\ResourceRouteMatcherPlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\GlueBackendApiApplication\SecurityHeaderResponseFormatterPlugin;
use Spryker\Glue\GlueHttp\Plugin\GlueBackendApiApplication\CorsHeaderExistenceRequestAfterRoutingValidatorPlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\GlueBackendApiApplication\LocaleRequestBuilderPlugin;
use Spryker\Zed\Propel\Communication\Plugin\Application\PropelApplicationPlugin;

class GlueBackendApiApplicationDependencyProvider extends SprykerGlueBackendApiApplicationDependencyProvider
{
    /**
     * @return array<\Spryker\Shared\ApplicationExtension\Dependency\Plugin\ApplicationPluginInterface>
     */
    protected function getApplicationPlugins(): array
    {
        return [
            new PropelApplicationPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin\RequestBuilderPluginInterface>
     */
    protected function getRequestBuilderPlugins(): array
    {
        return [
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin\RequestAfterRoutingValidatorPluginInterface>
     */
    protected function getRequestAfterRoutingValidatorPlugins(): array
    {
        return [
            new CorsHeaderExistenceRequestAfterRoutingValidatorPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin\ResponseFormatterPluginInterface>
     */
    protected function getResponseFormatterPlugins(): array
    {
        return [
            new SecurityHeaderResponseFormatterPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin\RouterPluginInterface>
     */
    protected function getRouterPlugins(): array
    {
        return [
            new CustomRouteRouterPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin\RouteMatcherPluginInterface>
     */
    protected function getRouteMatcherPlugins(): array
    {
        return [
            new CustomRouteRouteMatcherPlugin(),
            new ResourceRouteMatcherPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceInterface>
     */
    protected function getResourcePlugins(): array
    {
        return [
            new TestResource(),
        ];
    }

    /**
     * @return \Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin\RequestResourceFilterPluginInterface
     */
    public function getRequestResourceFilterPlugin(): RequestResourceFilterPluginInterface
    {
        return new RequestResourceFilterPlugin();
    }
}
