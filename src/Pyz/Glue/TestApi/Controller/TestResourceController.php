<?php

namespace Pyz\Glue\TestApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
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
        $testCriteriaTransfer = $this->getFactory()
            ->getGlueRequestToTestMapper()
            ->mapGlueRequestToTestCriteriaTransfer($glueRequestTransfer);

        $testCollectionTransfer = $this->getFactory()
            ->getTestFacade()
            ->getTestCollection($testCriteriaTransfer);

        return $this->getFactory()
            ->getTestToGlueResponseMapper()
            ->mapTestCollectionToGlueResponse($testCollectionTransfer);
    }

    /**
     * @param string $id
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getAction(string $id): GlueResponseTransfer
    {
        $testCriteriaTransfer = $this->getFactory()
            ->getGlueRequestToTestMapper()
            ->mapIdentifierToTestCriteriaTransfer($id);

        $testCollectionTransfer = $this->getFactory()
            ->getTestFacade()
            ->getTestCollection($testCriteriaTransfer);

        return $this->getFactory()
            ->getTestToGlueResponseMapper()
            ->mapTestCollectionToSingleResourceGlueResponse($testCollectionTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $testTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function postAction(TestTransfer $testTransfer): GlueResponseTransfer
    {
        $testCollectionRequestTransfer = $this->getFactory()
            ->getGlueRequestToTestMapper()
            ->mapTestTransferToTestCollectionRequestTransfer($testTransfer);

        $testCollectionResponseTransfer = $this->getFactory()
            ->getTestFacade()
            ->createTestCollection($testCollectionRequestTransfer);

        return $this->getFactory()
            ->getTestToGlueResponseMapper()
            ->mapTestCollectionResponseToGlueResponse($testCollectionResponseTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $testTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function patchAction(TestTransfer $testTransfer): GlueResponseTransfer
    {
        $testCollectionRequestTransfer = $this->getFactory()
            ->getGlueRequestToTestMapper()
            ->mapTestTransferToTestCollectionRequestTransfer($testTransfer);

        $testCollectionResponseTransfer = $this->getFactory()
            ->getTestFacade()
            ->updateTestCollection($testCollectionRequestTransfer);

        return $this->getFactory()
            ->getTestToGlueResponseMapper()
            ->mapTestCollectionResponseToGlueResponse($testCollectionResponseTransfer);
    }

    /**
     * @param string $id
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function deleteAction(string $id): GlueResponseTransfer
    {
        $testCollectionDeleteCriteriaTransfer = $this->getFactory()
            ->getGlueRequestToTestMapper()
            ->mapIdentifierToTestCollectionDeleteCriteriaTransfer($id);

        $testCollectionResponseTransfer = $this->getFactory()
            ->getTestFacade()
            ->deleteTestCollection($testCollectionDeleteCriteriaTransfer);

        return $this->getFactory()
            ->getTestToGlueResponseMapper()
            ->mapTestCollectionResponseToSingleResourceGlueResponse($testCollectionResponseTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function deleteCollectionAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $testCollectionDeleteCriteriaTransfer = $this->getFactory()
            ->getGlueRequestToTestMapper()
            ->mapGlueRequestToTestCollectionDeleteCriteriaTransfer($glueRequestTransfer);

        $testCollectionResponseTransfer = $this->getFactory()
            ->getTestFacade()
            ->deleteTestCollection($testCollectionDeleteCriteriaTransfer);

        return $this->getFactory()
            ->getTestToGlueResponseMapper()
            ->mapTestCollectionResponseToGlueResponse($testCollectionResponseTransfer);
    }
}
