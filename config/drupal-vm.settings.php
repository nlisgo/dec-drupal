<?php

$databases['default']['default'] = [
  'database' => 'dec_drupal',
  'username' => 'dec_drupal',
  'password' => 'dec_drupal',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];

$settings['trusted_host_patterns'] = [
  '^dec\-drupal\.local$',
  '^[a-z0-9\-]+\.vagrantshare\.com$',
];

if (file_exists(DRUPAL_ROOT . '/../config/local.services.yml')) {
  $settings['container_yamls'][] = DRUPAL_ROOT . '/../config/local.services.yml';
}

$settings['file_private_path'] = './../private';
