<?php
/**
 * @file
 * tedx_profile_page.features.inc
 */

/**
 * Implements hook_node_info().
 */
function tedx_profile_page_node_info() {
  $items = array(
    'page' => array(
      'name' => t('Page'),
      'base' => 'node_content',
      'description' => t('Add a basic page to the website.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
