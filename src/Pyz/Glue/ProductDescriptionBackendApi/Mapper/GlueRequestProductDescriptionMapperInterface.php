<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Mapper;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer;
use Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer;

interface GlueRequestProductDescriptionMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer
     */
    public function mapGlueRequestTransferToProductDescriptionCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): ProductDescriptionCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer
     */
    public function mapGlueRequestTransferToProductDescriptionCollectionDeleteCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): ProductDescriptionCollectionDeleteCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer
     */
    public function mapGlueRequestTransferToProductDescriptionCollectionRequestTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): ProductDescriptionCollectionRequestTransfer;
}
