<?php
$update_free_access = FALSE;

$local_settings = dirname(__FILE__) . '/settings.local.php';
if (file_exists($local_settings)) {
  require_once($local_settings);
}

$vars= json_decode(base64_decode(getenv("PLATFORM_VARIABLES")));
if (isset($vars->STACKSIGHT_APP_ID)){
  $stacksight_bootstrap =  DRUPAL_ROOT . '/sites/all/modules/contrib/stacksight' . '/stacksight-php-sdk/bootstrap-drupal.php';
  if (file_exists($stacksight_bootstrap)) {
  define('STACKSIGHT_APP_ID',$vars->STACKSIGHT_APP_ID);
  define('STACKSIGHT_TOKEN', $vars->STACKSIGHT_TOKEN);
  require_once(DRUPAL_ROOT . '/sites/all/modules/contrib/stacksight' . '/stacksight-php-sdk/bootstrap-drupal.php');
  } else {
    trigger_error ("Could not find Stacksight module in $stacksight_bootstrap", E_USER_WARNING);
  }
}
