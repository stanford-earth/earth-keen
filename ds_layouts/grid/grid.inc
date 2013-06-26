<?php

/**
 * @file
 * Display Suite Grid configuration.
 */

function ds_grid() {
  return array(
    'label' => t('Grid'),
    'regions' => array(
      'media' => t('Media'),
      'text' => t('Text'),
    ),
    // Uncomment if you want to include a CSS file for this layout (grid.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (grid.png)
    // 'image' => TRUE,
  );
}
