<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Mapper;

use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Generated\Shared\Transfer\UserCollectionTransfer;

interface GlueResponseGreetMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\UserCollectionTransfer $userCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapUserCollectionTransferToGlueResponseTransfer(
        UserCollectionTransfer $userCollectionTransfer
    ): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\UserCollectionTransfer $userCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapUserCollectionTransferToSingleResourceGlueResponseTransfer(UserCollectionTransfer $userCollectionTransfer): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapUserCollectionResponseTransferToGlueResponseTransfer(
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapUserCollectionResponseTransferToSingleResourceGlueResponseTransfer(
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): GlueResponseTransfer;
}
