<?php

/**
 * @file
 * Display Suite Two Column Bootstrap configuration.
 */

function ds_two_column_bootstrap() {
  return array(
    'label' => t('Two Column Bootstrap'),
    'regions' => array(
      'header' => t('Header'),
      'left' => t('Left'),
      'right' => t('Right'),
      'footer' => t('Footer'),
    ),
    // Uncomment if you want to include a CSS file for this layout (two_column_bootstrap.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (two_column_bootstrap.png)
    // 'image' => TRUE,
  );
}
