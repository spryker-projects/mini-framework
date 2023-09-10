<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Mapper;

use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractCollectionTransfer;

interface GlueResponseProductDescriptionMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductAbstractCollectionTransfer $productAbstractCollectionTransfer
     * @param string|null $locale
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductAbstractCollectionTransferToSingleResourceGlueResponseTransfer(
        ProductAbstractCollectionTransfer $productAbstractCollectionTransfer,
        ?string $locale
    ): GlueResponseTransfer;
}
