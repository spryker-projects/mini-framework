<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\PaymentProvider\Communication\Plugin\AppPayment;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\RefundPaymentRequestTransfer;
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
 * @group RefundPaymentTest
 * Add your own group annotations below this line
 */
class RefundPaymentTest extends Unit
{
    public function testRefundPayment(): void
    {
        // Arrange
        $plugin = new PaymentProviderPaymentPlatformPlugin();
        $refundPaymentRequestTransfer = $this->createMock(RefundPaymentRequestTransfer::class);

        // Act
        $result = $plugin->refundPayment($refundPaymentRequestTransfer);

        // Assert
        // Adjust assertions based on the expected behavior of refundPayment
        $this->assertNotNull($result);
    }
}
