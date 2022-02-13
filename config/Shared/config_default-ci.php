<?php

use Monolog\Logger;
use Pyz\Shared\Console\ConsoleConstants;
use Spryker\Shared\ErrorHandler\ErrorHandlerConstants;
use Spryker\Shared\ErrorHandler\ErrorRenderer\WebExceptionErrorRenderer;
use Spryker\Shared\Kernel\KernelConstants;
use Spryker\Shared\Kernel\Store;
use Spryker\Shared\Log\LogConstants;

// ############################################################################
// ############################## TESTING IN CI ###############################
// ############################################################################

$stores = array_combine(Store::getInstance()->getAllowedStores(), Store::getInstance()->getAllowedStores());

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
    'localhost',
];

$config[KernelConstants::DOMAIN_WHITELIST] = array_merge($trustedHosts, $config[KernelConstants::DOMAIN_WHITELIST]);

// ----------------------------------------------------------------------------
// ------------------------------ SERVICES ------------------------------------
// ----------------------------------------------------------------------------

require 'common/config_logs-ci-errors.php';
require 'common/config_logs-ci-info.php';

// ---------- LOGGER

$config[LogConstants::LOG_LEVEL] = Logger::CRITICAL;
