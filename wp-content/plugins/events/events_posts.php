<?php
/*
Plugin Name: Event - Custom Post Type
Description: Declares a plugin that will create a custom post type for events
             and workshops.
Version: 2.0
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
            'menu_position' => 20,
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/calendar-blue_edited.png', __FILE__ ),
            'has_archive' => true
        )
    );
}


add_filter ("manage_edit-events_columns", "events_edit_columns");
add_action ("manage_posts_custom_column", "events_custom_columns");
function events_edit_columns($columns) {
 
    $columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "title" => "Event",
        "event_col_date" => "Date",
        "event_col_times" => "Time",
        "event_col_desc" => "Description",
        );

    return $columns;
}


function events_custom_columns($column)
{
    global $post;
    $custom = get_post_custom();
    switch ($column) {
        case "event_col_date":
            // - show dates -
            $startd = $custom["events_startdate"][0];
            // $endd = $custom["events_enddate"][0];
            $startdate = date("F j, Y", $startd);
            // $enddate = date("F j, Y", $endd);
            // echo $startdate . '<br /><em>' . $enddate . '</em>';
            echo $startdate;
        break;

        case "event_col_times":
            // - show times -
            $startt = $custom["events_startdate"][0];
            // $endt = $custom["events_enddate"][0];
            $time_format = get_option('time_format');
            $starttime = date($time_format, $startt);
            // $endtime = date($time_format, $endt);
            // echo $starttime . ' - ' .$endtime;
            echo $starttime;
        break;

        case "event_col_desc";
            the_excerpt();
        break;
    }
}


add_action( 'admin_init', 'events_create' );
function events_create() {
    add_meta_box('events_meta', 'Event Date', 'events_meta', 'events', 'side', 'default' );
}
 
function events_meta () {
    global $post;
    $custom = get_post_custom($post->ID);
    $meta_sd = $custom["events_startdate"][0];
    $meta_ed = $custom["events_enddate"][0];
    $meta_st = $meta_sd;
    $meta_et = $meta_ed;
     
    // - grab wp time format -
     
    $date_format = get_option('date_format'); // Not required in my code
    $time_format = get_option('time_format');
     
    // - populate today if empty, 00:00 for time -
     
    if ($meta_sd == null) { $meta_sd = time(); $meta_ed = $meta_sd; $meta_st = 0; $meta_et = 0;}
     
    // - convert to pretty formats -
     
    $clean_sd = date("D, M d, Y", $meta_sd);
    $clean_ed = date("D, M d, Y", $meta_ed);
    $clean_st = date($time_format, $meta_st);
    $clean_et = date($time_format, $meta_et);
     
    // - security -
     
    echo '<input type="hidden" name="events-nonce" id="events-nonce" value="' .
    wp_create_nonce( 'events-nonce' ) . '" />';
     
    // - output -
     
    ?>
    <div class="events-meta">
        <ul>
            <li><label>Start Date</label><input name="events_startdate" class="tfdate" readonly="readonly" value="<?php echo $clean_sd; ?>" /></li>
            <li><label>Start Time</label>
            <?php $mil_time = date("H:i", strtotime($clean_st)); ?>
            <select name="events_starttime">
            <?php for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
                    for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
                        if ( $mil_time == str_pad($hours,2,'0',STR_PAD_LEFT).':'.str_pad($mins,2,'0',STR_PAD_LEFT) ) {
                            echo '<option selected="selected">'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                                       .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
                        }
                        else {
                            echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                                           .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
                        }
            ?>
            </select>
            <br /><em>Use 24h format (7:30pm = 19:30)</em></li>
       <!-- <li><label>End Date</label><input name="events_enddate" class="tfdate" value="<?php //echo $clean_ed; ?>" /></li>
            <li><label>End Time</label><input name="events_endtime" value="<?php //echo $clean_et; ?>" /><em>Use 24h format (7pm = 19:00)</em></li> -->
        </ul>
    </div>
    <?php
}


add_action ('save_post', 'save_events_date_time');
function save_events_date_time() {
 
    global $post;
     
    // - still require nonce
     
    if ( !wp_verify_nonce( $_POST['events-nonce'], 'events-nonce' ))
        return $post->ID;
     
    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;
     
    // - convert back to unix & update post
     
    if(!isset($_POST["events_startdate"])):
        return $post;
    endif;
    $updatestartd = strtotime ( $_POST["events_startdate"] . $_POST["events_starttime"] );
    update_post_meta($post->ID, "events_startdate", $updatestartd );
     
    if(!isset($_POST["events_enddate"])):
        return $post;
    endif;
    $updateendd = strtotime ( $_POST["events_enddate"] . $_POST["events_endtime"]);
    update_post_meta($post->ID, "events_enddate", $updateendd );
     
}


add_filter('post_updated_messages', 'events_updated_messages');
 
function events_updated_messages( $messages ) {
 
  global $post, $post_ID;
 
  $messages['events'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Event updated. <a href="%s">View item</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Event updated.'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Event restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Event published. <a href="%s">View event</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Event saved.'),
    8 => sprintf( __('Event submitted. <a target="_blank" href="%s">Preview event</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Event scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview event</a>'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Event draft updated. <a target="_blank" href="%s">Preview event</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
 
  return $messages;
}

function events_styles() {
    global $post_type;
    if( 'events' != $post_type )
        return;
    wp_enqueue_style('ui-datepicker', get_bloginfo('template_url') . '/css/jquery-ui/jquery-ui-1.8.9.custom.css');
}
 
function events_scripts() {
    global $post_type;
    if( 'events' != $post_type )
        return;
    wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array('jquery'));
    wp_enqueue_script('ui-datepicker', get_bloginfo('template_url') . '/js/jquery.ui.datepicker.min.js');
    wp_enqueue_script('custom_script', get_bloginfo('template_url').'/js/pubforce-admin.js', array('jquery'));
}
 
add_action( 'admin_print_styles-post.php', 'events_styles', 1000 );
add_action( 'admin_print_styles-post-new.php', 'events_styles', 1000 );
 
add_action( 'admin_print_scripts-post.php', 'events_scripts', 1000 );
add_action( 'admin_print_scripts-post-new.php', 'events_scripts', 1000 );


?>