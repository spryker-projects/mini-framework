<?php

use Spryker\Shared\Propel\PropelConstants;
use Spryker\Zed\Propel\PropelConfig;

require 'config_default-ci.php';

$config[PropelConstants::ZED_DB_ENGINE] = PropelConfig::DB_ENGINE_MYSQL;
$config[PropelConstants::ZED_DB_USERNAME] = 'root';
$config[PropelConstants::ZED_DB_PASSWORD] = getenv('DB_PASSWORD') ?: '';
$config[PropelConstants::ZED_DB_DATABASE] = 'DE_test_zed';
$config[PropelConstants::ZED_DB_HOST] = '127.0.0.1';
$config[PropelConstants::USE_SUDO_TO_MANAGE_DATABASE] = false;
$config[PropelConstants::ZED_DB_PORT] = 3306;
