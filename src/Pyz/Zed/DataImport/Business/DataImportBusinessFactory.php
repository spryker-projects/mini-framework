<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business;

use Generated\Shared\Transfer\DataImportConfigurationActionTransfer;
use Pyz\Zed\DataImport\Business\Model\Currency\CurrencyWriterStep;
use Pyz\Zed\DataImport\Business\Model\Product\AttributesExtractorStep;
use Pyz\Zed\DataImport\Business\Model\Product\ProductLocalizedAttributesExtractorStep;
use Pyz\Zed\DataImport\Business\Model\Product\Repository\ProductRepository;
use Pyz\Zed\DataImport\Business\Model\ProductAbstract\ProductAbstractHydratorStep;
use Pyz\Zed\DataImport\Business\Model\ProductAbstract\Writer\ProductAbstractPropelDataSetWriter;
use Pyz\Zed\DataImport\Business\Model\ProductAbstractStore\ProductAbstractStoreHydratorStep;
use Pyz\Zed\DataImport\Business\Model\ProductAbstractStore\Writer\ProductAbstractStorePropelDataSetWriter;
use Pyz\Zed\DataImport\Communication\Plugin\ProductAbstract\ProductAbstractPropelWriterPlugin;
use Pyz\Zed\DataImport\Communication\Plugin\ProductAbstractStore\ProductAbstractStorePropelWriterPlugin;
use Pyz\Zed\DataImport\DataImportConfig;
use Spryker\Zed\DataImport\Business\DataImportBusinessFactory as SprykerDataImportBusinessFactory;
use Spryker\Zed\DataImport\Business\Model\DataImporterInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\AddLocalesStep;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetWriterCollection;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetWriterInterface;

/**
 * @method \Pyz\Zed\DataImport\DataImportConfig getConfig()
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
class DataImportBusinessFactory extends SprykerDataImportBusinessFactory
{
    /**
     * @param \Generated\Shared\Transfer\DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
     *
     * @return \Spryker\Zed\DataImport\Business\Model\DataImporterInterface|null
     */
    public function getDataImporterByType(DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer): ?DataImporterInterface
    {
        return match ($dataImportConfigurationActionTransfer->getDataEntity()) {
            DataImportConfig::IMPORT_TYPE_PRODUCT_ABSTRACT => $this->createProductAbstractImporter($dataImportConfigurationActionTransfer),
            DataImportConfig::IMPORT_TYPE_PRODUCT_ABSTRACT_STORE => $this->createProductAbstractStoreImporter($dataImportConfigurationActionTransfer),
            DataImportConfig::IMPORT_TYPE_CURRENCY => $this->createCurrencyImporter($dataImportConfigurationActionTransfer),
            default => null,
        };
    }

    /**
     * @param \Generated\Shared\Transfer\DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
     *
     * @return \Spryker\Zed\DataImport\Business\Model\DataImporterInterface
     */
    protected function createCurrencyImporter(DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer): DataImporterInterface
    {
        $dataImporter = $this->getCsvDataImporterFromConfig(
            $this->getConfig()->buildImporterConfigurationByDataImportConfigAction($dataImportConfigurationActionTransfer),
        );

        $dataSetStepBroker = $this->createTransactionAwareDataSetStepBroker();
        $dataSetStepBroker->addStep(new CurrencyWriterStep());

        $dataImporter->addDataSetStepBroker($dataSetStepBroker);

        return $dataImporter;
    }

    /**
     * @param \Generated\Shared\Transfer\DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
     *
     * @return \Spryker\Zed\DataImport\Business\Model\DataImporterInterface
     */
    public function createProductAbstractImporter(
        DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
    ): DataImporterInterface {
        /** @var \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetStepBrokerAwareInterface|\Spryker\Zed\DataImport\Business\Model\DataImporterInterface|\Spryker\Zed\DataImport\Business\Model\DataImporterDataSetWriterAwareInterface $dataImporter */
        $dataImporter = $this->getCsvDataImporterWriterAwareFromConfig(
            $this->getConfig()->buildImporterConfigurationByDataImportConfigAction($dataImportConfigurationActionTransfer),
        );

        $dataSetStepBroker = $this->createTransactionAwareDataSetStepBroker(ProductAbstractHydratorStep::BULK_SIZE);
        $dataSetStepBroker
            ->addStep($this->createAddLocalesStep())
            ->addStep($this->createAttributesExtractorStep())
            ->addStep($this->createProductLocalizedAttributesExtractorStep([
                ProductAbstractHydratorStep::COLUMN_NAME,
                ProductAbstractHydratorStep::COLUMN_URL,
                ProductAbstractHydratorStep::COLUMN_DESCRIPTION,
                ProductAbstractHydratorStep::COLUMN_META_TITLE,
                ProductAbstractHydratorStep::COLUMN_META_DESCRIPTION,
                ProductAbstractHydratorStep::COLUMN_META_KEYWORDS,
            ]))
            ->addStep(new ProductAbstractHydratorStep());

        $dataImporter->addDataSetStepBroker($dataSetStepBroker);
        $dataImporter->setDataSetWriter($this->createProductAbstractDataImportWriters());

        return $dataImporter;
    }

    /**
     * @return \Pyz\Zed\DataImport\Business\Model\Product\Repository\ProductRepository
     */
    public function createProductRepository(): ProductRepository
    {
        return new ProductRepository();
    }

    /**
     * @return \Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface
     */
    public function createAddLocalesStep(): DataImportStepInterface
    {
        return new AddLocalesStep($this->getDataImportStoreFacade());
    }

    /**
     * @return \Pyz\Zed\DataImport\Business\Model\Product\AttributesExtractorStep
     */
    public function createAttributesExtractorStep(): AttributesExtractorStep
    {
        return new AttributesExtractorStep();
    }

    /**
     * @param array<string> $defaultAttributes
     *
     * @return \Pyz\Zed\DataImport\Business\Model\Product\ProductLocalizedAttributesExtractorStep
     */
    public function createProductLocalizedAttributesExtractorStep(
        array $defaultAttributes = []
    ): ProductLocalizedAttributesExtractorStep {
        return new ProductLocalizedAttributesExtractorStep($defaultAttributes);
    }

    /**
     * @param \Generated\Shared\Transfer\DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
     *
     * @return \Spryker\Zed\DataImport\Business\Model\DataImporterInterface
     */
    public function createProductAbstractStoreImporter(
        DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
    ): DataImporterInterface {
        /** @var \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetStepBrokerAwareInterface|\Spryker\Zed\DataImport\Business\Model\DataImporterInterface|\Spryker\Zed\DataImport\Business\Model\DataImporterDataSetWriterAwareInterface $dataImporter */
        $dataImporter = $this->getCsvDataImporterWriterAwareFromConfig(
            $this->getConfig()->buildImporterConfigurationByDataImportConfigAction($dataImportConfigurationActionTransfer),
        );

        $dataSetStepBroker = $this->createTransactionAwareDataSetStepBroker(ProductAbstractStoreHydratorStep::BULK_SIZE);
        $dataSetStepBroker->addStep(new ProductAbstractStoreHydratorStep());

        $dataImporter->addDataSetStepBroker($dataSetStepBroker);
        $dataImporter->setDataSetWriter($this->createProductAbstractStoreDataImportWriters());

        return $dataImporter;
    }

    /**
     * @return \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetWriterInterface
     */
    public function createProductAbstractStoreDataImportWriters(): DataSetWriterInterface
    {
        return new DataSetWriterCollection($this->createProductAbstractStoreWriterPlugins());
    }

    /**
     * @return \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetWriterInterface
     */
    public function createProductAbstractDataImportWriters(): DataSetWriterInterface
    {
        return new DataSetWriterCollection($this->createProductAbstractWriterPlugins());
    }

    /**
     * @return array<\Spryker\Zed\DataImportExtension\Dependency\Plugin\DataSetWriterPluginInterface>
     */
    public function createProductAbstractWriterPlugins(): array
    {
        return [
            new ProductAbstractPropelWriterPlugin(),
        ];
    }

    /**
     * @return array<\Spryker\Zed\DataImportExtension\Dependency\Plugin\DataSetWriterPluginInterface>
     */
    public function createProductAbstractStoreWriterPlugins(): array
    {
        return [
            new ProductAbstractStorePropelWriterPlugin(),
        ];
    }

    /**
     * @return \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetWriterInterface
     */
    public function createProductAbstractPropelWriter(): DataSetWriterInterface
    {
        return new ProductAbstractPropelDataSetWriter($this->createProductRepository());
    }

    /**
     * @return \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetWriterInterface
     */
    public function createProductAbstractStorePropelWriter(): DataSetWriterInterface
    {
        return new ProductAbstractStorePropelDataSetWriter();
    }
}
