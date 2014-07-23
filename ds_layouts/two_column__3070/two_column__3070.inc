<?php

/**
 * @file
 * Display Suite Two column - 30/70 configuration.
 */

function ds_two_column__3070() {
  return array(
    'label' => t('Two column - 30/70'),
    'regions' => array(
      'header' => t('Header'),
      'left' => t('Left'),
      'right' => t('Right'),
      'footer' => t('Footer'),
    ),
    // Uncomment if you want to include a CSS file for this layout (two_column__3070.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (two_column__3070.png)
    // 'image' => TRUE,
  );
}
