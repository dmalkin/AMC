<?php
/*-----------------------------------------------------------------------------
  Register Custom Post Types
-----------------------------------------------------------------------------*/

function resources_init() {
	// create a new taxonomy
	register_taxonomy(
		'resources',
		'post',
		array(
      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,
      // This array of options controls the labels displayed in the WordPress Admin UI
      'labels' => array(
        'name' => _x( 'Resources', 'taxonomy general name' ),
        'singular_name' => _x( 'Resource', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Resources' ),
        'all_items' => __( 'All Resources' ),
        'parent_item' => __( 'Parent Resource' ),
        'parent_item_colon' => __( 'Parent Resource:' ),
        'edit_item' => __( 'Edit Resource' ),
        'update_item' => __( 'Update Resource' ),
        'add_new_item' => __( 'Add New Resource' ),
        'new_item_name' => __( 'New Resource Name' ),
        'menu_name' => __( 'Resources' ),
      ),
			'rewrite' => array( 'slug' => 'resources' ),
		)
	);
}
add_action( 'init', 'resources_init' );
