<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\GlueApplication\Formatter\Response;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Glue\GlueApplication\Formatter\Response\ResponseFormatter as SprykerResponseFormatter;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceInterface;

class ResponseFormatter extends SprykerResponseFormatter
{
    /**
     * We always want to return a single resource. Without this overriding, Glue always returns a collection when the request was made without an id.
     */
    protected function getIsSingularResponse(GlueRequestTransfer $glueRequestTransfer, ?ResourceInterface $resource = null): bool
    {
        return false;
    }
}
