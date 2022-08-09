<?php


namespace Pyz\Zed\Propel;

use Spryker\Zed\Propel\Communication\Plugin\Propel\ForeignKeyIndexPropelSchemaElementFilterPlugin;
use Spryker\Zed\Propel\PropelDependencyProvider as SprykerPropelDependencyProvider;

class PropelDependencyProvider extends SprykerPropelDependencyProvider
{
    /**
     * @return array<\Spryker\Zed\Propel\Dependency\Plugin\PropelSchemaElementFilterPluginInterface>
     */
    protected function getPropelSchemaElementFilterPlugins(): array
    {
        return [
            new ForeignKeyIndexPropelSchemaElementFilterPlugin(),
        ];
    }
}
