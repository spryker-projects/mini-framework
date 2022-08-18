<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\GlueApplication;

use Spryker\Glue\GlueApplication\GlueApplicationDependencyProvider as SprykerGlueApplicationDependencyProvider;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\ConventionResourceFilterPlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\GlueApplication\BackendApiGlueApplicationBootstrapPlugin;
use Spryker\Glue\GlueHttp\Plugin\GlueApplication\HttpCommunicationProtocolPlugin;
use Spryker\Glue\GlueHttp\Plugin\GlueContext\HttpGlueContextExpanderPlugin;
use Spryker\Glue\GlueRestApiConvention\Plugin\GlueApplication\RestApiConventionPlugin;

class GlueApplicationDependencyProvider extends SprykerGlueApplicationDependencyProvider
{
    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\GlueApplicationBootstrapPluginInterface>
     */
    protected function getGlueApplicationBootstrapPlugins(): array
    {
        return [
            new BackendApiGlueApplicationBootstrapPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\GlueContextExpanderPluginInterface>
     */
    protected function getGlueContextExpanderPlugins(): array
    {
        return [
            new HttpGlueContextExpanderPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\CommunicationProtocolPluginInterface>
     */
    protected function getCommunicationProtocolPlugins(): array
    {
        return [
            new HttpCommunicationProtocolPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ApiConventionPluginInterface>
     */
    protected function getApiConventionPlugins(): array
    {
        return [
            new RestApiConventionPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceFilterPluginInterface>
     */
    public function getResourceFilterPlugins(): array
    {
        return [
            new ConventionResourceFilterPlugin(),
        ];
    }
}
