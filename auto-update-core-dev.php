<?php

/*
 * Plugin Name: Development Core Auto Updates
 * Plugin URI:  https://github.com/Destructorr/Wordpress/mu-plugins
 * Version:     0.1
 * Description: Automatically update WordPress core, including development versions
 * Author:      Georgi Marokov
 * Author URI:  http://xmark.studio
 * License:     GPL
 */
 
add_filter( 'allow_dev_auto_core_updates', '__return_true' );