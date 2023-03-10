<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\TestApi\Plugin\GlueApplication;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Generated\Shared\Transfer\TestTransfer;
use Pyz\Glue\TestApi\Controller\TestResourceController;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\AbstractResourcePlugin;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceInterface;

class TestResource extends AbstractResourcePlugin implements ResourceInterface
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
