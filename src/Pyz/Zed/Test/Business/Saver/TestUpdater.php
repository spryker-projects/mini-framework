<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Test\Business\Saver;

use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Orm\Zed\Test\Persistence\SpyTestQuery;
use RuntimeException;

class TestUpdater extends AbstractTestSaver
{
    /**
     * @param \Generated\Shared\Transfer\TestTransfer $test
     * @param \Generated\Shared\Transfer\TestCollectionResponseTransfer $testCollectionResponseTransfer
     *
     * @throws \RuntimeException
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    protected function saveTestEntity(TestTransfer $test, TestCollectionResponseTransfer $testCollectionResponseTransfer): TestCollectionResponseTransfer
    {
        $existingTestEntity = SpyTestQuery::create()->findOneByIdTest($test->getIdOrFail());

        if ($existingTestEntity) {
            $existingTestEntity->setName($test->getNameOrFail());
            $existingTestEntity->save();

            $testCollectionResponseTransfer->addTest(
                (new TestTransfer())->setId($existingTestEntity->getIdTest())->setName($existingTestEntity->getName()),
            );

            return $testCollectionResponseTransfer;
        }

        throw new RuntimeException('entity with id ' . $test->getId() . 'is not found');
    }
}
