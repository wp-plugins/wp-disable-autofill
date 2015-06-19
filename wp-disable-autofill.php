<?php

/*
* Plugin Name: WP Disable Autofill
* Plugin URI: http://andrewmgunn.com
* Description: Disables autofill for all input fields and forms.
* Version: 1.2
* Author: Andrew M. Gunn
* Author URI: http://andrewmgunn.com
* License: GPL2
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );


function register_wpda_scripts() {
	wp_register_script( 'wpda_script', plugins_url('inc/scripts.js', __FILE__), array('jquery'));
	wp_register_style( 'wdpa_style', plugins_url('inc/styles.css', __FILE__));
	wp_enqueue_script( 'wpda_script' );
	wp_enqueue_style( 'wdpa_style' );
}

add_action( 'wp_enqueue_scripts', 'register_wpda_scripts' );
//add_filter( 'the_content', 'disable_autofill')
?>