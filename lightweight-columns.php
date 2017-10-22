<?php
/**
 * @package Lightweight_Columns
 * @version 1.1
 */
/*
Plugin Name: Lightweight Columns
Plugin URI: http://github.com/kangabell/lightweight-columns
Description: Shortcodes for simple, responsive columns. Includes thirds, halves, and three-column flowing text.
Author: Kay Belardinelli
Version: 1.1
Author URI: http://kangabell.co
*/


/* LOAD STYLESHEET */
add_action( 'wp_enqueue_scripts', 'lwc_scripts');

add_shortcode( 'lwc', 'lwc_wrapper' );
add_shortcode( 'column', 'lwc_column' );


/*** FUNCTIONS ***/

function lwc_scripts() {
    wp_enqueue_style( 'lwc-css', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_script('lwc-js', plugins_url( 'scripts.js', __FILE__ ), array('jquery'), null, true);
}

function lwc_wrapper( $atts, $content = null ) {

    extract( shortcode_atts( array(
        'sidebar' => '',
    ), $atts ) );
    
    return "<div class='lwc " . esc_attr($sidebar) . "'>" . do_shortcode($content) . "</div>";
}

function lwc_column( $atts, $content = null ) {
    return "<div>" . do_shortcode($content) . "</div>";
}
    

?>