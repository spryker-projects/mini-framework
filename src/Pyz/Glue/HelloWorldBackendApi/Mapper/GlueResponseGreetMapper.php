<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Mapper;

use Generated\Shared\Transfer\GlueErrorTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Generated\Shared\Transfer\UserCollectionTransfer;
use Generated\Shared\Transfer\UserTransfer;
use Symfony\Component\HttpFoundation\Response;

class GlueResponseGreetMapper implements GlueResponseGreetMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserCollectionTransfer $userCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapUserCollectionTransferToGlueResponseTransfer(
        UserCollectionTransfer $userCollectionTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $glueResponseTransfer = new GlueResponseTransfer();
        foreach ($userCollectionTransfer->getUsers() as $userTransfer) {
            $glueResponseTransfer = $this->addUserTransferToGlueResponse($userTransfer, $glueResponseTransfer);
        }

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionTransfer $userCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapUserCollectionTransferToSingleResourceGlueResponseTransfer(UserCollectionTransfer $userCollectionTransfer): GlueResponseTransfer
    {
        // @todo refactor the method according to your needs
        $glueResponseTransfer = new GlueResponseTransfer();
        if ($userCollectionTransfer->getUsers()->count() > 0) {
            return $this->addUserTransferToGlueResponse($userCollectionTransfer->getUsers()->offsetGet(0), $glueResponseTransfer);
        }

        return $this->addNotFoundError($glueResponseTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapUserCollectionResponseTransferToGlueResponseTransfer(
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $glueResponseTransfer = new GlueResponseTransfer();
        if ($userCollectionResponseTransfer->getErrors()->count() !== 0) {
            foreach ($userCollectionResponseTransfer->getErrors() as $error) {
                $glueResponseTransfer->addError((new GlueErrorTransfer())->setMessage($error->getMessage()));
            }

            return $glueResponseTransfer;
        }
        if ($userCollectionResponseTransfer->getUsers()->count() === 0) {
            return $this->addNotFoundError($glueResponseTransfer);
        }
        foreach ($userCollectionResponseTransfer->getUsers() as $userTransfer) {
            $glueResponseTransfer = $this->addUserTransferToGlueResponse($userTransfer, $glueResponseTransfer);
        }

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapUserCollectionResponseTransferToSingleResourceGlueResponseTransfer(
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $glueResponseTransfer = new GlueResponseTransfer();
        if ($userCollectionResponseTransfer->getUsers()->count() > 0) {
            return $this->addUserTransferToGlueResponse($userCollectionResponseTransfer->getUsers()->offsetGet(0), $glueResponseTransfer);
        }

        return $this->addNotFoundError($glueResponseTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function addNotFoundError(GlueResponseTransfer $glueResponseTransfer): GlueResponseTransfer
    {
        // @todo refactor the method according to your needs
        $glueResponseTransfer->setHttpStatus(Response::HTTP_NOT_FOUND)->addError((new GlueErrorTransfer())->setMessage(Response::$statusTexts[Response::HTTP_NOT_FOUND]));

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function addUserTransferToGlueResponse(
        UserTransfer $userTransfer,
        GlueResponseTransfer $glueResponseTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $resourceTransfer = new GlueResourceTransfer();
        $resourceTransfer->setAttributes($userTransfer);
        $resourceTransfer->setId($userTransfer->getIdUser());
        $resourceTransfer->setType('user');
        $glueResponseTransfer->addResource($resourceTransfer);

        return $glueResponseTransfer;
    }
}
