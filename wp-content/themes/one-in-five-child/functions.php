<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'chld_thm_cfg_parent','vw-charity-pro-basic-style','vw-charity-pro-editor-style','animation-wow','effect','owl-carousel-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION

// alter '/announcement/' to be '/our-story/'
function timeline_express_change_announcement_slug( $slug ) {
    $slug = 'our-story';
    return $slug;
}
add_filter('timeline-express-slug', 'timeline_express_change_announcement_slug' );


/**
 * The following function will alter the default date formats
 * and display them in the format '2016'
 */
function custom_te_date_format( $date_format ) {
   $date_format = "Y"; // will print the date as Apr 22, 2016
   return $date_format;
}
add_filter( 'timeline_express_custom_date_format' , 'custom_te_date_format' );

/**
 * Add custom classes to the timeline announcement container
 * @param  string  $class            Class name to alter.
 * @param  integer $announcement_id  The announcemnet ID.
 * @return string                    New class name to use for the container.
 */
function add_custom_announcement_container_classes( $class, $announcement_id ) {
	return $class . ' custom-class-name';
}
add_filter( 'timeline-express-announcement-container-class', 'add_custom_announcement_container_classes', 10 ,2 );

define( 'TIMELINE_EXPRESS_CONTAINER_CLASSES', true );


