<?php

namespace Pyz\Zed\Test\Business\Saver;

use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Orm\Zed\Test\Persistence\SpyTest;

class TestCreator extends AbstractTestSaver
{
    /**
     * @param \Generated\Shared\Transfer\TestTransfer $test
     * @param \Generated\Shared\Transfer\TestCollectionResponseTransfer $testCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    protected function saveTestEntity(TestTransfer $test, TestCollectionResponseTransfer $testCollectionResponseTransfer): TestCollectionResponseTransfer
    {
        $testEntity = new SpyTest();
        $testEntity->setName($test->getName());
        $testEntity->save();

        $testCollectionResponseTransfer->addTest(
            (new TestTransfer())->setId($testEntity->getIdTest())->setName($testEntity->getName()),
        );

        return $testCollectionResponseTransfer;
    }
}
