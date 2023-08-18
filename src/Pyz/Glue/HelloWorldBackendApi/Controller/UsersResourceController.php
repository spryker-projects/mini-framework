<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractController;

/**
 * @method \Pyz\Glue\HelloWorldBackendApi\HelloWorldBackendApiFactory getFactory()
 */
class UsersResourceController extends AbstractController
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function postAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        // @todo refactor the method according to your needs
        $userCollectionRequestTransfer = $this->getFactory()->createGlueRequestUserMapper()->mapGlueRequestTransferToUserCollectionRequestTransfer($glueRequestTransfer);
        $userCollectionResponseTransfer = $this->getFactory()->getHelloWorldFacade()->createUserCollection($userCollectionRequestTransfer);

        return $this->getFactory()->createGlueResponseUserMapper()->mapUserCollectionResponseTransferToSingleResourceGlueResponseTransfer($userCollectionResponseTransfer);
    }
}
