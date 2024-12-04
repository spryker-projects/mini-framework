<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\AppPaymentBackendApi;

use Pyz\Glue\AppPaymentBackendApi\Mapper\Payment\GlueRequestPaymentMapper;
use Spryker\Glue\AppPaymentBackendApi\AppPaymentBackendApiFactory as SprykerAppPaymentBackendApiFactory;
use Spryker\Glue\AppPaymentBackendApi\Mapper\Payment\GlueRequestPaymentMapperInterface;

class AppPaymentBackendApiFactory extends SprykerAppPaymentBackendApiFactory
{
    public function createGlueRequestPaymentMapper(): GlueRequestPaymentMapperInterface
    {
        return new GlueRequestPaymentMapper();
    }
}
