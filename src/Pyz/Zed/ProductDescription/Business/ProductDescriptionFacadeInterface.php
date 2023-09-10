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

interface ProductDescriptionFacadeInterface
{
    /**
     * Specification:
     * - Fetches collection of ProductDescriptions from the storage.
     * - Uses `ProductDescriptionCriteriaTransfer.ProductDescriptionConditions.productDescriptionIds` to filter productDescriptions by productDescriptionIds.
     * - Uses `ProductDescriptionCriteriaTransfer.ProductDescriptionConditions.uuids` to filter productDescriptions by uuids.
     * - Uses `ProductDescriptionCriteriaTransfer.SortTransfer.field` to set the `order by` field.
     * - Uses `ProductDescriptionCriteriaTransfer.SortTransfer.isAscending` to set ascending order otherwise will be used descending order.
     * - Uses `ProductDescriptionCriteriaTransfer.PaginationTransfer.{limit, offset}` to paginate result with limit and offset.
     * - Uses `ProductDescriptionCriteriaTransfer.PaginationTransfer.{page, maxPerPage}` to paginate result with page and maxPerPage.
     * - Executes `ProductDescriptionExpanderPluginInterface` before return the collection transfer.
     * - Returns `ProductDescriptionCollectionTransfer` filled with found productDescriptions.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer
     */
    public function getProductDescriptionCollection(
        ProductDescriptionCriteriaTransfer $productDescriptionCriteriaTransfer
    ): ProductDescriptionCollectionTransfer;

    /**
     * Specification:
     * - Stores collection of ProductDescriptions to the storage.
     * - Uses `ProductDescriptionValidatorInterface` to validate `ProductDescriptionTransfer` before save.
     * - Uses `ProductDescriptionValidatorRulePluginInterface` to validate `ProductDescriptionTransfer` before save.
     * - Executes pre-create `ProductDescriptionCreatePluginInterface` before create the `ProductDescriptionTransfer`.
     * - Executes post-create `ProductDescriptionCreatePluginInterface` after create the `ProductDescriptionTransfer`.
     * - Returns `ProductDescriptionCollectionResponseTransfer.ProductDescriptionTransfer[]` filled with created productDescriptions.
     * - Returns `ProductDescriptionCollectionResponseTransfer.ErrorTransfer[]` filled with validation errors.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function createProductDescriptionCollection(
        ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
    ): ProductDescriptionCollectionResponseTransfer;

    /**
     * Specification:
     * - Updates collection of ProductDescriptions in the storage.
     * - Uses `ProductDescriptionValidatorInterface` to validate `ProductDescriptionTransfer` before save.
     * - Uses `ProductDescriptionValidatorRulePluginInterface` to validate `ProductDescriptionTransfer` before save.
     * - Executes pre-update `ProductDescriptionUpdatePluginInterface` before update the `ProductDescriptionTransfer`.
     * - Executes post-update `ProductDescriptionUpdatePluginInterface` after update the `ProductDescriptionTransfer`.
     * - Returns `ProductDescriptionCollectionResponseTransfer.ProductDescriptionTransfer[]` filled with updated productDescriptions.
     * - Returns `ProductDescriptionCollectionResponseTransfer.ErrorTransfer[]` filled with validation errors.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function updateProductDescriptionCollection(
        ProductDescriptionCollectionRequestTransfer $productDescriptionCollectionRequestTransfer
    ): ProductDescriptionCollectionResponseTransfer;

    /**
     * Specification:
     * - Deletes collection of ProductDescriptions from the storage by delete criteria.
     * - Uses `ProductDescriptionCollectionDeleteCriteriaTransfer.productDescriptionIds` to filter productDescriptions by productDescriptionIds.
     * - Uses `ProductDescriptionCollectionDeleteCriteriaTransfer.uuids` to filter productDescriptions by uuids.
     * - Uses `ProductDescriptionCollectionDeleteCriteriaTransfer.isTransactional` to make transactional delete.
     * - Returns `ProductDescriptionCollectionResponseTransfer.ProductDescriptionTransfer[]` filled with deleted productDescriptions.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function deleteProductDescriptionCollection(
        ProductDescriptionCollectionDeleteCriteriaTransfer $productDescriptionCollectionDeleteCriteriaTransfer
    ): ProductDescriptionCollectionResponseTransfer;
}
