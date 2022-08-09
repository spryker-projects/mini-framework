<?php

namespace Pyz\Zed\Test\Business\Deleter;

use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;

interface TestDeleterInterface
{
    /**
     * @param \Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    public function deleteTestCollection(TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer): TestCollectionResponseTransfer;
}
