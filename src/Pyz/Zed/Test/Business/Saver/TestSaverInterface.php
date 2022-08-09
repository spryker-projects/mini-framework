<?php

namespace Pyz\Zed\Test\Business\Saver;

use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;

interface TestSaverInterface
{
    /**
     * @param \Generated\Shared\Transfer\TestCollectionRequestTransfer $testCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    public function saveTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer;
}
