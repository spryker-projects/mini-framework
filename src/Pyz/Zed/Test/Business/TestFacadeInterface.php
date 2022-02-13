<?php

namespace Pyz\Zed\Test\Business;

use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestCollectionTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;

interface TestFacadeInterface
{
    public function createTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer;

    public function updateTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer;

    public function deleteTestCollection(TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer): TestCollectionResponseTransfer;

    public function getTestCollection(TestCriteriaTransfer $testCriteriaTransfer): TestCollectionTransfer;
}
