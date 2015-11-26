<?php

$update_free_access = FALSE;

$local_settings = dirname(__FILE__) . '/settings.local.php';
if (file_exists($local_settings)) {
  require_once($local_settings);
}

// StackSight start config
  define('STACKSIGHT_APP_ID','5657050dac846c226f72d43f');
  define('STACKSIGHT_TOKEN', 'ss-d6502862bfcdb2813fdd71aa805c5b2bad47e71ec84275d360afc554518a0459');
  require_once(DRUPAL_ROOT . '/sites/all/modules/contrib/stacksight' . '/stacksight-php-sdk/bootstrap-drupal.php');
// StackSight end config
