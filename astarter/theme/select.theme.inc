<?php

/**
 * @file select.theme.inc
 * Contains the theme function override for 'pager'.
 */

/**
 * Implements theme_select().
 *
 * Add wrapper `.select` (custom select)
 *
 * @param $variables
 *   An array of variables to pass to the theme function.
 * @see theme_select()
 * @ingroup themeable
 */
function astarter_select($variables) {
  $element = $variables['element'];
  element_set_attributes($element, array('id', 'name', 'size'));
  _form_set_class($element, array('form-select'));

  return '<span class="select"><select' . drupal_attributes($element['#attributes']) . '>' . form_select_options($element) . '</select></span>';
}
