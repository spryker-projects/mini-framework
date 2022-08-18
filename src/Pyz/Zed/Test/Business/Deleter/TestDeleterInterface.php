<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

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
