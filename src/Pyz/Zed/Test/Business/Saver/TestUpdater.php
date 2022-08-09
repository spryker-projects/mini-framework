<?php

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
        $existingTestEntity = SpyTestQuery::create()->findOneByIdTest($test->getId());

        if ($existingTestEntity) {
            $existingTestEntity->setName($test->getName());
            $existingTestEntity->save();

            $testCollectionResponseTransfer->addTest(
                (new TestTransfer())->setId($existingTestEntity->getIdTest())->setName($existingTestEntity->getName()),
            );

            return $testCollectionResponseTransfer;
        }

        throw new RuntimeException('entity with id ' . $test->getId() . 'is not found');
    }
}
