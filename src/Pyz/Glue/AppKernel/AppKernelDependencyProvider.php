<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\AppKernel;

use Spryker\Glue\AppKernel\AppKernelDependencyProvider as SprykerAppKernelDependencyProvider;
use Spryker\Glue\AppPaymentBackendApi\Plugin\GlueApplication\PaymentConfirmDisconnectionRequestValidatorPlugin;

class AppKernelDependencyProvider extends SprykerAppKernelDependencyProvider
{
    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RequestValidatorPluginInterface>
     */
    protected function getRequestDisconnectValidatorPlugins(): array
    {
        return [
            new PaymentConfirmDisconnectionRequestValidatorPlugin(),
        ];
    }
}
