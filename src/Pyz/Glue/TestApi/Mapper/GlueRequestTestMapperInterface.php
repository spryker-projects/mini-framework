<?php

namespace Pyz\Glue\TestApi\Mapper;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\TestCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCriteriaTransfer;
use Generated\Shared\Transfer\TestTransfer;

interface GlueRequestTestMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapGlueRequestToTestCriteriaTransfer(GlueRequestTransfer $glueRequestTransfer): TestCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapGlueRequestToTestCollectionDeleteCriteriaTransfer(GlueRequestTransfer $glueRequestTransfer): TestCollectionDeleteCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer|int $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapIdentifierToTestCriteriaTransfer(int $identifier): TestCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer|int $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapIdentifierToTestCollectionDeleteCriteriaTransfer(int $identifier): TestCollectionDeleteCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $testTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionRequestTransfer
     */
    public function mapTestTransferToTestCollectionRequestTransfer(TestTransfer $testTransfer): TestCollectionRequestTransfer;
}
