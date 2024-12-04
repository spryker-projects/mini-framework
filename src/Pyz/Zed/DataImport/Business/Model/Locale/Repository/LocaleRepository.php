<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business\Model\Locale\Repository;

use Orm\Zed\Locale\Persistence\Map\SpyLocaleTableMap;
use Orm\Zed\Locale\Persistence\SpyLocaleQuery;

class LocaleRepository implements LocaleRepositoryInterface
{
    /**
     * @var array<string, int>
     */
    protected static array $localeMap = [];

    public function getIdLocaleByLocale(string $locale): int
    {
        if (static::$localeMap === []) {
            $this->loadLocaleMap();
        }

        return static::$localeMap[$locale];
    }

    private function loadLocaleMap(): void
    {
        /** @var array<array<string, mixed>> $localeCollection */
        $localeCollection = SpyLocaleQuery::create()
            ->select([SpyLocaleTableMap::COL_ID_LOCALE, SpyLocaleTableMap::COL_LOCALE_NAME])
            ->find();

        foreach ($localeCollection as $locale) {
            /** @var string $localeName */
            $localeName = $locale[SpyLocaleTableMap::COL_LOCALE_NAME];

            /** @var int $idLocale */
            $idLocale = $locale[SpyLocaleTableMap::COL_ID_LOCALE];

            static::$localeMap[$localeName] = $idLocale;
        }
    }
}
