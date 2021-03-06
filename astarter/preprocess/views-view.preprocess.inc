<?php

/**
 * @file
 * Contains a pre-process hook for 'taxonomy_term'.
 */

/**
 * Implements hook_preprocess_views_view().
 *
 * Exemple to use : Create another function :
 *   astarter_preprocess_views_view__VIEWNAME__DISPLAY
 *
 * @param $variables
 *   An array of variables to pass to the theme function.
 * @see hook_preprocess()
 * @see hook_preprocess_views_view()
 */
function astarter_preprocess_views_view(&$variables) {
  if (isset($variables['view']->name)) {
    $function = __FUNCTION__ . '__' . $variables['view']->name . '__' . $variables['view']->current_display;
    if (function_exists($function)) {
      $function($variables);
    }
  }
}
