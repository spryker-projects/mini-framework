<?php

use Monolog\Logger;
use Pyz\Shared\Console\ConsoleConstants;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Shared\ErrorHandler\ErrorHandlerConstants;
use Spryker\Shared\ErrorHandler\ErrorRenderer\WebExceptionErrorRenderer;
use Spryker\Shared\Kernel\KernelConstants;
use Spryker\Shared\Kernel\Store;
use Spryker\Shared\Log\LogConstants;
use Spryker\Shared\Propel\PropelConstants;
use Spryker\Shared\PropelOrm\PropelOrmConstants;

// ############################################################################
// ############################## DEVELOPMENT IN DEVVM ########################
// ############################################################################

$domain = getenv('VM_PROJECT') ?: 'suite-nonsplit';
$storeLowerCase = strtolower(APPLICATION_STORE);
$stores = array_combine(Store::getInstance()->getAllowedStores(), Store::getInstance()->getAllowedStores());

// ----------------------------------------------------------------------------
// ------------------------------ CODEBASE ------------------------------------
// ----------------------------------------------------------------------------

$config[KernelConstants::STORE_PREFIX] = 'DEV';

// >>> Debug
$config[ApplicationConstants::ENABLE_APPLICATION_DEBUG]
    = true;

$config[ConsoleConstants::ENABLE_DEVELOPMENT_CONSOLE_COMMANDS] = true;

// >>> ErrorHandler
$config[ErrorHandlerConstants::DISPLAY_ERRORS] = true;
$config[ErrorHandlerConstants::ERROR_RENDERER] = WebExceptionErrorRenderer::class;
$config[ErrorHandlerConstants::IS_PRETTY_ERROR_HANDLER_ENABLED] = true;

// ----------------------------------------------------------------------------
// ------------------------------ SECURITY ------------------------------------
// ----------------------------------------------------------------------------


$config[KernelConstants::DOMAIN_WHITELIST] = array_merge($config[KernelConstants::DOMAIN_WHITELIST]);

// ----------------------------------------------------------------------------
// ------------------------------ SERVICES ------------------------------------
// ----------------------------------------------------------------------------

require 'common/config_services-devvm.php';
require 'common/config_logs-files.php';

// >>> DATABASE
$config[PropelConstants::ZED_DB_USERNAME] = 'development';
$config[PropelConstants::ZED_DB_PASSWORD] = 'mate20mg';
$config[PropelConstants::ZED_DB_DATABASE] = ''; // Specified in codebucket specific configs: config_default-development_*.php
$config[PropelOrmConstants::PROPEL_SHOW_EXTENDED_EXCEPTION] = true;

$config[LogConstants::LOG_LEVEL] = Logger::INFO;
