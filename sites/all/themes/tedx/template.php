<?php
/**
 * @file
 * Overrides drupal html output.
 */

// Add Zen Tabs styles.
if (theme_get_setting('tedx_tabs')) {
  drupal_add_css(drupal_get_path('theme', 'tedx') . '/css/tabs.css');
}

/**
 * Implements hook_preprocess().
 **/
function tedx_preprocess_page(&$vars, $hook) {
  if (isset($vars['node_title'])) {
    $vars['title'] = $vars['node_title'];
  }
  // Adding a class to #page in wireframe mode.
  if (theme_get_setting('wireframe_mode')) {
    $vars['classes_array'][] = 'wireframe-mode';
  }
  // Adding classes wether #navigation is here or not.
  if (!empty($vars['main_menu']) or !empty($vars['sub_menu'])) {
    $vars['classes_array'][] = 'with-navigation';
  }
  if (!empty($vars['secondary_menu'])) {
    $vars['classes_array'][] = 'with-subnav';
  }
}

/**
 * Implements of hook_preprocess().
 **/
function tedx_preprocess_node(&$vars) {
  // Add a striping class.
  $vars['classes_array'][] = 'node-' . $vars['zebra'];
}

/**
 * Implements of hook_preprocess().
 **/
function tedx_preprocess_block(&$vars, $hook) {
  // Add a striping class.
  $vars['classes_array'][] = 'block-' . $vars['zebra'];
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $variables
 *   An array containing the breadcrumb links.
 *
 * @return
 *   A string containing the breadcrumb output.
 */
function tedx_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  // Determine if we are to display the breadcrumb.
  $show_breadcrumb = theme_get_setting('tedx_breadcrumb');
  if ($show_breadcrumb == 'yes' || $show_breadcrumb == 'admin' && arg(0) == 'admin') {

    // Optionally get rid of the homepage link.
    $show_breadcrumb_home = theme_get_setting('tedx_breadcrumb_home');
    if (!$show_breadcrumb_home) {
      array_shift($breadcrumb);
    }

    // Return the breadcrumb with separators.
    if (!empty($breadcrumb)) {
      $breadcrumb_separator = theme_get_setting('tedx_breadcrumb_separator');
      $trailing_separator = $title = '';
      if (theme_get_setting('tedx_breadcrumb_title')) {
        $item = menu_get_item();
        if (!empty($item['tab_parent'])) {
          // If we are on a non-default tab, use the tab's title.
          $title = check_plain($item['title']);
        }
        else {
          $title = drupal_get_title();
        }
        if ($title) {
          $trailing_separator = $breadcrumb_separator;
        }
      }
      elseif (theme_get_setting('tedx_breadcrumb_trailing')) {
        $trailing_separator = $breadcrumb_separator;
      }

      // Provide a navigational heading to give context for breadcrumb links to.
      // screen-reader users. Make heading invisible with .element-invisible.
      $heading = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

      return $heading . '<div class="breadcrumb">' . implode($breadcrumb_separator, $breadcrumb) . $trailing_separator . $title . '</div>';
    }
    // Otherwise, return an empty string.
    return '';
  }
}

  /**
   * Generate background style for header.
   *
   * @param $variables
   *   An array containing the header bg style.
   *
   * @return
   *   A string containing the header bg style output.
   */
function tedx_headerbg($variables) {
  $header = $variables['headerbg'];
  // Determine if we are to display the breadcrumb.
  // Provide a navigational heading to give context for breadcrumb links to.
  // screen-reader users. Make the heading invisible with .element-invisible.
  $heading = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
  return $heading . '<div class="breadcrumb">' . implode($breadcrumb_separator, $breadcrumb) . $trailing_separator . $title . '</div>';
}

/*
 * Converts a string to a suitable html ID attribute.
 *
 * http://www.w3.org/TR/html4/struct/global.html#h-7.5.2 specifies what makes a.
 * valid ID attribute in HTML. This function:.
 *
 * - Ensure an ID starts with an alpha character by optionally adding an 'n'.
 * - Replaces any character except A-Z, numbers, and underscores with dashes.
 * - Converts entire string to lowercase.
 *
 * @param $string
 * The string
 * @return
 * The converted string
 */

/**
 * Implementation of safe().
 **/
function tedx_id_safe($string) {
  // Replace with dashes anything that isn't A-Z, numbers, dashes orunderscores.
  $string = strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
  // If the first character is not a-z, add 'n' in front.
  if (!ctype_lower($string{0})) {
    $string = 'id' . $string;
  }
  return $string;
}

/**
 * Generate the HTML output for a menu link and submenu.
 *
 * @param $variables
 *   An associative array containing:
 *   - element: Structured array data for a menu link.
 *
 * @return
 *   A themed HTML string.
 *
 * @ingroup themeable
 */

/**
 * Implementation of menu_link().
 **/
function tedx_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  // Adding a class depending on the TITLE of the link (not constant).
  $element['#attributes']['class'][] = tedx_id_safe($element['#title']);
  // Adding a class depending on the ID of the link (constant).
  $element['#attributes']['class'][] = 'mid-' . $element['#original_link']['mlid'];
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
 * Override or insert variables into theme_menu_local_task().
 */
function tedx_preprocess_menu_local_task(&$variables) {
  $link =& $variables['element']['#link'];

  // If the link does not contain HTML already, check_plain() it now.
  // After we set 'html'=TRUE the link will not be sanitized by l().
  if (empty($link['localized_options']['html'])) {
    $link['title'] = check_plain($link['title']);
  }
  $link['localized_options']['html'] = TRUE;
  $link['title'] = '<span class="tab">' . $link['title'] . '</span>';
}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 **/
function tedx_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;

}

/**
 * Implementation of form_alter() hook.
 **/
function tedx_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    unset($form['search_block_form']['#title']);
    $form['search_block_form']['#title_display'] = 'invisible';
    $form_default = t('Search');
    $form['search_block_form']['#default_value'] = $form_default;
    $form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value =  '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}");
  }
}


function tedx_theme() {
    $items = array();

    $items['user_login'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'tedx') . '/templates',
        'template' => 'user-login',
        'preprocess functions' => array(
            'tedx_preprocess_user_login'
        ),
    );
    $items['user_register_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'tedx') . '/templates',
        'template' => 'user-register-form',
        'preprocess functions' => array(
            'tedx_preprocess_user_register_form'
        ),
    );
    $items['user_pass'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'tedx') . '/templates',
        'template' => 'user-pass',
        'preprocess functions' => array(
            'tedx_preprocess_user_pass'
        ),
    );


    return $items;
}
function tedx_preprocess_user_login(&$vars) {
    $vars['intro_text'] = t('Log into TEDxPerth as a Community Member.');
    $vars['title'] = t('Login to Your Account');
}

function tedx_preprocess_user_register_form(&$vars) {
    $vars['intro_text'] = t('Register as a Community Member.');
    $vars['title'] = t('Register as a Community Member');
}

function tedx_preprocess_user_pass(&$vars) {
    $vars['intro_text'] = t('Reset your password.');
    $vars['title'] = t('Reset Your Password');
}