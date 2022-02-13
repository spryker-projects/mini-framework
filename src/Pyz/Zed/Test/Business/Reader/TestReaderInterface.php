<?php

namespace Pyz\Zed\Test\Business\Reader;

use Generated\Shared\Transfer\TestCollectionTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;

interface TestReaderInterface
{
    public function getTestCollection(TestCriteriaTransfer $testCriteriaTransfer): TestCollectionTransfer;
}
