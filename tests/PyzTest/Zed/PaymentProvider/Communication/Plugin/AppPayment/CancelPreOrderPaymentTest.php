<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\PaymentProvider\Communication\Plugin\AppPayment;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\CancelPreOrderPaymentRequestTransfer;
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
 * @group CancelPreOrderPaymentTest
 * Add your own group annotations below this line
 */
class CancelPreOrderPaymentTest extends Unit
{
    public function testCancelPreOrderPayment(): void
    {
        // Arrange
        $plugin = new PaymentProviderPaymentPlatformPlugin();
        $cancelPreOrderPaymentRequestTransfer = $this->createMock(CancelPreOrderPaymentRequestTransfer::class);

        // Act
        $result = $plugin->cancelPreOrderPayment($cancelPreOrderPaymentRequestTransfer);

        // Assert
        // Adjust assertions based on the expected behavior of cancelPreOrderPayment
        $this->assertNotNull($result);
    }
}
