<?php

namespace Pyz\Glue\TestApi\Mapper;

use Generated\Shared\Transfer\GlueErrorTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestCollectionTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Symfony\Component\HttpFoundation\Response;

class GlueResponseTestMapper implements GlueResponseTestMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\TestCollectionTransfer $testCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapTestCollectionToGlueResponse(TestCollectionTransfer $testCollectionTransfer): GlueResponseTransfer
    {
        $glueResponseTransfer = new GlueResponseTransfer();

        foreach ($testCollectionTransfer->getTests() as $testTransfer) {
            $glueResponseTransfer = $this->addResourceToGlueResponse($testTransfer, $glueResponseTransfer);
        }

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\TestCollectionTransfer $testCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapTestCollectionToSingleResourceGlueResponse(TestCollectionTransfer $testCollectionTransfer): GlueResponseTransfer
    {
        $glueResponseTransfer = new GlueResponseTransfer();

        if ($testCollectionTransfer->getTests()->count() > 0) {
            return $this->addResourceToGlueResponse($testCollectionTransfer->getTests()->offsetGet(0), $glueResponseTransfer);
        }

        return $this->addNotFoundError($glueResponseTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\TestCollectionResponseTransfer $testCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapTestCollectionResponseToGlueResponse(TestCollectionResponseTransfer $testCollectionResponseTransfer): GlueResponseTransfer
    {
        $glueResponseTransfer = new GlueResponseTransfer();

        if ($testCollectionResponseTransfer->getErrors()->count() !== 0) {
            foreach ($testCollectionResponseTransfer->getErrors() as $error) {
                $glueResponseTransfer->addError((new GlueErrorTransfer())->setMessage($error->getMessage()));
            }

            return $glueResponseTransfer;
        }

        if ($testCollectionResponseTransfer->getTests()->count() === 0) {
            return $this->addNotFoundError($glueResponseTransfer);
        }

        foreach ($testCollectionResponseTransfer->getTests() as $testTransfer) {
            $resourceTransfer = new GlueResourceTransfer();
            $resourceTransfer->setAttributes($testTransfer);
            $resourceTransfer->setId($testTransfer->getId());
            $resourceTransfer->setType('test');

            $glueResponseTransfer->addResource($resourceTransfer);
        }

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    protected function addNotFoundError(GlueResponseTransfer $glueResponseTransfer): GlueResponseTransfer
    {
        $glueResponseTransfer
            ->setStatus(Response::HTTP_NOT_FOUND)
            ->addError((new GlueErrorTransfer())->setMessage(Response::$statusTexts[Response::HTTP_NOT_FOUND]));

        return $glueResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\TestTransfer $testTransfer
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    protected function addResourceToGlueResponse(TestTransfer $testTransfer, GlueResponseTransfer $glueResponseTransfer): GlueResponseTransfer
    {
        $resourceTransfer = new GlueResourceTransfer();
        $resourceTransfer->setAttributes($testTransfer);
        $resourceTransfer->setId($testTransfer->getId());
        $resourceTransfer->setType('test');

        $glueResponseTransfer->addResource($resourceTransfer);

        return $glueResponseTransfer;
    }
}
