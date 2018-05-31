<?php

/**
 * @file
 * The primary PHP file for this theme.
 */

function uhcw_preprocess_page(&$variables) {

  $types = drupal_get_query_parameters();
  $type = 'none';

  if(drupal_is_front_page()) {
    if(!isset($types['survey'])) {
      drupal_set_message(t('There has been an error. Please check you have the correct link for the page.'), 'error');
    }
    else {
      $survey = array('web', 'kiosk', 'mobile', 'paper');
      if (!in_array($types['survey'], $survey)) {
        drupal_set_message(t('There has been an error. Please check you have the correct link for the page.'),'error');
      }
    }
  }


  $variables['code'] = drupal_get_form('uhcw_form_code');
}

//drupal_add_js("$('#edit-lookup-code').focus();", 'inline');

drupal_add_js(
  "jQuery(document).ready(function () { jQuery('#edit-lookup-code').focus(); });",
  array('type' => 'inline', 'scope' => 'footer')
);
