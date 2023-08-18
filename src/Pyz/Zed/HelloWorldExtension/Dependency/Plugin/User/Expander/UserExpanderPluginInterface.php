<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Expander;

interface UserExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands `UserTransfer[]` after reading them.
     * - Returns expanded `UserTransfer[]`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\UserTransfer[] $userTransfers
     *
     * @return \Generated\Shared\Transfer\UserTransfer[]
     */
    public function expand(array $userTransfers): array;
}
