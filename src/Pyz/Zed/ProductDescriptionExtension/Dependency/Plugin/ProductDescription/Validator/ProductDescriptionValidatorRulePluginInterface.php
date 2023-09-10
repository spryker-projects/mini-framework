<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Validator;

use Generated\Shared\Transfer\ProductDescriptionTransfer;

interface ProductDescriptionValidatorRulePluginInterface
{
    /**
     * Specification:
     * - Validates the `ProductDescriptionTransfer`.
     * - Returns an array with errors for the `ProductDescriptionTransfer`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return string[]
     */
    public function validate(ProductDescriptionTransfer $productDescriptionTransfer): array;
}
