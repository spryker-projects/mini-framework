<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\ProductDescription\Business;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\ProductDescriptionCollectionRequestTransfer;
use PyzTest\Zed\ProductDescription\ProductDescriptionBusinessTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group ProductDescription
 * @group Business
 * @group Facade
 * @group ProductDescriptionCrudFacadeTest
 * Add your own group annotations below this line
 */
class ProductDescriptionCrudFacadeTest extends Unit
{
    /**
     * @var \PyzTest\Zed\ProductDescription\ProductDescriptionBusinessTester
     */
    protected ProductDescriptionBusinessTester $tester;

    /**
     * Test ensures to always get a Collection back even if no entity was found.
     *
     * @return void
     */
    public function testGetProductDescriptionReturnsEmptyCollectionWhenNoEntityMatchedByCriteria(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionTransferTwoPersisted();
        $productDescriptionCriteriaTransfer = $this->tester->haveProductDescriptionCriteriaTransferWithProductDescriptionTransferOneCriteria();

        // Act
        $productDescriptionCollectionTransfer = $this->tester->getFacade()->getProductDescriptionCollection($productDescriptionCriteriaTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionIsEmpty($productDescriptionCollectionTransfer);
    }

    /**
     * Test ensures to get a Collection with entities back when criteria was matching.
     *
     * @return void
     */
    public function testGetProductDescriptionReturnsCollectionWithOneProductDescriptionEntityWhenCriteriaMatched(): void
    {
        // Arrange
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferOnePersisted();
        $productDescriptionCriteriaTransfer = $this->tester->haveProductDescriptionCriteriaTransferWithProductDescriptionTransferOneCriteria();

        // Act
        $productDescriptionCollectionTransfer = $this->tester->getFacade()->getProductDescriptionCollection($productDescriptionCriteriaTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionContainsTransferWithId($productDescriptionCollectionTransfer, $productDescriptionTransfer);
    }

    /**
     * Test ensures that expanders are applied to found entities.
     *
     * @return void
     */
    public function testGetProductDescriptionCollectionReturnsCollectionWithOneExpandedProductDescriptionEntity(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionExpanderPluginSetUuidTwoEnabled();
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferOnePersisted();

        $productDescriptionCriteriaTransfer = $this->tester->haveProductDescriptionCriteriaTransferWithProductDescriptionTransferOneCriteria();

        // Act
        $productDescriptionCollectionTransfer = $this->tester->getFacade()->getProductDescriptionCollection($productDescriptionCriteriaTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionContainsTransferWithId($productDescriptionCollectionTransfer, $productDescriptionTransfer);
    }

    /**
     * @return void
     */
    public function testCreateProductDescriptionCollectionReturnsCollectionWithOneProductDescriptionEntityWhenEntityWasSaved(): void
    {
        // Arrange
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferOne();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->createProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertproductDescriptionCollectionResponseContainsOneProductDescriptionTransferOne($productDescriptionCollectionResponseTransfer);
    }

    /**
     * Tests that pre-create plugins are applied to entities.
     *
     * @return void
     */
    public function testCreateProductDescriptionCollectionAppliesPreCreatePlugins(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionPreCreatePluginSetUuidTwoEnabled();
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferOne();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->createProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertproductDescriptionCollectionResponseContainsOneProductDescriptionTransferTwo($productDescriptionCollectionResponseTransfer, $productDescriptionTransfer);
    }

    /**
     * Tests that post-create plugins are applied to entities.
     *
     * @return void
     */
    public function testCreateProductDescriptionCollectionAppliesPostCreatePlugins(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionPostCreatePluginSetUuidTwoEnabled();
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferOne();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->createProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertproductDescriptionCollectionResponseContainsOneProductDescriptionTransferTwo($productDescriptionCollectionResponseTransfer, $productDescriptionTransfer);
    }

    /**
     * Tests that entities are validated with internal ValidatorRuleInterface.
     *
     * @return void
     */
    public function testCreateProductDescriptionCollectionReturnsErroredCollectionResponseWhenValidationRuleFailed(): void
    {
        // Arrange
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferTwoPersisted();

        $this->tester->haveProductDescriptionAlwaysFailingCreateValidatorRuleEnabled(); // This will always return a validation error
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->createProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseContainsFailedValidationRuleError($productDescriptionCollectionResponseTransfer);
    }

    /**
     * Tests that entities are validated with external ValidatorRulePluginInterface.
     *
     * @return void
     */
    public function testCreateProductDescriptionCollectionReturnsErroredCollectionResponseWhenValidationRulePluginFailed(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionAlwaysFailingCreateValidatorRulePluginEnabled(); // This will always return a validation error
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferOne();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->createProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseContainsFailedValidationRuleError($productDescriptionCollectionResponseTransfer);
    }

    /**
     * @return void
     */
    public function testUpdateProductDescriptionCollectionReturnsCollectionWithOneProductDescriptionEntityWhenEntityWasSaved(): void
    {
        // Arrange
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferOnePersisted();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->updateProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferOneWithId($productDescriptionCollectionResponseTransfer, $productDescriptionTransfer);
    }

    /**
     * Tests that pre-update plugins are applied to entities.
     *
     * @return void
     */
    public function testUpdateProductDescriptionCollectionAppliesPreUpdatePlugins(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionPreUpdatePluginSetUuidTwoEnabled();
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferTwoPersisted();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->updateProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferTwoWithId($productDescriptionCollectionResponseTransfer, $productDescriptionTransfer);
    }

    /**
     * Tests that post-update plugins are applied to entities.
     *
     * @return void
     */
    public function testUpdateProductDescriptionCollectionAppliesPostUpdatePlugins(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionPostUpdatePluginSetUuidTwoEnabled();
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferTwoPersisted();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->updateProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferTwoWithId($productDescriptionCollectionResponseTransfer, $productDescriptionTransfer);
    }

    /**
     * Tests that entities are validated with internal ValidatorRuleInterface.
     *
     * @return void
     */
    public function testUpdateProductDescriptionCollectionReturnsErroredCollectionResponseWhenValidationRuleFailed(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionAlwaysFailingUpdateValidatorRuleEnabled(); // This will always return a validation error
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferTwoPersisted();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->updateProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseContainsFailedValidationRuleError($productDescriptionCollectionResponseTransfer);
    }

    /**
     * Tests that entities are validated with external ValidatorRulePluginInterface.
     *
     * @return void
     */
    public function testUpdateProductDescriptionCollectionReturnsErroredCollectionResponseWhenValidationRulePluginFailed(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionAlwaysFailingUpdateValidatorRulePluginEnabled(); // This will always return a validation error
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferTwoPersisted();
        $productDescriptionCollectionRequestTransfer = new ProductDescriptionCollectionRequestTransfer();
        $productDescriptionCollectionRequestTransfer->addProductDescription($productDescriptionTransfer);

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->updateProductDescriptionCollection($productDescriptionCollectionRequestTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseContainsFailedValidationRuleError($productDescriptionCollectionResponseTransfer);
    }

    /**
     * Test ensures to always get a Collection back even if no entity was deleted.
     *
     * @return void
     */
    public function testDeleteProductDescriptionReturnsEmptyCollectionWhenNoEntityMatchedByCriteria(): void
    {
        // Arrange
        $this->tester->haveProductDescriptionTransferTwoPersisted();
        $productDescriptionDeleteCriteriaTransfer = $this->tester->haveProductDescriptionDeleteCriteriaTransferWithProductDescriptionTransferOneCriteria();

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->deleteProductDescriptionCollection($productDescriptionDeleteCriteriaTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseIsEmpty($productDescriptionCollectionResponseTransfer);
    }

    /**
     * Test ensures to get a Collection with deleted entities back when criteria was matching.
     *
     * @return void
     */
    public function testDeleteProductDescriptionReturnsCollectionWithOneProductDescriptionEntityWhenCriteriaMatched(): void
    {
        // Arrange
        $productDescriptionTransfer = $this->tester->haveProductDescriptionTransferOnePersisted();
        $productDescriptionDeleteCriteriaTransfer = $this->tester->haveProductDescriptionDeleteCriteriaTransferWithProductDescriptionTransferOneCriteria();

        // Act
        $productDescriptionCollectionResponseTransfer = $this->tester->getFacade()->deleteProductDescriptionCollection($productDescriptionDeleteCriteriaTransfer);

        // Assert
        $this->tester->assertProductDescriptionCollectionResponseContainsOneProductDescriptionTransferOneWithId($productDescriptionCollectionResponseTransfer, $productDescriptionTransfer);
    }
}
