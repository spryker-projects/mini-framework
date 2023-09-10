<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Mapper;

use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionTransfer;

interface GlueResponseProductDescriptionMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductDescriptionCollectionTransferToGlueResponseTransfer(
        ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
    ): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductDescriptionCollectionTransferToSingleResourceGlueResponseTransfer(
        ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
    ): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductDescriptionCollectionResponseTransferToGlueResponseTransfer(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductDescriptionCollectionResponseTransferToSingleResourceGlueResponseTransfer(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): GlueResponseTransfer;
}
