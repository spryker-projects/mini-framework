<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Glue\ProductDescriptionBackendApi;

use SprykerTest\Glue\Testify\Tester\ApiEndToEndTester;

/**
 * Inherited Methods
 *
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(\PyzTest\Glue\ProductDescriptionBackendApi\PHPMD)
 */
class ProductDescriptionBackendApiTester extends ApiEndToEndTester
{
    use _generated\ProductDescriptionBackendApiTesterActions;

    /**
     * @param int $productDescriptionId
     * @param string $uuid
     *
     * @return void
     */
    public function seeResponseJsonContainsProductDescriptionIdAndUuid(int $productDescriptionId, string $uuid): void
    {
        $this->seeResponseJsonPathContains(['data' => [['type' => 'productDescription', 'id' => $productDescriptionId, 'attributes' => ['idProductDescription' => $productDescriptionId, 'uuid' => $uuid]]]]);
    }
}
