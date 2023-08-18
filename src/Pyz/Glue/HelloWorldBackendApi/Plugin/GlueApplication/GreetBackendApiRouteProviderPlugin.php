<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Plugin\GlueApplication;

use Pyz\Glue\HelloWorldBackendApi\Controller\GreetResourceController;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RouteProviderPluginInterface;
use Spryker\Glue\Kernel\Backend\AbstractPlugin;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class GreetBackendApiRouteProviderPlugin extends AbstractPlugin implements RouteProviderPluginInterface
{
    /**
     * @param \Symfony\Component\Routing\RouteCollection $routeCollection
     *
     * @return \Symfony\Component\Routing\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection->add('getGreet', $this->getGetGreetRoute());
        $routeCollection->add('getGreet', $this->getGetGreetRoute());

        return $routeCollection;
    }

    /**
     * @return \Symfony\Component\Routing\Route
     */
    public function getGetGreetRoute(): Route
    {
        return (new Route('/greet/{uuid}'))->setDefaults(['_controller' => [GreetResourceController::class, 'getAction'], '_resourceName' => 'Greet'])->setMethods(Request::METHOD_GET);
    }
}
