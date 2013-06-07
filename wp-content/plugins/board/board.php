<?php
/*
Plugin Name: Board Members - Custom Post Type
Description: Declares a plugin that will create a custom post type for board 
             member profiles.
Version: 1.0
Author: Frank Valcarcel
*/

add_action( 'init', 'board_members' );

// will have multiple required fields and set categories;

/*    Required Data
      name, title, email, election date, picture, affiliation : ACM | ACM[W]
*/

function board_members() {
    register_post_type( 'board',
        array(
            'labels' => array(
                'name' => 'Board Members',
                'singular_name' => 'Board Member',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Member',
                'edit' => 'Edit',
                'edit_item' => 'Edit Member',
                'new_item' => 'New Member',
                'view' => 'View',
                'view_item' => 'View Member',
                'search_items' => 'Search Members',
                'not_found' => 'No Members found',
                'not_found_in_trash' => 'No Members found in Trash',
                'parent' => 'Parent Member'
            ),
 
            'public' => true,
            'menu_position' => 16,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/acm.png', __FILE__ ),
            'has_archive' => true
        )
    );
}


?>