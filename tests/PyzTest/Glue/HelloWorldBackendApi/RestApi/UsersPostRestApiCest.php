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
 * @group UsersPostRestApiCest
 * Add your own group annotations below this line
 */
class UsersPostRestApiCest
{
    /**
     * @param \PyzTest\Glue\HelloWorldBackendApi\HelloWorldBackendApiTester $I
     *
     * @return void
     */
    public function requestUserPostReturnsHttpResponseCode201(HelloWorldBackendApiTester $I): void
    {
        // Arrange
        // $I->addJsonApiResourcePlugin(new \Pyz\Glue\HelloWorldBackendApi\Plugin\GlueApplication\UsersBackendApiResource());
        // $I->addRouteProviderPlugin(new \Pyz\Glue\HelloWorldBackendApi\Plugin\GlueApplication\UsersBackendApiRouteProvider());
        $userTransfer = $I->haveUserTransfer();
        $iduser = $userTransfer->getIdUser();
        $url = $I->buildUsersUrl();
        // Act
        $I->sendPost($url, ['data' => ['attributes' => $userTransfer->toArray()]]);
        // Assert
        $I->seeResponseCodeIs(Response::HTTP_CREATED);
        $I->seeResponseIsJson();
        $I->seeResponseJsonContainsUser();
    }
}
