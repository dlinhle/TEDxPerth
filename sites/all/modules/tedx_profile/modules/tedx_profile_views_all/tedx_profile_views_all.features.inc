<?php
/**
 * @file
 * tedx_profile_views_all.features.inc
 */

/**
 * Implements hook_views_api().
 */
function tedx_profile_views_all_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}
