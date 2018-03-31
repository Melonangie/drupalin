<?php

// @codingStandardsIgnoreFile

/**
 * @file
 * Local development override configuration feature.
 *
 * To activate this feature, copy and rename it such that its path plus
 * filename is 'sites/default/settings.local.php'. Then, go to the bottom of
 * 'sites/default/settings.php' and uncomment the commented lines that mention
 * 'settings.local.php'.
 *
 * If you are using a site name in the path, such as 'sites/example.com', copy
 * this file to 'sites/example.com/settings.local.php', and uncomment the lines
 * at the bottom of 'sites/example.com/settings.php'.
 */
if (array_key_exists('OPENSHIFT_APP_NAME', $_SERVER)) {
  $src = $_SERVER;
} else {
  $src = $_ENV;
}
$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => $src['OPENSHIFT_APP_NAME'],
      'username' => $src['OPENSHIFT_MYSQL_DB_USERNAME'],
      'password' => $src['OPENSHIFT_MYSQL_DB_PASSWORD'],
      'host' => $src['OPENSHIFT_MYSQL_DB_HOST'],
      'port' => $src['OPENSHIFT_MYSQL_DB_PORT'],
      'driver' => 'mysql',
      'prefix' => '',
    ),
  )
