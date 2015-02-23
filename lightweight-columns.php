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

function lwc_scripts() {
    wp_enqueue_style( 'lwc-css', plugins_url( 'style.css', __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'lwc_scripts');

/* HALF COLUMNS */
    function lwc_half_first( $atts, $content = null ) {
        return "<div class='lwc'><div class='first sixcol'>".do_shortcode($content)."</div>";
    }
    add_shortcode( 'half_first', 'lwc_half_first' );

    function lwc_half_last( $atts, $content = null ) {
        return "<div class='last sixcol'>".do_shortcode($content)."</div></div>";
    }
    add_shortcode( 'half_last', 'lwc_half_last' );

/* THIRDS COLUMNS */

    /* 2/3 left, 1/3 right */
        function lwc_twothirds_first( $atts, $content = null ) {
            return "<div class='lwc'><div class='first eightcol'>".do_shortcode($content)."</div>";
        }
        add_shortcode( 'twothirds_first', 'lwc_twothirds_first' );

        function lwc_onethird_last( $atts, $content = null ) {
            return "<div class='last fourcol'>".do_shortcode($content)."</div></div>";
        }
        add_shortcode( 'onethird_last', 'lwc_onethird_last' );

    /* 1/3 left, 2/3 right */
        function lwc_onethird_first( $atts, $content = null ) {
            return "<div class='lwc'><div class='first fourcol'>".do_shortcode($content)."</div>";
        }
        add_shortcode( 'onethird_first', 'lwc_onethird_first' );

        function lwc_twothirds_last( $atts, $content = null ) {
            return "<div class='last eightcol'>".do_shortcode($content)."</div></div>";
        }
        add_shortcode( 'twothirds_last', 'lwc_twothirds_last' );

/* THREE FLOWING COLUMNS */
    function lwc_threecolumns( $atts, $content = null ) {
        return "<div class='lwc'><div class='threecolumns'>".do_shortcode($content)."</div></div>";
    }
    add_shortcode( 'threecolumns', 'lwc_threecolumns' );


?>