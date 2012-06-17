<?php
/**
 * @file
 * tedx_profile_video.features.inc
 */

/**
 * Implements hook_node_info().
 */
function tedx_profile_video_node_info() {
  $items = array(
    'video' => array(
      'name' => t('Video'),
      'base' => 'node_content',
      'description' => t('Add a TEDx video.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
