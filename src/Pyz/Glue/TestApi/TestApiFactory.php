<?php

namespace Pyz\Glue\TestApi;

use Pyz\Glue\TestApi\Mapper\GlueRequestTestMapper;
use Pyz\Glue\TestApi\Mapper\GlueRequestTestMapperInterface;
use Pyz\Glue\TestApi\Mapper\GlueResponseTestMapper;
use Pyz\Glue\TestApi\Mapper\GlueResponseTestMapperInterface;
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

    /**
     * @return \Pyz\Glue\TestApi\Mapper\GlueRequestTestMapperInterface
     */
    public function getGlueRequestToTestMapper(): GlueRequestTestMapperInterface
    {
        return new GlueRequestTestMapper();
    }

    /**
     * @return \Pyz\Glue\TestApi\Mapper\GlueResponseTestMapperInterface
     */
    public function getTestToGlueResponseMapper(): GlueResponseTestMapperInterface
    {
        return new GlueResponseTestMapper();
    }
}
