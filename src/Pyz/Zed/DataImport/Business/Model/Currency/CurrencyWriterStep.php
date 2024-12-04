<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business\Model\Currency;

use Orm\Zed\Currency\Persistence\SpyCurrencyQuery;
use Pyz\Zed\DataImport\Business\Step\AbstractWriterStep;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class CurrencyWriterStep extends AbstractWriterStep
{
    /**
     * @var string
     */
    public const KEY_ISO_CODE = 'iso_code';

    /**
     * @var string
     */
    public const KEY_CURRENCY_SYMBOL = 'currency_symbol';

    /**
     * @var string
     */
    public const KEY_NAME = 'name';

    public function execute(DataSetInterface $dataSet): void
    {
        $spyCurrency = SpyCurrencyQuery::create()
            ->filterByCode($this->getStringValue(static::KEY_ISO_CODE, $dataSet))
            ->filterByName($this->getStringValue(static::KEY_NAME, $dataSet))
            ->filterBySymbol($this->getStringValue(static::KEY_CURRENCY_SYMBOL, $dataSet))
            ->findOneOrCreate();

        $spyCurrency->save();
    }
}
