<?php

/**
 * @file
 * Display Suite Image Card configuration.
 */

function ds_image_card() {
  return array(
    'label' => t('Image Card'),
    'regions' => array(
      'image' => t('Image'),
      'text' => t('Text'),
    ),
    // Uncomment if you want to include a CSS file for this layout (image_card.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (image_card.png)
    // 'image' => TRUE,
  );
}
