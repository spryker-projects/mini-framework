<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;
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
        $productAbstractTransfer = $productAbstractCollectionTransfer->getProductAbstracts()->offsetGet(0);


        $glueResponseTransfer = new GlueResponseTransfer();
        $description = '';
        foreach($productAbstractTransfer->getLocalizedAttributes() as $localizedAttribute) {
            if($localizedAttribute->getLocale()->getLocaleName() === $glueRequestTransfer->getLocale()) {
                $description = 'PRODUCT DESCRIPTION PBC '. $localizedAttribute->getDescription();
                break;
            }
        }

        if(!$description) {
            $description =
                'PRODUCT DESCRIPTION PBC ' . $productAbstractTransfer->getLocalizedAttributes()->offsetGet(0)->getDescription();
        }
        $glueResponseTransfer->setContent(json_encode([
            'description' => $description
        ]));

        $glueResponseTransfer->setMeta(array_merge($glueResponseTransfer->getMeta(), ['Content-Type' => 'application/json']));

        return $glueResponseTransfer;
    }
}
