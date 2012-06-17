<?php
/**
 * @file
 * tedx_profile_speaker.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function tedx_profile_speaker_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially. */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_basicinfo|node|speaker|form';
  $field_group->group_name = 'group_basicinfo';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'speaker';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Basic information',
    'weight' => '0',
    'children' => array(
      0 => 'group_name',
      1 => 'group_info',
      2 => 'group_image',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_basicinfo|node|speaker|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially. */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_facebook|node|speaker|form';
  $field_group->group_name = 'group_facebook';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'speaker';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_socialmedia';
  $field_group->data = array(
    'label' => 'Facebook',
    'weight' => '7',
    'children' => array(
      0 => 'field_facebook',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_facebook|node|speaker|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially. */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_googleplus|node|speaker|form';
  $field_group->group_name = 'group_googleplus';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'speaker';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_socialmedia';
  $field_group->data = array(
    'label' => 'Google+',
    'weight' => '6',
    'children' => array(
      0 => 'field_googleplus',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_googleplus|node|speaker|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially. */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_image|node|speaker|form';
  $field_group->group_name = 'group_image';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'speaker';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_basicinfo';
  $field_group->data = array(
    'label' => 'Image',
    'weight' => '10',
    'children' => array(
      0 => 'field_image',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'label' => 'Image',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_image|node|speaker|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially. */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_info|node|speaker|form';
  $field_group->group_name = 'group_info';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'speaker';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_basicinfo';
  $field_group->data = array(
    'label' => 'Info',
    'weight' => '9',
    'children' => array(
      0 => 'body',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'label' => 'Info',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_info|node|speaker|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially. */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_linkedin|node|speaker|form';
  $field_group->group_name = 'group_linkedin';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'speaker';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_socialmedia';
  $field_group->data = array(
    'label' => 'LinkedIn',
    'weight' => '8',
    'children' => array(
      0 => 'field_linkedin',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_linkedin|node|speaker|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially. */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_socialmedia|node|speaker|form';
  $field_group->group_name = 'group_socialmedia';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'speaker';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Social media',
    'weight' => '4',
    'children' => array(
      0 => 'group_googleplus',
      1 => 'group_facebook',
      2 => 'group_linkedin',
      3 => 'group_twitter',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_socialmedia|node|speaker|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially. */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_twitter|node|speaker|form';
  $field_group->group_name = 'group_twitter';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'speaker';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_socialmedia';
  $field_group->data = array(
    'label' => 'Twitter',
    'weight' => '9',
    'children' => array(
      0 => 'field_twitter',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_twitter|node|speaker|form'] = $field_group;

  return $export;
}
