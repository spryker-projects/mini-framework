<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\User\Writer;

use ArrayObject;
use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface;
use Pyz\Zed\HelloWorld\Business\User\Validator\UserValidatorInterface;
use Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class UserUpdater implements UserUpdaterInterface
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
     * @var \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface[]
     */
    protected array $userPreUpdatePlugins;

    /**
     * @var \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface[]
     */
    protected array $userPostUpdatePlugins;

    /**
     * @param \Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface $helloWorldEntityManager
     * @param \Pyz\Zed\HelloWorld\Business\User\Validator\UserValidatorInterface $userValidator
     * @param \Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface $userIdentifierBuilder
     * @param \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface[] $userPreUpdatePlugins
     * @param \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface[] $userPostUpdatePlugins
     */
    public function __construct(
        HelloWorldEntityManagerInterface $helloWorldEntityManager,
        UserValidatorInterface $userValidator,
        UserIdentifierBuilderInterface $userIdentifierBuilder,
        array $userPreUpdatePlugins,
        array $userPostUpdatePlugins
    ) {
        $this->helloWorldEntityManager = $helloWorldEntityManager;
        $this->userValidator = $userValidator;
        $this->userIdentifierBuilder = $userIdentifierBuilder;
        $this->userPreUpdatePlugins = $userPreUpdatePlugins;
        $this->userPostUpdatePlugins = $userPostUpdatePlugins;
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionRequestTransfer $userCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function updateUserCollection(
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
            return $this->executeUpdateUserCollectionTransaction($userCollectionResponseTransfer);
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
    protected function executeUpdateUserCollectionTransaction(
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): UserCollectionResponseTransfer {
        // Run pre-save plugins
        $userTransfers = $this->executeUserPreUpdatePlugins($userCollectionResponseTransfer->getUsers()->getArrayCopy());

        $persistedUserTransfers = [];

        foreach ($userTransfers as $userTransfer) {
            $persistedUserTransfers[] = $this->helloWorldEntityManager->updateUser($userTransfer);
        }

        // Run post-save plugins
        $persistedUserTransfers = $this->executeUserPostUpdatePlugins($persistedUserTransfers);

        $userCollectionResponseTransfer->setUsers(new ArrayObject($persistedUserTransfers));

        return $userCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
     *
     * @return \Generated\Shared\Transfer\UserTransfer[]
     */
    protected function executeUserPreUpdatePlugins(array $userTransfers): array
    {
        foreach ($this->userPreUpdatePlugins as $userPreUpdatePlugin) {
            $userTransfers = $userPreUpdatePlugin->execute($userTransfers);
        }

        return $userTransfers;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
     *
     * @return \Generated\Shared\Transfer\UserTransfer[]
     */
    protected function executeUserPostUpdatePlugins(
        array $userTransfers
    ): array {
        foreach ($this->userPostUpdatePlugins as $userPostUpdatePlugin) {
            $userTransfers = $userPostUpdatePlugin->execute($userTransfers);
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
