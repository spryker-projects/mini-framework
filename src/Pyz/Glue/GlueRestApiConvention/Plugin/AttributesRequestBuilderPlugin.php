<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Pyz\Glue\GlueRestApiConvention\Plugin;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Glue\GlueRestApiConventionExtension\Dependency\Plugin\RequestBuilderPluginInterface;
use Spryker\Glue\Kernel\AbstractPlugin;

/**
 * @method \Spryker\Glue\GlueRestApiConvention\GlueRestApiConventionFactory getFactory()
 */
class AttributesRequestBuilderPlugin extends AbstractPlugin implements RequestBuilderPluginInterface
{
    /**
     * {@inheritDoc}
     * - Sets `GlueRequestTransfer.attributes` in case the request has content.
     * - Ignores content if the content structure does not follow JSON API (`data.attributes`).
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueRequestTransfer
     */
    public function build(GlueRequestTransfer $glueRequestTransfer): GlueRequestTransfer
    {
        if (!$glueRequestTransfer->getContent()) {
            return $glueRequestTransfer;
        }

        $decodedContent = $this->getFactory()->getUtilEncodingService()->decodeJson($glueRequestTransfer->getContent(), true);
        if (!$decodedContent) {
            return $glueRequestTransfer;
        }

        $glueRequestTransfer->setAttributes($decodedContent);

        return $glueRequestTransfer;
    }
}
