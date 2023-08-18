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
class GreetResourceController extends AbstractController
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        // @todo refactor the method according to your needs
        $userCriteriaTransfer = $this->getFactory()->createGlueRequestUserMapper()->mapGlueRequestTransferToUserCriteriaTransfer($glueRequestTransfer);
        $userCollectionTransfer = $this->getFactory()->getHelloWorldFacade()->getUserCollection($userCriteriaTransfer);

        return $this->getFactory()->createGlueResponseUserMapper()->mapUserCollectionTransferToSingleResourceGlueResponseTransfer($userCollectionTransfer);
    }
}
