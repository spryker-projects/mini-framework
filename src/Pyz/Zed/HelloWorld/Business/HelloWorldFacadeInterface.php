<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\GreetUserTransfer;
use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Generated\Shared\Transfer\UserCollectionTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;

interface HelloWorldFacadeInterface
{
    /**
     * Specification:
     * - Fetches collection of Users from the storage.
     * - Uses `UserCriteriaTransfer.UserConditions.userIds` to filter users by userIds.
     * - Uses `UserCriteriaTransfer.UserConditions.uuids` to filter users by uuids.
     * - Uses `UserCriteriaTransfer.SortTransfer.field` to set the `order by` field.
     * - Uses `UserCriteriaTransfer.SortTransfer.isAscending` to set ascending order otherwise will be used descending order.
     * - Uses `UserCriteriaTransfer.PaginationTransfer.{limit, offset}` to paginate result with limit and offset.
     * - Uses `UserCriteriaTransfer.PaginationTransfer.{page, maxPerPage}` to paginate result with page and maxPerPage.
     * - Executes `UserExpanderPluginInterface` before return the collection transfer.
     * - Returns `UserCollectionTransfer` filled with found users.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    public function getUserCollection(UserCriteriaTransfer $userCriteriaTransfer): UserCollectionTransfer;

    /**
     * Specification:
     * - Stores collection of Users to the storage.
     * - Uses `UserValidatorInterface` to validate `UserTransfer` before save.
     * - Uses `UserValidatorRulePluginInterface` to validate `UserTransfer` before save.
     * - Executes pre-create `UserCreatePluginInterface` before create the `UserTransfer`.
     * - Executes post-create `UserCreatePluginInterface` after create the `UserTransfer`.
     * - Returns `UserCollectionResponseTransfer.UserTransfer[]` filled with created users.
     * - Returns `UserCollectionResponseTransfer.ErrorTransfer[]` filled with validation errors.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCollectionRequestTransfer $userCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function createUserCollection(
        UserCollectionRequestTransfer $userCollectionRequestTransfer
    ): UserCollectionResponseTransfer;

    /**
     * Specification:
     * - Updates collection of Users in the storage.
     * - Uses `UserValidatorInterface` to validate `UserTransfer` before save.
     * - Uses `UserValidatorRulePluginInterface` to validate `UserTransfer` before save.
     * - Executes pre-update `UserUpdatePluginInterface` before update the `UserTransfer`.
     * - Executes post-update `UserUpdatePluginInterface` after update the `UserTransfer`.
     * - Returns `UserCollectionResponseTransfer.UserTransfer[]` filled with updated users.
     * - Returns `UserCollectionResponseTransfer.ErrorTransfer[]` filled with validation errors.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCollectionRequestTransfer $userCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function updateUserCollection(UserCollectionRequestTransfer $userCollectionRequestTransfer): UserCollectionResponseTransfer;

    /**
     * Specification:
     * - Deletes collection of Users from the storage by delete criteria.
     * - Uses `UserCollectionDeleteCriteriaTransfer.userIds` to filter users by userIds.
     * - Uses `UserCollectionDeleteCriteriaTransfer.uuids` to filter users by uuids.
     * - Uses `UserCollectionDeleteCriteriaTransfer.isTransactional` to make transactional delete.
     * - Returns `UserCollectionResponseTransfer.UserTransfer[]` filled with deleted users.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function deleteUserCollection(
        UserCollectionDeleteCriteriaTransfer $userCollectionDeleteCriteriaTransfer
    ): UserCollectionResponseTransfer;

    /**
     * @api
     *
     * @param \Generated\Shared\Transfer\GreetUserTransfer $greetUserTransfer
     *
     * @return void
     */
    public function handleGreetUser(GreetUserTransfer $greetUserTransfer): void;
}
