<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\AsyncApi\HelloWorld\HelloWorldTests\UserEvents;

use Codeception\Test\Unit;
use PyzTest\AsyncApi\HelloWorld\HelloWorldAsyncApiTester;
use Spryker\Zed\MessageBroker\Business\MessageBrokerFacade;

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
    public function testUserCreatedMessageIsSend(): void
    {
        // Arrange
        $userCreatedTransfer = $this->tester->haveUserCreatedTransfer();

        // Act: Here you call the facade method where you expect that the message will be sent
        (new MessageBrokerFacade())->sendMessage($userCreatedTransfer);

        // Assert
        $this->tester->assertMessageWasEmittedOnChannel($userCreatedTransfer, 'user-events');
    }
}
