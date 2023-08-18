<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\AsyncApi\HelloWorld\HelloWorldTests\UserCommands;

use Codeception\Test\Unit;
use PyzTest\AsyncApi\HelloWorld\HelloWorldAsyncApiTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group AsyncApi
 * @group HelloWorld
 * @group HelloWorldTests
 * @group UserCommands
 * @group GreetUserTest
 * Add your own group annotations below this line
 */
class GreetUserTest extends Unit
{
    /**
     * @var \PyzTest\AsyncApi\HelloWorld\HelloWorldAsyncApiTester
     */
    protected HelloWorldAsyncApiTester $tester;

    /**
     * @return void
     */
    public function testGreetUserMessageIsHandled(): void
    {
        // Arrange
        $greetUserTransfer = $this->tester->haveGreetUserTransfer();

        // Act: This will trigger the MessageHandlerPlugin for this message.
        $this->tester->runMessageReceiveTest($greetUserTransfer, 'user-commands');

        // Assert
        // You need to update the assertion to something meaningful. e.g. test if an entity was saved to the database.
        $this->assertTrue(true);
    }
}
