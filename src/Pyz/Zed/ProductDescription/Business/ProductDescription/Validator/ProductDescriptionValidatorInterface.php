<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business\ProductDescription\Validator;

use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;

interface ProductDescriptionValidatorInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function validateCollection(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function validate(
        ProductDescriptionTransfer $productDescriptionTransfer,
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer;
}
