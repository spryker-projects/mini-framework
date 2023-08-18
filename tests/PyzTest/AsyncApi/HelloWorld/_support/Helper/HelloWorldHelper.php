<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\AsyncApi\HelloWorld\Helper;

use Codeception\Module;
use Generated\Shared\DataBuilder\GreetUserBuilder;
use Generated\Shared\DataBuilder\UserCreatedBuilder;
use Generated\Shared\Transfer\GreetUserTransfer;
use Generated\Shared\Transfer\UserCreatedTransfer;

class HelloWorldHelper extends Module
{
    /**
     * @param array $seed
     *
     * @return \Generated\Shared\Transfer\GreetUserTransfer
     */
    public function haveGreetUserTransfer(array $seed = []): GreetUserTransfer
    {
        return (new GreetUserBuilder($seed))->build();
    }

    /**
     * @param array $seed
     *
     * @return \Generated\Shared\Transfer\UserCreatedTransfer
     */
    public function haveUserCreatedTransfer(array $seed = []): UserCreatedTransfer
    {
        return (new UserCreatedBuilder($seed))->build();
    }
}
