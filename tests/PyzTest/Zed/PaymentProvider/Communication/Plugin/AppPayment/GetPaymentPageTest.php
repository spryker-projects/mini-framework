<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\PaymentProvider\Communication\Plugin\AppPayment;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\PaymentPageRequestTransfer;
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
 * @group GetPaymentPageTest
 * Add your own group annotations below this line
 */
class GetPaymentPageTest extends Unit
{
    public function testGetPaymentPage(): void
    {
        // Arrange
        $plugin = new PaymentProviderPaymentPlatformPlugin();
        $paymentPageRequestTransfer = $this->createMock(PaymentPageRequestTransfer::class);

        // Act
        $result = $plugin->getPaymentPage($paymentPageRequestTransfer);

        // Assert
        // Adjust assertions based on the expected behavior of getPaymentPage
        $this->assertNotNull($result);
    }
}
