<?php

namespace Pyz\Glue\TestApi\Mapper;

use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestCollectionTransfer;

interface GlueResponseTestMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\TestCollectionTransfer $testCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapTestCollectionToGlueResponse(TestCollectionTransfer $testCollectionTransfer): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\TestCollectionTransfer $testCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapTestCollectionToSingleResourceGlueResponse(TestCollectionTransfer $testCollectionTransfer): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\TestCollectionResponseTransfer $testCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapTestCollectionResponseToGlueResponse(TestCollectionResponseTransfer $testCollectionResponseTransfer): GlueResponseTransfer;

    /**
     * @param \Generated\Shared\Transfer\TestCollectionResponseTransfer $testCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function mapTestCollectionResponseToSingleResourceGlueResponse(TestCollectionResponseTransfer $testCollectionResponseTransfer): GlueResponseTransfer;
}
