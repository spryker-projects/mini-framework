<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\PaymentProvider\Communication\Plugin\AppPayment;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\PaymentMethodConfigurationRequestTransfer;
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
 * @group ConfigurePaymentMethodsTest
 * Add your own group annotations below this line
 */
class ConfigurePaymentMethodsTest extends Unit
{
    public function testConfigurePaymentMethods(): void
    {
        // Arrange
        $plugin = new PaymentProviderPaymentPlatformPlugin();
        $paymentMethodConfigurationRequestTransfer = $this->createMock(PaymentMethodConfigurationRequestTransfer::class);

        // Act
        $result = $plugin->configurePaymentMethods($paymentMethodConfigurationRequestTransfer);

        // Assert
        // Adjust assertions based on the expected behavior of configurePaymentMethods
        $this->assertNotNull($result);
    }
}
