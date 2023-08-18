<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi;

use Pyz\Glue\HelloWorldBackendApi\Mapper\GlueRequestUserMapper;
use Pyz\Glue\HelloWorldBackendApi\Mapper\GlueRequestUserMapperInterface;
use Pyz\Glue\HelloWorldBackendApi\Mapper\GlueResponseUserMapper;
use Pyz\Glue\HelloWorldBackendApi\Mapper\GlueResponseUserMapperInterface;
use Pyz\Zed\HelloWorld\Business\HelloWorldFacadeInterface;
use Spryker\Glue\Kernel\Backend\AbstractFactory;

class HelloWorldBackendApiFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Glue\HelloWorldBackendApi\Mapper\GlueRequestUserMapperInterface
     */
    public function createGlueRequestUserMapper(): GlueRequestUserMapperInterface
    {
        return new GlueRequestUserMapper();
    }

    /**
     * @return \Pyz\Glue\HelloWorldBackendApi\Mapper\GlueResponseUserMapperInterface
     */
    public function createGlueResponseUserMapper(): GlueResponseUserMapperInterface
    {
        return new GlueResponseUserMapper();
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\HelloWorldFacadeInterface
     */
    public function getHelloWorldFacade(): HelloWorldFacadeInterface
    {
        return $this->getProvidedDependency(HelloWorldBackendApiDependencyProvider::FACADE_HELLO_WORLD);
    }
}
