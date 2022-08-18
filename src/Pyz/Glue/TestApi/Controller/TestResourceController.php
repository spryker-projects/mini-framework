<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\TestApi\Controller;

use Generated\Shared\Transfer\GlueErrorTransfer;
use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestConditionsTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractBackendApiController;

/**
 * @method \Pyz\Glue\TestApi\TestApiFactory getFactory()
 */
class TestResourceController extends AbstractBackendApiController
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getCollectionAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $testCriteriaTransfer = new TestCriteriaTransfer();

        $testCriteriaTransfer->setPagination($glueRequestTransfer->getPagination());
        $testCriteriaTransfer->setSortCollection($glueRequestTransfer->getSortings());

        $conditionsTransfer = new TestConditionsTransfer();
        if (isset($glueRequestTransfer->getQueryFields()['filter'])) {
            foreach ($glueRequestTransfer->getQueryFields()['filter'] as $name => $value) {
                if ($name === 'name') {
                    $conditionsTransfer->setNames(explode(',', $value));
                }

                if ($name === 'id') {
                    $conditionsTransfer->addTestId($value);
                }
            }
        }

        $testCriteriaTransfer->setTestConditions($conditionsTransfer);
        $testCollectionTransfer = $this->getFactory()->getTestFacade()->getTestCollection($testCriteriaTransfer);

        $glueResponseTransfer = new GlueResponseTransfer();
        foreach ($testCollectionTransfer->getTests() as $test) {
            $resourceTransfer = new GlueResourceTransfer();
            $resourceTransfer->setAttributes($test);
            $resourceTransfer->setId((string)$test->getId());
            $resourceTransfer->setType('test');

            $glueResponseTransfer->addResource($resourceTransfer);
        }

        return $glueResponseTransfer;
    }

    /**
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getAction(int $id): GlueResponseTransfer
    {
        $testCriteriaTransfer = new TestCriteriaTransfer();
        $testCriteriaTransfer->setTestConditions((new TestConditionsTransfer())->addTestId($id));

        $testCollectionTransfer = $this->getFactory()->getTestFacade()->getTestCollection($testCriteriaTransfer);

        $glueResponseTransfer = new GlueResponseTransfer();
        if ((array)$testCollectionTransfer->getTests()) {
            $resourceTransfer = new GlueResourceTransfer();
            /** @phpstan-var \Generated\Shared\Transfer\TestTransfer */
            $testTransfer = $testCollectionTransfer->getTests()[0];
            $resourceTransfer->setAttributes($testTransfer);
            $resourceTransfer->setId((string)$testTransfer->getId());
            $resourceTransfer->setType('test');

            $glueResponseTransfer->addResource($resourceTransfer);

            return $glueResponseTransfer;
        }

        $glueResponseTransfer->setHttpStatus(404)->addError((new GlueErrorTransfer())->setMessage('not found'));

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $testTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function postAction(TestTransfer $testTransfer): GlueResponseTransfer
    {
        $testCollectionRequestTransfer = new TestCollectionRequestTransfer();
        $testCollectionRequestTransfer->addTest($testTransfer)->setIsTransactional(false);

        return $this->returnSaveResponse(
            $this->getFactory()->getTestFacade()->createTestCollection($testCollectionRequestTransfer),
        );
    }

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $testTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function patchAction(TestTransfer $testTransfer): GlueResponseTransfer
    {
        $testCollectionRequestTransfer = new TestCollectionRequestTransfer();
        $testCollectionRequestTransfer->addTest($testTransfer)->setIsTransactional(false);

        return $this->returnSaveResponse(
            $this->getFactory()->getTestFacade()->updateTestCollection($testCollectionRequestTransfer),
        );
    }

    /**
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function deleteAction(int $id): GlueResponseTransfer
    {
        $testCollectionDeleteCriteriaTransfer = new TestCollectionDeleteCriteriaTransfer();
        $testCollectionDeleteCriteriaTransfer->setIsTransactional(false)->addIdTest($id);

        $testCollectionResponseTransfer =
            $this->getFactory()->getTestFacade()->deleteTestCollection($testCollectionDeleteCriteriaTransfer);

        if (!(array)$testCollectionResponseTransfer->getTests()) {
            $glueResponseTransfer = new GlueResponseTransfer();
            $glueResponseTransfer->setHttpStatus(404)->addError((new GlueErrorTransfer())->setMessage('not found'));

            return $glueResponseTransfer;
        }

        return $this->returnSaveResponse($testCollectionResponseTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\TestCollectionResponseTransfer $testCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    protected function returnSaveResponse(TestCollectionResponseTransfer $testCollectionResponseTransfer): GlueResponseTransfer
    {
        $glueResponseTransfer = new GlueResponseTransfer();
        if (!(array)$testCollectionResponseTransfer->getErrors()) {
            $resourceTransfer = new GlueResourceTransfer();
            /** @phpstan-var \Generated\Shared\Transfer\TestTransfer */
            $testTransfer = $testCollectionResponseTransfer->getTests()->offsetGet(0);
            $resourceTransfer->setAttributes($testTransfer);
            $resourceTransfer->setId((string)$testTransfer->getId());
            $resourceTransfer->setType('test');

            $glueResponseTransfer->addResource($resourceTransfer);

            return $glueResponseTransfer;
        }

        foreach ($testCollectionResponseTransfer->getErrors() as $error) {
            $glueResponseTransfer->addError((new GlueErrorTransfer())->setMessage($error->getMessage()));
        }

        return $glueResponseTransfer;
    }
}
