<?php
/*
Plugin Name: Event - Custom Post Type
Description: Declares a plugin that will create a custom post type for events
             and workshops.
Version: 1.0
Author: Frank Valcarcel
*/

add_action( 'init', 'create_event' );

// will have multiple required fields and set categories;

/*    Required Data
      (name, date, location, summary, content, type, contact person)
      * types: workshops, contest, social, jobs
      * Workshops should link to info, resources and video
*/

function create_event() {
    register_post_type( 'events',
        array(
            'labels' => array(
                'name' => 'Events',
                'singular_name' => 'Event',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Event',
                'edit' => 'Edit',
                'edit_item' => 'Edit Event',
                'new_item' => 'New Event',
                'view' => 'View',
                'view_item' => 'View Event',
                'search_items' => 'Search Events',
                'not_found' => 'No Events found',
                'not_found_in_trash' => 'No Events found in Trash',
                'parent' => 'Parent Event'
            ),
 
            'public' => true,
            'menu_position' => 16,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/calendar-blue_edited.png', __FILE__ ),
            'has_archive' => true
        )
    );
}


?>