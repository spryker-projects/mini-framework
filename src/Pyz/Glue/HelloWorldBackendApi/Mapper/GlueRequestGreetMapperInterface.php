<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Mapper;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;

interface GlueRequestGreetMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCriteriaTransfer
     */
    public function mapGlueRequestTransferToUserCriteriaTransfer(GlueRequestTransfer $glueRequestTransfer): UserCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer
     */
    public function mapGlueRequestTransferToUserCollectionDeleteCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): UserCollectionDeleteCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionRequestTransfer
     */
    public function mapGlueRequestTransferToUserCollectionRequestTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): UserCollectionRequestTransfer;
}
