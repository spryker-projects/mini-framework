<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\GlueJsonApiConvention\Response;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Glue\GlueJsonApiConvention\Response\JsonGlueResponseFormatter as SprykerJsonGlueResponseFormatter;

class JsonGlueResponseFormatter extends SprykerJsonGlueResponseFormatter
{
    /**
     * We always want to return a single resource. Without this overriding, Glue always returns a collection when the request was made without an id.
     */
    protected function isSingleObjectRequest(GlueRequestTransfer $glueRequestTransfer, array $glueResources): bool
    {
        return true;
    }
}
