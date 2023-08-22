<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\HelloWorldBackendApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResourceTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractController;
use Spryker\Zed\MessageBroker\Business\MessageBrokerFacade;

class HelloWorldResourceController extends AbstractController
{
    /**
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function getHelloWorldAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $glueResponseTransfer = new GlueResponseTransfer();
        $glueResponseTransfer->setContent('Hello World');

        $resource = new GlueResourceTransfer();
        $resource->setType('HelloWorld');
        $glueResponseTransfer->addResource($resource);

        (new MessageBrokerFacade())->sendMessage((new HelloWorldTransfer())->setMessage('Hello World'));

        return $glueResponseTransfer;
    }
}
