<?php

/**
 * @file
 * Display Suite Article Image Right configuration.
 */

function ds_article_image_right() {
  return array(
    'label' => t('Article Image Right'),
    'regions' => array(
      'header' => t('Header'),
      'image' => t('Image'),
      'text' => t('Text'),
      'footer' => t('Footer'),
    ),
    // Uncomment if you want to include a CSS file for this layout (article_image_right.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (article_image_right.png)
    // 'image' => TRUE,
  );
}
