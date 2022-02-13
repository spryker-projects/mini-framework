<?php

namespace Pyz\Zed\Test\Business\Deleter;

use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Orm\Zed\Test\Persistence\SpyTest;
use Orm\Zed\Test\Persistence\SpyTestQuery;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class TestDeleter implements TestDeleterInterface
{
    use TransactionTrait;

    public function deleteTestCollection(TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer): TestCollectionResponseTransfer
    {
        if($testCollectionDeleteCriteriaTransfer->getIsTransactional()) {
            $this->getTransactionHandler()->handleTransaction(function () use ($testCollectionDeleteCriteriaTransfer) {
                $testCollectionResponseTransfer = new TestCollectionResponseTransfer();

                try {
                    $query = SpyTestQuery::create();
                    if($testCollectionDeleteCriteriaTransfer->getTestIds()) {
                        $query->filterByIdTest_In($testCollectionDeleteCriteriaTransfer->getTestIds());
                    }

                    $tests = $query->find();

                    foreach($tests as $test) {
                        $test->delete();
                        $testCollectionResponseTransfer->addTest(
                            (new TestTransfer())->setName($test->getName())->setId($test->getIdTest())
                        );
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

        try {
            $query = SpyTestQuery::create();
            if($testCollectionDeleteCriteriaTransfer->getTestIds()) {
                $query->filterByIdTest_In($testCollectionDeleteCriteriaTransfer->getTestIds());
            }

            $tests = $query->find();

            foreach($tests as $test) {
                $test->delete();
                $testCollectionResponseTransfer->addTest(
                    (new TestTransfer())->setName($test->getName())->setId($test->getIdTest())
                );
            }

            return $testCollectionResponseTransfer;
        } catch(\Throwable $exception) {
            $error = new ErrorTransfer();
            $error->setMessage($exception->getMessage());

            $testCollectionResponseTransfer->addError($error);
        }

        return $testCollectionResponseTransfer;
    }
}
