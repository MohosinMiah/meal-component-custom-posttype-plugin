 <?php
/*
Plugin Name: meal-component 
Plugin URI: 
Description: meal-component 
Version: 1.0
Author: Md.Mohosin Miah
Author URI: http://webdeveloperguru.com
License: GPLv2 or later
Text Domain: meal_component
Domain Path: /languages/
*/
define( "DBDEMO_DB_VERSION", "1.3" );
function meal_component_init(){
	
}
register_activation_hook( __FILE__, "meal_component_init" );

function meal_component_load() {
    $plugin_rel_path = basename( dirname( __FILE__ ) ) . '/languages'; /* Relative to WP_PLUGIN_DIR */
    load_plugin_textdomain( "meal_component", false, $plugin_rel_path );
}
add_action('plugins_loaded', 'meal_component_load');

function meal_component_register_my_cpts_section() {

	/**
	 * Post Type: Section.
	 */

	$labels = array(
		"name" => __( "Section", "meal_component" ),
		"singular_name" => __( "Sections", "meal_component" ),
	);

	$args = array(
		"label" => __( "Section", "meal_component" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "section", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "section", $args );
	
		/**
	 * Post Type: Reservation.
	 */

	$labels = array(
		"name" => __( "Reservation", "meal_component" ),
		"singular_name" => __( "Reservations", "meal_component" ),
	);

	$args = array(
		"label" => __( "Reservation", "meal_component" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "section", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,
		"supports" => array( "title" ),
	);

	register_post_type( "reservation", $args );
	
	
	
}

add_action( "init", "meal_component_register_my_cpts_section" );

function meal_component_register_my_cpts_recepie() {

	/**
	 * Post Type: Recepie.
	 */

	$labels = array(
		"name" => __( "Recepie", "meal_component" ),
		"singular_name" => __( "Recepies", "meal_component" ),
	);

	$args = array(
		"label" => __( "Recepie", "meal_component" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "recepie", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 7,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "recepie", $args );
}

add_action( "init", "meal_component_register_my_cpts_recepie" );

