<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Shared\Kernel;

use Spryker\Shared\Kernel\KernelConfig as SprykerKernelConfig;

class KernelConfig extends SprykerKernelConfig
{
    public function isLocatorInstanceCacheEnabled(): bool
    {
        return true;
    }
}
