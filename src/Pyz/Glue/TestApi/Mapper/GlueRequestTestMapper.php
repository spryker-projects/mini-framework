<?php

namespace Pyz\Glue\TestApi\Mapper;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestConditionsTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;
use Generated\Shared\Transfer\TestTransfer;

class GlueRequestTestMapper implements GlueRequestTestMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapGlueRequestToTestCriteriaTransfer(GlueRequestTransfer $glueRequestTransfer): TestCriteriaTransfer
    {
        $testCriteriaTransfer = new TestCriteriaTransfer();

        $testCriteriaTransfer->setPagination($glueRequestTransfer->getPagination());
        $testCriteriaTransfer->setSortCollection($glueRequestTransfer->getSortings());

        $conditionsTransfer = new TestConditionsTransfer();

        if (!isset($glueRequestTransfer->getQueryFields()['filter'])) {
            return $testCriteriaTransfer;
        }

        foreach ($glueRequestTransfer->getQueryFields()['filter'] as $key => $value) {
            if ($key === 'name') {
                $conditionsTransfer->setNames(explode(',', $value));
            }

            if ($key === 'id') {
                $conditionsTransfer->addIdTest($value);
            }
        }

        $testCriteriaTransfer->setTestConditions($conditionsTransfer);

        return $testCriteriaTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapGlueRequestToTestCollectionDeleteCriteriaTransfer(GlueRequestTransfer $glueRequestTransfer): TestCollectionDeleteCriteriaTransfer
    {
        $testDeleteCollectionCriteriaTransfer = new TestCollectionDeleteCriteriaTransfer();

        if (!isset($glueRequestTransfer->getQueryFields()['filter'])) {
            return $testDeleteCollectionCriteriaTransfer;
        }

        foreach ($glueRequestTransfer->getQueryFields()['filter'] as $key => $value) {
            if ($key === 'id') {
                $testDeleteCollectionCriteriaTransfer->addIdTest($value);
            }
        }

        return $testDeleteCollectionCriteriaTransfer;
    }

    /**
     * @param int $identifier
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapIdentifierToTestCriteriaTransfer(int $identifier): TestCriteriaTransfer
    {
        $testCriteriaTransfer = new TestCriteriaTransfer();
        $testCriteriaTransfer->setTestConditions((new TestConditionsTransfer())->addTestId($identifier));

        return $testCriteriaTransfer;
    }

    /**
     * @param int $identifier
     *
     * @return \Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer
     */
    public function mapIdentifierToTestCollectionDeleteCriteriaTransfer(int $identifier): TestCollectionDeleteCriteriaTransfer
    {
        $testCollectionDeleteCriteriaTransfer = new TestCollectionDeleteCriteriaTransfer();
        $testCollectionDeleteCriteriaTransfer->setIsTransactional(false)->addIdTest($identifier);

        return $testCollectionDeleteCriteriaTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $testTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionRequestTransfer
     */
    public function mapTestTransferToTestCollectionRequestTransfer(TestTransfer $testTransfer): TestCollectionRequestTransfer
    {
        $testCollectionRequestTransfer = new TestCollectionRequestTransfer();
        $testCollectionRequestTransfer->addTest($testTransfer)->setIsTransactional(false);

        return $testCollectionRequestTransfer;
    }
}
