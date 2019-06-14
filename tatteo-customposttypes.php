<?php
/**
 * Plugin Name:     Tatteo Custom Post Types
 * Plugin URI:      tatteo.com
 * Description:     A plugin to generate Custom Post Types for Tatteo
 * Author:          RED Academy
 * Author URI:      redacademy.com
 * Text Domain:     tatteo-customposttypes
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Tatteo_Customposttypes
 */

// Your code starts here.

// Register Custom Post Type - Reviews
function review_cpt() {

	$labels = array(
		'name'                  => _x( 'Reviews', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Review', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Reviews', 'text_domain' ),
		'name_admin_bar'        => __( 'Review', 'text_domain' ),
		'archives'              => __( 'Review Archives', 'text_domain' ),
		'attributes'            => __( 'Review Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Reviews', 'text_domain' ),
		'add_new_item'          => __( 'Add New Review', 'text_domain' ),
		'add_new'               => __( 'Add Review', 'text_domain' ),
		'new_item'              => __( 'New Review', 'text_domain' ),
		'edit_item'             => __( 'Edit Review', 'text_domain' ),
		'update_item'           => __( 'Update Review', 'text_domain' ),
		'view_item'             => __( 'View Review', 'text_domain' ),
		'view_items'            => __( 'View Reviews', 'text_domain' ),
		'search_items'          => __( 'Search Review', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into review', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this review', 'text_domain' ),
		'items_list'            => __( 'Reviews list', 'text_domain' ),
		'items_list_navigation' => __( 'Reviews list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter reviews list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Review', 'text_domain' ),
		'description'           => __( 'A post type that will contain a review of a studio by an artist or vice versa', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'review', $args );

}
add_action( 'init', 'review_cpt', 0 );

// Register Custom Post Type - Studios
function studios_cpt() {

	$labels = array(
		'name'                  => _x( 'Studios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Studio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Studios', 'text_domain' ),
		'name_admin_bar'        => __( 'Studio', 'text_domain' ),
		'archives'              => __( 'Studio Archives', 'text_domain' ),
		'attributes'            => __( 'Studio Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Studios', 'text_domain' ),
		'add_new_item'          => __( 'Add New Studio', 'text_domain' ),
		'add_new'               => __( 'Add Studio', 'text_domain' ),
		'new_item'              => __( 'New Studio', 'text_domain' ),
		'edit_item'             => __( 'Edit Studio', 'text_domain' ),
		'update_item'           => __( 'Update Studio', 'text_domain' ),
		'view_item'             => __( 'View Studio', 'text_domain' ),
		'view_items'            => __( 'View Studios', 'text_domain' ),
		'search_items'          => __( 'Search Studio', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this studio', 'text_domain' ),
		'items_list'            => __( 'Studios list', 'text_domain' ),
		'items_list_navigation' => __( 'Studios list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Studios list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Studio', 'text_domain' ),
		'description'           => __( 'A profile page for a tattoo studio', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'comission', 'tools', 'art_style', 'accomodation' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-store',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'studio', $args );

}
add_action( 'init', 'studios_cpt', 0 );

// Register Custom Post Type - Events
function events_cpt() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Events', 'text_domain' ),
		'name_admin_bar'        => __( 'Event', 'text_domain' ),
		'archives'              => __( 'Event Archives', 'text_domain' ),
		'attributes'            => __( 'Event Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Event', 'text_domain' ),
		'add_new'               => __( 'Add Event', 'text_domain' ),
		'new_item'              => __( 'New Event', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ),
		'update_item'           => __( 'Update Event', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ),
		'view_items'            => __( 'View Events', 'text_domain' ),
		'search_items'          => __( 'Search Event', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this studio', 'text_domain' ),
		'items_list'            => __( 'Studios list', 'text_domain' ),
		'items_list_navigation' => __( 'Studios list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Studios list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'text_domain' ),
		'description'           => __( 'A page for a tattoo event or convention', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'events_cpt', 0 );

// Register Custom Post Type - Guestspots
function guest_spot_cpt() {

	$labels = array(
		'name'                  => _x( 'Guestspots', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Guestspot', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Guestspots', 'text_domain' ),
		'name_admin_bar'        => __( 'Guestspot', 'text_domain' ),
		'archives'              => __( 'Guestspot Archives', 'text_domain' ),
		'attributes'            => __( 'Guestspot Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Guestspots', 'text_domain' ),
		'add_new_item'          => __( 'Add New Guestspot', 'text_domain' ),
		'add_new'               => __( 'Add Guestspot', 'text_domain' ),
		'new_item'              => __( 'New Guestspot', 'text_domain' ),
		'edit_item'             => __( 'Edit Guestspot', 'text_domain' ),
		'update_item'           => __( 'Update Guestspot', 'text_domain' ),
		'view_item'             => __( 'View Guestspot', 'text_domain' ),
		'view_items'            => __( 'View Guestspots', 'text_domain' ),
		'search_items'          => __( 'Search Guestspot', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this studio', 'text_domain' ),
		'items_list'            => __( 'Studios list', 'text_domain' ),
		'items_list_navigation' => __( 'Studios list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Studios list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Guestspot', 'text_domain' ),
		'description'           => __( 'A page for a guestspot at a studio', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'guest_spot', $args );

}
add_action( 'init', 'guest_spot_cpt', 0 );

// Register Custom Post Type - Studios
function artists_cpt() {

	$labels = array(
		'name'                  => _x( 'Artists', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Artist', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Artists', 'text_domain' ),
		'name_admin_bar'        => __( 'Artist', 'text_domain' ),
		'archives'              => __( 'Artist Archives', 'text_domain' ),
		'attributes'            => __( 'Artist Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Artists', 'text_domain' ),
		'add_new_item'          => __( 'Add New Artist', 'text_domain' ),
		'add_new'               => __( 'Add Artist', 'text_domain' ),
		'new_item'              => __( 'New Artist', 'text_domain' ),
		'edit_item'             => __( 'Edit Artist', 'text_domain' ),
		'update_item'           => __( 'Update Artist', 'text_domain' ),
		'view_item'             => __( 'View Artist', 'text_domain' ),
		'view_items'            => __( 'View Artists', 'text_domain' ),
		'search_items'          => __( 'Search Artist', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this sartist', 'text_domain' ),
		'items_list'            => __( 'Artists list', 'text_domain' ),
		'items_list_navigation' => __( 'Artists list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Artists list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Artist', 'text_domain' ),
		'description'           => __( 'A profile page for a tattoo artist', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array('art_style'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'studio', $args );

}
add_action( 'init', 'artist_cpt', 0 );
