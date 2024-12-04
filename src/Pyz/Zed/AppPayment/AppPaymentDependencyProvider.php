<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\AppPayment;

use Pyz\Zed\PaymentProvider\Communication\Plugin\AppPayment\PaymentProviderPaymentPlatformPlugin;
use Spryker\Zed\AppPayment\AppPaymentDependencyProvider as SprykerAppPaymentDependencyProvider;
use Spryker\Zed\AppPayment\Dependency\Plugin\AppPaymentPlatformPluginInterface;

class AppPaymentDependencyProvider extends SprykerAppPaymentDependencyProvider
{
    protected function getPlatformPlugin(): AppPaymentPlatformPluginInterface
    {
        return new PaymentProviderPaymentPlatformPlugin();
    }
}
