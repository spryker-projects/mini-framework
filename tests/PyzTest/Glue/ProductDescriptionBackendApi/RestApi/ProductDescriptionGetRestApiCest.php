<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Glue\ProductDescriptionBackendApi\RestApi;

use PyzTest\Glue\ProductDescriptionBackendApi\ProductDescriptionBackendApiTester;
use Symfony\Component\HttpFoundation\Response;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Glue
 * @group ProductDescriptionBackendApi
 * @group RestApi
 * @group ProductDescriptionGetRestApiCest
 * Add your own group annotations below this line
 */
class ProductDescriptionGetRestApiCest
{
    /**
     * @param \PyzTest\Glue\ProductDescriptionBackendApi\ProductDescriptionBackendApiTester $I
     *
     * @return void
     */
    public function requestProductDescriptionGetReturnsHttpResponseCode200(
        ProductDescriptionBackendApiTester $I
    ): void {
        // Arrange
        // $I->addJsonApiResourcePlugin(new \Pyz\Glue\ProductDescriptionBackendApi\Plugin\GlueApplication\ProductDescriptionBackendApiResource());
        // $I->addRouteProviderPlugin(new \Pyz\Glue\ProductDescriptionBackendApi\Plugin\GlueApplication\ProductDescriptionBackendApiRouteProvider());
        $productDescriptionTransfer = $I->haveProductDescriptionTransferPersisted();
        $idProductDescription = $productDescriptionTransfer->getIdProductDescription();
        $uuid = $productDescriptionTransfer->getUuid();
        $url = $I->buildProductDescriptionUrl($uuid);
        // Act
        $I->sendGet($url);
        // Assert
        $I->seeResponseCodeIs(Response::HTTP_OK);
        $I->seeResponseIsJson();
        $I->seeResponseJsonContainsProductDescriptionIdAndUuid($idProductDescription, $uuid);
    }
}
