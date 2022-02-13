<?php

namespace Pyz\Zed\Test\Business\Saver;

use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;

interface TestSaverInterface
{
    public function saveTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer;
}
