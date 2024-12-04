<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport;

use Spryker\Zed\DataImport\DataImportConfig as SprykerDataImportConfig;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
class DataImportConfig extends SprykerDataImportConfig
{
    /**
     * @var string
     */
    public const IMPORT_TYPE_CURRENCY = 'currency';

    /**
     * @var string
     */
    public const IMPORT_TYPE_STORE = 'store';

    /**
     * @var string
     */
    public const IMPORT_TYPE_LOCALE = 'locale';

    public function getDefaultYamlConfigPath(): ?string
    {
        return APPLICATION_ROOT_DIR . DIRECTORY_SEPARATOR . 'data/import/local/full_GLOBAL.yml';
    }

    /**
     * @return array<string>
     */
    public function getFullImportTypes(): array
    {
        return [
            static::IMPORT_TYPE_LOCALE,
            static::IMPORT_TYPE_CURRENCY,
            static::IMPORT_TYPE_STORE,
        ];
    }
}
