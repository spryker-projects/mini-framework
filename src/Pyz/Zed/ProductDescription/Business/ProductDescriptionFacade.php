<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business;

use Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionTransfer;
use Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\ProductDescription\Business\ProductDescriptionBusinessFactory getFactory()
 * @method \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface getRepository()
 * @method \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface getEntityManager()
 */
class ProductDescriptionFacade extends AbstractFacade implements ProductDescriptionFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    public function getProductDescriptionCollection(
        ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
    ): ProductDescriptionCollectionTransfer {
        return $this->getFactory()->createProductDescriptionReader()->getProductDescriptionCollection($productDescriptionCriteriaTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function createProductDescriptionCollection(
        ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        return $this->getFactory()->createProductDescriptionCreator()->createProductDescriptionCollection($productDescriptionCollectionRequestTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function updateProductDescriptionCollection(
        ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        return $this->getFactory()->createProductDescriptionUpdater()->updateProductDescriptionCollection($productDescriptionCollectionRequestTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function deleteProductDescriptionCollection(
        ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        return $this->getFactory()->createProductDescriptionDeleter()->deleteProductDescriptionCollection($productDescriptionCollectionDeleteCriteriaTransfer);
    }
}
