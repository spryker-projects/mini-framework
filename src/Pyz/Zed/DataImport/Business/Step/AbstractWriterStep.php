<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business\Step;

use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\PublishAwareStep;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

abstract class AbstractWriterStep extends PublishAwareStep implements DataImportStepInterface
{
    protected function getStringValue(string $key, DataSetInterface $dataSet): string
    {
        /** @phpstan-var string */
        return $dataSet[$key];
    }
}
