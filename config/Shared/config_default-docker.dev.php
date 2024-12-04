<?php

use Monolog\Logger;
use Pyz\Shared\Console\ConsoleConstants;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Shared\GlueBackendApiApplication\GlueBackendApiApplicationConstants;
use Spryker\Shared\Kernel\KernelConstants;
use Spryker\Shared\Log\LogConstants;
use Spryker\Shared\MessageBroker\MessageBrokerConstants;
use Spryker\Shared\MessageBrokerAws\MessageBrokerAwsConstants;
use Spryker\Shared\OauthClient\OauthClientConstants;
use Spryker\Shared\Propel\PropelConstants;
use Spryker\Shared\PropelOrm\PropelOrmConstants;
use Spryker\Shared\Router\RouterConstants;
use Spryker\Zed\MessageBrokerAws\MessageBrokerAwsConfig;
use Spryker\Zed\OauthDummy\OauthDummyConfig;

// ############################################################################
// ############################## DEVELOPMENT CONFIGURATION ###################
// ############################################################################

// ----------------------------------------------------------------------------
// ------------------------------ CODEBASE ------------------------------------
// ----------------------------------------------------------------------------

$config[ApplicationConstants::ENABLE_APPLICATION_DEBUG] = (bool)getenv('SPRYKER_DEBUG_ENABLED');
$config[PropelConstants::PROPEL_DEBUG] = (bool)getenv('SPRYKER_DEBUG_PROPEL_ENABLED');

$config[KernelConstants::ENABLE_CONTAINER_OVERRIDING] = (bool)getenv('SPRYKER_TESTING_ENABLED');
$config[ConsoleConstants::ENABLE_DEVELOPMENT_CONSOLE_COMMANDS] = true;

$sprykerBackendHost = getenv('SPRYKER_BE_HOST') ?: (getenv('SPRYKER_ZED_HOST') ?: 'stripe.spryker.local');
$config[GlueBackendApiApplicationConstants::GLUE_BACKEND_API_HOST] = getenv('SPRYKER_GLUE_BACKEND_HOST') ?: 'glue-backend.apps.spryker.local';

// ----------------------------------------------------------------------------
// ------------------------------ BACKOFFICE ----------------------------------
// ----------------------------------------------------------------------------
$config[ApplicationConstants::BASE_URL_ZED] = sprintf(
    'http://%s',
    $sprykerBackendHost,
);

$config[RouterConstants::ZED_IS_SSL_ENABLED] = false;

// ----------------------------------------------------------------------------
// ------------------------------ SERVICES ------------------------------------
// ----------------------------------------------------------------------------

$config[PropelOrmConstants::PROPEL_SHOW_EXTENDED_EXCEPTION] = true;
$config[LogConstants::LOG_LEVEL] = getenv('SPRYKER_DEBUG_ENABLED') ? Logger::DEBUG : Logger::INFO;

$config[MessageBrokerConstants::CHANNEL_TO_TRANSPORT_MAP] = [
    'payment-events' => MessageBrokerAwsConfig::SNS_TRANSPORT,
    'payment-method-commands' => MessageBrokerAwsConfig::SNS_TRANSPORT,
    'payment-commands' => MessageBrokerAwsConfig::SQS_TRANSPORT,
];

$config[MessageBrokerAwsConstants::CHANNEL_TO_SENDER_TRANSPORT_MAP] = [
    'payment-events' => MessageBrokerAwsConfig::SNS_TRANSPORT,
    'payment-method-commands' => MessageBrokerAwsConfig::SNS_TRANSPORT,
];

$config[MessageBrokerAwsConstants::CHANNEL_TO_RECEIVER_TRANSPORT_MAP] = [
    'payment-commands' => MessageBrokerAwsConfig::SQS_TRANSPORT,
];

//// >>> OauthClient
$config[OauthClientConstants::OAUTH_PROVIDER_NAME_FOR_MESSAGE_BROKER] = OauthDummyConfig::PROVIDER_NAME;
