<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AppWebhook;

use Spryker\Zed\AppPayment\Communication\Plugin\AppWebhook\PaymentWebhookHandlerPlugin;
use Spryker\Zed\AppWebhook\AppWebhookDependencyProvider as SprykerAppWebhookDependencyProvider;

/**
 * @method \Spryker\Zed\AppWebhook\AppWebhookConfig getConfig()
 */
class AppWebhookDependencyProvider extends SprykerAppWebhookDependencyProvider
{
    /**
     * @return array<\Spryker\Zed\AppWebhook\Dependency\Plugin\WebhookHandlerPluginInterface>
     */
    protected function getWebhookHandlerPlugins(): array
    {
        return [
            new PaymentWebhookHandlerPlugin(),
        ];
    }
}
