<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business\ProductDescription\Deleter;

use Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface;
use Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class ProductDescriptionDeleter implements ProductDescriptionDeleterInterface
{
    use TransactionTrait;

    /**
     * @var \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface
     */
    protected ProductDescriptionEntityManagerInterface $productDescriptionEntityManager;

    /**
     * @var \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface
     */
    protected ProductDescriptionRepositoryInterface $productDescriptionRepository;

    /**
     * @param \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface $productDescriptionEntityManager
     * @param \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface $productDescriptionRepository
     */
    public function __construct(
        ProductDescriptionEntityManagerInterface $productDescriptionEntityManager,
        ProductDescriptionRepositoryInterface $productDescriptionRepository
    ) {
        $this->productDescriptionEntityManager = $productDescriptionEntityManager;
        $this->productDescriptionRepository = $productDescriptionRepository;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function deleteProductDescriptionCollection(
        ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        return $this->getTransactionHandler()->handleTransaction(function () use ($productDescriptionCollectionDeleteCriteriaTransfer) {
            return $this->executeDeleteProductDescriptionCollectionTransaction($productDescriptionCollectionDeleteCriteriaTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    protected function executeDeleteProductDescriptionCollectionTransaction(
        ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        $productDescriptionCollectionTransfer = $this->productDescriptionRepository->getProductDescriptionDeleteCollection($productDescriptionCollectionDeleteCriteriaTransfer);

        $productDescriptionCollectionResponseTransfer = new ProductDescriptionCollectionResponseTransfer();

        foreach ($productDescriptionCollectionTransfer->getProductDescriptions() as $productDescriptionTransfer) {
            $productDescriptionCollectionResponseTransfer->addProductDescription(
                $this->productDescriptionEntityManager->deleteProductDescription($productDescriptionTransfer),
            );
        }

        return $productDescriptionCollectionResponseTransfer;
    }
}
