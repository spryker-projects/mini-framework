<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractController;

/**
 * @method \Pyz\Glue\ProductDescriptionBackendApi\ProductDescriptionBackendApiFactory getFactory()
 */
class ProductDescriptionResourceController extends AbstractController
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $productAbstractCriteriaTransfer = $this->getFactory()->createGlueRequestProductDescriptionMapper()
            ->mapGlueRequestTransferToProductAbstractCriteriaTransfer($glueRequestTransfer);
        $productAbstractCollectionTransfer = $this->getFactory()->getProductFacade()
            ->getProductAbstractCollection($productAbstractCriteriaTransfer);

        return $this->getFactory()->createGlueResponseProductDescriptionMapper()
            ->mapProductAbstractCollectionTransferToSingleResourceGlueResponseTransfer(
                $productAbstractCollectionTransfer,
                $glueRequestTransfer->getLocale()
            );
    }
}
