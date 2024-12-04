<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Locale\Plugin\EventDispatcher;

use Spryker\Service\Container\ContainerInterface;
use Spryker\Shared\EventDispatcher\EventDispatcherInterface;
use Spryker\Shared\EventDispatcherExtension\Dependency\Plugin\EventDispatcherPluginInterface;
use Spryker\Shared\Kernel\Store;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class LocaleEventDispatcherPlugin extends AbstractPlugin implements EventDispatcherPluginInterface
{
    /**
     * @var string
     */
    public const LOCALE_PARAM = 'locale';

    /**
     * @var int
     */
    protected const EVENT_PRIORITY = 16;

    public function extend(EventDispatcherInterface $eventDispatcher, ContainerInterface $container): EventDispatcherInterface
    {
        $eventDispatcher->addListener(
            KernelEvents::REQUEST,
            static function (RequestEvent $requestEvent): void {
                $locale = $requestEvent->getRequest()->query->get(static::LOCALE_PARAM);
                $locales = Store::getInstance()->getLocales();
                if ($locale === null) {
                    return;
                }

                if (!in_array($locale, $locales)) {
                    return;
                }

                Store::getInstance()->setCurrentLocale((string)$locale);
            },
            static::EVENT_PRIORITY,
        );

        return $eventDispatcher;
    }
}
