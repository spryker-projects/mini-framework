<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\User\Writer;

use ArrayObject;
use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\GreetUserTransfer;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface;
use Pyz\Zed\HelloWorld\Business\User\Validator\UserValidatorInterface;
use Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;
use Spryker\Zed\MessageBroker\Business\MessageBrokerFacadeInterface;

class UserCreator implements UserCreatorInterface
{
    use TransactionTrait;

    /**
     * @var \Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface
     */
    protected HelloWorldEntityManagerInterface $helloWorldEntityManager;

    /**
     * @var \Pyz\Zed\HelloWorld\Business\User\Validator\UserValidatorInterface
     */
    protected UserValidatorInterface $userValidator;

    /**
     * @var \Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface
     */
    protected UserIdentifierBuilderInterface $userIdentifierBuilder;

    /**
     * @var MessageBrokerFacadeInterface
     */
    protected MessageBrokerFacadeInterface $messageBrokerFacade;

    /**
     * @var \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface[]
     */
    protected array $userPreCreatePlugins;

    /**
     * @var \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface[]
     */
    protected array $userPostCreatePlugins;

    /**
     * @param \Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface $helloWorldEntityManager
     * @param \Pyz\Zed\HelloWorld\Business\User\Validator\UserValidatorInterface $userValidator
     * @param \Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface $userIdentifierBuilder
     * @param MessageBrokerFacadeInterface $messageBrokerFacade
     * @param \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface[] $userPreCreatePlugins
     * @param \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface[] $userPostCreatePlugins
     */
    public function __construct(
        HelloWorldEntityManagerInterface $helloWorldEntityManager,
        UserValidatorInterface $userValidator,
        UserIdentifierBuilderInterface $userIdentifierBuilder,
        MessageBrokerFacadeInterface $messageBrokerFacade,
        array $userPreCreatePlugins,
        array $userPostCreatePlugins
    ) {
        $this->helloWorldEntityManager = $helloWorldEntityManager;
        $this->userValidator = $userValidator;
        $this->userIdentifierBuilder = $userIdentifierBuilder;
        $this->messageBrokerFacade = $messageBrokerFacade;
        $this->userPreCreatePlugins = $userPreCreatePlugins;
        $this->userPostCreatePlugins = $userPostCreatePlugins;
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionRequestTransfer $userCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function createUserCollection(
        UserCollectionRequestTransfer $userCollectionRequestTransfer
    ): UserCollectionResponseTransfer {
        $userCollectionResponseTransfer = new UserCollectionResponseTransfer();
        $userCollectionResponseTransfer->setUsers($userCollectionRequestTransfer->getUsers());

        $userCollectionResponseTransfer = $this->userValidator->validateCollection($userCollectionResponseTransfer);

        if ($userCollectionRequestTransfer->getIsTransactional() && $userCollectionResponseTransfer->getErrors()->count()) {
            return $userCollectionResponseTransfer;
        }

        $userCollectionResponseTransfer = $this->filterInvalidUsers($userCollectionResponseTransfer);

        // This will save all entities in one transaction. If any of the entities in the collection fails to be persisted
        // it will roll all of them back. And we don't catch exceptions here intentionally!
        return $this->getTransactionHandler()->handleTransaction(function () use ($userCollectionResponseTransfer) {
            return $this->executeCreateUserCollectionTransaction($userCollectionResponseTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    protected function filterInvalidUsers(UserCollectionResponseTransfer $userCollectionResponseTransfer): UserCollectionResponseTransfer
    {
        $userIdsWithErrors = $this->getUserIdsWithErrors($userCollectionResponseTransfer->getErrors());

        $userTransfers = $userCollectionResponseTransfer->getUsers();
        $userCollectionResponseTransfer->setUsers(new ArrayObject());

        foreach ($userTransfers as $userTransfer) {
            // Check each SINGLE item before it is saved for errors, if it has some continue with the next one.
            if (!in_array($this->userIdentifierBuilder->buildIdentifier($userTransfer), $userIdsWithErrors, true)) {
                $userCollectionResponseTransfer->addUser($userTransfer);
            }
        }

        return $userCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    protected function executeCreateUserCollectionTransaction(
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): UserCollectionResponseTransfer {
        // Run pre-save plugins
        $userTransfers = $this->executeUserPreCreatePlugins($userCollectionResponseTransfer->getUsers()->getArrayCopy());

        $persistedUserTransfers = [];

        foreach ($userTransfers as $userTransfer) {
            $persistedUserTransfers[] = $this->helloWorldEntityManager->createUser($userTransfer);

            $greetUserTransfer = new GreetUserTransfer();
            $greetUserTransfer->setUuid($userTransfer->getUuid());

            $this->messageBrokerFacade->sendMessage($greetUserTransfer);
        }

        // Run post-save plugins
        $persistedUserTransfers = $this->executeUserPostCreatePlugins($persistedUserTransfers);

        $userCollectionResponseTransfer->setUsers(new ArrayObject($persistedUserTransfers));

        return $userCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
     *
     * @return \Generated\Shared\Transfer\UserTransfer[]
     */
    protected function executeUserPreCreatePlugins(array $userTransfers): array
    {
        foreach ($this->userPreCreatePlugins as $userPreCreatePlugin) {
            $userTransfers = $userPreCreatePlugin->execute($userTransfers);
        }

        return $userTransfers;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
     *
     * @return \Generated\Shared\Transfer\UserTransfer[]
     */
    protected function executeUserPostCreatePlugins(
        array $userTransfers
    ): array {
        foreach ($this->userPostCreatePlugins as $userPostCreatePlugin) {
            $userTransfers = $userPostCreatePlugin->execute($userTransfers);
        }

        return $userTransfers;
    }

    /**
     * @param \ArrayObject|\Generated\Shared\Transfer\ErrorTransfer[] $errorTransfers
     *
     * @return string[]
     */
    protected function getUserIdsWithErrors(ArrayObject $errorTransfers): array
    {
        return array_unique(array_map(static function (ErrorTransfer $errorTransfer): ?string {
            return $errorTransfer->getEntityIdentifier();
        }, $errorTransfers->getArrayCopy()));
    }
}
