<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\PaymentProvider\Communication\Plugin\AppPayment;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\PaymentStatusRequestTransfer;
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
 * @group GetPaymentStatusTest
 * Add your own group annotations below this line
 */
class GetPaymentStatusTest extends Unit
{
    public function testGetPaymentStatus(): void
    {
        // Arrange
        $plugin = new PaymentProviderPaymentPlatformPlugin();
        $paymentStatusRequestTransfer = $this->createMock(PaymentStatusRequestTransfer::class);

        // Act
        $result = $plugin->getPaymentStatus($paymentStatusRequestTransfer);

        // Assert
        // Adjust assertions based on the expected behavior of getPaymentStatus
        $this->assertNotNull($result);
    }
}
