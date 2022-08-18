<?php
$jobs[] = [
    'name' => 'test',
    'command' => '$PHP_BIN vendor/bin/console help -q',
    'schedule' => '*/1 * * * *',
    'enable' => true,
    'run_on_non_production' => true,
    'stores' => ['DE'],
];
