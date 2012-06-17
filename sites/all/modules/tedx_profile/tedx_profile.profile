<?php
/**
 * @file
 * Implements hook_form_alter().
 * Allows the profile to alter the site configuration form.
 */

/**
 * Implements hook_form_alter().
 * Set installation profile name for installation step1.
 **/
function tedx_profile_form_install_configure_form_alter(&$form, $form_state) {
  // Set a default name for the dev site.
  $form['site_information']['site_name']['#default_value'] = t('TEDx installation profile');
}
