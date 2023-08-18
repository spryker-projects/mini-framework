<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Mapper;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserConditionsTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;
use Generated\Shared\Transfer\UserTransfer;

class GlueRequestGreetMapper implements GlueRequestGreetMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCriteriaTransfer
     */
    public function mapGlueRequestTransferToUserCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): UserCriteriaTransfer {
        // @todo refactor the method according to your needs
        $userCriteriaTransfer = new UserCriteriaTransfer();
        $userCriteriaTransfer->setPagination($glueRequestTransfer->getPagination());
        $userCriteriaTransfer->setSortCollection($glueRequestTransfer->getSortings());
        $userConditionsTransfer = new UserConditionsTransfer();
        if (isset($glueRequestTransfer->getResource()->getParameters()['uuid'])) {
            $userConditionsTransfer->addUuid($glueRequestTransfer->getResource()->getParameters()['uuid']);
        }
        if (!isset($glueRequestTransfer->getQueryFields()['filter'])) {
            return $userCriteriaTransfer;
        }
        foreach ($glueRequestTransfer->getQueryFields()['filter'] as $key => $value) {
            // Apply conditions to $userConditionsTransfer
        }
        $userCriteriaTransfer->setUserConditions($userConditionsTransfer);

        return $userCriteriaTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer
     */
    public function mapGlueRequestTransferToUserCollectionDeleteCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): UserCollectionDeleteCriteriaTransfer {
        // @todo refactor the method according to your needs
        $userDeleteCollectionCriteriaTransfer = new UserCollectionDeleteCriteriaTransfer();
        if (!isset($glueRequestTransfer->getQueryFields()['filter'])) {
            return $userDeleteCollectionCriteriaTransfer;
        }
        foreach ($glueRequestTransfer->getQueryFields()['filter'] as $key => $value) {
            // Apply conditions to $userDeleteCollectionCriteriaTransfer
        }

        return $userDeleteCollectionCriteriaTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionRequestTransfer
     */
    public function mapGlueRequestTransferToUserCollectionRequestTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): UserCollectionRequestTransfer {
        // @todo refactor the method according to your needs
        $userTransfer = new UserTransfer();
        $userTransfer->fromArray($glueRequestTransfer->getAttributes());
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer)->setIsTransactional(false);

        return $userCollectionRequestTransfer;
    }
}
