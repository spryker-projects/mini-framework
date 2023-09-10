<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport;

use Spryker\Zed\DataImport\DataImportConfig as SprykerDataImportConfig;

/**
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class DataImportConfig extends SprykerDataImportConfig
{
    /**
     * @var string
     */
    public const IMPORT_TYPE_PRODUCT_ABSTRACT = 'product-abstract';

    /**
     * @var string
     */
    public const IMPORT_TYPE_PRODUCT_ABSTRACT_STORE = 'product-abstract-store';

    /**
     * @var string
     */
    public const IMPORT_TYPE_CURRENCY = 'currency';

    /**
     * @return string|null
     */
    public function getDefaultYamlConfigPath(): ?string
    {
        $regionDir = defined('APPLICATION_REGION') ? APPLICATION_REGION : 'EU';

        return APPLICATION_ROOT_DIR . DIRECTORY_SEPARATOR . 'data/import/local/full_' . $regionDir . '.yml';
    }
}
