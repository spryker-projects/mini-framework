<?php

$rootDir = dirname(__FILE__, 4);
$consolePath = $rootDir . '/vendor/bin/console';

$console = static function ($command) use ($consolePath) {
    return '$PHP_BIN ' . $consolePath . ' ' . $command;
};

$loggable = static function ($command) use ($rootDir) {
    return $rootDir . '/src/bin/loggable.sh ' . $command;
};

$stores = require(APPLICATION_ROOT_DIR . '/config/Shared/stores.php');

$allStores = array_keys($stores);

$jobs[] = [
    'name' => 'message-broker-consume-http-channel-transport',
    'command' => $loggable($console('message-broker:consume --transport=http-channel --time-limit=90 --sleep=30')),
    // odd minutes
    'schedule' => '1-59/2 * * * *',
    'enable' => true,
    'stores' => $allStores,
];
