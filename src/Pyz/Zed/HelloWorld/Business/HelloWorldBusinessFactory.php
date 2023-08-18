<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business;

use Pyz\Zed\HelloWorld\Business\MessageBroker\GreetUserMessageHandler;
use Pyz\Zed\HelloWorld\Business\MessageBroker\GreetUserMessageHandlerInterface;
use Pyz\Zed\HelloWorld\Business\User\Deleter\UserDeleter;
use Pyz\Zed\HelloWorld\Business\User\Deleter\UserDeleterInterface;
use Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilder;
use Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface;
use Pyz\Zed\HelloWorld\Business\User\Reader\UserReader;
use Pyz\Zed\HelloWorld\Business\User\Reader\UserReaderInterface;
use Pyz\Zed\HelloWorld\Business\User\Validator\UserValidator;
use Pyz\Zed\HelloWorld\Business\User\Validator\UserValidatorInterface;
use Pyz\Zed\HelloWorld\Business\User\Writer\UserCreator;
use Pyz\Zed\HelloWorld\Business\User\Writer\UserCreatorInterface;
use Pyz\Zed\HelloWorld\Business\User\Writer\UserUpdater;
use Pyz\Zed\HelloWorld\Business\User\Writer\UserUpdaterInterface;
use Pyz\Zed\HelloWorld\HelloWorldDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\HelloWorld\HelloWorldConfig getConfig()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface getRepository()
 */
class HelloWorldBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\Deleter\UserDeleterInterface
     */
    public function createUserDeleter(): UserDeleterInterface
    {
        return new UserDeleter($this->getEntityManager(), $this->getRepository());
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\Writer\UserCreatorInterface
     */
    public function createUserCreator(): UserCreatorInterface
    {
        return new UserCreator($this->getEntityManager(), $this->createUserCreateValidator(), $this->createUserIdentifierBuilder(), $this->getUserPreCreatePlugins(), $this->getUserPostCreatePlugins());
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\Reader\UserReaderInterface
     */
    public function createUserReader(): UserReaderInterface
    {
        return new UserReader($this->getRepository(), $this->getUserExpanderPlugins());
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\Writer\UserUpdaterInterface
     */
    public function createUserUpdater(): UserUpdaterInterface
    {
        return new UserUpdater($this->getEntityManager(), $this->createUserUpdateValidator(), $this->createUserIdentifierBuilder(), $this->getUserPreUpdatePlugins(), $this->getUserPostUpdatePlugins());
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface
     */
    public function createUserIdentifierBuilder(): UserIdentifierBuilderInterface
    {
        return new UserIdentifierBuilder();
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\Validator\UserValidatorInterface
     */
    public function createUserCreateValidator(): UserValidatorInterface
    {
        return new UserValidator($this->getUserCreateValidatorRules(), $this->getUserCreateValidatorRulePlugins(), $this->createUserIdentifierBuilder());
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\Validator\Rules\UserValidatorRuleInterface[]
     */
    public function getUserCreateValidatorRules(): array
    {
        return [];
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\Validator\UserValidatorInterface
     */
    public function createUserUpdateValidator(): UserValidatorInterface
    {
        return new UserValidator($this->getUserUpdateValidatorRules(), $this->getUserUpdateValidatorRulePlugins(), $this->createUserIdentifierBuilder());
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\User\Validator\Rules\UserValidatorRuleInterface[]
     */
    public function getUserUpdateValidatorRules(): array
    {
        return [];
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Expander\UserExpanderPluginInterface[]
     */
    public function getUserExpanderPlugins(): array
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::PLUGINS_USER_EXPANDER);
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface[]
     */
    public function getUserPreCreatePlugins(): array
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::PLUGINS_USER_PRE_CREATE);
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface[]
     */
    public function getUserPostCreatePlugins(): array
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::PLUGINS_USER_POST_CREATE);
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface[]
     */
    public function getUserPreUpdatePlugins(): array
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::PLUGINS_USER_PRE_UPDATE);
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface[]
     */
    public function getUserPostUpdatePlugins(): array
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::PLUGINS_USER_POST_UPDATE);
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Validator\UserValidatorRulePluginInterface[]
     */
    public function getUserCreateValidatorRulePlugins(): array
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::PLUGINS_USER_CREATE_VALIDATOR_RULE);
    }

    /**
     * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Validator\UserValidatorRulePluginInterface[]
     */
    public function getUserUpdateValidatorRulePlugins(): array
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::PLUGINS_USER_UPDATE_VALIDATOR_RULE);
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\MessageBroker\GreetUserMessageHandlerInterface
     */
    public function createGreetUserMessageHandler(): GreetUserMessageHandlerInterface
    {
        return new GreetUserMessageHandler();
    }
}
