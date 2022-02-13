<?php

namespace Pyz\Zed\Test\Business\Saver;

use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Orm\Zed\Test\Persistence\SpyTestQuery;

class TestUpdater extends AbstractTestSaver
{
    /**
     * @param TestTransfer $test
     * @param TestCollectionResponseTransfer $testCollectionResponseTransfer
     *
     * @return TestCollectionResponseTransfer
     * @throws \Propel\Runtime\Exception\PropelException
     */
    protected function saveTestEntity(TestTransfer $test, TestCollectionResponseTransfer $testCollectionResponseTransfer): TestCollectionResponseTransfer
    {
        $existingTestEntity = SpyTestQuery::create()->findOneByIdTest($test->getId());

        if($existingTestEntity) {
            $existingTestEntity->setName($test->getName());
            $existingTestEntity->save();

            $testCollectionResponseTransfer->addTest(
                (new TestTransfer())->setId($existingTestEntity->getIdTest())->setName($existingTestEntity->getName())
            );

            return $testCollectionResponseTransfer;
        }

        throw new \RuntimeException('entity with id ' . $test->getId() . 'is not found');
    }
}
