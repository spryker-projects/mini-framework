<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer;

interface ProductDescriptionCreatePluginInterface
{
    /**
     * Specification:
     * - Executes plugin for `ProductDescriptionTransfer[]` before or after create them.
     * - Returns mapped `ProductDescriptionTransfer[]`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer[] $productDescriptionTransfers
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer[]
     */
    public function execute(array $productDescriptionTransfers): array;
}
