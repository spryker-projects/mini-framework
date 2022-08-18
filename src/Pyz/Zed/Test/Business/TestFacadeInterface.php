<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Test\Business;

use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestCollectionTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;

interface TestFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\TestCollectionRequestTransfer $testCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    public function createTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\TestCollectionRequestTransfer $testCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    public function updateTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    public function deleteTestCollection(TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer): TestCollectionResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\TestCriteriaTransfer $testCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionTransfer
     */
    public function getTestCollection(TestCriteriaTransfer $testCriteriaTransfer): TestCollectionTransfer;
}
