<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Validator;

use Generated\Shared\Transfer\UserTransfer;

interface UserValidatorRulePluginInterface
{
    /**
     * Specification:
     * - Validates the `UserTransfer`.
     * - Returns an array with errors for the `UserTransfer`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     *
     * @return string[]
     */
    public function validate(UserTransfer $userTransfer): array;
}
