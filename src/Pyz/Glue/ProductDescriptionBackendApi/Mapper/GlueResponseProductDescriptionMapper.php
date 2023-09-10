<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Mapper;

use Generated\Shared\Transfer\GlueErrorTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractCollectionTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;
use Symfony\Component\HttpFoundation\Response;

class GlueResponseProductDescriptionMapper implements GlueResponseProductDescriptionMapperInterface
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
    ): GlueResponseTransfer {
        $glueResponseTransfer = new GlueResponseTransfer();
        if ($productAbstractCollectionTransfer->getProductAbstracts()->count() > 0) {
            return $this->addProductDescriptionTransferToGlueResponse(
                $productAbstractCollectionTransfer->getProductAbstracts()->offsetGet(0),
                $locale,
                $glueResponseTransfer
            );
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
        $glueResponseTransfer->setHttpStatus(Response::HTTP_NOT_FOUND)->addError((new GlueErrorTransfer())->setMessage(Response::$statusTexts[Response::HTTP_NOT_FOUND]));

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     * @param string|null $locale
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function addProductDescriptionTransferToGlueResponse(
        ProductAbstractTransfer $productAbstractTransfer,
        ?string $locale,
        GlueResponseTransfer       $glueResponseTransfer
    ): GlueResponseTransfer {
        $productDescriptionTransfer = new ProductDescriptionTransfer();
        foreach($productAbstractTransfer->getLocalizedAttributes() as $localizedAttribute) {
            if($localizedAttribute->getLocale()->getLocaleName() === $locale) {
                $productDescriptionTransfer->setDescription('PRODUCT DESCRIPTION PBC '. $localizedAttribute->getDescription());
                break;
            }
        }

        if(!$productDescriptionTransfer->getDescription()) {
            $productDescriptionTransfer->setDescription(
                'PRODUCT DESCRIPTION PBC ' . $productAbstractTransfer->getLocalizedAttributes()->offsetGet(0)->getDescription()
            );
        }
        $resourceTransfer = new GlueResourceTransfer();
        $resourceTransfer->setAttributes($productDescriptionTransfer);
        $resourceTransfer->setType('productDescription');
        $glueResponseTransfer->addResource($resourceTransfer);

        return $glueResponseTransfer;
    }
}
