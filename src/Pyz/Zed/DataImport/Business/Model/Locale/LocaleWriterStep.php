<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business\Model\Locale;

use Orm\Zed\Locale\Persistence\SpyLocaleQuery;
use Pyz\Zed\DataImport\Business\Step\AbstractWriterStep;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class LocaleWriterStep extends AbstractWriterStep
{
    /**
     * @var string
     */
    public const KEY_LOCALE_NAME = 'locale_name';

    /**
     * @var string
     */
    public const KEY_IS_ACTIVE = 'is_active';

    public function execute(DataSetInterface $dataSet): void
    {
        /** @var \Orm\Zed\Locale\Persistence\SpyLocale $spyLocale */
        $spyLocale = SpyLocaleQuery::create()
            ->filterByLocaleName($this->getStringValue(static::KEY_LOCALE_NAME, $dataSet))
            ->findOneOrCreate();

        $spyLocale->setIsActive($this->getStringValue(static::KEY_IS_ACTIVE, $dataSet));

        $spyLocale->save();
    }
}
