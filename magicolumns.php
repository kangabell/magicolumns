<?php
/**
 * @package Magicolumns
 * @version 1.0
 */
/*
Plugin Name: Magicolumns
Plugin URI: http://github.com/kangabell/lightweight-columns
Description: Columns of text that stretch to fit, with easy-to-use shortcodes.
Author: Kay Belardinelli
Version: 1.0
Author URI: http://kangabell.co
*/


/* LOAD STYLESHEET */
add_action( 'wp_enqueue_scripts', 'mgc_scripts');

add_shortcode( 'mgc', 'mgc_wrapper' );
add_shortcode( 'col', 'mgc_column' );


/*** FUNCTIONS ***/

function mgc_scripts() {
    wp_enqueue_style( 'mgc-css', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_script('mgc-js', plugins_url( 'scripts.js', __FILE__ ), array('jquery'), null, true);
}

function mgc_wrapper( $atts, $content = null ) {
    
    return "<div class='mgc'>" . do_shortcode($content) . "</div>";
}

function mgc_column( $atts, $content = null ) {
    return "<div>" . do_shortcode($content) . "</div>";
}
    

?>