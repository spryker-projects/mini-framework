<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Generated\Shared\Transfer\UserCollectionTransfer;
use Generated\Shared\Transfer\UserCreatedTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldBusinessFactory getFactory()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface getRepository()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface getEntityManager()
 */
class HelloWorldFacade extends AbstractFacade implements HelloWorldFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    public function getUserCollection(UserCriteriaTransfer $userCriteriaTransfer): UserCollectionTransfer
    {
        return $this->getFactory()->createUserReader()->getUserCollection($userCriteriaTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCollectionRequestTransfer $userCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function createUserCollection(
        UserCollectionRequestTransfer $userCollectionRequestTransfer
    ): UserCollectionResponseTransfer {
        return $this->getFactory()->createUserCreator()->createUserCollection($userCollectionRequestTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCollectionRequestTransfer $userCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function updateUserCollection(UserCollectionRequestTransfer $userCollectionRequestTransfer): UserCollectionResponseTransfer
    {
        return $this->getFactory()->createUserUpdater()->updateUserCollection($userCollectionRequestTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function deleteUserCollection(
        UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
    ): UserCollectionResponseTransfer {
        return $this->getFactory()->createUserDeleter()->deleteUserCollection($userCollectionDeleteCriteriaTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCreatedTransfer $userCreatedTransfer
     *
     * @return void
     */
    public function handleUserCreated(UserCreatedTransfer $userCreatedTransfer): void
    {
        $this->getFactory()->createUserCreatedMessageHandler()->handleUserCreated($userCreatedTransfer);
    }
}
