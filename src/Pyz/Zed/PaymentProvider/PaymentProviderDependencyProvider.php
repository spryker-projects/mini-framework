<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Pyz\Zed\PaymentProvider;

use Spryker\Zed\AppKernel\Business\AppKernelFacadeInterface;
use Spryker\Zed\AppMerchant\Business\AppMerchantFacadeInterface;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

/**
 * @method \Pyz\Zed\PaymentProvider\PaymentProviderConfig getConfig()
 */
class PaymentProviderDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const FACADE_APP_MERCHANT = 'FACADE_APP_MERCHANT';

    /**
     * @var string
     */
    public const FACADE_APP_KERNEL = 'FACADE_APP_KERNEL';

    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);
        $this->addAppKernelFacade($container);

        return $container;
    }

    protected function addAppKernelFacade(Container $container): void
    {
        $container->set(static::FACADE_APP_KERNEL, static function (Container $container): AppKernelFacadeInterface {
            return $container->getLocator()->appKernel()->facade();
        });
    }
}
