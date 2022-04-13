<?php

namespace Pyz\Glue\TestBackendApi\Plugin;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Pyz\Glue\TestBackendApi\Controller\TestResourceController;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\AbstractResourcePlugin;
use Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin\RestResourceInterface;

class TestBackendApiResource extends AbstractResourcePlugin implements RestResourceInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return 'test';
    }

    /**
     * @return string
     * @uses \Pyz\Glue\TestBackendApi\Controller\TestResourceController
     *
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
        return (new GlueResourceMethodCollectionTransfer())
            ->setGetCollection(new GlueResourceMethodConfigurationTransfer())
            ->setGet(new GlueResourceMethodConfigurationTransfer())
            ->setPost((new GlueResourceMethodConfigurationTransfer())->setAttributes(TestTransfer::class)) // AppRegistrationUpdateRequestAttributesTransfer
            ->setPatch((new GlueResourceMethodConfigurationTransfer())->setAttributes(TestTransfer::class))
            ->setDelete(new GlueResourceMethodConfigurationTransfer());
    }
}
