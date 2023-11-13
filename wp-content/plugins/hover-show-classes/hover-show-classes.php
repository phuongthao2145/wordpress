<?php
/* 
* Plugin name: Hover Show Classes
* Description: When using this plugin, the element's classes will appear when you hover over it
* Version: 1.0
* Author: Nguyen Le Tam
*/

function my_plugin_enqueue_scripts() {
    wp_enqueue_script('hover-show-classes', plugins_url('hover-show-classes.js', __FILE__), array('jquery'), '1.0', true);
    
}

add_action('wp_enqueue_scripts', 'my_plugin_enqueue_scripts');

?>