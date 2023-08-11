<?php

use Monolog\Logger;
use Pyz\Shared\Console\ConsoleConstants;
use Pyz\Shared\Scheduler\SchedulerConfig;
use Spryker\Glue\Log\Plugin\GlueLoggerConfigPlugin;
use Spryker\Shared\Application\Log\Config\SprykerLoggerConfig;
use Spryker\Shared\ErrorHandler\ErrorHandlerConstants;
use Spryker\Shared\ErrorHandler\ErrorRenderer\WebHtmlErrorRenderer;
use Spryker\Shared\GlueBackendApiApplication\GlueBackendApiApplicationConstants;
use Spryker\Shared\GlueJsonApiConvention\GlueJsonApiConventionConstants;
use Spryker\Shared\Kernel\KernelConstants;
use Spryker\Shared\Log\LogConstants;
use Spryker\Shared\Monitoring\MonitoringConstants;
use Spryker\Shared\Propel\PropelConstants;
use Spryker\Shared\Queue\QueueConstants;
use Spryker\Shared\Scheduler\SchedulerConstants;
use Spryker\Shared\SchedulerJenkins\SchedulerJenkinsConfig;
use Spryker\Shared\SchedulerJenkins\SchedulerJenkinsConstants;
use Spryker\Shared\ZedRequest\ZedRequestConstants;
use Spryker\Zed\Log\Communication\Plugin\ZedLoggerConfigPlugin;
use Spryker\Zed\Propel\PropelConfig;

// ############################################################################
// ############################## PRODUCTION CONFIGURATION ####################
// ############################################################################

// ----------------------------------------------------------------------------
// ------------------------------ CODEBASE: TO REMOVE -------------------------
// ----------------------------------------------------------------------------


$config[KernelConstants::RESOLVABLE_CLASS_NAMES_CACHE_ENABLED] = true;
$config[KernelConstants::RESOLVED_INSTANCE_CACHE_ENABLED] = true;

$config[KernelConstants::PROJECT_NAMESPACE] = 'Pyz';
$config[KernelConstants::PROJECT_NAMESPACES] =
    $config[GlueBackendApiApplicationConstants::PROJECT_NAMESPACES] = [
    'Pyz',
];
$config[KernelConstants::CORE_NAMESPACES] = [
    'SprykerShop',
    'SprykerEco',
    'Spryker',
    'SprykerSdk',
];

// >>> DEV TOOLS

$config[ConsoleConstants::ENABLE_DEVELOPMENT_CONSOLE_COMMANDS] = (bool)getenv('DEVELOPMENT_CONSOLE_COMMANDS');

// >>> ERROR HANDLING
$config[ErrorHandlerConstants::ERROR_RENDERER] = WebHtmlErrorRenderer::class;

// >>> MONITORING

$config[MonitoringConstants::IGNORABLE_TRANSACTIONS] = [
    '_profiler',
    '_wdt',
];

// ----------------------------------------------------------------------------
// ------------------------------ SECURITY ------------------------------------
// ----------------------------------------------------------------------------

$config[ZedRequestConstants::ZED_API_SSL_ENABLED] = (bool)getenv('SPRYKER_ZED_SSL_ENABLED');
$config[KernelConstants::DOMAIN_WHITELIST] = array_filter(explode(',', getenv('SPRYKER_TRUSTED_HOSTS') ?: ''));
$config[KernelConstants::STRICT_DOMAIN_REDIRECT] = true;

//$config[HttpConstants::ZED_HTTP_STRICT_TRANSPORT_SECURITY_ENABLED]
//    = $config[HttpConstants::YVES_HTTP_STRICT_TRANSPORT_SECURITY_ENABLED]
//    = $config[HttpConstants::GLUE_HTTP_STRICT_TRANSPORT_SECURITY_ENABLED]
//    = true;
//$config[HttpConstants::ZED_HTTP_STRICT_TRANSPORT_SECURITY_CONFIG]
//    = $config[HttpConstants::YVES_HTTP_STRICT_TRANSPORT_SECURITY_CONFIG]
//    = $config[HttpConstants::GLUE_HTTP_STRICT_TRANSPORT_SECURITY_CONFIG]
//    = [
//    'max_age' => 31536000,
//    'include_sub_domains' => true,
//    'preload' => true,
//];

$config[LogConstants::LOG_SANITIZE_FIELDS] = [
    'password',
];

// ----------------------------------------------------------------------------
// ------------------------------ SERVICES ------------------------------------
// ----------------------------------------------------------------------------

// >>> DATABASE

$config[PropelConstants::ZED_DB_ENGINE]
    = strtolower(getenv('SPRYKER_DB_ENGINE') ?: '') ?: PropelConfig::DB_ENGINE_MYSQL;
$config[PropelConstants::ZED_DB_HOST] = getenv('SPRYKER_DB_HOST');
$config[PropelConstants::ZED_DB_PORT] = getenv('SPRYKER_DB_PORT');
$config[PropelConstants::ZED_DB_USERNAME] = getenv('SPRYKER_DB_USERNAME');
$config[PropelConstants::ZED_DB_PASSWORD] = getenv('SPRYKER_DB_PASSWORD');
$config[PropelConstants::ZED_DB_DATABASE] = getenv('SPRYKER_DB_DATABASE');
$config[PropelConstants::ZED_DB_REPLICAS] = json_decode(getenv('SPRYKER_DB_REPLICAS') ?: '[]', true);
$config[PropelConstants::USE_SUDO_TO_MANAGE_DATABASE] = false;

// >>> LOGGING

// Due to some deprecation notices we silence all deprecations for the time being
$config[ErrorHandlerConstants::ERROR_LEVEL] = E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED;
$config[ErrorHandlerConstants::ERROR_LEVEL_LOG_ONLY] = E_DEPRECATED | E_USER_DEPRECATED;

$config[LogConstants::LOGGER_CONFIG] = SprykerLoggerConfig::class;
$config[LogConstants::LOGGER_CONFIG_ZED] = ZedLoggerConfigPlugin::class;
$config[LogConstants::LOGGER_CONFIG_GLUE] = GlueLoggerConfigPlugin::class;

$config[LogConstants::LOG_QUEUE_NAME] = 'log-queue';
$config[LogConstants::LOG_ERROR_QUEUE_NAME] = 'error-log-queue';

$config[LogConstants::LOG_LEVEL] = Logger::INFO;
$config[PropelConstants::LOG_FILE_PATH]
    = $config[LogConstants::LOG_FILE_PATH]
    = $config[LogConstants::LOG_FILE_PATH_ZED]
    = $config[LogConstants::LOG_FILE_PATH_GLUE]
    = $config[QueueConstants::QUEUE_WORKER_OUTPUT_FILE_NAME]
    = getenv('SPRYKER_LOG_STDOUT') ?: 'php://stderr';
$config[LogConstants::EXCEPTION_LOG_FILE_PATH_ZED]
    = $config[LogConstants::EXCEPTION_LOG_FILE_PATH_GLUE]
    = getenv('SPRYKER_LOG_STDERR') ?: 'php://stderr';

// ----------------------------------------------------------------------------
// ------------------------------ Glue Backend API ----------------------------
// ----------------------------------------------------------------------------
$sprykerGlueBackendHost = getenv('SPRYKER_GLUE_BACKEND_HOST');
$config[GlueBackendApiApplicationConstants::GLUE_BACKEND_API_HOST] = $sprykerGlueBackendHost;
$config[GlueBackendApiApplicationConstants::PROJECT_NAMESPACES] = [
    'Pyz',
];
$config[GlueBackendApiApplicationConstants::GLUE_BACKEND_CORS_ALLOW_ORIGIN] = getenv('SPRYKER_GLUE_APPLICATION_CORS_ALLOW_ORIGIN') ?: '*';

// ----------------------------------------------------------------------------
// ------------------------------ Glue Storefront API -------------------------
// ----------------------------------------------------------------------------
$sprykerGlueStorefrontHost = getenv('SPRYKER_GLUE_STOREFRONT_HOST');
$gluePort = (int)(getenv('SPRYKER_API_PORT')) ?: 443;
$protocol = $gluePort === 433 ? 'https' : 'http';
$config[GlueJsonApiConventionConstants::GLUE_DOMAIN] = sprintf(
    '%s://%s',
    $protocol,
    $sprykerGlueStorefrontHost ?: $sprykerGlueBackendHost ?: 'localhost',
);

// ----------------------------------------------------------------------------
// ------------------------------ Scheduler -----------------------------------
// ----------------------------------------------------------------------------
$config[SchedulerConstants::ENABLED_SCHEDULERS] = [
    SchedulerConfig::SCHEDULER_JENKINS,
];
$config[SchedulerJenkinsConstants::JENKINS_CONFIGURATION] = [
    SchedulerConfig::SCHEDULER_JENKINS => [
        SchedulerJenkinsConfig::SCHEDULER_JENKINS_CSRF_ENABLED => (bool)getenv('SPRYKER_JENKINS_CSRF_PROTECTION_ENABLED'),
        SchedulerJenkinsConfig::SCHEDULER_JENKINS_BASE_URL => sprintf(
            '%s://%s:%s/',
            getenv('SPRYKER_SCHEDULER_PROTOCOL') ?: 'http',
            getenv('SPRYKER_SCHEDULER_HOST'),
            getenv('SPRYKER_SCHEDULER_PORT'),
        ),
    ],
];

$config[SchedulerJenkinsConstants::JENKINS_TEMPLATE_PATH] = getenv('SPRYKER_JENKINS_TEMPLATE_PATH') ?: null;
