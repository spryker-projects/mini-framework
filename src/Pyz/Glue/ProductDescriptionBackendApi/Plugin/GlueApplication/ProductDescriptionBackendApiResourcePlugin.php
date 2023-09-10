<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Plugin\GlueApplication;

use Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer;
use Generated\Shared\Transfer\GlueResourceMethodConfigurationTransfer;
use Pyz\Glue\ProductDescriptionBackendApi\Controller\ProductDescriptionResourceController;
use Spryker\Glue\GlueApplication\Plugin\GlueApplication\Backend\AbstractResourcePlugin;

class ProductDescriptionBackendApiResourcePlugin extends AbstractResourcePlugin
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return string
     */
    public function getType(): string
    {
        return 'product-description';
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @uses \Pyz\Glue\ProductDescriptionBackendApi\Controller\ProductDescriptionResourceController
     *
     * @return string
     */
    public function getController(): string
    {
        return ProductDescriptionResourceController::class;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\GlueResourceMethodCollectionTransfer
     */
    public function getDeclaredMethods(): GlueResourceMethodCollectionTransfer
    {
        return (new GlueResourceMethodCollectionTransfer())
            ->setGet(
                (new GlueResourceMethodConfigurationTransfer())
                    ->setAction('getAction')
                    ->setIsSnakeCased(false)
                    ->setIsSingularResponse(true),
            );
    }
}
