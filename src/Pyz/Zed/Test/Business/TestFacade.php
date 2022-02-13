<?php

namespace Pyz\Zed\Test\Business;

use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestCollectionTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\Test\Business\TestBusinessFactory getFactory()
 */
class TestFacade extends AbstractFacade implements TestFacadeInterface
{
    public function createTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer
    {
        return $this->getFactory()->createTestCreator()->saveTestCollection($testCollectionRequestTransfer);
    }

    public function updateTestCollection(TestCollectionRequestTransfer $testCollectionRequestTransfer): TestCollectionResponseTransfer
    {
        return $this->getFactory()->createTestUpdater()->saveTestCollection($testCollectionRequestTransfer);
    }

    public function deleteTestCollection(TestCollectionDeleteCriteriaTransfer $testCollectionDeleteCriteriaTransfer): TestCollectionResponseTransfer
    {
        return $this->getFactory()->createTestDeleter()->deleteTestCollection($testCollectionDeleteCriteriaTransfer);
    }

    public function getTestCollection(TestCriteriaTransfer $testCriteriaTransfer): TestCollectionTransfer
    {
        return $this->getFactory()->createTestReader()->getTestCollection($testCriteriaTransfer);
    }

}
