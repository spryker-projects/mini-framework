<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\HelloWorld\Business;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use PyzTest\Zed\HelloWorld\HelloWorldBusinessTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group HelloWorld
 * @group Business
 * @group Facade
 * @group UserCrudFacadeTest
 * Add your own group annotations below this line
 */
class UserCrudFacadeTest extends Unit
{
    /**
     * @var \PyzTest\Zed\HelloWorld\HelloWorldBusinessTester
     */
    protected HelloWorldBusinessTester $tester;

    /**
     * Test ensures to always get a Collection back even if no entity was found.
     *
     * @return void
     */
    public function testGetUserReturnsEmptyCollectionWhenNoEntityMatchedByCriteria(): void
    {
        // Arrange
        $this->tester->haveUserTransferTwoPersisted();
        $userCriteriaTransfer = $this->tester->haveUserCriteriaTransferWithUserTransferOneCriteria();

        // Act
        $userCollectionTransfer = $this->tester->getFacade()->getUserCollection($userCriteriaTransfer);

        // Assert
        $this->tester->assertUserCollectionIsEmpty($userCollectionTransfer);
    }

    /**
     * Test ensures to get a Collection with entities back when criteria was matching.
     *
     * @return void
     */
    public function testGetUserReturnsCollectionWithOneUserEntityWhenCriteriaMatched(): void
    {
        // Arrange
        $userTransfer = $this->tester->haveUserTransferOnePersisted();
        $userCriteriaTransfer = $this->tester->haveUserCriteriaTransferWithUserTransferOneCriteria();

        // Act
        $userCollectionTransfer = $this->tester->getFacade()->getUserCollection($userCriteriaTransfer);

        // Assert
        $this->tester->assertUserCollectionContainsTransferWithId($userCollectionTransfer, $userTransfer);
    }

    /**
     * Test ensures that expanders are applied to found entities.
     *
     * @return void
     */
    public function testGetUserCollectionReturnsCollectionWithOneExpandedUserEntity(): void
    {
        // Arrange
        $this->tester->haveUserExpanderPluginSetUuidTwoEnabled();
        $userTransfer = $this->tester->haveUserTransferOnePersisted();

        $userCriteriaTransfer = $this->tester->haveUserCriteriaTransferWithUserTransferOneCriteria();

        // Act
        $userCollectionTransfer = $this->tester->getFacade()->getUserCollection($userCriteriaTransfer);

        // Assert
        $this->tester->assertUserCollectionContainsTransferWithId($userCollectionTransfer, $userTransfer);
    }

    /**
     * @return void
     */
    public function testCreateUserCollectionReturnsCollectionWithOneUserEntityWhenEntityWasSaved(): void
    {
        // Arrange
        $userTransfer = $this->tester->haveUserTransferOne();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->createUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertuserCollectionResponseContainsOneUserTransferOne($userCollectionResponseTransfer);
    }

    /**
     * Tests that pre-create plugins are applied to entities.
     *
     * @return void
     */
    public function testCreateUserCollectionAppliesPreCreatePlugins(): void
    {
        // Arrange
        $this->tester->haveUserPreCreatePluginSetUuidTwoEnabled();
        $userTransfer = $this->tester->haveUserTransferOne();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->createUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertuserCollectionResponseContainsOneUserTransferTwo($userCollectionResponseTransfer, $userTransfer);
    }

    /**
     * Tests that post-create plugins are applied to entities.
     *
     * @return void
     */
    public function testCreateUserCollectionAppliesPostCreatePlugins(): void
    {
        // Arrange
        $this->tester->haveUserPostCreatePluginSetUuidTwoEnabled();
        $userTransfer = $this->tester->haveUserTransferOne();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->createUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertuserCollectionResponseContainsOneUserTransferTwo($userCollectionResponseTransfer, $userTransfer);
    }

    /**
     * Tests that entities are validated with internal ValidatorRuleInterface.
     *
     * @return void
     */
    public function testCreateUserCollectionReturnsErroredCollectionResponseWhenValidationRuleFailed(): void
    {
        // Arrange
        $userTransfer = $this->tester->haveUserTransferTwoPersisted();

        $this->tester->haveUserAlwaysFailingCreateValidatorRuleEnabled(); // This will always return a validation error
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->createUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseContainsFailedValidationRuleError($userCollectionResponseTransfer);
    }

    /**
     * Tests that entities are validated with external ValidatorRulePluginInterface.
     *
     * @return void
     */
    public function testCreateUserCollectionReturnsErroredCollectionResponseWhenValidationRulePluginFailed(): void
    {
        // Arrange
        $this->tester->haveUserAlwaysFailingCreateValidatorRulePluginEnabled(); // This will always return a validation error
        $userTransfer = $this->tester->haveUserTransferOne();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->createUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseContainsFailedValidationRuleError($userCollectionResponseTransfer);
    }

    /**
     * @return void
     */
    public function testUpdateUserCollectionReturnsCollectionWithOneUserEntityWhenEntityWasSaved(): void
    {
        // Arrange
        $userTransfer = $this->tester->haveUserTransferOnePersisted();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->updateUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseContainsOneUserTransferOneWithId($userCollectionResponseTransfer, $userTransfer);
    }

    /**
     * Tests that pre-update plugins are applied to entities.
     *
     * @return void
     */
    public function testUpdateUserCollectionAppliesPreUpdatePlugins(): void
    {
        // Arrange
        $this->tester->haveUserPreUpdatePluginSetUuidTwoEnabled();
        $userTransfer = $this->tester->haveUserTransferTwoPersisted();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->updateUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseContainsOneUserTransferTwoWithId($userCollectionResponseTransfer, $userTransfer);
    }

    /**
     * Tests that post-update plugins are applied to entities.
     *
     * @return void
     */
    public function testUpdateUserCollectionAppliesPostUpdatePlugins(): void
    {
        // Arrange
        $this->tester->haveUserPostUpdatePluginSetUuidTwoEnabled();
        $userTransfer = $this->tester->haveUserTransferTwoPersisted();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->updateUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseContainsOneUserTransferTwoWithId($userCollectionResponseTransfer, $userTransfer);
    }

    /**
     * Tests that entities are validated with internal ValidatorRuleInterface.
     *
     * @return void
     */
    public function testUpdateUserCollectionReturnsErroredCollectionResponseWhenValidationRuleFailed(): void
    {
        // Arrange
        $this->tester->haveUserAlwaysFailingUpdateValidatorRuleEnabled(); // This will always return a validation error
        $userTransfer = $this->tester->haveUserTransferTwoPersisted();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->updateUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseContainsFailedValidationRuleError($userCollectionResponseTransfer);
    }

    /**
     * Tests that entities are validated with external ValidatorRulePluginInterface.
     *
     * @return void
     */
    public function testUpdateUserCollectionReturnsErroredCollectionResponseWhenValidationRulePluginFailed(): void
    {
        // Arrange
        $this->tester->haveUserAlwaysFailingUpdateValidatorRulePluginEnabled(); // This will always return a validation error
        $userTransfer = $this->tester->haveUserTransferTwoPersisted();
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->updateUserCollection($userCollectionRequestTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseContainsFailedValidationRuleError($userCollectionResponseTransfer);
    }

    /**
     * Test ensures to always get a Collection back even if no entity was deleted.
     *
     * @return void
     */
    public function testDeleteUserReturnsEmptyCollectionWhenNoEntityMatchedByCriteria(): void
    {
        // Arrange
        $this->tester->haveUserTransferTwoPersisted();
        $userDeleteCriteriaTransfer = $this->tester->haveUserDeleteCriteriaTransferWithUserTransferOneCriteria();

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->deleteUserCollection($userDeleteCriteriaTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseIsEmpty($userCollectionResponseTransfer);
    }

    /**
     * Test ensures to get a Collection with deleted entities back when criteria was matching.
     *
     * @return void
     */
    public function testDeleteUserReturnsCollectionWithOneUserEntityWhenCriteriaMatched(): void
    {
        // Arrange
        $userTransfer = $this->tester->haveUserTransferOnePersisted();
        $userDeleteCriteriaTransfer = $this->tester->haveUserDeleteCriteriaTransferWithUserTransferOneCriteria();

        // Act
        $userCollectionResponseTransfer = $this->tester->getFacade()->deleteUserCollection($userDeleteCriteriaTransfer);

        // Assert
        $this->tester->assertUserCollectionResponseContainsOneUserTransferOneWithId($userCollectionResponseTransfer, $userTransfer);
    }
}
