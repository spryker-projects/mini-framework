<?php

namespace Pyz\Zed\Test\Business\Saver;

use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

abstract class AbstractTestSaver implements TestSaverInterface
{
    use TransactionTrait;

    public function saveTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer
    {
        if($testCollectionRequestTransfer->getIsTransactional()) {
            $this->getTransactionHandler()->handleTransaction(function () use ($testCollectionRequestTransfer) {
                $testCollectionResponseTransfer = new TestCollectionResponseTransfer();
                try {
                    foreach($testCollectionRequestTransfer->getTests() as $test) {
                        $testCollectionResponseTransfer = $this->saveTestEntity($test, $testCollectionResponseTransfer);
                    }

                    return $testCollectionResponseTransfer;
                } catch(\Throwable $exception) {
                    $error = new ErrorTransfer();
                    $error->setMessage($exception->getMessage());

                    $testCollectionResponseTransfer->setTests([]);
                    $testCollectionResponseTransfer->addError($error);

                    return $testCollectionResponseTransfer;
                }
            });
        }

        $testCollectionResponseTransfer = new TestCollectionResponseTransfer();
        foreach($testCollectionRequestTransfer->getTests() as $test) {

            try{
                $testCollectionResponseTransfer = $this->saveTestEntity($test, $testCollectionResponseTransfer);
            } catch(\Throwable $exception) {
                $error = new ErrorTransfer();
                $error->setMessage($exception->getMessage());

                $testCollectionResponseTransfer->addError($error);
            }
        }

        return $testCollectionResponseTransfer;
    }

    abstract protected function saveTestEntity(TestTransfer $test, TestCollectionResponseTransfer $testCollectionResponseTransfer): TestCollectionResponseTransfer;
}
