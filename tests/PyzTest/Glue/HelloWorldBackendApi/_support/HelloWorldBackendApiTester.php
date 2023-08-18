<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Glue\HelloWorldBackendApi;

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
 * @SuppressWarnings(\PyzTest\Glue\HelloWorldBackendApi\PHPMD)
 */
class HelloWorldBackendApiTester extends ApiEndToEndTester
{
    use _generated\HelloWorldBackendApiTesterActions;

    /**
     * @return void
     */
    public function seeResponseJsonContainsUser(): void
    {
        $this->seeResponseJsonPathContains(['data' => [['type' => 'user']]]);
    }

    /**
     * @param int $userId
     * @param string $uuid
     *
     * @return void
     */
    public function seeResponseJsonContainsUserIdAndUuid(int $userId, string $uuid): void
    {
        $this->seeResponseJsonPathContains(['data' => [['type' => 'user', 'id' => $userId, 'attributes' => ['idUser' => $userId, 'uuid' => $uuid]]]]);
    }
}
