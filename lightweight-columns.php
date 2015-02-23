<?php
/**
 * @package Lightweight_Columns
 * @version 1.0
 */
/*
Plugin Name: Lightweight Columns
Plugin URI: http://github.com/kangabell/lightweight-columns
Description: Shortcodes for simple, responsive columns. Includes thirds, halves, and three-column flowing text.
Author: Kay Belardinelli
Version: 1.0
Author URI: http://kangabell.co
*/

/* LOAD STYLESHEET */

function lightweight_columns_scripts() {
    wp_enqueue_style( 'lightweight-columns-css', plugins_url( 'style.css', __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'lightweight_columns_scripts');


/* HALF COLUMNS */
    function half_first_function( $atts, $content = null ) {
        return "<div class='columns'><div class='sixcol first'>".do_shortcode($content)."</div>";
    }
    add_shortcode( 'half_first', 'half_first_function' );

    function half_last_function( $atts, $content = null ) {
        return "<div class='sixcol last'>".do_shortcode($content)."</div></div>";
    }
    add_shortcode( 'half_last', 'half_last_function' );

/* THIRDS COLUMNS */

    /* 2/3 left, 1/3 right */
        function twothirds_first_function( $atts, $content = null ) {
            return "<div class='columns'><div class='eightcol first'>".do_shortcode($content)."</div>";
        }
        add_shortcode( 'twothirds_first', 'twothirds_first_function' );

        function onethird_last_function( $atts, $content = null ) {
            return "<div class='fourcol last'>".do_shortcode($content)."</div></div>";
        }
        add_shortcode( 'onethird_last', 'onethird_last_function' );

    /* 1/3 left, 2/3 right */
        function onethird_first_function( $atts, $content = null ) {
            return "<div class='columns'><div class='fourcol first'>".do_shortcode($content)."</div>";
        }
        add_shortcode( 'onethird_first', 'onethird_first_function' );

        function twothirds_last_function( $atts, $content = null ) {
            return "<div class='eightcol last'>".do_shortcode($content)."</div></div>";
        }
        add_shortcode( 'twothirds_last', 'twothirds_last_function' );

/* THREE FLOWING COLUMNS */
    function threecolumns_function( $atts, $content = null ) {
        return "<div class='columns'><div class='threecolumns'>".do_shortcode($content)."</div></div>";
    }
    add_shortcode( 'threecolumns', 'threecolumns_function' );


?>