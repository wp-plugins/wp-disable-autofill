<?php

/*
* Plugin Name: WP Disable Autofill
* Plugin URI: http://andrewmgunn.com
* Description: Disables autofill for all input fields and forms.
* Version: 1.0
* Author: Andrew M. Gunn
* Author URI: http://andrewmgunn.com
* License: GPL2
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );


function register_scripts() {
	wp_register_script( 'wpda_script', plugins_url('js/wp-disable-autofill.js', __FILE__), array('jquery'));
	wp_register_style( 'wdpa_style', plugins_url('css/wp-disable-autofill.css', __FILE__));
	wp_enqueue_script( 'wpda_script' );
	wp_enqueue_style( 'wdpa_style' );
}

function disable_autofill() { ?>
	
	<script type="text/javascript">
		//alert("disable");

		//get php content variable, run the function from the JS file on it
		//and return the content variable if using the content filter
	</script>
	

<?php }

//to make a filter, add phph function that contains javascript and apply it
//to the_content. this would be needed if im doing a settings pages or some kind
//of admin stuff thats going to need the code to NOT just run on every page

add_action( 'wp_enqueue_scripts', 'register_scripts' );
//add_filter( 'the_content', 'disable_autofill')
?>