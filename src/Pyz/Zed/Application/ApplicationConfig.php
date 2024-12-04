<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Application;

use Spryker\Zed\Application\ApplicationConfig as SprykerApplicationConfig;

class ApplicationConfig extends SprykerApplicationConfig
{
    public function getSecurityHeaders(): array
    {
        $headers = parent::getSecurityHeaders();
        unset($headers['X-Frame-Options'], $headers['Content-Security-Policy']);

        return $headers;
    }
}
