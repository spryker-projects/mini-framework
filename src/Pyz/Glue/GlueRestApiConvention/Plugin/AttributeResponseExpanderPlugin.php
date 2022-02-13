<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Pyz\Glue\GlueRestApiConvention\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin\ResponseExpanderPluginInterface;
use Spryker\Glue\Kernel\AbstractPlugin;

class AttributeResponseExpanderPlugin extends AbstractPlugin implements ResponseExpanderPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\GlueResponseTransfer $glueResponseTransfer
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     * @param array $responseData
     *
     * @return array
     */
    public function expand(
        GlueResponseTransfer $glueResponseTransfer,
        GlueRequestTransfer $glueRequestTransfer,
        array $responseData
    ): array {
        if ($glueResponseTransfer->getResources()->count() !== 0) {
            foreach ($glueResponseTransfer->getResources() as $resource) {
                $responseData[] = $resource->getAttributes()->toArray(true, true);
            }
        }

        return $responseData;
    }
}
