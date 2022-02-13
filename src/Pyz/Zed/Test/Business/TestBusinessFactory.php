<?php

namespace Pyz\Zed\Test\Business;

use Pyz\Zed\Test\Business\Saver\TestCreator;
use Pyz\Zed\Test\Business\Saver\TestSaverInterface;
use Pyz\Zed\Test\Business\Deleter\TestDeleter;
use Pyz\Zed\Test\Business\Deleter\TestDeleterInterface;
use Pyz\Zed\Test\Business\Reader\TestReader;
use Pyz\Zed\Test\Business\Reader\TestReaderInterface;
use Pyz\Zed\Test\Business\Saver\TestUpdater;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class TestBusinessFactory extends AbstractBusinessFactory
{
    public function createTestCreator(): TestSaverInterface
    {
        return new TestCreator();
    }

    public function createTestUpdater(): TestSaverInterface
    {
        return new TestUpdater();
    }

    public function createTestDeleter(): TestDeleterInterface
    {
        return new TestDeleter();
    }

    public function createTestReader(): TestReaderInterface
    {
        return new TestReader();
    }
}
