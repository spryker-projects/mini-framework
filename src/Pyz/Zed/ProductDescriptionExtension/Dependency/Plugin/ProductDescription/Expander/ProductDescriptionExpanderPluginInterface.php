<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Expander;

interface ProductDescriptionExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands `ProductDescriptionTransfer[]` after reading them.
     * - Returns expanded `ProductDescriptionTransfer[]`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer[] $productDescriptionTransfers
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer[]
     */
    public function expand(array $productDescriptionTransfers): array;
}
