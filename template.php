<?php
function earth_keen_preprocess_page(&$vars) {
  // theme setting for masthead image
  $masthead = theme_get_setting('masthead');
  $masthead = 'green';
  watchdog('notice',print_r($masthead,true));
  //$image_url = file_create_url(file_load($masthead)->uri);
  drupal_add_css('#header {background: transparent url(' . $masthead  . ') no-repeat 0 0;}', array('group' => CSS_THEME, 'type' => 'inline'));
}
