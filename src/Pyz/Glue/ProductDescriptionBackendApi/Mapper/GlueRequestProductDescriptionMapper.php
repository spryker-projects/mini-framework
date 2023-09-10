<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Mapper;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\ProductAbstractConditionsTransfer;
use Generated\Shared\Transfer\ProductAbstractCriteriaTransfer;
use Generated\Shared\Transfer\ProductAbstractRelationsTransfer;

class GlueRequestProductDescriptionMapper implements GlueRequestProductDescriptionMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractCriteriaTransfer
     */
    public function mapGlueRequestTransferToProductAbstractCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): ProductAbstractCriteriaTransfer {
        $productAbstractCriteriaTransfer = new ProductAbstractCriteriaTransfer();
        $productAbstractCriteriaTransfer->setPagination($glueRequestTransfer->getPagination());
        $productAbstractCriteriaTransfer->setSortCollection($glueRequestTransfer->getSortings());
        $productAbstractConditionsTransfer = new ProductAbstractConditionsTransfer();
        if ($glueRequestTransfer->getResource()->getId()) {
            $productAbstractConditionsTransfer->addSku($glueRequestTransfer->getResource()->getId());
        }
        $productAbstractCriteriaTransfer->setProductAbstractConditions($productAbstractConditionsTransfer);
        $productAbstractCriteriaTransfer->setProductAbstractRelations(
            (new ProductAbstractRelationsTransfer())->setWithLocalizedAttributes(true)
        );

        return $productAbstractCriteriaTransfer;
    }
}
