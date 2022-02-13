<?php

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

    public function getTestCollection(TestCriteriaTransfer $testCriteriaTransfer): TestCollectionTransfer
    {
        $query = SpyTestQuery::create();

        if($testCriteriaTransfer->getTestConditions() && $testCriteriaTransfer->getTestConditions()->getTestIds()) {
            $query->filterByIdTest_In($testCriteriaTransfer->getTestConditions()->getTestIds());
        }

        if($testCriteriaTransfer->getTestConditions() && $testCriteriaTransfer->getTestConditions()->getNames()) {
            $query->filterByName_In($testCriteriaTransfer->getTestConditions()->getNames());
        }

        if($testCriteriaTransfer->getPagination()) {
            if($testCriteriaTransfer->getPagination()->getLimit()) {
                $query->limit($testCriteriaTransfer->getPagination()->getLimit());
            }

            if($testCriteriaTransfer->getPagination()->getOffset()) {
                $query->offset($testCriteriaTransfer->getPagination()->getOffset());
            }
        }

        foreach ($testCriteriaTransfer->getSortCollection() as $sort) {
            switch ($sort->getField()) {
                case 'name':
                    $query->orderByName($sort->getIsAscending()? Criteria::ASC : Criteria::DESC);
                    break;
                case 'id':
                    $query->orderByIdTest($sort->getIsAscending()? Criteria::ASC : Criteria::DESC);
                    break;
            }
        }

        $testEntities = $query->find();
        $testCollectionTransfer = new TestCollectionTransfer();
        $testCollectionTransfer->setPagination($testCriteriaTransfer->getPagination());

        foreach($testEntities as $testEntity) {
            $testCollectionTransfer->addTest(
                (new TestTransfer())->setId($testEntity->getIdTest())->setName($testEntity->getName())
            );
        }

        return $testCollectionTransfer;
    }
}
