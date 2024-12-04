<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\GlueBackendApiApplication\Plugin\GlueApplication;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Spryker\Glue\GlueBackendApiApplication\Plugin\GlueApplication\LocaleRequestBuilderPlugin as SprykerLocaleRequestBuilderPluginAlias;
use Spryker\Shared\Kernel\Store;

class LocaleRequestBuilderPlugin extends SprykerLocaleRequestBuilderPluginAlias
{
    public function build(GlueRequestTransfer $glueRequestTransfer): GlueRequestTransfer
    {
        $glueRequestTransfer = parent::build($glueRequestTransfer);

        // this one is necessary to have because by default locale facade will return the default locale
        // ignoring the one that is set in the request `Accept-Language` header
        // and there is no way to change this with the OOTB plugins for GlueBackendApi
        if ($glueRequestTransfer->getLocale()) {
            if (!in_array($glueRequestTransfer->getLocale(), Store::getInstance()->getLocales(), true)) {
                return $glueRequestTransfer;
            }

            Store::getInstance()->setCurrentLocale($glueRequestTransfer->getLocale());
        }

        return $glueRequestTransfer;
    }
}
