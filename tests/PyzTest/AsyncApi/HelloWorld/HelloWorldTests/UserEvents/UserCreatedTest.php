<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\AsyncApi\HelloWorld\HelloWorldTests\UserEvents;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserTransfer;
use PyzTest\AsyncApi\HelloWorld\HelloWorldAsyncApiTester;
use Ramsey\Uuid\Uuid;

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
        $userTransfer = new UserTransfer();
        $userTransfer->setUuid(Uuid::uuid4()->toString())
            ->setUsername('catface');

        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        $this->tester->getFacade()->createUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertMessageWasEmittedOnChannel($userCreatedTransfer, 'user-events');
    }
}
