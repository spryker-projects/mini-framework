<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

/**
 * @method \Pyz\Zed\HelloWorld\HelloWorldConfig getConfig()
 */
class HelloWorldDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const PLUGINS_USER_PRE_CREATE = 'PLUGINS_USER_PRE_CREATE';

    /**
     * @var string
     */
    public const PLUGINS_USER_POST_CREATE = 'PLUGINS_USER_POST_CREATE';

    /**
     * @var string
     */
    public const PLUGINS_USER_PRE_UPDATE = 'PLUGINS_USER_PRE_UPDATE';

    /**
     * @var string
     */
    public const PLUGINS_USER_POST_UPDATE = 'PLUGINS_USER_POST_UPDATE';

    /**
     * @var string
     */
    public const PLUGINS_USER_EXPANDER = 'PLUGINS_USER_EXPANDER';

    /**
     * @var string
     */
    public const PLUGINS_USER_CREATE_VALIDATOR_RULE = 'PLUGINS_USER_CREATE_VALIDATOR_RULE';

    /**
     * @var string
     */
    public const PLUGINS_USER_UPDATE_VALIDATOR_RULE = 'PLUGINS_USER_UPDATE_VALIDATOR_RULE';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);
        $container = $this->addUserPreCreatePlugins($container);
        $container = $this->addUserPostCreatePlugins($container);
        $container = $this->addUserPreUpdatePlugins($container);
        $container = $this->addUserPostUpdatePlugins($container);
        $container = $this->addUserExpanderPlugins($container);
        $container = $this->addUserCreateValidatorRulePlugins($container);
        $container = $this->addUserUpdateValidatorRulePlugins($container);

        return $container;
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface[]
     */
    protected function getUserPreCreatePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addUserPreCreatePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_USER_PRE_CREATE, function (Container $container) {
            return $this->getUserPreCreatePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface[]
     */
    protected function getUserPostCreatePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addUserPostCreatePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_USER_POST_CREATE, function (Container $container) {
            return $this->getUserPostCreatePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface[]
     */
    protected function getUserPreUpdatePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addUserPreUpdatePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_USER_PRE_UPDATE, function (Container $container) {
            return $this->getUserPreUpdatePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface[]
     */
    protected function getUserPostUpdatePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addUserPostUpdatePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_USER_POST_UPDATE, function (Container $container) {
            return $this->getUserPostUpdatePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Expander\UserExpanderPluginInterface[]
     */
    protected function getUserExpanderPlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addUserExpanderPlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_USER_EXPANDER, function (Container $container) {
            return $this->getUserExpanderPlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Validator\UserValidatorRulePluginInterface[]
     */
    protected function getUserCreateValidatorRulePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addUserCreateValidatorRulePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_USER_CREATE_VALIDATOR_RULE, function (Container $container) {
            return $this->getUserCreateValidatorRulePlugins();
        });

        return $container;
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Validator\UserValidatorRulePluginInterface[]
     */
    protected function getUserUpdateValidatorRulePlugins(): array
    {
        return [];
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addUserUpdateValidatorRulePlugins(Container $container): Container
    {
        $container->set(static::PLUGINS_USER_UPDATE_VALIDATOR_RULE, function (Container $container) {
            return $this->getUserUpdateValidatorRulePlugins();
        });

        return $container;
    }
}
