<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\PaymentProvider\Communication\Plugin\AppPayment;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\InitializePaymentRequestTransfer;
use Pyz\Zed\PaymentProvider\Communication\Plugin\AppPayment\PaymentProviderPaymentPlatformPlugin;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group PaymentProvider
 * @group Communication
 * @group Plugin
 * @group AppPayment
 * @group InitializePaymentTest
 * Add your own group annotations below this line
 */
class InitializePaymentTest extends Unit
{
    public function testInitializePayment(): void
    {
        // Arrange
        $plugin = new PaymentProviderPaymentPlatformPlugin();
        $initializePaymentRequestTransfer = $this->createMock(InitializePaymentRequestTransfer::class);

        // Act
        $result = $plugin->initializePayment($initializePaymentRequestTransfer);

        // Assert
        // Adjust assertions based on the expected behavior of initializePayment
        $this->assertNotNull($result);
    }
}
