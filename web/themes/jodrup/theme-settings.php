<?php

/**
 * @file
 * Theme settings form for Jodrup theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function jodrup_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['jodrup'] = [
    '#type' => 'details',
    '#title' => t('Jodrup'),
    '#open' => TRUE,
  ];

  $form['jodrup']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
