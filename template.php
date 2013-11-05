<?php
function earth_keen_preprocess_page(&$vars) {
  // theme setting for masthead image
  $masthead = theme_get_setting('masthead');
  //watchdog('notice','masthead = ' . $masthead);
  $masthead = file_create_url(file_load($masthead)->uri);
  drupal_add_css('#header {background: pink url(' . $masthead  . ') no-repeat 0 0;}', array('group' => CSS_THEME, 'type' => 'inline'));
}
