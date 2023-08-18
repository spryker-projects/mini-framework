<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Plugin\GlueApplication;

use Pyz\Glue\HelloWorldBackendApi\Controller\UsersResourceController;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RouteProviderPluginInterface;
use Spryker\Glue\Kernel\Backend\AbstractPlugin;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class UsersBackendApiRouteProviderPlugin extends AbstractPlugin implements RouteProviderPluginInterface
{
    /**
     * @param \Symfony\Component\Routing\RouteCollection $routeCollection
     *
     * @return \Symfony\Component\Routing\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection->add('postUsers', $this->getPostUsersRoute());

        return $routeCollection;
    }

    /**
     * @return \Symfony\Component\Routing\Route
     */
    public function getPostUsersRoute(): Route
    {
        return (new Route('/users'))->setDefaults(['_controller' => [UsersResourceController::class, 'postAction'], '_resourceName' => 'Users'])->setMethods(Request::METHOD_POST);
    }
}
