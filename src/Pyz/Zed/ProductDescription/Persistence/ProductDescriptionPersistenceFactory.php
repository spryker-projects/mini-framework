<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Persistence;

use Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery;
use Pyz\Zed\ProductDescription\Persistence\Propel\ProductDescription\Mapper\ProductDescriptionMapper;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\ProductDescription\ProductDescriptionConfig getConfig()
 * @method \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface getRepository()
 * @method \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface getEntityManager()
 */
class ProductDescriptionPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery
     */
    public function createProductDescriptionQuery(): SpyProductDescriptionQuery
    {
        return new SpyProductDescriptionQuery();
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Persistence\Propel\ProductDescription\Mapper\ProductDescriptionMapper
     */
    public function createProductDescriptionMapper(): ProductDescriptionMapper
    {
        return new ProductDescriptionMapper();
    }
}
