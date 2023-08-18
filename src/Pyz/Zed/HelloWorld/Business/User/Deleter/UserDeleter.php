<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\User\Deleter;

use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface;
use Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class UserDeleter implements UserDeleterInterface
{
    use TransactionTrait;

    /**
     * @var \Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface
     */
    protected HelloWorldEntityManagerInterface $helloWorldEntityManager;

    /**
     * @var \Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface
     */
    protected HelloWorldRepositoryInterface $helloWorldRepository;

    /**
     * @param \Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface $helloWorldEntityManager
     * @param \Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface $helloWorldRepository
     */
    public function __construct(
        HelloWorldEntityManagerInterface $helloWorldEntityManager,
        HelloWorldRepositoryInterface $helloWorldRepository
    ) {
        $this->helloWorldEntityManager = $helloWorldEntityManager;
        $this->helloWorldRepository = $helloWorldRepository;
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function deleteUserCollection(UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer): UserCollectionResponseTransfer
    {
        return $this->getTransactionHandler()->handleTransaction(function () use ($userCollectionDeleteCriteriaTransfer) {
            return $this->executeDeleteUserCollectionTransaction($userCollectionDeleteCriteriaTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    protected function executeDeleteUserCollectionTransaction(
        UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
    ): UserCollectionResponseTransfer {
        $userCollectionTransfer = $this->helloWorldRepository->getUserDeleteCollection($userCollectionDeleteCriteriaTransfer);

        $userCollectionResponseTransfer = new UserCollectionResponseTransfer();

        foreach ($userCollectionTransfer->getUsers() as $userTransfer) {
            $userCollectionResponseTransfer->addUser(
                $this->helloWorldEntityManager->deleteUser($userTransfer),
            );
        }

        return $userCollectionResponseTransfer;
    }
}
