<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Test\Business;

use Pyz\Zed\Test\Business\Deleter\TestDeleter;
use Pyz\Zed\Test\Business\Deleter\TestDeleterInterface;
use Pyz\Zed\Test\Business\Reader\TestReader;
use Pyz\Zed\Test\Business\Reader\TestReaderInterface;
use Pyz\Zed\Test\Business\Saver\TestCreator;
use Pyz\Zed\Test\Business\Saver\TestSaverInterface;
use Pyz\Zed\Test\Business\Saver\TestUpdater;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\Test\TestConfig getConfig()
 */
class TestBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\Test\Business\Saver\TestSaverInterface
     */
    public function createTestCreator(): TestSaverInterface
    {
        return new TestCreator();
    }

    /**
     * @return \Pyz\Zed\Test\Business\Saver\TestSaverInterface
     */
    public function createTestUpdater(): TestSaverInterface
    {
        return new TestUpdater();
    }

    /**
     * @return \Pyz\Zed\Test\Business\Deleter\TestDeleterInterface
     */
    public function createTestDeleter(): TestDeleterInterface
    {
        return new TestDeleter();
    }

    /**
     * @return \Pyz\Zed\Test\Business\Reader\TestReaderInterface
     */
    public function createTestReader(): TestReaderInterface
    {
        return new TestReader();
    }
}
