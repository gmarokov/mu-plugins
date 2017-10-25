<?php
/*
 * Plugin Name: Minor Core Auto Updates
 * Plugin URI:  https://github.com/Destructorrr/Wordpress/mu-plugins
 * Version:     0.1
 * Description: Automatically update WordPress core, including minor versions
 * Author:      Georgi Marokov
 * Author URI:  http://xmark.studio
 * License:     GPL
 */
add_filter( 'allow_minor_auto_core_updates', '__return_true' );