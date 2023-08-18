<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\User\Reader;

use ArrayObject;
use Generated\Shared\Transfer\UserCollectionTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;
use Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface;

class UserReader implements UserReaderInterface
{
    /**
     * @var \Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface
     */
    protected HelloWorldRepositoryInterface $helloWorldRepository;

    /**
     * @var \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Expander\UserExpanderPluginInterface[]
     */
    protected array $userExpanderPlugins;

    /**
     * @param \Pyz\Zed\HelloWorld\Persistence\HelloWorldRepositoryInterface $helloWorldRepository
     * @param \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Expander\UserExpanderPluginInterface[] $userExpanderPlugins
     */
    public function __construct(
        HelloWorldRepositoryInterface $helloWorldRepository,
        array $userExpanderPlugins
    ) {
        $this->helloWorldRepository = $helloWorldRepository;
        $this->userExpanderPlugins = $userExpanderPlugins;
    }

    /**
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    public function getUserCollection(
        UserCriteriaTransfer $userCriteriaTransfer
    ): UserCollectionTransfer {
        $userCollectionTransfer = $this->helloWorldRepository
            ->getUserCollection($userCriteriaTransfer);

        return $this->executeUserExpanderPlugins($userCollectionTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionTransfer $userCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionTransfer
     */
    protected function executeUserExpanderPlugins(
        UserCollectionTransfer $userCollectionTransfer
    ): UserCollectionTransfer {
        $userTransfers = $userCollectionTransfer->getUsers()->getArrayCopy();

        foreach ($this->userExpanderPlugins as $userExpanderPlugin) {
            $userTransfers = $userExpanderPlugin->expand($userTransfers);
        }

        return $userCollectionTransfer->setUsers(new ArrayObject($userTransfers));
    }
}
