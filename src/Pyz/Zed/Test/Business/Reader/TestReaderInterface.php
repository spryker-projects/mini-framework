<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

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
