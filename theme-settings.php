<?php
function earth_keen_form_system_theme_settings_alter(&$form, &$form_state) {

    $form['header_container']['masthead'] = array(
      '#type'     => 'managed_file',
      '#title'    => t('Masthead'),
      '#required' => FALSE,
      '#upload_location' => file_default_scheme() . '://theme/mastheads/',
      '#default_value' => theme_get_setting('masthead'), 
      '#upload_validators' => array(
        'file_validate_extensions' => array('gif png jpg jpeg'),
      ),
    );
    $form['#submit'][] = 'masthead_upload_submit';
    $form['#validate'][] = 'masthead_upload_validate';
}

function masthead_upload_submit($form, &$form_state) {
  watchdog('notice','masthead_upload_submit');
}
  
function masthead_upload_validate($form, &$form_state) {
  watchdog('notice','masthead_upload_validate');
}
