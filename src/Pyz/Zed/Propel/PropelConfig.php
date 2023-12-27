<?php

namespace Pyz\Zed\Propel;

use Spryker\Zed\Propel\PropelConfig as SprykerPropelConfig;

class PropelConfig extends SprykerPropelConfig
{
    /**
     * @api
     *
     * @return array<string>
     */
    public function getProjectPropelSchemaPathPatterns(): array
    {
        return [];
    }
}
