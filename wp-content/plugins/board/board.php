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
            'menu_position' => 20,
            'supports' => array( 'title', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/acm.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

// relabeling admin panels for custom post data
// relabel 'Title'
function change_default_title( $title ){
     $screen = get_current_screen();
 
     if  ( 'board' == $screen->post_type ) {
          $title = "Member's Name";
     }
 
     return $title;
}
add_filter( 'enter_title_here', 'change_default_title' );

// relabel 'Featured Image'
add_action('do_meta_boxes', 'change_image_box');
function change_image_box()
{
    remove_meta_box( 'postimagediv', 'board', 'side' );
    add_meta_box('postimagediv', __("Member's Photo"), 'post_thumbnail_meta_box', 'board', 'side', 'default');
}


// meta boxes custom post type meta data
add_action( 'add_meta_boxes', 'board_member_meta_box_add' );  
function board_member_meta_box_add()  
{  
    add_meta_box( 'member_meta', 'Board Member Meta', 'board_member_meta_box', 'board', 'normal', 'high' );  
}

function board_member_meta_box()  
{  
    ?>  
    <label for="member_title">Member's Title  </label>  
    <input type="text" name="member_title" id="member_title" />
    <br />
    <label for="member_email">Member's Email</label>  
    <input type="text" name="member_email" id="member_email" />  
    <?php
} 


?>