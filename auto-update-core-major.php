<?php

/*
 * Plugin Name: Major Core Auto Updates
 * Plugin URI:  https://github.com/Destructorrr/Wordpress/mu-plugins
 * Version:     0.1
 * Description: Automatically update WordPress core, including major versions
 * Author:      Georgi Marokov
 * Author URI:  http://xmark.studio
 * License:     GPL
 */
 
add_filter( 'allow_major_auto_core_updates', '__return_true' );