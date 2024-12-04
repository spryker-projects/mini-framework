<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business;

use Generated\Shared\Transfer\DataImportConfigurationActionTransfer;
use Pyz\Zed\DataImport\Business\Model\Currency\CurrencyWriterStep;
use Pyz\Zed\DataImport\Business\Model\Locale\LocaleWriterStep;
use Pyz\Zed\DataImport\Business\Model\Store\StoreReader;
use Pyz\Zed\DataImport\Business\Model\Store\StoreWriterStep;
use Pyz\Zed\DataImport\DataImportConfig;
use Spryker\Shared\Kernel\Store;
use Spryker\Zed\DataImport\Business\DataImportBusinessFactory as SprykerDataImportBusinessFactory;
use Spryker\Zed\DataImport\Business\Model\DataImporterInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetStepBroker;

/**
 * @method \Pyz\Zed\DataImport\DataImportConfig getConfig()
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
class DataImportBusinessFactory extends SprykerDataImportBusinessFactory
{
    public function getDataImporterByType(DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer): ?DataImporterInterface
    {
        return match ($dataImportConfigurationActionTransfer->getDataEntity()) {
            DataImportConfig::IMPORT_TYPE_STORE => $this->createStoreImporter($dataImportConfigurationActionTransfer),
            DataImportConfig::IMPORT_TYPE_CURRENCY => $this->createCurrencyImporter($dataImportConfigurationActionTransfer),
            DataImportConfig::IMPORT_TYPE_LOCALE => $this->createLocaleImporter($dataImportConfigurationActionTransfer),
            default => null,
        };
    }

    protected function createStoreImporter(
        DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
    ): DataImporterInterface {
        $dataImporter = $this->createDataImporter(
            $dataImportConfigurationActionTransfer->getDataEntityOrFail(),
            new StoreReader(
                $this->createDataSet(
                    Store::getInstance()->getAllowedStores(),
                ),
            ),
        );

        $dataSetStepBroker = $this->createDataSetStepBroker();
        $dataSetStepBroker->addStep(new StoreWriterStep());

        $dataImporter->addDataSetStepBroker($dataSetStepBroker);

        return $dataImporter;
    }

    protected function createCurrencyImporter(
        DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
    ): DataImporterInterface {
        $dataImporter = $this->getCsvDataImporterFromConfig(
            $this->getConfig()->buildImporterConfigurationByDataImportConfigAction($dataImportConfigurationActionTransfer),
        );

        $dataSetStepBroker = $this->createTransactionAwareDataSetStepBroker();
        $dataSetStepBroker->addStep(new CurrencyWriterStep());

        $dataImporter->addDataSetStepBroker($dataSetStepBroker);

        return $dataImporter;
    }

    protected function createLocaleImporter(
        DataImportConfigurationActionTransfer $dataImportConfigurationActionTransfer
    ): DataImporterInterface {
        $dataImporter = $this->getCsvDataImporterFromConfig(
            $this->getConfig()->buildImporterConfigurationByDataImportConfigAction($dataImportConfigurationActionTransfer),
        );

        $dataSetStepBroker = $this->createTransactionAwareDataSetStepBroker();
        $dataSetStepBroker->addStep(new LocaleWriterStep());

        $dataImporter->addDataSetStepBroker($dataSetStepBroker);

        return $dataImporter;
    }

    public function createDataSetStepBroker(): DataSetStepBroker
    {
        return new DataSetStepBroker();
    }
}
