<?php
/*
Plugin Name: Docs - Custom Post Type
Description: Declares a plugin that will create a custom post type for docs.
Version: 1.0
Author: Frank Valcarcel
*/

add_action( 'init', 'create_document' );

// will have 3 required fields; filename, description, filetype 

function create_document() {
    register_post_type( 'documents',
        array(
            'labels' => array(
                'name' => 'Documents',
                'singular_name' => 'Document',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Document',
                'edit' => 'Edit',
                'edit_item' => 'Edit Document',
                'new_item' => 'New Document',
                'view' => 'View',
                'view_item' => 'View Document',
                'search_items' => 'Search Documents',
                'not_found' => 'No Documents found',
                'not_found_in_trash' => 'No Documents found in Trash',
                'parent' => 'Parent Document'
            ),
 
            'public' => true,
            'menu_position' => 16,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/document-invoice.png', __FILE__ ),
            'has_archive' => true
        )
    );
}


?>