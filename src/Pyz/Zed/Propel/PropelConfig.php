<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Propel;

use Spryker\Zed\Propel\PropelConfig as SprykerPropelConfig;

class PropelConfig extends SprykerPropelConfig
{
    public function getPropelSchemaPathPatterns(): array
    {
        return array_unique(array_merge(
            $this->getCorePropelSchemaPathPatterns(),
            // @todo Uncomment if project has a DB schema.
            //$this->getProjectPropelSchemaPathPatterns(),
        ));
    }
}
