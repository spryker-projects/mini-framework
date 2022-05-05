<?php

namespace Pyz\Glue\TestBackendApi\Plugin;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Pyz\Glue\TestBackendApi\Controller\TestResourceController;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\AbstractResourcePlugin;
use Spryker\Glue\GlueJsonApiConventionExtension\Dependency\Plugin\JsonApiResourceInterface;
use Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin\RestResourceInterface;

class TestBackendApiResource extends AbstractResourcePlugin implements RestResourceInterface, JsonApiResourceInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return 'test';
    }

    /**
     * @uses \Pyz\Glue\TestBackendApi\Controller\TestResourceController
     *
     * @return string
     */
    public function getController(): string
    {
        return TestResourceController::class;
    }

    /**
     * @return \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer
     */
    public function getDeclaredMethods(): GlueResourceMethodCollectionTransfer
    {
        $glueResourceMethodCollectionTransfer = new GlueResourceMethodCollectionTransfer();

        return $glueResourceMethodCollectionTransfer
            ->setGetCollection(new GlueResourceMethodConfigurationTransfer())
            ->setGet(new GlueResourceMethodConfigurationTransfer())
            ->setPost((new GlueResourceMethodConfigurationTransfer())->setAttributes(TestTransfer::class))
            ->setPatch((new GlueResourceMethodConfigurationTransfer())->setAttributes(TestTransfer::class))
            ->setDelete(new GlueResourceMethodConfigurationTransfer());
    }
}
