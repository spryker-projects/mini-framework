<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

/**
 * @method \Pyz\Zed\ProductDescription\ProductDescriptionConfig getConfig()
 */
class ProductDescriptionDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const PLUGINS_PRODUCT_DESCRIPTION_PRE_CREATE = 'PLUGINS_PRODUCT_DESCRIPTION_PRE_CREATE';

    /**
     * @var string
     */
    public const PLUGINS_PRODUCT_DESCRIPTION_POST_CREATE = 'PLUGINS_PRODUCT_DESCRIPTION_POST_CREATE';

    /**
     * @var string
     */
    public const PLUGINS_PRODUCT_DESCRIPTION_PRE_UPDATE = 'PLUGINS_PRODUCT_DESCRIPTION_PRE_UPDATE';

    /**
     * @var string
     */
    public const PLUGINS_PRODUCT_DESCRIPTION_POST_UPDATE = 'PLUGINS_PRODUCT_DESCRIPTION_POST_UPDATE';

    /**
     * @var string
     */
    public const PLUGINS_PRODUCT_DESCRIPTION_EXPANDER = 'PLUGINS_PRODUCT_DESCRIPTION_EXPANDER';

    /**
     * @var string
     */
    public const PLUGINS_PRODUCT_DESCRIPTION_CREATE_VALIDATOR_RULE = 'PLUGINS_PRODUCT_DESCRIPTION_CREATE_VALIDATOR_RULE';

    /**
     * @var string
     */
    public const PLUGINS_PRODUCT_DESCRIPTION_UPDATE_VALIDATOR_RULE = 'PLUGINS_PRODUCT_DESCRIPTION_UPDATE_VALIDATOR_RULE';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);
        $container = $this->addProductDescriptionPreCreatePlugins($container);
        $container = $this->addProductDescriptionPostCreatePlugins($container);
        $container = $this->addProductDescriptionPreUpdatePlugins($container);
        $container = $this->addProductDescriptionPostUpdatePlugins($container);
        $container = $this->addProductDescriptionExpanderPlugins($container);
        $container = $this->addProductDescriptionCreateValidatorRulePlugins($container);
        $container = $this->addProductDescriptionUpdateValidatorRulePlugins($container);

        return $container;
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionCreatePluginInterface[]
     */
    protected function getProductDescriptionPreCreatePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addProductDescriptionPreCreatePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_PRODUCT_DESCRIPTION_PRE_CREATE, function (Container $container) {
            return $this->getProductDescriptionPreCreatePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionCreatePluginInterface[]
     */
    protected function getProductDescriptionPostCreatePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addProductDescriptionPostCreatePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_PRODUCT_DESCRIPTION_POST_CREATE, function (Container $container) {
            return $this->getProductDescriptionPostCreatePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface[]
     */
    protected function getProductDescriptionPreUpdatePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addProductDescriptionPreUpdatePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_PRODUCT_DESCRIPTION_PRE_UPDATE, function (Container $container) {
            return $this->getProductDescriptionPreUpdatePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface[]
     */
    protected function getProductDescriptionPostUpdatePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addProductDescriptionPostUpdatePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_PRODUCT_DESCRIPTION_POST_UPDATE, function (Container $container) {
            return $this->getProductDescriptionPostUpdatePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Expander\ProductDescriptionExpanderPluginInterface[]
     */
    protected function getProductDescriptionExpanderPlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addProductDescriptionExpanderPlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_PRODUCT_DESCRIPTION_EXPANDER, function (Container $container) {
            return $this->getProductDescriptionExpanderPlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Validator\ProductDescriptionValidatorRulePluginInterface[]
     */
    protected function getProductDescriptionCreateValidatorRulePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addProductDescriptionCreateValidatorRulePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_PRODUCT_DESCRIPTION_CREATE_VALIDATOR_RULE, function (Container $container) {
            return $this->getProductDescriptionCreateValidatorRulePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Validator\ProductDescriptionValidatorRulePluginInterface[]
     */
    protected function getProductDescriptionUpdateValidatorRulePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addProductDescriptionUpdateValidatorRulePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_PRODUCT_DESCRIPTION_UPDATE_VALIDATOR_RULE, function (Container $container) {
            return $this->getProductDescriptionUpdateValidatorRulePlugins();
        });

        return $container;
    }
}
