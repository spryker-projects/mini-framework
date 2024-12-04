<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\PaymentProvider\Communication\Plugin\AppPayment;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\CancelPaymentRequestTransfer;
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
 * @group CancelPaymentTest
 * Add your own group annotations below this line
 */
class CancelPaymentTest extends Unit
{
    public function testCancelPayment(): void
    {
        // Arrange
        $plugin = new PaymentProviderPaymentPlatformPlugin();
        $cancelPaymentRequestTransfer = $this->createMock(CancelPaymentRequestTransfer::class);

        // Act
        $result = $plugin->cancelPayment($cancelPaymentRequestTransfer);

        // Assert
        // Adjust assertions based on the expected behavior of cancelPayment
        $this->assertNotNull($result);
    }
}
