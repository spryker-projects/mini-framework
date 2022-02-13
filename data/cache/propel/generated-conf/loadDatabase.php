<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->initDatabaseMaps(array (
  'zed' => 
  array (
    0 => '\\Orm\\Zed\\Locale\\Persistence\\Map\\SpyLocaleTableMap',
    1 => '\\Orm\\Zed\\Queue\\Persistence\\Map\\SpyQueueProcessTableMap',
    2 => '\\Orm\\Zed\\Store\\Persistence\\Map\\SpyStoreTableMap',
    3 => '\\Orm\\Zed\\Test\\Persistence\\Map\\SpyTestTableMap',
  ),
));
