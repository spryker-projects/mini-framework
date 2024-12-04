<?php

/**
 * Copyright © 2021-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

use Rector\CodeQuality\Rector\Array_\CallableThisArrayToAnonymousFunctionRector;
use Rector\CodeQuality\Rector\If_\ConsecutiveNullCompareReturnsToNullCoalesceQueueRector;
use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src/Pyz',
        __DIR__ . '/tests/PyzTest',
    ]);

    $rectorConfig->skip([
        '*/_support/_generated/*',
    ]);

    $rectorConfig->import(SetList::CODE_QUALITY);
    $rectorConfig->import(SetList::CODING_STYLE);
    $rectorConfig->import(SetList::DEAD_CODE);
    $rectorConfig->import(SetList::STRICT_BOOLEANS);
    $rectorConfig->import(SetList::NAMING);
    $rectorConfig->import(SetList::PHP_82);
    $rectorConfig->import(SetList::TYPE_DECLARATION);
    $rectorConfig->import(SetList::EARLY_RETURN);
    $rectorConfig->import(SetList::INSTANCEOF);

    $rectorConfig->ruleWithConfiguration(ClassPropertyAssignToConstructorPromotionRector::class, [
        ClassPropertyAssignToConstructorPromotionRector::INLINE_PUBLIC => true,
    ]);

    $rectorConfig->skip([
        // Ignore this rule on the PaymentBackendApiRouteProviderPlugin as it breaks the code
        CallableThisArrayToAnonymousFunctionRector::class => [
            __DIR__ . '/src/Pyz/Glue/PaymentBackendApi/Plugin/GlueApplication/PaymentBackendApiRouteProviderPlugin.php',
            __DIR__ . '/src/Pyz/Glue/AppWebhookBackendApi/Plugin/GlueApplication/AppWebhookBackendApiRouteProviderPlugin.php',
            __DIR__ . '/src/Pyz/Glue/AppMerchantBackendApi/Plugin/GlueApplication/MerchantAppOnboardingBackendApiRouteProviderPlugin.php',
        ],
        ConsecutiveNullCompareReturnsToNullCoalesceQueueRector::class => [
            __DIR__ . '/src/Pyz/Zed/Payment/Business/MessageBroker/TenantIdentifier/TenantIdentifierExtractor.php',
        ],
    ]);
};
