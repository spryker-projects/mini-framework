<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Plugin\GlueApplication;

use Pyz\Glue\ProductDescriptionBackendApi\Controller\ProductDescriptionResourceController;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RouteProviderPluginInterface;
use Spryker\Glue\Kernel\Backend\AbstractPlugin;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class ProductDescriptionBackendApiRouteProviderPlugin extends AbstractPlugin implements RouteProviderPluginInterface
{
    /**
     * @param \Symfony\Component\Routing\RouteCollection $routeCollection
     *
     * @return \Symfony\Component\Routing\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection->add('getProductDescription', $this->getGetProductDescriptionRoute());

        return $routeCollection;
    }

    /**
     * @return \Symfony\Component\Routing\Route
     */
    public function getGetProductDescriptionRoute(): Route
    {
        return (new Route('/product-description/{sku}'))->setDefaults(['_controller' => [ProductDescriptionResourceController::class, 'getAction'], '_resourceName' => 'ProductDescription'])->setMethods(Request::METHOD_GET);
    }
}
