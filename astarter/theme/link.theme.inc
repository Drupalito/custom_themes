<?php

/**
 * @file
 * Contains the theme function override for 'link'.
 */

/**
 * Implements theme_link().
 *
 * Remove title attribute if empty
 *
 * @param $variables
 *   An array of variables to pass to the theme function.
 * @see theme_link()
 * @ingroup themeable
 */
function astarter_link($variables) {
  // Remove title attribute if empty.
  if (empty($variables['options']['attributes']['title'])) {
    unset($variables['options']['attributes']['title']);
  }
  return theme_link($variables);
}
