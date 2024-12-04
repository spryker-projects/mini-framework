<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Propel\Communication\Plugin\Application;

use Propel\Runtime\Propel;
use Spryker\Service\Container\ContainerInterface;
use Spryker\Zed\Propel\Communication\Plugin\Application\PropelApplicationPlugin as SprykerPropelApplicationPlugin;

/**
 * @method \Spryker\Zed\Propel\Business\PropelFacadeInterface getFacade()
 * @method \Pyz\Zed\Propel\PropelConfig getConfig()
 * @method \Spryker\Zed\Propel\Communication\PropelCommunicationFactory getFactory()
 */
class PropelApplicationPlugin extends SprykerPropelApplicationPlugin
{
    public function provide(ContainerInterface $container): ContainerInterface
    {
        $container = parent::provide($container);

        // console commands can be time-consuming and can operate the same data already changed by webhooks or so
        // that why we disable instance pooling to avoid stale data
        Propel::disableInstancePooling();

        return $container;
    }
}
