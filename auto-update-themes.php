<?php

/*
 * Plugin Name: Auto theme updates
 * Plugin URI:  https://github.com/Destructorrr/Wordpress/mu-plugins
 * Version:     0.1
 * Description: Automatically update all themes
 * Author:      Georgi Marokov
 * Author URI:  http://xmark.studio
 * License:     GPL
 */
 
add_filter( 'auto_update_theme', '__return_false' );