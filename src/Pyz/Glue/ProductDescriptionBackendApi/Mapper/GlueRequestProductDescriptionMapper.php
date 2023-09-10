<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Mapper;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer;
use Generated\Shared\Transfer\ProductDescriptionConditionsTransfer;
use Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;

class GlueRequestProductDescriptionMapper implements GlueRequestProductDescriptionMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer
     */
    public function mapGlueRequestTransferToProductDescriptionCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): ProductDescriptionCriteriaTransfer {
        // @todo refactor the method according to your needs
        $productDescriptionCriteriaTransfer = new ProductDescriptionCriteriaTransfer();
        $productDescriptionCriteriaTransfer->setPagination($glueRequestTransfer->getPagination());
        $productDescriptionCriteriaTransfer->setSortCollection($glueRequestTransfer->getSortings());
        $productDescriptionConditionsTransfer = new ProductDescriptionConditionsTransfer();
        if (isset($glueRequestTransfer->getResource()->getParameters()['uuid'])) {
            $productDescriptionConditionsTransfer->addUuid($glueRequestTransfer->getResource()->getParameters()['uuid']);
        }
        if (!isset($glueRequestTransfer->getQueryFields()['filter'])) {
            return $productDescriptionCriteriaTransfer;
        }
        foreach ($glueRequestTransfer->getQueryFields()['filter'] as $key => $value) {
            // Apply conditions to $productDescriptionConditionsTransfer
        }
        $productDescriptionCriteriaTransfer->setProductDescriptionConditions($productDescriptionConditionsTransfer);

        return $productDescriptionCriteriaTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer
     */
    public function mapGlueRequestTransferToProductDescriptionCollectionDeleteCriteriaTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): ProductDescriptionCollectionDeleteCriteriaTransfer {
        // @todo refactor the method according to your needs
        $productDescriptionDeleteCollectionCriteriaTransfer = new ProductDescriptionCollectionDeleteCriteriaTransfer();
        if (!isset($glueRequestTransfer->getQueryFields()['filter'])) {
            return $productDescriptionDeleteCollectionCriteriaTransfer;
        }
        foreach ($glueRequestTransfer->getQueryFields()['filter'] as $key => $value) {
            // Apply conditions to $productDescriptionDeleteCollectionCriteriaTransfer
        }

        return $productDescriptionDeleteCollectionCriteriaTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer
     */
    public function mapGlueRequestTransferToProductDescriptionCollectionRequestTransfer(
        GlueRequestTransfer $glueRequestTransfer
    ): ProductDescriptionCollectionRequestTransfer {
        // @todo refactor the method according to your needs
        $productDescriptionTransfer = new ProductDescriptionTransfer();
        $productDescriptionTransfer->fromArray($glueRequestTransfer->getAttributes());
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer)->setIsTransactional(false);

        return $productDescriptionCollectionRequestTransfer;
    }
}
