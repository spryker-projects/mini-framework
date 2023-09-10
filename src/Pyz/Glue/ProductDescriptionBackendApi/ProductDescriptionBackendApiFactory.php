<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi;

use Pyz\Glue\ProductDescriptionBackendApi\Mapper\GlueRequestProductDescriptionMapper;
use Pyz\Glue\ProductDescriptionBackendApi\Mapper\GlueRequestProductDescriptionMapperInterface;
use Pyz\Glue\ProductDescriptionBackendApi\Mapper\GlueResponseProductDescriptionMapper;
use Pyz\Glue\ProductDescriptionBackendApi\Mapper\GlueResponseProductDescriptionMapperInterface;
use Pyz\Zed\ProductDescription\Business\ProductDescriptionFacadeInterface;
use Spryker\Glue\Kernel\Backend\AbstractFactory;

class ProductDescriptionBackendApiFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Glue\ProductDescriptionBackendApi\Mapper\GlueRequestProductDescriptionMapperInterface
     */
    public function createGlueRequestProductDescriptionMapper(): GlueRequestProductDescriptionMapperInterface
    {
        return new GlueRequestProductDescriptionMapper();
    }

    /**
     * @return \Pyz\Glue\ProductDescriptionBackendApi\Mapper\GlueResponseProductDescriptionMapperInterface
     */
    public function createGlueResponseProductDescriptionMapper(): GlueResponseProductDescriptionMapperInterface
    {
        return new GlueResponseProductDescriptionMapper();
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescriptionFacadeInterface
     */
    public function getProductDescriptionFacade(): ProductDescriptionFacadeInterface
    {
        return $this->getProvidedDependency(ProductDescriptionBackendApiDependencyProvider::FACADE_PRODUCT_DESCRIPTION);
    }
}
