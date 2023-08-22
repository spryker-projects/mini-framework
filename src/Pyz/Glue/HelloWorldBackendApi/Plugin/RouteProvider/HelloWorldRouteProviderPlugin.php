<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Plugin\RouteProvider;

use Pyz\Glue\HelloWorldBackendApi\Controller\HelloWorldResourceController;
use Spryker\Glue\App\Controller\AppConfigController;
use Spryker\Glue\App\AppConfig;
use Spryker\Glue\App\Controller\AppDisconnectController;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RouteProviderPluginInterface;
use Spryker\Glue\Kernel\Backend\AbstractPlugin;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class HelloWorldRouteProviderPlugin extends AbstractPlugin implements RouteProviderPluginInterface
{
    /**
     * @param \Symfony\Component\Routing\RouteCollection $routeCollection
     *
     * @return \Symfony\Component\Routing\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection->add('getHelloWorld', $this->getGetHelloWorldRoute());

        return $routeCollection;
    }

    /**
     * @return \Symfony\Component\Routing\Route
     */
    protected function getGetHelloWorldRoute(): Route
    {
        return (new Route('/hello-world'))
            ->setDefaults([
                '_controller' => [HelloWorldResourceController::class, 'getHelloWorldAction'],
                '_resourceName' => 'HelloWorld',
            ])
            ->setMethods(Request::METHOD_GET);
    }
}
