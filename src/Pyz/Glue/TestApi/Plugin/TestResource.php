<?php

namespace Pyz\Glue\TestApi\Plugin;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Pyz\Glue\TestApi\Controller\TestResourceController;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\AbstractResourcePlugin;
use Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin\RestResourceInterface;

class TestResource extends AbstractResourcePlugin implements RestResourceInterface
{
    /**
     * @return string
     */
    public function getName(): string
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
            ->setPost(new GlueResourceMethodConfigurationTransfer())
            ->setPatch(new GlueResourceMethodConfigurationTransfer())
            ->setDelete(new GlueResourceMethodConfigurationTransfer());
    }
}
