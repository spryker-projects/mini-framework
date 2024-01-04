<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Test\Business\Reader;

use Generated\Shared\Transfer\TestCollectionTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Orm\Zed\Test\Persistence\SpyTestQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class TestReader implements TestReaderInterface
{
    use TransactionTrait;

    /**
     * @param \Generated\Shared\Transfer\TestCriteriaTransfer $testCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionTransfer
     */
    public function getTestCollection(TestCriteriaTransfer $testCriteriaTransfer): TestCollectionTransfer
    {
        $query = SpyTestQuery::create();

        if ($testCriteriaTransfer->getTestConditions() && $testCriteriaTransfer->getTestConditions()->getTestIds()) {
            $query->filterByIdTest_In($testCriteriaTransfer->getTestConditions()->getTestIds());
        }

        if ($testCriteriaTransfer->getTestConditions() && $testCriteriaTransfer->getTestConditions()->getNames()) {
            $query->filterByName_In($testCriteriaTransfer->getTestConditions()->getNames());
        }

        if ($testCriteriaTransfer->getPagination()) {
            if ($testCriteriaTransfer->getPagination()->getLimit()) {
                $query->limit($testCriteriaTransfer->getPagination()->getLimit());
            }

            if ($testCriteriaTransfer->getPagination()->getOffset()) {
                $query->offset($testCriteriaTransfer->getPagination()->getOffset());
            }
        }

        foreach ($testCriteriaTransfer->getSortCollection() as $sort) {
            switch ($sort->getField()) {
                case 'name':
                    $query->orderByName($sort->getIsAscending() ? Criteria::ASC : Criteria::DESC);

                    break;
                case 'id':
                    $query->orderByIdTest($sort->getIsAscending() ? Criteria::ASC : Criteria::DESC);

                    break;
            }
        }

        /** @var array<\Orm\Zed\Test\Persistence\SpyTest> $testEntities */
        $testEntities = $query->find();
        $testCollectionTransfer = new TestCollectionTransfer();
        $testCollectionTransfer->setPagination($testCriteriaTransfer->getPagination());

        foreach ($testEntities as $testEntity) {
            $testCollectionTransfer->addTest(
                (new TestTransfer())->setId($testEntity->getIdTest())->setName($testEntity->getName()),
            );
        }

        return $testCollectionTransfer;
    }
}
