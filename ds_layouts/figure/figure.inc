<?php

/**
 * @file
 * Display Suite Figure configuration.
 */

function ds_figure() {
  return array(
    'label' => t('Figure'),
    'regions' => array(
      'credit' => t('Credit'),
      'figure' => t('Figure'),
      'caption' => t('Caption'),
    ),
    // Uncomment if you want to include a CSS file for this layout (figure.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (figure.png)
    // 'image' => TRUE,
  );
}
