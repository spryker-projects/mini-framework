<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business;

use Pyz\Zed\ProductDescription\Business\ProductDescription\Deleter\ProductDescriptionDeleter;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Deleter\ProductDescriptionDeleterInterface;
use Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilder;
use Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilderInterface;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Reader\ProductDescriptionReader;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Reader\ProductDescriptionReaderInterface;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Writer\ProductDescriptionCreator;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Writer\ProductDescriptionCreatorInterface;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Writer\ProductDescriptionUpdater;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Writer\ProductDescriptionUpdaterInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\ProductDescriptionValidatorInterface;

/**
 * @method \Pyz\Zed\ProductDescription\ProductDescriptionConfig getConfig()
 * @method \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\ProductDescription\Persistence\ProductDescriptionRepositoryInterface getRepository()
 */
class ProductDescriptionBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\Deleter\ProductDescriptionDeleterInterface
     */
    public function createProductDescriptionDeleter(): ProductDescriptionDeleterInterface
    {
        return new ProductDescriptionDeleter($this->getEntityManager(), $this->getRepository());
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\Writer\ProductDescriptionCreatorInterface
     */
    public function createProductDescriptionCreator(): ProductDescriptionCreatorInterface
    {
        return new ProductDescriptionCreator($this->getEntityManager(), $this->createProductDescriptionCreateValidator(), $this->createProductDescriptionIdentifierBuilder(), $this->getProductDescriptionPreCreatePlugins(), $this->getProductDescriptionPostCreatePlugins());
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\Reader\ProductDescriptionReaderInterface
     */
    public function createProductDescriptionReader(): ProductDescriptionReaderInterface
    {
        return new ProductDescriptionReader($this->getRepository(), $this->getProductDescriptionExpanderPlugins());
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\Writer\ProductDescriptionUpdaterInterface
     */
    public function createProductDescriptionUpdater(): ProductDescriptionUpdaterInterface
    {
        return new ProductDescriptionUpdater($this->getEntityManager(), $this->createProductDescriptionUpdateValidator(), $this->createProductDescriptionIdentifierBuilder(), $this->getProductDescriptionPreUpdatePlugins(), $this->getProductDescriptionPostUpdatePlugins());
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilderInterface
     */
    public function createProductDescriptionIdentifierBuilder(): ProductDescriptionIdentifierBuilderInterface
    {
        return new ProductDescriptionIdentifierBuilder();
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\ProductDescriptionValidatorInterface
     */
    public function createProductDescriptionCreateValidator(): ProductDescriptionValidatorInterface
    {
        return new \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\ProductDescriptionValidator($this->getProductDescriptionCreateValidatorRules(), $this->getProductDescriptionCreateValidatorRulePlugins(), $this->createProductDescriptionIdentifierBuilder());
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\Rules\ProductDescriptionValidatorRuleInterface[]
     */
    public function getProductDescriptionCreateValidatorRules(): array
    {
        return [];
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\ProductDescriptionValidatorInterface
     */
    public function createProductDescriptionUpdateValidator(): ProductDescriptionValidatorInterface
    {
        return new ProductDescriptionValidator($this->getProductDescriptionUpdateValidatorRules(), $this->getProductDescriptionUpdateValidatorRulePlugins(), $this->createProductDescriptionIdentifierBuilder());
    }

    /**
     * @return \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\Rules\ProductDescriptionValidatorRuleInterface[]
     */
    public function getProductDescriptionUpdateValidatorRules(): array
    {
        return [];
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Expander\ProductDescriptionExpanderPluginInterface[]
     */
    public function getProductDescriptionExpanderPlugins(): array
    {
        return $this->getProvidedDependency(\Pyz\Zed\ProductDescription\ProductDescriptionDependencyProvider::PLUGINS_PRODUCT_DESCRIPTION_EXPANDER);
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionCreatePluginInterface[]
     */
    public function getProductDescriptionPreCreatePlugins(): array
    {
        return $this->getProvidedDependency(ProductDescriptionDependencyProvider::PLUGINS_PRODUCT_DESCRIPTION_PRE_CREATE);
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionCreatePluginInterface[]
     */
    public function getProductDescriptionPostCreatePlugins(): array
    {
        return $this->getProvidedDependency(ProductDescriptionDependencyProvider::PLUGINS_PRODUCT_DESCRIPTION_POST_CREATE);
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface[]
     */
    public function getProductDescriptionPreUpdatePlugins(): array
    {
        return $this->getProvidedDependency(ProductDescriptionDependencyProvider::PLUGINS_PRODUCT_DESCRIPTION_PRE_UPDATE);
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Writer\ProductDescriptionUpdatePluginInterface[]
     */
    public function getProductDescriptionPostUpdatePlugins(): array
    {
        return $this->getProvidedDependency(ProductDescriptionDependencyProvider::PLUGINS_PRODUCT_DESCRIPTION_POST_UPDATE);
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Validator\ProductDescriptionValidatorRulePluginInterface[]
     */
    public function getProductDescriptionCreateValidatorRulePlugins(): array
    {
        return $this->getProvidedDependency(ProductDescriptionDependencyProvider::PLUGINS_PRODUCT_DESCRIPTION_CREATE_VALIDATOR_RULE);
    }

    /**
     * @return \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Validator\ProductDescriptionValidatorRulePluginInterface[]
     */
    public function getProductDescriptionUpdateValidatorRulePlugins(): array
    {
        return $this->getProvidedDependency(ProductDescriptionDependencyProvider::PLUGINS_PRODUCT_DESCRIPTION_UPDATE_VALIDATOR_RULE);
    }
}
