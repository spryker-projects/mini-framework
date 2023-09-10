<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business\ProductDescription\Reader;

use ArrayObject;
use Generated\Shared\Transfer\ProductDescriptionCollectionTransfer;
use Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer;
use Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface;

class ProductDescriptionReader implements ProductDescriptionReaderInterface
{
    /**
     * @var \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface
     */
    protected ProductDescriptionRepositoryInterface $productDescriptionRepository;

    /**
     * @var \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Expander\ProductDescriptionExpanderPluginInterface[]
     */
    protected array $productDescriptionExpanderPlugins;

    /**
     * @param \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface $productDescriptionRepository
     * @param \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Expander\ProductDescriptionExpanderPluginInterface[] $productDescriptionExpanderPlugins
     */
    public function __construct(
        ProductDescriptionRepositoryInterface $productDescriptionRepository,
        array $productDescriptionExpanderPlugins
    ) {
        $this->productDescriptionRepository = $productDescriptionRepository;
        $this->productDescriptionExpanderPlugins = $productDescriptionExpanderPlugins;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    public function getProductDescriptionCollection(
        ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
    ): ProductDescriptionCollectionTransfer {
        $productDescriptionCollectionTransfer = $this->productDescriptionRepository
            ->getProductDescriptionCollection($productDescriptionCriteriaTransfer);

        return $this->executeProductDescriptionExpanderPlugins($productDescriptionCollectionTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    protected function executeProductDescriptionExpanderPlugins(
        ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
    ): ProductDescriptionCollectionTransfer {
        $productDescriptionTransfers = $productDescriptionCollectionTransfer->getProductDescriptions()->getArrayCopy();

        foreach ($this->productDescriptionExpanderPlugins as $productDescriptionExpanderPlugin) {
            $productDescriptionTransfers = $productDescriptionExpanderPlugin->expand($productDescriptionTransfers);
        }

        return $productDescriptionCollectionTransfer->setProductDescriptions(new ArrayObject($productDescriptionTransfers));
    }
}
