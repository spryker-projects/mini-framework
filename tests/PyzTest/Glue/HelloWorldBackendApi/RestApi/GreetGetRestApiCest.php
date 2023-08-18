<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Glue\HelloWorldBackendApi\RestApi;

use PyzTest\Glue\HelloWorldBackendApi\HelloWorldBackendApiTester;
use Symfony\Component\HttpFoundation\Response;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Glue
 * @group HelloWorldBackendApi
 * @group RestApi
 * @group GreetGetRestApiCest
 * Add your own group annotations below this line
 */
class GreetGetRestApiCest
{
    /**
     * @param \PyzTest\Glue\HelloWorldBackendApi\HelloWorldBackendApiTester $I
     *
     * @return void
     */
    public function requestGreetGetReturnsHttpResponseCode200(HelloWorldBackendApiTester $I): void
    {
        // Arrange
        // $I->addJsonApiResourcePlugin(new \Pyz\Glue\HelloWorldBackendApi\Plugin\GlueApplication\GreetBackendApiResource());
        // $I->addRouteProviderPlugin(new \Pyz\Glue\HelloWorldBackendApi\Plugin\GlueApplication\GreetBackendApiRouteProvider());
        $userTransfer = $I->haveUserTransferPersisted();
        $idUser = $userTransfer->getIdUser();
        $uuid = $userTransfer->getUuid();
        $url = $I->buildGreetUrl($uuid);
        // Act
        $I->sendGet($url);
        // Assert
        $I->seeResponseCodeIs(Response::HTTP_OK);
        $I->seeResponseIsJson();
        $I->seeResponseJsonContainsUserIdAndUuid($idUser, $uuid);
    }
}
