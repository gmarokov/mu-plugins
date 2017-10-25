<?php
/*
 * Plugin Name: Auto plugin updates
 * Plugin URI:  https://github.com/destructorrr/Wordpress/mu-plugins
 * Version:     0.1
 * Description: Automatically update all plugins
 * Author:      Georgi Marokov	
 * Author URI:  http://xmark.studio
 * License:     GPL
 */
add_filter( 'auto_update_plugin', '__return_true' );