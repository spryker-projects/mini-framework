<?php

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
        return $this->getProvidedDependency(TestApiDependencyProvider::FACADE_TEST);
    }
}
