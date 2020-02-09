<?php 

add_action( 'init', 'propper_apartment_init' );
/**
 * Register a apartment post type.
 *
 */
function propper_apartment_init() {
	$labels = array(
		'name'               => _x( 'Apartments', 'Propper Apartments', 'propper-essentials' ),
		'singular_name'      => _x( 'Apartment', 'Propper Apartment', 'propper-essentials' ),
		'menu_name'          => _x( 'Propper Apartments', 'admin menu', 'propper-essentials' ),
		'name_admin_bar'     => _x( 'apartment', 'add new on admin bar', 'propper-essentials' ),
		'add_new'            => _x( 'Add New', 'apartment', 'propper-essentials' ),
		'add_new_item'       => __( 'Add New Apartment', 'propper-essentials' ),
		'new_item'           => __( 'New Apartment', 'propper-essentials' ),
		'edit_item'          => __( 'Edit Apartment', 'propper-essentials' ),
		'view_item'          => __( 'View Apartment', 'propper-essentials' ),
		'all_items'          => __( 'All Apartments', 'propper-essentials' ),
		'search_items'       => __( 'Search Apartments', 'propper-essentials' ),
		'parent_item_colon'  => __( 'Parent Apartments:', 'propper-essentials' ),
		'not_found'          => __( 'No Apartments found.', 'propper-essentials' ),
		'not_found_in_trash' => __( 'No Apartments found in Trash.', 'propper-essentials' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'propper-essentials' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'apartment' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		//'taxonomies' => array('category'),
		//'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'apartment', $args );
}



add_action( 'init', 'propper_building_taxonomies', 0 );

function propper_building_taxonomies() {
	$labels = array(
		'name'              => _x( 'Buildings', 'taxonomy general name', 'propper-essentials' ),
		'singular_name'     => _x( 'Building', 'taxonomy singular name', 'propper-essentials' ),
		'search_items'      => __( 'Search Buildings', 'propper-essentials' ),
		'all_items'         => __( 'All Buildings', 'propper-essentials' ),
		'parent_item'       => __( 'Parent Building', 'propper-essentials' ),
		'parent_item_colon' => __( 'Parent Building:', 'propper-essentials' ),
		'edit_item'         => __( 'Edit Building', 'propper-essentials' ),
		'update_item'       => __( 'Update Building', 'propper-essentials' ),
		'add_new_item'      => __( 'Add New Building', 'propper-essentials' ),
		'new_item_name'     => __( 'New Building Name', 'propper-essentials' ),
		'menu_name'         => __( 'Buildings', 'propper-essentials' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'building' ),
	);

	register_taxonomy( 'building', array( 'apartment' ), $args );		
}