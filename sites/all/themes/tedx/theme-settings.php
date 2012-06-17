<?php
/**
 * @file
 * Form override fo theme settings.
 */

/**
 * Implements form_system_theme_settings_alter().
 */
function tedx_form_system_theme_settings_alter(&$form, $form_state) {
  $form['options_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Theme Specific Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['options_settings']['tedx_tabs'] = array(
    '#type' => 'checkbox',
    '#title' =>  t('Use the ZEN tabs'),
    '#description'   => t('Check this if you wish to replace the default tabs by the ZEN tabs'),
    '#default_value' => theme_get_setting('tedx_tabs'),
  );

  $form['options_settings']['tedx_breadcrumb'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Breadcrumb settings'),
    '#attributes'    => array('id' => 'tedx-breadcrumb'),
  );
  $form['options_settings']['tedx_breadcrumb']['tedx_breadcrumb'] = array(
    '#type'          => 'select',
    '#title'         => t('Display breadcrumb'),
    '#default_value' => theme_get_setting('tedx_breadcrumb'),
    '#options'       => array(
      'yes'   => t('Yes'),
      'admin' => t('Only in admin section'),
      'no'    => t('No'),
    ),
  );
  $form['options_settings']['tedx_breadcrumb']['tedx_breadcrumb_separator'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Breadcrumb separator'),
    '#description'   => t('Text only. Don’t forget to include spaces.'),
    '#default_value' => theme_get_setting('tedx_breadcrumb_separator'),
    '#size'          => 5,
    '#maxlength'     => 10,
    '#prefix'        => '<div id="div-tedx-breadcrumb-collapse">',
  );
  $form['options_settings']['tedx_breadcrumb']['tedx_breadcrumb_home'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Show home page link in breadcrumb'),
    '#default_value' => theme_get_setting('tedx_breadcrumb_home'),
  );
  $form['options_settings']['tedx_breadcrumb']['tedx_breadcrumb_trailing'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Append a separator to the end of the breadcrumb'),
    '#default_value' => theme_get_setting('tedx_breadcrumb_trailing'),
    '#description'   => t('Useful when the breadcrumb is placed just before the title.'),
  );
  $form['options_settings']['tedx_breadcrumb']['tedx_breadcrumb_title'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Append the content title to the end of the breadcrumb'),
    '#default_value' => theme_get_setting('tedx_breadcrumb_title'),
    '#description'   => t('Useful when the breadcrumb is not placed just before the title.'),
    '#suffix'        => '</div>',
  );
  $form['options_settings']['wireframe_mode'] = array(
    '#type' => 'checkbox',
    '#title' =>  t('Wireframe Mode - Display borders around main layout elements'),
    '#description'   => t('<a href="!link">Wireframes</a> are useful when prototyping a website.', array('!link' => 'http://www.boxesandarrows.com/view/html_wireframes_and_prototypes_all_gain_and_no_pain')),
    '#default_value' => theme_get_setting('wireframe_mode'),
  );
  $form['options_settings']['clear_registry'] = array(
    '#type' => 'checkbox',
    '#title' =>  t('Rebuild theme registry on every page.'),
    '#description' => t('During theme development, it can be very useful to continuously <a href="!link">rebuild the theme registry</a>. WARNING: this is a huge performance penalty and must be turned off on production websites.', array('!link' => 'http://drupal.org/node/173880#theme-registry')),
    '#default_value' => theme_get_setting('clear_registry'),
  );
  $form['settings']['nextevent'] = array(
    '#type' => 'fieldset',
    '#title' => t('Next event'),
    '#description' => t("Fill in the information about the next TEDx event."),
  );

  $form['settings']['nextevent']['next_event_name'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Name'),
    '#description'   => t('Insert the name of the upcoming event.'),
    '#default_value' => theme_get_setting('next_event_name'),
    '#size'          => 30,
    '#maxlength'     => 50,

  );

  $form['settings']['nextevent']['next_event_info'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Information'),
    '#description'   => t('Insert extra information about the event. E.g. location, time etc.'),
    '#default_value' => theme_get_setting('next_event_info'),
    '#size'          => 30,
    '#maxlength'     => 50,

  );

  $form['settings']['sublogo'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header settings'),
    '#description' => t("Upload the image you want to use as the background for the header."),
  );

  $logo_path = theme_get_setting('sublogo_path');
  if (file_uri_scheme($logo_path) == 'public') {
    $logo_path = file_uri_target($logo_path);
  }

  $form['settings']['sublogo']['sublogo_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Path to image'),
    '#default_value' =>  $logo_path,
  );

  $form['settings']['sublogo']['sublogo_upload'] = array(
    '#type' => 'file',
    '#title' => t('Upload image'),
  );

  $form['settings']['sublogo']['header_vimeo_code'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Vimeo code'),
    '#description'   => t('Insert the last digits of the vimeo video you would like to show in the header.'),
    '#default_value' => theme_get_setting('header_vimeo_code'),
    '#size'          => 5,
    '#maxlength'     => 10,

  );

  // We are editing the $form in place, so we don't need to return anything.
  $form['#submit'][]   = 'tedx_settings_submit';

}

/**
 * Implements settings_submit().
 */
function tedx_settings_submit($form, &$form_state) {
  $settings = array();

  if ($file = file_save_upload('sublogo_upload')) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
  }
  if (file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
    $_POST['sublogo_path'] = $form_state['values']['sublogo_path'] = $destination;
  }
}
