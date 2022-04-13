<?php

namespace Pyz\Glue\TestBackendApi\Mapper;

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
     * @param int $identifier
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapIdentifierToTestCriteriaTransfer(int $identifier, GlueRequestTransfer $glueRequestTransfer): TestCriteriaTransfer;

    /**
     * @param int $identifier
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCriteriaTransfer
     */
    public function mapIdentifierToTestCollectionDeleteCriteriaTransfer(int $identifier, GlueRequestTransfer $glueRequestTransfer): TestCollectionDeleteCriteriaTransfer;

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $testTransfer
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\TestCollectionRequestTransfer
     */
    public function mapTestTransferToTestCollectionRequestTransfer(TestTransfer $testTransfer, GlueRequestTransfer $glueRequestTransfer): TestCollectionRequestTransfer;
}
