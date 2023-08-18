<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\AsyncApi\HelloWorld\HelloWorldTests\UserEvents;

use Codeception\Test\Unit;
use PyzTest\AsyncApi\HelloWorld\HelloWorldAsyncApiTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group AsyncApi
 * @group HelloWorld
 * @group HelloWorldTests
 * @group UserEvents
 * @group UserCreatedTest
 * Add your own group annotations below this line
 */
class UserCreatedTest extends Unit
{
    /**
     * @var \PyzTest\AsyncApi\HelloWorld\HelloWorldAsyncApiTester
     */
    protected HelloWorldAsyncApiTester $tester;

    /**
     * @return void
     */
    public function testUserCreatedMessageIsHandled(): void
    {
        // Arrange
        $userCreatedTransfer = $this->tester->haveUserCreatedTransfer();

        // Act: This will trigger the MessageHandlerPlugin for this message.
        $this->tester->runMessageReceiveTest($userCreatedTransfer, 'user-events');

        // Assert
        // You need to update the assertion to something meaningful. e.g. test if an entity was saved to the database.
        $this->assertTrue(true);
    }
}
