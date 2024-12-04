<?php

/**
 * This configuration file is used when running tests locally
 */

use Monolog\Logger;
use Spryker\Shared\Log\LogConstants;
use Spryker\Shared\MessageBroker\MessageBrokerConstants;
use Spryker\Shared\MessageBrokerAws\MessageBrokerAwsConstants;
use Spryker\Shared\Propel\PropelConstants;
use Spryker\Shared\Queue\QueueConstants;

$aopInfrastructureConfiguration = json_decode(html_entity_decode((string)getenv('SPRYKER_AOP_INFRASTRUCTURE')), true);
$config[MessageBrokerAwsConstants::SQS_AWS_REGION] = (string)getenv('AWS_DEFAULT_REGION');
$config[MessageBrokerAwsConstants::HTTP_SENDER_CONFIG] = $aopInfrastructureConfiguration['SPRYKER_MESSAGE_BROKER_HTTP_SENDER_CONFIG'] ?? [];

$config[MessageBrokerConstants::CHANNEL_TO_TRANSPORT_MAP] = [
    'payment-events' => 'sns',
    'payment-method-commands' => 'sns',
    'payment-commands' => 'sqs',
];

$config[MessageBrokerAwsConstants::CHANNEL_TO_SENDER_TRANSPORT_MAP] = [
    'payment-events' => 'sns',
    'payment-method-commands' => 'sns',
];

$config[MessageBrokerAwsConstants::CHANNEL_TO_RECEIVER_TRANSPORT_MAP] = [
    'payment-commands' => 'sqs',
];

$config[LogConstants::LOG_LEVEL] = Logger::INFO;
$config[PropelConstants::LOG_FILE_PATH]
    = $config[LogConstants::LOG_FILE_PATH]
    = $config[LogConstants::LOG_FILE_PATH_ZED]
    = $config[LogConstants::LOG_FILE_PATH_GLUE]
    = $config[QueueConstants::QUEUE_WORKER_OUTPUT_FILE_NAME]
    = __DIR__ . '/../../data/logs/development/ZED/zed.log';
$config[LogConstants::EXCEPTION_LOG_FILE_PATH_ZED]
    = $config[LogConstants::EXCEPTION_LOG_FILE_PATH_GLUE]
    = __DIR__ . '/../../data/logs/development/ZED/zed.log';
