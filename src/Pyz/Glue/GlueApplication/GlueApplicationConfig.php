<?php

namespace Pyz\Glue\GlueApplication;

class GlueApplicationConfig extends \Spryker\Glue\GlueApplication\GlueApplicationConfig
{
    /**
     * @return bool
     */
    public function isConfigurableResponseEnabled(): bool
    {
        return true;
    }
}
