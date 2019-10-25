<?php

$events = get_field('enable_events', 'option');
$publications = get_field('enable_publications', 'option');

if($events):

function acbase_events() {
  // creating (registering) the custom type
  register_post_type( 'events', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array('labels' => array(
      'name' => __('Events', 'acbase'), /* This is the Title of the Group */
      'singular_name' => __('Event', 'acbase'), /* This is the individual type */
      'all_items' => __('All Events', 'acbase'), /* the all items menu item */
      'add_new' => __('Add New Event', 'acbase'), /* The add new menu item */
      'add_new_item' => __('Add New Event', 'acbase'), /* Add New Display Title */
      'edit' => __( 'Edit', 'acbase' ), /* Edit Dialog */
      'edit_item' => __('Edit Event', 'acbase'), /* Edit Display Title */
      'new_item' => __('New Event', 'acbase'), /* New Display Title */
      'view_item' => __('View Event', 'acbase'), /* View Display Title */
      'search_items' => __('Search Events', 'acbase'), /* Search Custom Type Title */
      'not_found' =>  __('Nothing found in the Database.', 'acbase'), /* This displays if there are no entries yet */
      'not_found_in_trash' => __('Nothing found in Trash', 'acbase'), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of arrays */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'show_in_admin_bar' => true,
      'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => 'dashicons-calendar-alt', /* the icon for the custom post type menu */
      'has_archive' => true, /* you can rename the slug here */
      'rewrite'     => ['slug' => 'events', 'with_front' => false],
      'capability_type' => 'post',
      'hierarchical' => false,
      'show_in_rest' => true,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title', 'page-attributes', 'editor')
    ) /* end of options */
  ); /* end of register post type */

}

add_action( 'init', 'acbase_events');

register_taxonomy( 'event_category',
    	array('events'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,    /* if this is false, it acts like tags */
    		'labels' => array(
    			'name' => __( 'Event Types', 'acbase' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Event Type', 'acbase' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Event Types', 'acbase' ), /* search title for taxomony */
    			'all_items' => __( 'All Event Types', 'acbase' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Event Type', 'acbase' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Event Type:', 'acbase' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Event Type', 'acbase' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Event Type', 'acbase' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Event Type', 'acbase' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Event Type Name', 'acbase' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
        'rewrite'           => array( 'slug' => 'events/category' ),
    	)
    );

endif;

if($publications):

function acbase_publications() {
  // creating (registering) the custom type
  register_post_type( 'publications', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array('labels' => array(
      'name' => __('Publications', 'acbase'), /* This is the Title of the Group */
      'singular_name' => __('Publication', 'acbase'), /* This is the individual type */
      'all_items' => __('All Publications', 'acbase'), /* the all items menu item */
      'add_new' => __('Add New Publication', 'acbase'), /* The add new menu item */
      'add_new_item' => __('Add New Publication', 'acbase'), /* Add New Display Title */
      'edit' => __( 'Edit', 'acbase' ), /* Edit Dialog */
      'edit_item' => __('Edit Publication', 'acbase'), /* Edit Display Title */
      'new_item' => __('New Publication', 'acbase'), /* New Display Title */
      'view_item' => __('View Publication', 'acbase'), /* View Display Title */
      'search_items' => __('Search Publications', 'acbase'), /* Search Custom Type Title */
      'not_found' =>  __('Nothing found in the Database.', 'acbase'), /* This displays if there are no entries yet */
      'not_found_in_trash' => __('Nothing found in Trash', 'acbase'), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of arrays */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'show_in_admin_bar' => true,
      'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => 'dashicons-format-aside', /* the icon for the custom post type menu */
      'has_archive' => true, /* you can rename the slug here */
      'rewrite'     => ['slug' => 'publications', 'with_front' => false],
      'capability_type' => 'post',
      'hierarchical' => false,
      'show_in_rest' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title', 'page-attributes', 'editor' )
    ) /* end of options */
  ); /* end of register post type */

}

add_action( 'init', 'acbase_publications');

register_taxonomy( 'publications_category',
    	array('publications'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,    /* if this is false, it acts like tags */
    		'labels' => array(
    			'name' => __( 'Publication Types', 'acbase' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Publication Type', 'acbase' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Publication Types', 'acbase' ), /* search title for taxomony */
    			'all_items' => __( 'All Publication Types', 'acbase' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Publication Type', 'acbase' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Publication Type:', 'acbase' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Publication Type', 'acbase' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Publication Type', 'acbase' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Publication Type', 'acbase' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Publication Type Name', 'acbase' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
        'has_archive' => true,
        'rewrite'           => array( 'slug' => 'publications/category' ),
    	)
    );

endif;

?>
