<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\PaymentProvider\Communication\Plugin\AppPayment;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\CapturePaymentRequestTransfer;
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
 * @group CapturePaymentTest
 * Add your own group annotations below this line
 */
class CapturePaymentTest extends Unit
{
    public function testCapturePayment(): void
    {
        // Arrange
        $plugin = new PaymentProviderPaymentPlatformPlugin();
        $capturePaymentRequestTransfer = $this->createMock(CapturePaymentRequestTransfer::class);

        // Act
        $result = $plugin->capturePayment($capturePaymentRequestTransfer);

        // Assert
        // Adjust assertions based on the expected behavior of capturePayment
        $this->assertNotNull($result);
    }
}
