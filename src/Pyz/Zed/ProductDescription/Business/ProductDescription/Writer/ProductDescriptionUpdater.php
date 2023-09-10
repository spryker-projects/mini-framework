<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business\ProductDescription\Writer;

use ArrayObject;
use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilderInterface;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\ProductDescriptionValidatorInterface;
use Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class ProductDescriptionUpdater implements ProductDescriptionUpdaterInterface
{
    use TransactionTrait;

    /**
     * @var \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface
     */
    protected ProductDescriptionEntityManagerInterface $productDescriptionEntityManager;

    /**
     * @var \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\ProductDescriptionValidatorInterface
     */
    protected ProductDescriptionValidatorInterface $productDescriptionValidator;

    /**
     * @var \Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilderInterface
     */
    protected ProductDescriptionIdentifierBuilderInterface $productDescriptionIdentifierBuilder;

    /**
     * @var \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface[]
     */
    protected array $productDescriptionPreUpdatePlugins;

    /**
     * @var \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface[]
     */
    protected array $productDescriptionPostUpdatePlugins;

    /**
     * @param \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface $productDescriptionEntityManager
     * @param \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\ProductDescriptionValidatorInterface $productDescriptionValidator
     * @param \Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilderInterface $productDescriptionIdentifierBuilder
     * @param \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface[] $productDescriptionPreUpdatePlugins
     * @param \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface[] $productDescriptionPostUpdatePlugins
     */
    public function __construct(
        ProductDescriptionEntityManagerInterface $productDescriptionEntityManager,
        ProductDescriptionValidatorInterface $productDescriptionValidator,
        ProductDescriptionIdentifierBuilderInterface $productDescriptionIdentifierBuilder,
        array $productDescriptionPreUpdatePlugins,
        array $productDescriptionPostUpdatePlugins
    ) {
        $this->productDescriptionEntityManager = $productDescriptionEntityManager;
        $this->productDescriptionValidator = $productDescriptionValidator;
        $this->productDescriptionIdentifierBuilder = $productDescriptionIdentifierBuilder;
        $this->productDescriptionPreUpdatePlugins = $productDescriptionPreUpdatePlugins;
        $this->productDescriptionPostUpdatePlugins = $productDescriptionPostUpdatePlugins;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function updateProductDescriptionCollection(
        ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        $productDescriptionCollectionResponseTransfer = new ProductDescriptionCollectionResponseTransfer();
        $productDescriptionCollectionResponseTransfer->setProductDescriptions($productDescriptionCollectionRequestTransfer->getProductDescriptions());

        $productDescriptionCollectionResponseTransfer = $this->productDescriptionValidator->validateCollection($productDescriptionCollectionResponseTransfer);

        if ($productDescriptionCollectionRequestTransfer->getIsTransactional() && $productDescriptionCollectionResponseTransfer->getErrors()->count()) {
            return $productDescriptionCollectionResponseTransfer;
        }

        $productDescriptionCollectionResponseTransfer = $this->filterInvalidProductDescriptions($productDescriptionCollectionResponseTransfer);

        // This will save all entities in one transaction. If any of the entities in the collection fails to be persisted
        // it will roll all of them back. And we don't catch exceptions here intentionally!
        return $this->getTransactionHandler()->handleTransaction(function () use ($productDescriptionCollectionResponseTransfer) {
            return $this->executeUpdateProductDescriptionCollectionTransaction($productDescriptionCollectionResponseTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    protected function filterInvalidProductDescriptions(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        $productDescriptionIdsWithErrors = $this->getProductDescriptionIdsWithErrors($productDescriptionCollectionResponseTransfer->getErrors());

        $productDescriptionTransfers = $productDescriptionCollectionResponseTransfer->getProductDescriptions();
        $productDescriptionCollectionResponseTransfer->setProductDescriptions(new ArrayObject());

        foreach ($productDescriptionTransfers as $productDescriptionTransfer) {
            // Check each SINGLE item before it is saved for errors, if it has some continue with the next one.
            if (!in_array($this->productDescriptionIdentifierBuilder->buildIdentifier($productDescriptionTransfer), $productDescriptionIdsWithErrors, true)) {
                $productDescriptionCollectionResponseTransfer->addProductDescription($productDescriptionTransfer);
            }
        }

        return $productDescriptionCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    protected function executeUpdateProductDescriptionCollectionTransaction(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        // Run pre-save plugins
        $productDescriptionTransfers = $this->executeProductDescriptionPreUpdatePlugins($productDescriptionCollectionResponseTransfer->getProductDescriptions()->getArrayCopy());

        $persistedProductDescriptionTransfers = [];

        foreach ($productDescriptionTransfers as $productDescriptionTransfer) {
            $persistedProductDescriptionTransfers[] = $this->productDescriptionEntityManager->updateProductDescription($productDescriptionTransfer);
        }

        // Run post-save plugins
        $persistedProductDescriptionTransfers = $this->executeProductDescriptionPostUpdatePlugins($persistedProductDescriptionTransfers);

        $productDescriptionCollectionResponseTransfer->setProductDescriptions(new ArrayObject($persistedProductDescriptionTransfers));

        return $productDescriptionCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer[] $productDescriptionTransfers
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer[]
     */
    protected function executeProductDescriptionPreUpdatePlugins(
        array $productDescriptionTransfers
    ): array {
        foreach ($this->productDescriptionPreUpdatePlugins as $productDescriptionPreUpdatePlugin) {
            $productDescriptionTransfers = $productDescriptionPreUpdatePlugin->execute($productDescriptionTransfers);
        }

        return $productDescriptionTransfers;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer[] $productDescriptionTransfers
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer[]
     */
    protected function executeProductDescriptionPostUpdatePlugins(
        array $productDescriptionTransfers
    ): array {
        foreach ($this->productDescriptionPostUpdatePlugins as $productDescriptionPostUpdatePlugin) {
            $productDescriptionTransfers = $productDescriptionPostUpdatePlugin->execute($productDescriptionTransfers);
        }

        return $productDescriptionTransfers;
    }

    /**
     * @param \ArrayObject|\Generated\Shared\Transfer\ErrorTransfer[] $errorTransfers
     *
     * @return string[]
     */
    protected function getProductDescriptionIdsWithErrors(ArrayObject $errorTransfers): array
    {
        return array_unique(array_map(static function (ErrorTransfer $errorTransfer): ?string {
            return $errorTransfer->getEntityIdentifier();
        }, $errorTransfers->getArrayCopy()));
    }
}
