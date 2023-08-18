<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Writer;

interface UserUpdatePluginInterface
{
    /**
     * Specification:
     * - Executes plugin for `UserTransfer[]` before or after update them.
     * - Returns mapped `UserTransfer[]`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
     *
     * @return \Generated\Shared\Transfer\UserTransfer[]
     */
    public function execute(array $userTransfers): array;
}
