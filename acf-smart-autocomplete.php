<?php
/*
Plugin Name: Advanced Custom Fields:Smart autocomplete
Plugin URI: http://www.advancedcustomfields.com/
Description: This Add-on adds smart select with autocomplete and the ability to add options dynamically
Version: 1.0
Author: Elliot Condon
Author URI: http://www.iamntz.com/
License: GPL
Copyright: Elliot Condon
*/

// only include add-on once
if( !function_exists('acf_register_smart_autocomplete') ):


// add action to include field
add_action('acf/register_fields', 'acf_register_smart_autocomplete');

function acf_register_smart_autocomplete() {
  include_once('smart-autocomplete.php');
}

endif;