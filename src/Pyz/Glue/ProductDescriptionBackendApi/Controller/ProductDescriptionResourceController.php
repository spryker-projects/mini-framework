<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\ProductDescriptionBackendApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractController;

/**
 * @method \Pyz\Glue\ProductDescriptionBackendApi\ProductDescriptionBackendApiFactory getFactory()
 */
class ProductDescriptionResourceController extends AbstractController
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $openai_key = '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';
        $endpoint = 'https://api.openai.com/v1/engines/davinci-codex/completions';

        $client = new \GuzzleHttp\Client();

        $response = $client->post($endpoint, [
            'headers' => [
                'Authorization' => 'Bearer ' . $openai_key,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'prompt' => 'Create a product description from the following payload: ',
                'max_tokens' => 300
            ]
        ]);

        $body = $response->getBody();
        $result = json_decode($body, true);

        echo $result['choices'][0]['text'];

        $productDescriptionTransfer = new ProductDescriptionTransfer();
        $productDescriptionTransfer->setDescription(
            'AI PRODUCT DESCRIPTION PBC ' . $result['choices'][0]['text']
        );
        $glueResponseTransfer = new GlueResponseTransfer();
        $resourceTransfer = new GlueResourceTransfer();
        $resourceTransfer->setAttributes($productDescriptionTransfer);
        $resourceTransfer->setType('productDescription');
        $glueResponseTransfer->addResource($resourceTransfer);

        return $glueResponseTransfer;
    }
}
