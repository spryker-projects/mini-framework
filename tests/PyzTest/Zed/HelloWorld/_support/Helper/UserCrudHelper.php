<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\HelloWorld\Helper;

use Codeception\Module;
use Generated\Shared\DataBuilder\UserBuilder;
use Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\UserCollectionRequestTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Generated\Shared\Transfer\UserCollectionTransfer;
use Generated\Shared\Transfer\UserConditionsTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;
use Generated\Shared\Transfer\UserTransfer;
use Orm\Zed\HelloWorld\Persistence\SpyUserQuery;
use Pyz\Zed\HelloWorld\Business\HelloWorldFacade;
use Pyz\Zed\HelloWorld\Business\HelloWorldFacadeInterface;
use Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Expander\UserExpanderPluginInterface;
use Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface;
use Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface;
use SprykerTest\Shared\Testify\Helper\DataCleanupHelperTrait;
use SprykerTest\Zed\Testify\Helper\Business\BusinessHelperTrait;

class UserCrudHelper extends Module
{
    use DataCleanupHelperTrait;
    use BusinessHelperTrait;

    /**
     * @var string
     */
    protected const UUID_ONE = 'ebad5042-0db1-498e-9981-42f45f98ad3d';

    /**
     * @var string
     */
    protected const UUID_TWO = 'b7b94e0f-ec4d-4341-9132-07342b45f659';

    /**
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    public function haveUserTransferOnePersisted(): ?UserTransfer
    {
        return $this->persistUser($this->haveUserTransfer(['uuid' => static::UUID_ONE]));
    }

    /**
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function haveUserTransferOne(): UserTransfer
    {
        return $this->haveUserTransfer(['uuid' => static::UUID_ONE]);
    }

    /**
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    public function haveUserTransferTwoPersisted(): ?UserTransfer
    {
        return $this->persistUser($this->haveUserTransfer(['uuid' => static::UUID_TWO]));
    }

    /**
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function haveUserTransferTwo(): UserTransfer
    {
        return $this->haveUserTransfer(['uuid' => static::UUID_TWO]);
    }

    /**
     * @param array<string, mixed> $seed
     *
     * @return \Generated\Shared\Transfer\UserTransfer
     */
    public function haveUserTransfer(array $seed = []): UserTransfer
    {
        $userBuilder = new UserBuilder($seed);

        $userTransfer = $userBuilder->build();

        $this->getDataCleanupHelper()->_addCleanup(function () use ($userTransfer) {
            SpyUserQuery::create()->filterByUuid($userTransfer->getUuid())->delete();
        });

        return $userTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\UserCriteriaTransfer
     */
    public function haveUserCriteriaTransferWithUserTransferOneCriteria(): UserCriteriaTransfer
    {
        $userCriteriaTransfer = new UserCriteriaTransfer();
        $userConditionsTransfer = new UserConditionsTransfer();
        $userConditionsTransfer->setUuids([static::UUID_ONE]);
        $userCriteriaTransfer->setUserConditions($userConditionsTransfer);

        return $userCriteriaTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer
     */
    public function haveUserDeleteCriteriaTransferWithUserTransferOneCriteria(): UserCollectionDeleteCriteriaTransfer
    {
        $userCollectionDeleteCriteriaTransfer = new UserCollectionDeleteCriteriaTransfer();
        $userCollectionDeleteCriteriaTransfer->setUuids([static::UUID_ONE]);

        return $userCollectionDeleteCriteriaTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\UserCollectionDeleteCriteriaTransfer
     */
    public function haveUserDeleteCriteriaTransferWithUserTransferTwoCriteria(): UserCollectionDeleteCriteriaTransfer
    {
        $userCollectionDeleteCriteriaTransfer = new UserCollectionDeleteCriteriaTransfer();
        $userCollectionDeleteCriteriaTransfer->setUuids([static::UUID_TWO]);

        return $userCollectionDeleteCriteriaTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\UserCriteriaTransfer
     */
    public function haveUserCriteriaTransferUserTransferTwoCriteria(): UserCriteriaTransfer
    {
        $userCriteriaTransfer = new UserCriteriaTransfer();
        $userConditionsTransfer = new UserConditionsTransfer();
        $userConditionsTransfer->setUuids([static::UUID_TWO]);
        $userCriteriaTransfer->setUserConditions($userConditionsTransfer);

        return $userCriteriaTransfer;
    }

    /**
     * @param array<string, mixed> $seed
     *
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    public function haveUserTransferPersisted(array $seed = []): ?UserTransfer
    {
        return $this->persistUser($this->haveUserTransfer($seed));
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     *
     * @return \Generated\Shared\Transfer\UserTransfer|null
     */
    protected function persistUser(UserTransfer $userTransfer): ?UserTransfer
    {
        $userCollectionRequestTransfer = new UserCollectionRequestTransfer();
        $userCollectionRequestTransfer->addUser($userTransfer);

        $userCollectionResponseTransfer = $this->getFacade()->createUserCollection($userCollectionRequestTransfer);

        return $userCollectionResponseTransfer->getUsers()->getIterator()->current();
    }

    /**
     * @return void
     */
    public function haveUserExpanderPluginSetUuidTwoEnabled(): void
    {
        $userExpanderPluginSetUuidTwo = new class (static::UUID_TWO) implements UserExpanderPluginInterface {
           /**
            * @var string
            */
            private $uuid;

           /**
            * @param string $uuid
            */
            public function __construct(string $uuid)
            {
                $this->uuid = $uuid;
            }

            /**
             * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
             *
             * @return \Generated\Shared\Transfer\UserTransfer[]
             */
            public function expand(array $userTransfers): array
            {
                foreach ($userTransfers as $userTransfer) {
                    $userTransfer->setUuid($this->uuid);
                }

                return $userTransfers;
            }
        };

        $this->getBusinessHelper()->mockFactoryMethod('getUserExpanderPlugins', [$userExpanderPluginSetUuidTwo], 'HelloWorld');
    }

    /**
     * @return void
     */
    public function haveUserPreCreatePluginSetUuidTwoEnabled(): void
    {
        $userPreCreatePlugin = $this->mockCreatePlugin();

        $this->getBusinessHelper()->mockFactoryMethod('getUserPreCreatePlugins', [$userPreCreatePlugin], 'HelloWorld');
    }

    /**
     * @return void
     */
    public function haveUserPostCreatePluginSetUuidTwoEnabled(): void
    {
        $userPostCreatePlugin = $this->mockCreatePlugin();

        $this->getBusinessHelper()->mockFactoryMethod('getUserPostCreatePlugins', [$userPostCreatePlugin], 'HelloWorld');
    }

   /**
    * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface
    */
    protected function mockCreatePlugin(): UserCreatePluginInterface
    {
        return new class (static::UUID_TWO) implements \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserCreatePluginInterface {
            /**
             * @var string
             */
            private $uuid;

            /**
             * @param string $uuid
             */
            public function __construct(string $uuid)
            {
                $this->uuid = $uuid;
            }

            /**
             * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
             *
             * @return \Generated\Shared\Transfer\UserTransfer[]
             */
            public function execute(array $userTransfers): array
            {
                foreach ($userTransfers as $userTransfer) {
                    $userTransfer->setUuid($this->uuid);
                }

                return $userTransfers;
            }
        };
    }

    /**
     * @return void
     */
    public function haveUserPreUpdatePluginSetUuidTwoEnabled(): void
    {
        $userPreUpdatePlugin = $this->mockUpdatePlugin();

        $this->getBusinessHelper()->mockFactoryMethod('getUserPreUpdatePlugins', [$userPreUpdatePlugin], 'HelloWorld');
    }

    /**
     * @return void
     */
    public function haveUserPostUpdatePluginSetUuidTwoEnabled(): void
    {
        $userPostUpdatePlugin = $this->mockUpdatePlugin();

        $this->getBusinessHelper()->mockFactoryMethod('getUserPostUpdatePlugins', [$userPostUpdatePlugin], 'HelloWorld');
    }

   /**
    * @return \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface
    */
    protected function mockUpdatePlugin(): UserUpdatePluginInterface
    {
        return new class (static::UUID_TWO) implements \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer\UserUpdatePluginInterface {
           /**
            * @var string
            */
            private $uuid;

           /**
            * @param string $uuid
            */
            public function __construct(string $uuid)
            {
                $this->uuid = $uuid;
            }

           /**
            * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
            *
            * @return \Generated\Shared\Transfer\UserTransfer[]
            */
            public function execute(array $userTransfers): array
            {
                foreach ($userTransfers as $userTransfer) {
                    $userTransfer->setUuid($this->uuid);
                }

                return $userTransfers;
            }
        };
    }

    /**
     * @return void
     */
    public function haveUserAlwaysFailingCreateValidatorRuleEnabled(): void
    {
        $this->mockUserAlwaysFailingValidatorRule('getUserCreateValidatorRules');
    }

    /**
     * @return void
     */
    public function haveUserAlwaysFailingUpdateValidatorRuleEnabled(): void
    {
        $this->mockUserAlwaysFailingValidatorRule('getUserUpdateValidatorRules');
    }

    /**
     * @param string $factoryMethod
     *
     * @return void
     */
    protected function mockUserAlwaysFailingValidatorRule(string $factoryMethod): void
    {
        $userValidatorRule = new class implements \Pyz\Zed\HelloWorld\Business\User\Validator\Rules\UserValidatorRuleInterface {
            /**
             * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
             *
             * @return array<string>
             */
            public function validate(UserTransfer $userTransfer): array
            {
                return ['Validation failed'];
            }
        };

        $this->getBusinessHelper()->mockFactoryMethod($factoryMethod, [$userValidatorRule], 'HelloWorld');
    }

    /**
     * @return void
     */
    public function haveUserAlwaysFailingCreateValidatorRulePluginEnabled(): void
    {
        $this->mockUserAlwaysFailingValidatorRule('getUserCreateValidatorRulePlugins');
    }

    /**
     * @return void
     */
    public function haveUserAlwaysFailingUpdateValidatorRulePluginEnabled(): void
    {
        $this->mockUserAlwaysFailingValidatorRulePlugin('getUserUpdateValidatorRulePlugins');
    }

    /**
     * @param string $factoryMethod
     *
     * @return void
     */
    protected function mockUserAlwaysFailingValidatorRulePlugin(string $factoryMethod): void
    {
        $userValidatorRulePlugin = new class implements \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Validator\UserValidatorRulePluginInterface {
            /**
             * @param \Generated\Shared\Transfer\UserTransfer|array $userTransfer
             *
             * @return array<string>
             */
            public function validate(UserTransfer $userTransfer): array
            {
                return ['Validation failed'];
            }
        };

        $this->getBusinessHelper()->mockFactoryMethod($factoryMethod, [$userValidatorRulePlugin], 'HelloWorld');
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionTransfer $userCollectionTransfer
     *
     * @return void
     */
    public function assertUserCollectionIsEmpty(UserCollectionTransfer $userCollectionTransfer): void
    {
        $this->assertCount(0, $userCollectionTransfer->getUsers(), sprintf('Expected to have an empty collection but found "%s" items', $userCollectionTransfer->getUsers()->count()));
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return void
     */
    public function assertUserCollectionResponseIsEmpty(UserCollectionResponseTransfer $userCollectionResponseTransfer): void
    {
        $this->assertCount(0, $userCollectionResponseTransfer->getUsers(), sprintf('Expected to have an empty response collection but found "%s" items', $userCollectionResponseTransfer->getUsers()->count()));
    }

   /**
    * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
    * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
    *
    * @return void
    */
    public function assertUserCollectionResponseContainsOneUserTransferOneWithId(
        UserCollectionResponseTransfer $userCollectionResponseTransfer,
        UserTransfer $userTransfer
    ): void {
        $userCollectionTransfer = (new UserCollectionTransfer())->setUsers($userCollectionResponseTransfer->getUsers());

        $this->assertUserCollectionContainsTransferWithId($userCollectionTransfer, $userTransfer);
        $this->assertUserCollectionResponseContainsOneUserTransferOne($userCollectionResponseTransfer);
    }

   /**
    * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
    *
    * @return void
    */
    public function assertUserCollectionResponseContainsOneUserTransferOne(UserCollectionResponseTransfer $userCollectionResponseTransfer): void
    {
        $this->assertCount(1, $userCollectionResponseTransfer->getUsers());
        $this->assertEquals(static::UUID_ONE, $userCollectionResponseTransfer->getUsers()[0]->getUuid());
    }

   /**
    * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
    * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
    *
    * @return void
    */
    public function assertUserCollectionResponseContainsOneUserTransferTwoWithId(
        UserCollectionResponseTransfer $userCollectionResponseTransfer,
        UserTransfer $userTransfer
    ): void {
        $userCollectionTransfer = (new UserCollectionTransfer())->setUsers($userCollectionResponseTransfer->getUsers());

        $this->assertUserCollectionContainsTransferWithId($userCollectionTransfer, $userTransfer);
        $this->assertUserCollectionResponseContainsOneUserTransferTwo($userCollectionResponseTransfer);
    }

   /**
    * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
    *
    * @return void
    */
    public function assertUserCollectionResponseContainsOneUserTransferTwo(UserCollectionResponseTransfer $userCollectionResponseTransfer): void
    {
        $this->assertCount(1, $userCollectionResponseTransfer->getUsers());
        $this->assertEquals(static::UUID_TWO, $userCollectionResponseTransfer->getUsers()[0]->getUuid());
    }

   /**
    * @param \Generated\Shared\Transfer\UserCollectionTransfer $userCollectionTransfer
    * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
    *
    * @return void
    */
    public function assertUserCollectionContainsTransferWithId(UserCollectionTransfer $userCollectionTransfer, UserTransfer $userTransfer): void
    {
        $transferFound = false;

        foreach ($userCollectionTransfer->getUsers() as $userTransferFromCollection) {
            if ($userTransferFromCollection->getIdUser() === $userTransfer->getIdUser()) {
                $transferFound = true;
            }
        }

        $this->assertTrue($transferFound, sprintf('Expected to have a transfer in the collection but transfer by id "%s" was not found in the collection', $userTransfer->getIdUser()));
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     * @param string $message
     *
     * @return void
     */
    public function assertUserCollectionResponseContainsFailedValidationRuleError(
        UserCollectionResponseTransfer $userCollectionResponseTransfer,
        string $message = 'Validation failed'
    ): void {
        $errorFound = false;

        foreach ($userCollectionResponseTransfer->getErrors() as $errorTransfer) {
            if ($errorTransfer->getMessage() === $message) {
                $errorFound = true;
            }
        }

        $this->assertTrue($errorFound, sprintf('Expected to have a message "%s" in the error collection but was not found', $message));
    }

    /**
     * @return \Pyz\Zed\HelloWorld\Business\HelloWorldFacadeInterface
     */
    protected function getFacade(): HelloWorldFacadeInterface
    {
        return new HelloWorldFacade();
    }
}
