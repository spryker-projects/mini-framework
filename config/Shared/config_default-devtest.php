<?php

use Monolog\Logger;
use Pyz\Shared\Console\ConsoleConstants;
use Spryker\Shared\ErrorHandler\ErrorHandlerConstants;
use Spryker\Shared\ErrorHandler\ErrorRenderer\WebExceptionErrorRenderer;
use Spryker\Shared\Kernel\KernelConstants;
use Spryker\Shared\Kernel\Store;
use Spryker\Shared\Log\LogConstants;
use Spryker\Shared\Propel\PropelConstants;

// ############################################################################
// ############################## TESTING IN DEVVM ############################
// ############################################################################

$domain = getenv('VM_PROJECT') ?: 'suite-nonsplit';
$storeLowerCase = strtolower(APPLICATION_STORE);
$stores = array_combine(Store::getInstance()->getAllowedStores(), Store::getInstance()->getAllowedStores());
$glueHost = sprintf('glue-test.de.%s.local', $domain);

// ----------------------------------------------------------------------------
// ------------------------------ CODEBASE ------------------------------------
// ----------------------------------------------------------------------------

$config[KernelConstants::RESOLVABLE_CLASS_NAMES_CACHE_ENABLED] = false;
$config[KernelConstants::RESOLVED_INSTANCE_CACHE_ENABLED] = false;

// >>> Dev tools
$config[KernelConstants::ENABLE_CONTAINER_OVERRIDING] = true;
$config[ConsoleConstants::ENABLE_DEVELOPMENT_CONSOLE_COMMANDS] = true;

// >>> ErrorHandler
$config[ErrorHandlerConstants::DISPLAY_ERRORS] = true;
$config[ErrorHandlerConstants::ERROR_RENDERER] = WebExceptionErrorRenderer::class;
$config[ErrorHandlerConstants::IS_PRETTY_ERROR_HANDLER_ENABLED] = true;

// ----------------------------------------------------------------------------
// ------------------------------ SECURITY ------------------------------------
// ----------------------------------------------------------------------------

$trustedHosts
    = [
    $glueHost,
    'localhost',
];

$config[KernelConstants::DOMAIN_WHITELIST] = array_merge($trustedHosts, $config[KernelConstants::DOMAIN_WHITELIST]);

// ----------------------------------------------------------------------------
// ------------------------------ SERVICES ------------------------------------
// ----------------------------------------------------------------------------

require 'common/config_services-devvm.php';
require 'common/config_logs-files.php';
require 'common/config_logs-ci-errors.php';

// >>> DATABASE
$config[PropelConstants::ZED_DB_USERNAME] = 'devtest';
$config[PropelConstants::ZED_DB_PASSWORD] = 'mate20mg';
$config[PropelConstants::ZED_DB_DATABASE] = sprintf('%s_devtest_zed', APPLICATION_CODE_BUCKET);

// ---------- LOGGER

$config[LogConstants::LOG_LEVEL] = Logger::CRITICAL;
