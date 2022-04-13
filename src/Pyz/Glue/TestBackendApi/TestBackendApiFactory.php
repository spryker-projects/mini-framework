<?php

namespace Pyz\Glue\TestBackendApi;

use Pyz\Glue\TestBackendApi\Mapper\GlueRequestTestMapper;
use Pyz\Glue\TestBackendApi\Mapper\GlueRequestTestMapperInterface;
use Pyz\Glue\TestBackendApi\Mapper\GlueResponseTestMapper;
use Pyz\Glue\TestBackendApi\Mapper\GlueResponseTestMapperInterface;
use Pyz\Zed\Test\Business\TestFacadeInterface;
use Spryker\Glue\Kernel\Backend\AbstractBackendApiFactory;

class TestBackendApiFactory extends AbstractBackendApiFactory
{
    /**
     * @return \Pyz\Zed\Test\Business\TestFacadeInterface
     */
    public function getTestFacade(): TestFacadeInterface
    {
        return $this->getProvidedDependency(TestBackendApiDependencyProvider::FACADE_TEST);
    }

    /**
     * @return \Pyz\Glue\TestBackendApi\Mapper\GlueRequestTestMapperInterface
     */
    public function getGlueRequestToTestMapper(): GlueRequestTestMapperInterface
    {
        return new GlueRequestTestMapper();
    }

    /**
     * @return \Pyz\Glue\TestBackendApi\Mapper\GlueResponseTestMapperInterface
     */
    public function getTestToGlueResponseMapper(): GlueResponseTestMapperInterface
    {
        return new GlueResponseTestMapper();
    }
}
