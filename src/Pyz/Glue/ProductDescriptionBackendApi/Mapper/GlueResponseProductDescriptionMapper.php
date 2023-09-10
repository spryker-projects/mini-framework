<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Mapper;

use Generated\Shared\Transfer\GlueErrorTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;
use Symfony\Component\HttpFoundation\Response;

class GlueResponseProductDescriptionMapper implements GlueResponseProductDescriptionMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductDescriptionCollectionTransferToGlueResponseTransfer(
        ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $glueResponseTransfer = new GlueResponseTransfer();
        foreach ($productDescriptionCollectionTransfer->getProductDescriptions() as $productDescriptionTransfer) {
            $glueResponseTransfer = $this->addProductDescriptionTransferToGlueResponse($productDescriptionTransfer, $glueResponseTransfer);
        }

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductDescriptionCollectionTransferToSingleResourceGlueResponseTransfer(
        ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $glueResponseTransfer = new GlueResponseTransfer();
        if ($productDescriptionCollectionTransfer->getProductDescriptions()->count() > 0) {
            return $this->addProductDescriptionTransferToGlueResponse($productDescriptionCollectionTransfer->getProductDescriptions()->offsetGet(0), $glueResponseTransfer);
        }

        return $this->addNotFoundError($glueResponseTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductDescriptionCollectionResponseTransferToGlueResponseTransfer(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $glueResponseTransfer = new GlueResponseTransfer();
        if ($productDescriptionCollectionResponseTransfer->getErrors()->count() !== 0) {
            foreach ($productDescriptionCollectionResponseTransfer->getErrors() as $error) {
                $glueResponseTransfer->addError((new GlueErrorTransfer())->setMessage($error->getMessage()));
            }

            return $glueResponseTransfer;
        }
        if ($productDescriptionCollectionResponseTransfer->getProductDescriptions()->count() === 0) {
            return $this->addNotFoundError($glueResponseTransfer);
        }
        foreach ($productDescriptionCollectionResponseTransfer->getProductDescriptions() as $productDescriptionTransfer) {
            $glueResponseTransfer = $this->addProductDescriptionTransferToGlueResponse($productDescriptionTransfer, $glueResponseTransfer);
        }

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapProductDescriptionCollectionResponseTransferToSingleResourceGlueResponseTransfer(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $glueResponseTransfer = new GlueResponseTransfer();
        if ($productDescriptionCollectionResponseTransfer->getProductDescriptions()->count() > 0) {
            return $this->addProductDescriptionTransferToGlueResponse($productDescriptionCollectionResponseTransfer->getProductDescriptions()->offsetGet(0), $glueResponseTransfer);
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
        // @todo refactor the method according to your needs
        $glueResponseTransfer->setHttpStatus(Response::HTTP_NOT_FOUND)->addError((new GlueErrorTransfer())->setMessage(Response::$statusTexts[Response::HTTP_NOT_FOUND]));

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function addProductDescriptionTransferToGlueResponse(
        ProductDescriptionTransfer $productDescriptionTransfer,
        GlueResponseTransfer $glueResponseTransfer
    ): GlueResponseTransfer {
        // @todo refactor the method according to your needs
        $resourceTransfer = new GlueResourceTransfer();
        $resourceTransfer->setAttributes($productDescriptionTransfer);
        $resourceTransfer->setId($productDescriptionTransfer->getIdProductDescription());
        $resourceTransfer->setType('productDescription');
        $glueResponseTransfer->addResource($resourceTransfer);

        return $glueResponseTransfer;
    }
}
