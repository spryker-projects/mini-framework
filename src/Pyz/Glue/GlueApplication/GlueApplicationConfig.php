<?php


namespace Pyz\Glue\GlueApplication;

use Spryker\Glue\GlueApplication\GlueApplicationConfig as SprykerGlueApplicationConfig;

class GlueApplicationConfig extends SprykerGlueApplicationConfig
{
    /**
     * @var bool
     */
    public const VALIDATE_REQUEST_HEADERS = false;
}
