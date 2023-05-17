<?php

/*
 * Snippet to add on commands that we wnat to send logs to Cloudwatch.
 * Issue and solution reported on https://spryker.atlassian.net/browse/PBC-1349.
 */
$sendOutputToJenkinsCommandSnippet = ' 2>&1 | tr "\n" "\0" | xargs -0 printf "${JOB_NAME} ${BUILD_NUMBER} %s\n" | tee -a /proc/1/fd/1';

$stores = require(APPLICATION_ROOT_DIR . '/config/Shared/stores.php');

$allStores = array_keys($stores);

$consolePath = 'vendor/bin/console';

$jobs[] = [
    'name' => 'test',
    'command' => '$PHP_BIN ' . $consolePath . ' help -q',
    'schedule' => '*/1 * * * *',
    'enable' => true,
    'run_on_non_production' => true,
    'stores' => $allStores,
];
