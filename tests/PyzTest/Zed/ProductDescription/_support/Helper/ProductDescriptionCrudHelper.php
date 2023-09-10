<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\ProductDescription\Helper;

use Codeception\Module;
use Generated\Shared\DataBuilder\ProductDescriptionBuilder;
use Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionTransfer;
use Generated\Shared\Transfer\ProductDescriptionConditionsTransfer;
use Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;
use Orm\Zed\ProductDescription\Persistence\SpyProductDescriptionQuery;
use Pyz\Zed\ProductDescription\Business\ProductDescriptionFacade;
use Pyz\Zed\ProductDescription\Business\ProductDescriptionFacadeInterface;
use Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Expander\ProductDescriptionExpanderPluginInterface;
use Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionCreatePluginInterface;
use Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface;
use SprykerTest\Shared\Testify\Helper\DataCleanupHelperTrait;
use SprykerTest\Zed\Testify\Helper\Business\BusinessHelperTrait;

class ProductDescriptionCrudHelper extends Module
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
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer|null
     */
    public function haveProductDescriptionTransferOnePersisted(): ?ProductDescriptionTransfer
    {
        return $this->persistProductDescription($this->haveProductDescriptionTransfer(['uuid' => static::UUID_ONE]));
    }

    /**
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function haveProductDescriptionTransferOne(): ProductDescriptionTransfer
    {
        return $this->haveProductDescriptionTransfer(['uuid' => static::UUID_ONE]);
    }

    /**
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer|null
     */
    public function haveProductDescriptionTransferTwoPersisted(): ?ProductDescriptionTransfer
    {
        return $this->persistProductDescription($this->haveProductDescriptionTransfer(['uuid' => static::UUID_TWO]));
    }

    /**
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function haveProductDescriptionTransferTwo(): ProductDescriptionTransfer
    {
        return $this->haveProductDescriptionTransfer(['uuid' => static::UUID_TWO]);
    }

    /**
     * @param array<string, mixed> $seed
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer
     */
    public function haveProductDescriptionTransfer(array $seed = []): ProductDescriptionTransfer
    {
        $productDescriptionBuilder = new ProductDescriptionBuilder($seed);

        $productDescriptionTransfer = $productDescriptionBuilder->build();

        $this->getDataCleanupHelper()->_addCleanup(function () use ($productDescriptionTransfer) {
            SpyProductDescriptionQuery::create()->filterByUuid($productDescriptionTransfer->getUuid())->delete();
        });

        return $productDescriptionTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer
     */
    public function haveProductDescriptionCriteriaTransferWithProductDescriptionTransferOneCriteria(): ProductDescriptionCriteriaTransfer
    {
        $productDescriptionCriteriaTransfer = new ProductDescriptionCriteriaTransfer();
        $productDescriptionConditionsTransfer = new ProductDescriptionConditionsTransfer();
        $productDescriptionConditionsTransfer->setUuids([static::UUID_ONE]);
        $productDescriptionCriteriaTransfer->setProductDescriptionConditions($productDescriptionConditionsTransfer);

        return $productDescriptionCriteriaTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer
     */
    public function haveProductDescriptionDeleteCriteriaTransferWithProductDescriptionTransferOneCriteria(): ProductDescriptionCollectionDeleteCriteriaTransfer
    {
        $productDescriptionCollectionDeleteCriteriaTransfer = new ProductDescriptionCollectionDeleteCriteriaTransfer();
        $productDescriptionCollectionDeleteCriteriaTransfer->setUuids([static::UUID_ONE]);

        return $productDescriptionCollectionDeleteCriteriaTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionDeleteCriteriaTransfer
     */
    public function haveProductDescriptionDeleteCriteriaTransferWithProductDescriptionTransferTwoCriteria(): ProductDescriptionCollectionDeleteCriteriaTransfer
    {
        $productDescriptionCollectionDeleteCriteriaTransfer = new ProductDescriptionCollectionDeleteCriteriaTransfer();
        $productDescriptionCollectionDeleteCriteriaTransfer->setUuids([static::UUID_TWO]);

        return $productDescriptionCollectionDeleteCriteriaTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\ProductDescriptionCriteriaTransfer
     */
    public function haveProductDescriptionCriteriaTransferProductDescriptionTransferTwoCriteria(): ProductDescriptionCriteriaTransfer
    {
        $productDescriptionCriteriaTransfer = new ProductDescriptionCriteriaTransfer();
        $productDescriptionConditionsTransfer = new ProductDescriptionConditionsTransfer();
        $productDescriptionConditionsTransfer->setUuids([static::UUID_TWO]);
        $productDescriptionCriteriaTransfer->setProductDescriptionConditions($productDescriptionConditionsTransfer);

        return $productDescriptionCriteriaTransfer;
    }

    /**
     * @param array<string, mixed> $seed
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer|null
     */
    public function haveProductDescriptionTransferPersisted(array $seed = []): ?ProductDescriptionTransfer
    {
        return $this->persistProductDescription($this->haveProductDescriptionTransfer($seed));
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionTransfer|null
     */
    protected function persistProductDescription(ProductDescriptionTransfer $productDescriptionTransfer): ?ProductDescriptionTransfer
    {
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        $productDescriptionCollectionResponseTransfer = $this->getFacade()->createProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        return $productDescriptionCollectionResponseTransfer->getProductDescriptions()->getIterator()->current();
    }

    /**
     * @return void
     */
    public function haveProductDescriptionExpanderPluginSetUuidTwoEnabled(): void
    {
        $productDescriptionExpanderPluginSetUuidTwo = new class (static::UUID_TWO) implements ProductDescriptionExpanderPluginInterface {
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
             * @param \Generated\Shared\Transfer\ProductDescriptionTransfer[] $productDescriptionTransfers
             *
             * @return \Generated\Shared\Transfer\ProductDescriptionTransfer[]
             */
            public function expand(array $productDescriptionTransfers): array
            {
                foreach ($productDescriptionTransfers as $productDescriptionTransfer) {
                    $productDescriptionTransfer->setUuid($this->uuid);
                }

                return $productDescriptionTransfers;
            }
        };

        $this->getBusinessHelper()->mockFactoryMethod('getProductDescriptionExpanderPlugins', [$productDescriptionExpanderPluginSetUuidTwo], 'ProductDescription');
    }

    /**
     * @return void
     */
    public function haveProductDescriptionPreCreatePluginSetUuidTwoEnabled(): void
    {
        $productDescriptionPreCreatePlugin = $this->mockCreatePlugin();

        $this->getBusinessHelper()->mockFactoryMethod('getProductDescriptionPreCreatePlugins', [$productDescriptionPreCreatePlugin], 'ProductDescription');
    }

    /**
     * @return void
     */
    public function haveProductDescriptionPostCreatePluginSetUuidTwoEnabled(): void
    {
        $productDescriptionPostCreatePlugin = $this->mockCreatePlugin();

        $this->getBusinessHelper()->mockFactoryMethod('getProductDescriptionPostCreatePlugins', [$productDescriptionPostCreatePlugin], 'ProductDescription');
    }

   /**
    * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionCreatePluginInterface
    */
    protected function mockCreatePlugin(): ProductDescriptionCreatePluginInterface
    {
        return new class (static::UUID_TWO) implements \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionCreatePluginInterface {
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
             * @param \Generated\Shared\Transfer\ProductDescriptionTransfer[] $productDescriptionTransfers
             *
             * @return \Generated\Shared\Transfer\ProductDescriptionTransfer[]
             */
            public function execute(array $productDescriptionTransfers): array
            {
                foreach ($productDescriptionTransfers as $productDescriptionTransfer) {
                    $productDescriptionTransfer->setUuid($this->uuid);
                }

                return $productDescriptionTransfers;
            }
        };
    }

    /**
     * @return void
     */
    public function haveProductDescriptionPreUpdatePluginSetUuidTwoEnabled(): void
    {
        $productDescriptionPreUpdatePlugin = $this->mockUpdatePlugin();

        $this->getBusinessHelper()->mockFactoryMethod('getProductDescriptionPreUpdatePlugins', [$productDescriptionPreUpdatePlugin], 'ProductDescription');
    }

    /**
     * @return void
     */
    public function haveProductDescriptionPostUpdatePluginSetUuidTwoEnabled(): void
    {
        $productDescriptionPostUpdatePlugin = $this->mockUpdatePlugin();

        $this->getBusinessHelper()->mockFactoryMethod('getProductDescriptionPostUpdatePlugins', [$productDescriptionPostUpdatePlugin], 'ProductDescription');
    }

   /**
    * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface
    */
    protected function mockUpdatePlugin(): ProductDescriptionUpdatePluginInterface
    {
        return new class (static::UUID_TWO) implements \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface {
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
            * @param \Generated\Shared\Transfer\ProductDescriptionTransfer[] $productDescriptionTransfers
            *
            * @return \Generated\Shared\Transfer\ProductDescriptionTransfer[]
            */
            public function execute(array $productDescriptionTransfers): array
            {
                foreach ($productDescriptionTransfers as $productDescriptionTransfer) {
                    $productDescriptionTransfer->setUuid($this->uuid);
                }

                return $productDescriptionTransfers;
            }
        };
    }

    /**
     * @return void
     */
    public function haveProductDescriptionAlwaysFailingCreateValidatorRuleEnabled(): void
    {
        $this->mockProductDescriptionAlwaysFailingValidatorRule('getProductDescriptionCreateValidatorRules');
    }

    /**
     * @return void
     */
    public function haveProductDescriptionAlwaysFailingUpdateValidatorRuleEnabled(): void
    {
        $this->mockProductDescriptionAlwaysFailingValidatorRule('getProductDescriptionUpdateValidatorRules');
    }

    /**
     * @param string $factoryMethod
     *
     * @return void
     */
    protected function mockProductDescriptionAlwaysFailingValidatorRule(string $factoryMethod): void
    {
        $productDescriptionValidatorRule = new class implements \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\Rules\ProductDescriptionValidatorRuleInterface {
            /**
             * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
             *
             * @return array<string>
             */
            public function validate(ProductDescriptionTransfer $productDescriptionTransfer): array
            {
                return ['Validation failed'];
            }
        };

        $this->getBusinessHelper()->mockFactoryMethod($factoryMethod, [$productDescriptionValidatorRule], 'ProductDescription');
    }

    /**
     * @return void
     */
    public function haveProductDescriptionAlwaysFailingCreateValidatorRulePluginEnabled(): void
    {
        $this->mockProductDescriptionAlwaysFailingValidatorRule('getProductDescriptionCreateValidatorRulePlugins');
    }

    /**
     * @return void
     */
    public function haveProductDescriptionAlwaysFailingUpdateValidatorRulePluginEnabled(): void
    {
        $this->mockProductDescriptionAlwaysFailingValidatorRulePlugin('getProductDescriptionUpdateValidatorRulePlugins');
    }

    /**
     * @param string $factoryMethod
     *
     * @return void
     */
    protected function mockProductDescriptionAlwaysFailingValidatorRulePlugin(string $factoryMethod): void
    {
        $productDescriptionValidatorRulePlugin = new class implements \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Validator\ProductDescriptionValidatorRulePluginInterface {
            /**
             * @param \Generated\Shared\Transfer\ProductDescriptionTransfer|array $productDescriptionTransfer
             *
             * @return array<string>
             */
            public function validate(ProductDescriptionTransfer $productDescriptionTransfer): array
            {
                return ['Validation failed'];
            }
        };

        $this->getBusinessHelper()->mockFactoryMethod($factoryMethod, [$productDescriptionValidatorRulePlugin], 'ProductDescription');
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
     *
     * @return void
     */
    public function assertProductDescriptionCollectionIsEmpty(ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer): void
    {
        $this->assertCount(0, $productDescriptionCollectionTransfer->getProductDescriptions(), sprintf('Expected to have an empty collection but found "%s" items', $productDescriptionCollectionTransfer->getProductDescriptions()->count()));
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return void
     */
    public function assertProductDescriptionCollectionResponseIsEmpty(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): void {
        $this->assertCount(0, $productDescriptionCollectionResponseTransfer->getProductDescriptions(), sprintf('Expected to have an empty response collection but found "%s" items', $productDescriptionCollectionResponseTransfer->getProductDescriptions()->count()));
    }

   /**
    * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
    *
    * @return void
    */
    public function assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferOneWithId(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer,
        ProductDescriptionTransfer $productDescriptionTransfer
    ): void {
        $productDescriptionCollectionTransfer = (new ProductDescriptionCollectionTransfer())->setProductDescriptions($productDescriptionCollectionResponseTransfer->getProductDescriptions());

        $this->assertProductDescriptionCollectionContainsTransferWithId($productDescriptionCollectionTransfer, $productDescriptionTransfer);
        $this->assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferOne($productDescriptionCollectionResponseTransfer);
    }

   /**
    * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    *
    * @return void
    */
    public function assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferOne(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): void {
        $this->assertCount(1, $productDescriptionCollectionResponseTransfer->getProductDescriptions());
        $this->assertEquals(static::UUID_ONE, $productDescriptionCollectionResponseTransfer->getProductDescriptions()[0]->getUuid());
    }

   /**
    * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
    *
    * @return void
    */
    public function assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferTwoWithId(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer,
        ProductDescriptionTransfer $productDescriptionTransfer
    ): void {
        $productDescriptionCollectionTransfer = (new ProductDescriptionCollectionTransfer())->setProductDescriptions($productDescriptionCollectionResponseTransfer->getProductDescriptions());

        $this->assertProductDescriptionCollectionContainsTransferWithId($productDescriptionCollectionTransfer, $productDescriptionTransfer);
        $this->assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferTwo($productDescriptionCollectionResponseTransfer);
    }

   /**
    * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    *
    * @return void
    */
    public function assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferTwo(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): void {
        $this->assertCount(1, $productDescriptionCollectionResponseTransfer->getProductDescriptions());
        $this->assertEquals(static::UUID_TWO, $productDescriptionCollectionResponseTransfer->getProductDescriptions()[0]->getUuid());
    }

   /**
    * @param \Generated\Shared\Transfer\ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer
    * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
    *
    * @return void
    */
    public function assertProductDescriptionCollectionContainsTransferWithId(
        ProductDescriptionCollectionTransfer $productDescriptionCollectionTransfer,
        ProductDescriptionTransfer $productDescriptionTransfer
    ): void {
        $transferFound = false;

        foreach ($productDescriptionCollectionTransfer->getProductDescriptions() as $productDescriptionTransferFromCollection) {
            if ($productDescriptionTransferFromCollection->getIdProductDescription() === $productDescriptionTransfer->getIdProductDescription()) {
                $transferFound = true;
            }
        }

        $this->assertTrue($transferFound, sprintf('Expected to have a transfer in the collection but transfer by id "%s" was not found in the collection', $productDescriptionTransfer->getIdProductDescription()));
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     * @param string $message
     *
     * @return void
     */
    public function assertProductDescriptionCollectionResponseContainsFailedValidationRuleError(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer,
        string $message = 'Validation failed'
    ): void {
        $errorFound = false;

        foreach ($productDescriptionCollectionResponseTransfer->getErrors() as $errorTransfer) {
            if ($errorTransfer->getMessage() === $message) {
                $errorFound = true;
            }
        }

        $this->assertTrue($errorFound, sprintf('Expected to have a message "%s" in the error collection but was not found', $message));
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescriptionFacadeInterface
     */
    protected function getFacade(): ProductDescriptionFacadeInterface
    {
        return new ProductDescriptionFacade();
    }
}
