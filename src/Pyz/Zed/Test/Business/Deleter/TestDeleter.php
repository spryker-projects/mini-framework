<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Test\Business\Deleter;

use ArrayObject;
use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Orm\Zed\Test\Persistence\SpyTestQuery;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;
use Throwable;

class TestDeleter implements TestDeleterInterface
{
    use TransactionTrait;

    /**
     * @param \Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    public function deleteTestCollection(TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer): TestCollectionResponseTransfer
    {
        if ($testCollectionDeleteCriteriaTransfer->getIsTransactional()) {
            $this->getTransactionHandler()->handleTransaction(function () use ($testCollectionDeleteCriteriaTransfer) {
                $testCollectionResponseTransfer = new TestCollectionResponseTransfer();

                try {
                    $query = SpyTestQuery::create();
                    if ($testCollectionDeleteCriteriaTransfer->getTestIds()) {
                        $query->filterByIdTest_In($testCollectionDeleteCriteriaTransfer->getTestIds());
                    }

                    /** @var array<\Orm\Zed\Test\Persistence\SpyTest> $tests */
                    $tests = $query->find();

                    foreach ($tests as $test) {
                        $test->delete();
                        $testCollectionResponseTransfer->addTest(
                            (new TestTransfer())->setName($test->getName())->setId($test->getIdTest()),
                        );
                    }

                    return $testCollectionResponseTransfer;
                } catch (Throwable $exception) {
                    $error = new ErrorTransfer();
                    $error->setMessage($exception->getMessage());

                    $testCollectionResponseTransfer->setTests(new ArrayObject());
                    $testCollectionResponseTransfer->addError($error);

                    return $testCollectionResponseTransfer;
                }
            });
        }

        $testCollectionResponseTransfer = new TestCollectionResponseTransfer();

        try {
            $query = SpyTestQuery::create();
            if ($testCollectionDeleteCriteriaTransfer->getTestIds()) {
                $query->filterByIdTest_In($testCollectionDeleteCriteriaTransfer->getTestIds());
            }
            /** @var array<\Orm\Zed\Test\Persistence\SpyTest> $tests */
            $tests = $query->find();

            foreach ($tests as $test) {
                $test->delete();
                $testCollectionResponseTransfer->addTest(
                    (new TestTransfer())->setName($test->getName())->setId($test->getIdTest()),
                );
            }

            return $testCollectionResponseTransfer;
        } catch (Throwable $exception) {
            $error = new ErrorTransfer();
            $error->setMessage($exception->getMessage());

            $testCollectionResponseTransfer->addError($error);
        }

        return $testCollectionResponseTransfer;
    }
}
