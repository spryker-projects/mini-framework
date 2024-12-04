<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\GlueApplication;

use Pyz\Glue\GlueApplication\Formatter\Response\ResponseFormatter;
use Spryker\Glue\GlueApplication\Formatter\Response\ResponseFormatterInterface;
use Spryker\Glue\GlueApplication\GlueApplicationFactory as SprykerGlueApplicationFactory;

class GlueApplicationFactory extends SprykerGlueApplicationFactory
{
    /**
     * @deprecated Does only exist to remove the `\Spryker\Glue\GlueApplication\Validator\Request\AcceptedFormatValidator` from this stack.
     *
     * When SCOS is sending the correct `accept` header this can be removed.
     */
    public function createRequestValidators(): array
    {
        return [
            $this->createFilterRequestValidator(),
        ];
    }

    public function createDefaultResponseFormatter(): ResponseFormatterInterface
    {
        return new ResponseFormatter(
            $this->getResponseEncoderStrategies(),
            $this->getConfig(),
        );
    }
}
