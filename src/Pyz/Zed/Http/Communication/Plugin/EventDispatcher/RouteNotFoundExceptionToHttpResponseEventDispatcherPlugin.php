<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Http\Communication\Plugin\EventDispatcher;

use Spryker\Service\Container\ContainerInterface;
use Spryker\Shared\EventDispatcher\EventDispatcherInterface;
use Spryker\Shared\EventDispatcherExtension\Dependency\Plugin\EventDispatcherPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * @method \Spryker\Zed\Http\HttpConfig getConfig()
 * @method \Spryker\Zed\Http\Communication\HttpCommunicationFactory getFactory()
 */
class RouteNotFoundExceptionToHttpResponseEventDispatcherPlugin extends AbstractPlugin implements EventDispatcherPluginInterface
{
    /**
     * Specification:
     * - Extends the EventDispatcher.
     * - When an exception of type NotFoundHttpException is thrown, it will return a response with a 404 status code.
     * - Without this plugin the default behavior is to return a 500 status code which is not expected in App cases.
     *
     * @api
     */
    public function extend(EventDispatcherInterface $eventDispatcher, ContainerInterface $container): EventDispatcherInterface
    {
        $eventDispatcher->addListener(KernelEvents::EXCEPTION, function (ExceptionEvent $exceptionEvent): void {
            $this->onKernelException($exceptionEvent);
        });

        return $eventDispatcher;
    }

    protected function onKernelException(ExceptionEvent $exceptionEvent): void
    {
        $throwable = $exceptionEvent->getThrowable();

        if ($throwable instanceof NotFoundHttpException) {
            $response = new Response();
            $response->setContent('Page not found');
            $response->setStatusCode(Response::HTTP_NOT_FOUND);
            $exceptionEvent->setResponse($response);
        }
    }
}
