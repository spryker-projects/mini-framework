<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Test\Business\Saver;

use ArrayObject;
use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;
use Throwable;

abstract class AbstractTestSaver implements TestSaverInterface
{
    use TransactionTrait;

    /**
     * @param \Generated\Shared\Transfer\TestCollectionRequestTransfer $testCollectionRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    public function saveTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer
    {
        if ($testCollectionRequestTransfer->getIsTransactional()) {
            $this->getTransactionHandler()->handleTransaction(function () use ($testCollectionRequestTransfer) {
                $testCollectionResponseTransfer = new TestCollectionResponseTransfer();
                try {
                    foreach ($testCollectionRequestTransfer->getTests() as $test) {
                        $testCollectionResponseTransfer = $this->saveTestEntity($test, $testCollectionResponseTransfer);
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
        foreach ($testCollectionRequestTransfer->getTests() as $test) {
            try {
                $testCollectionResponseTransfer = $this->saveTestEntity($test, $testCollectionResponseTransfer);
            } catch (Throwable $exception) {
                $error = new ErrorTransfer();
                $error->setMessage($exception->getMessage());

                $testCollectionResponseTransfer->addError($error);
            }
        }

        return $testCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $test
     * @param \Generated\Shared\Transfer\TestCollectionResponseTransfer $testCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionResponseTransfer
     */
    abstract protected function saveTestEntity(
        TestTransfer $test,
        TestCollectionResponseTransfer $testCollectionResponseTransfer
    ): TestCollectionResponseTransfer;
}
