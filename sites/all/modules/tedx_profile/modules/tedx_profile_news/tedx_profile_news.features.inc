<?php
/**
 * @file
 * tedx_profile_news.features.inc
 */

/**
 * Implements hook_node_info().
 */
function tedx_profile_news_node_info() {
  $items = array(
    'news' => array(
      'name' => t('News'),
      'base' => 'node_content',
      'description' => t('Add a news article to the website.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
