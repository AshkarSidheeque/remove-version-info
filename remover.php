<?php
/*
Plugin Name: Remove Version Info
Plugin URI: http://ashycodes.com/
Description: Remove the version from your WordPress website completely and Increase security and thwart potential hacks.
Author: AshyCodes
Author URI: http://ashycodes.com/
Version: 1.0
*/

function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');
?>
