<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AppKernel;

use Pyz\Zed\PaymentProvider\Communication\Plugin\AppKernel\DeletePaymentProviderConfigConfigurationBeforeDeletePlugin;
use Pyz\Zed\PaymentProvider\Communication\Plugin\AppKernel\PaymentProviderConfigurationBeforeSavePlugin;
use Pyz\Zed\PaymentProvider\Communication\Plugin\AppKernel\PaymentProviderRegisterAppDomainAfterSavePlugin;
use Pyz\Zed\PaymentProvider\Communication\Plugin\AppKernel\PaymentProviderUpdateWebhookEndpointsBeforeSavePlugin;
use Pyz\Zed\PaymentProvider\Communication\Plugin\AppPayment\PaymentProviderPaymentPlatformPlugin;
use Spryker\Zed\AppKernel\AppKernelDependencyProvider as SprykerAppKernelDependencyProvider;
use Spryker\Zed\AppKernelExtension\Dependency\Plugin\AppKernelPlatformPluginInterface;
use Spryker\Zed\AppPayment\Communication\Plugin\AppKernel\ConfigurePaymentMethodsConfigurationAfterSavePlugin;
use Spryker\Zed\AppPayment\Communication\Plugin\AppKernel\DeleteTenantPaymentsConfigurationAfterDeletePlugin;
use Spryker\Zed\AppPayment\Communication\Plugin\AppKernel\SendDeletePaymentMethodMessagesConfigurationAfterDeletePlugin;

class AppKernelDependencyProvider extends SprykerAppKernelDependencyProvider
{
    protected function getPlatformPlugin(): AppKernelPlatformPluginInterface
    {
        return new PaymentProviderPaymentPlatformPlugin();
    }

    /**
     * @return array<\Spryker\Zed\AppKernelExtension\Dependency\Plugin\ConfigurationBeforeSavePluginInterface>
     */
    protected function getConfigurationBeforeSavePlugins(): array
    {
        return [
        ];
    }

    /**
     * @return array<\Spryker\Zed\AppKernelExtension\Dependency\Plugin\ConfigurationAfterSavePluginInterface>
     */
    protected function getConfigurationAfterSavePlugins(): array
    {
        return [
            new ConfigurePaymentMethodsConfigurationAfterSavePlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Zed\AppKernelExtension\Dependency\Plugin\ConfigurationBeforeDeletePluginInterface>
     */
    protected function getConfigurationBeforeDeletePlugins(): array
    {
        return [
        ];
    }

    /**
     * @return array<\Spryker\Zed\AppKernelExtension\Dependency\Plugin\ConfigurationAfterDeletePluginInterface>
     */
    protected function getConfigurationAfterDeletePlugins(): array
    {
        return [
            new SendDeletePaymentMethodMessagesConfigurationAfterDeletePlugin(),
            new DeleteTenantPaymentsConfigurationAfterDeletePlugin(),
        ];
    }
}
