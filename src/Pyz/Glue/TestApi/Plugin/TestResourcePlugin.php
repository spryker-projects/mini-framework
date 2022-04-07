<?php

namespace Pyz\Glue\TestApi\Plugin;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Pyz\Glue\TestApi\Controller\TestResourceController;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\AbstractResourcePlugin;
use Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin\RestResourceInterface;

class TestResourcePlugin extends AbstractResourcePlugin implements RestResourceInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return 'test';
    }

    /**
     * @uses \Pyz\Glue\TestApi\Controller\TestResourceController
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
        return (new GlueResourceMethodCollectionTransfer())
            ->setGetCollection(new GlueResourceMethodConfigurationTransfer())
            ->setGet(new GlueResourceMethodConfigurationTransfer())
            ->setPost((new GlueResourceMethodConfigurationTransfer())->setAttributes(TestTransfer::class))
            ->setPatch((new GlueResourceMethodConfigurationTransfer())->setAttributes(TestTransfer::class))
            ->setDelete(new GlueResourceMethodConfigurationTransfer());
    }
}
