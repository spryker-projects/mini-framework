<?php

namespace Pyz\Zed\Test\Business\Reader;

use Generated\Shared\Transfer\TestCollectionTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;

interface TestReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\TestCriteriaTransfer $testCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionTransfer
     */
    public function getTestCollection(TestCriteriaTransfer $testCriteriaTransfer): TestCollectionTransfer;
}
