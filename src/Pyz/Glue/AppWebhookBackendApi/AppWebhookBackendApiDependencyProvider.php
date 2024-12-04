<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\AppWebhookBackendApi;

use Pyz\Zed\PaymentProvider\Communication\Plugin\AppWebhook\GlueRequestWebhookMapperPlugin;
use Spryker\Glue\AppWebhookBackendApi\AppWebhookBackendApiDependencyProvider as SprykerAppWebhookBackendApiDependencyProvider;
use Spryker\Glue\AppWebhookBackendApi\Plugin\AppWebhookBackendApi\GlueRequestWebhookMapperPluginInterface;

class AppWebhookBackendApiDependencyProvider extends SprykerAppWebhookBackendApiDependencyProvider
{
    protected function getGlueRequestWebhookMapperPlugin(): ?GlueRequestWebhookMapperPluginInterface
    {
        return new GlueRequestWebhookMapperPlugin();
    }
}
