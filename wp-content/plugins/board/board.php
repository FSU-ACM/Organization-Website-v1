<?php
/*
Plugin Name: Board Members - Custom Post Type
Description: Declares a plugin that will create a custom post type for board 
             member profiles.
Version: 1.0
Author: Frank Valcarcel
*/

add_action( 'init', 'board_members' );

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
            // board does not support description, custom fields or 
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
    add_meta_box( 'member-meta-box-id', 'Board Member Meta', 'board_member_meta_box', 'board', 'normal', 'high' );
}

function board_member_meta_box( $post )
{
    $values = get_post_custom( $post->ID );
    $title = isset( $values['member_title'] ) ? esc_attr( $values['member_title'][0] ) : '';
    $email = isset( $values['member_email'] ) ? esc_attr( $values['member_email'][0] ) : '';
    $affiliation = isset( $values['member_affiliation'] ) ? esc_attr( $values['member_affiliation'][0] ) : '';
    $active = isset( $values['member_active'] ) ? esc_attr( $values['member_active'][0] ) : '';
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
    <p>
        <label for="member_title">Member's Title  </label>  
            <select name="member_title" id="member_title">
              <option value="" <?php selected( $title, '' ); ?>>-select a position-</option>
              <option value="Historian" <?php selected( $title, 'Historian' ); ?>>Historian</option>
              <option value="President" <?php selected( $title, 'President' ); ?>>President</option>
              <option value="President Emeritus" <?php selected( $title, 'President Emeritus' ); ?>>President Emeritus</option>
              <option value="Secretary" <?php selected( $title, 'Secretary' ); ?>>Secretary</option>
              <option value="Treasurer" <?php selected( $title, 'Treasurer' ); ?>>Treasurer</option>
              <option value="Vice President" <?php selected( $title, 'Vice President' ); ?>>Vice President</option>
              <option value="Vice President of Grads" <?php selected( $title, 'Vice President of Grads' ); ?>>Vice President of Grads</option>
              <option value="Vice President of UGrads" <?php selected( $title, 'Vice President of UGrads' ); ?>>Vice President of UGrads</option>
            </select>
    </p>
    <p>
        <label for="member_email">Member's Email</label>  
        <input type="text" name="member_email" id="member_email" style="width: 160px;" value="<?php echo $email; ?>" />  
    </p>
    <p>
        <label for="member_affiliation">Member's Affiliation</label>  
        <select name="member_affiliation" id="member_affiliation">
             <option value="ACM" <?php selected( $affiliation, 'ACM' ); ?>>ACM</option>
             <option value="ACM[W]" <?php selected( $affiliation, 'ACM[W]' ); ?>>ACM[W]</option>
        </select>
    </p>
    <p>
        <label for="member_active">Is this member active?</label>
        <input type="checkbox" name="member_active" id="member_active" <?php checked( $active, 'on' ); ?> />
     </p>
    <?php   
}


add_action( 'save_post', 'board_member_meta_box_save' );
function board_member_meta_box_save( $post_id )
{
    // bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
    
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
    
    // now we can actually save the data, not bailing
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
    
    // make sure data is set
    if( isset( $_POST['member_title'] ) )
        update_post_meta( $post_id, 'member_title', esc_attr( $_POST['member_title'] ) );

    if( isset( $_POST['member_email'] ) )
        update_post_meta( $post_id, 'member_email', wp_kses( $_POST['member_email'], $allowed ) );

    if( isset( $_POST['member_affiliation'] ) )
        update_post_meta( $post_id, 'member_affiliation', esc_attr( $_POST['member_affiliation'] ) );
        
    if( isset( $_POST['my_meta_box_select'] ) )
        update_post_meta( $post_id, 'my_meta_box_select', esc_attr( $_POST['my_meta_box_select'] ) );
        
    $chk = ( isset( $_POST['member_active'] ) && $_POST['member_active'] ) ? 'on' : 'off';
    update_post_meta( $post_id, 'member_active', $chk );
}

// board member card shortcode
add_shortcode( 'board_members', 'board_display_member_card' );
function board_display_member_card() {
    $args = array(
        'post_type' => 'board', // the post type we're querying
        'orderby' => 'title',   // order by title
        'order' => 'ASC',       // in ascending order
        'posts_per_page'=> -1,  // will return all posts from this type
    );
    
    $board_member = new WP_Query( $args );
    if( $board_member->have_posts() ):
        $board_output = '<section class="is-features"><div class="5grid">';
        while ( $board_member->have_posts() ) : $board_member->the_post();

            // if the member is active
            if (get_post_meta( get_the_ID(), 'member_active', true ) == 'on') {

                $card_count = 1;    // we need to count entries to break on 4
                if ($card_count % 4 == 1) $board_output .= '<div class="row">';

                // check for member photo or use default
                if ( function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID) )
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 282,153 ), false, '' );
                else
                    $src[0] = get_template_directory_uri() . '/images/noImage.jpg';

                // meta data retrieval
                $title = get_post_meta( get_the_ID(), 'member_title', true );
                $email = get_post_meta( get_the_ID(), 'member_email', true );
                $affiliation = get_post_meta( get_the_ID(), 'member_affiliation', true );


                $board_output .= '<div class="3u">';
                $board_output .= '<section class="is-feature">';
                $board_output .= '<div class="member_card_box" style="height:195px;overflow:hidden;">';
                $board_output .= '<img src="' . $src[0] . '" class="image image-full" width="153px"></div>';
                $board_output .= '<div class="member_card" style="border:solid 3px #e7eae8;min-height:150px;padding-top: 11px;">';
                $board_output .= '<h3>' . get_the_title() . '</h3>';
                $board_output .= '<hr style="border: solid 2px #e7eae8;width: 90%;">';
                $board_output .= '<h5>' . $title . '</h5>';
                $board_output .= '<a href="mailto:' . $email . '" class="button" style="font-size: .9em;padding: 0.4em 2em 0.4em 2em;">Email</a>';
                $board_output .= '<div class="affiliation" style="background: #e7eae8;width: 100%;height: auto;color: #6b7770;margin-top: 10px;">' . $affiliation . '</div>';
                $board_output .= '</section></div>';

                if ($card_count % 4 == 1) $board_output .= '</div>';
                $card_count++;
            }

        endwhile;
        $board_output .= '</div></section>';
    endif;
    
    wp_reset_postdata();
    return $board_output;
}
?>