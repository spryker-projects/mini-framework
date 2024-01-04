<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\Test\Business;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\TestCollectionRequestTransfer;
use Generated\Shared\Transfer\TestCollectionResponseTransfer;
use Generated\Shared\Transfer\TestTransfer;
use PyzTest\Zed\Test\TestBusinessTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group Test
 * @group Business
 * @group Facade
 * @group TestFacadeTest
 * Add your own group annotations below this line
 */
class TestFacadeTest extends Unit
{
    /**
     * @var \PyzTest\Zed\Test\TestBusinessTester
     */
    protected TestBusinessTester $tester;

    /**
     * This test is just a placeholder which needs to be implemented.
     *
     * @return void
     */
    public function testCreateTestCollectionReturnTestCollectionResponseTransfer(): void
    {
        // Arrange
        $testCollectionRequestTransfer = new TestCollectionRequestTransfer();
        $testCollectionRequestTransfer->addTest((new TestTransfer())->setName('Test'));

        // Act
        $testCollectionResponseTransfer = $this->tester->getFacade()->createTestCollection($testCollectionRequestTransfer);

        // Assert
        $this->assertInstanceOf(TestCollectionResponseTransfer::class, $testCollectionResponseTransfer);
    }
}
