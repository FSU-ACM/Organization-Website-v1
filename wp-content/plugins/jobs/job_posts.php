<?php
/*
Plugin Name: Jobs - Custom Post Type
Description: Declares a plugin that will create a custom post type for job
			 and internship oppurtunities.
Version: 1.0
Author: Frank Valcarcel
*/

add_action( 'init', 'create_job_posting' );

// will have 3 required fields; job name(title), content, and contact person, 

function create_job_posting() {
    register_post_type( 'job_posts',
        array(
            'labels' => array(
                'name' => 'Jobs',
                'singular_name' => 'Job',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Job',
                'edit' => 'Edit',
                'edit_item' => 'Edit Job Posting',
                'new_item' => 'New Job Posting',
                'view' => 'View',
                'view_item' => 'View Job Posting',
                'search_items' => 'Search Job Postings',
                'not_found' => 'No Job Postings found',
                'not_found_in_trash' => 'No Job Postings found in Trash',
                'parent' => 'Parent Job Posting'
            ),
 
            'public' => true,
            'menu_position' => 20,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array(''),
            'menu_icon' => plugins_url( 'images/user-business-boss.png', __FILE__ ),
            'has_archive' => true,
        )
    );
}
?>