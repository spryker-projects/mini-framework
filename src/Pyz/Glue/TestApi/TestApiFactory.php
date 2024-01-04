<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\TestApi;

use Pyz\Zed\Test\Business\TestFacadeInterface;
use Spryker\Glue\Kernel\Backend\AbstractBackendApiFactory;

class TestApiFactory extends AbstractBackendApiFactory
{
    /**
     * @return \Pyz\Zed\Test\Business\TestFacadeInterface
     */
    public function getTestFacade(): TestFacadeInterface
    {
        /** @phpstan-var \Pyz\Zed\Test\Business\TestFacadeInterface */
        return $this->getProvidedDependency(TestApiDependencyProvider::FACADE_TEST);
    }
}
