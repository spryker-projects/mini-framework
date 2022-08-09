<?php


namespace Pyz\Zed\Kernel;

use Spryker\Zed\Kernel\KernelConfig as SprykerKernelConfig;

class KernelConfig extends SprykerKernelConfig
{
    /**
     * @return array<string>
     */
    public function getPathsToCoreModules(): array
    {
        return [
            APPLICATION_VENDOR_DIR . '/spryker/*/src/*/*/',
        ];
    }
}
