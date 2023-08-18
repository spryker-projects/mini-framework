<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Persistence;

use Orm\Zed\HelloWorld\Persistence\SpyUserQuery;
use Pyz\Zed\HelloWorld\Persistence\Propel\User\Mapper\UserMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\HelloWorld\HelloWorldConfig getConfig()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface getRepository()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldEntityManagerInterface getEntityManager()
 */
class HelloWorldPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\HelloWorld\Persistence\SpyUserQuery
     */
    public function createUserQuery(): SpyUserQuery
    {
        return new SpyUserQuery();
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Persistence\Propel\User\Mapper\UserMapper
     */
    public function createUserMapper(): UserMapper
    {
        return new UserMapper();
    }
}
