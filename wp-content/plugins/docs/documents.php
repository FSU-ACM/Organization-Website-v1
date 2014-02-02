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
                'name' => 'Docs Pages',
                'singular_name' => 'Doc',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Document Page',
                'edit' => 'Edit',
                'edit_item' => 'Edit Document Page',
                'new_item' => 'New Document Page',
                'view' => 'View',
                'view_item' => 'View Document Page',
                'search_items' => 'Search Document Pages',
                'not_found' => 'No Document Pages found',
                'not_found_in_trash' => 'No Document Pages found in Trash',
                'parent' => 'Parent Document Page'
            ),
 
            'public' => true,
            'menu_position' => 20,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array('doc_taxonomy'),
            'menu_icon' => plugins_url( 'images/document-invoice.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
?>