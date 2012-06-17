<?php
/**
 * @file
 * tedx_profile_speaker.features.inc
 */

/**
 * Implements hook_node_info().
 */
function tedx_profile_speaker_node_info() {
  $items = array(
    'speaker' => array(
      'name' => t('Speaker'),
      'base' => 'node_content',
      'description' => t('Add a speaker to the speakers listing and include additional information about the speaker.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  return $items;
}
