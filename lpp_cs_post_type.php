<?php 



//////////// CUSTOM POST TYPE STARTS HERE!!!!! //////////////

function lpp_f_custom_post_type(){
  $labels = array(
    'name' => _x('Landing Page','post type general name'),
    'singular_name' => _x('Landing Page','post type singular name'),
    'add_new' => _x('Add New','Landing Page'),
    'add_new_item' => __('Add new Landing Page'),
    'edit_item' => __('Edit Landing Page'),
    'new_item' => __('New Landing Page'),
    'all_items' => __('All Landing Pages'),
    'view_itme' => __('View Landing Page'),
    'search_items' => __('Search Landing Page'),
    'not_found' => __('No Landing Page found'),
    'not_found_in_trash' => __('No Landing Page found in trash'),
    'parent_item_colon' => "",
    'menu_name' => 'Landing Page'

    );
  $args = array(
    'labels' => $labels,
    'description' => 'Create Landing Page',
    'public' => true,
    'exclude_from_search' => false,
    'menu_position' => 25,
    'supports' => array('title','custom_fields'),
    'has_archive' => true,
    'capability_type' => 'page',
    'query_var' => 'lpp_f_landing_page',
    'menu_icon' => 'dashicons-welcome-add-page',
    'show_in_menu' => true

    );


  register_post_type('landingpage_f',$args);
}

add_action('init','lpp_f_custom_post_type');


function lpp_ulp_activate_f() {  
    lpp_custom_post_type();
    flush_rewrite_rules();
}
 
register_activation_hook( __FILE__, 'lpp_ulp_activate_f' );
 
function lpp_ulp_deactivate_f() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'lpp_ulp_deactivate_f' );

//////////// CUSTOM POST TYPE ENDS HERE!!!!! ////////////// /
                                                        // //   / 
                                                            //  //  /
                                                            //  //  //
                // WONDERFULL ART HERE                      //  //  //////////////////////////////
                                                            //  //  ///        //////////////////
                                                            //  //  ////////////////////////////
                                                            //  //  ///
                                                            //  //
                                                            //  //
                                                            //  /
                                                            //

/////////////////////////// Removing post name from perma link ///////////////////////////


/**
 * Some hackery to have WordPress match postname to any of our public post types
 * All of our public post types can have /post-name/ as the slug, so they better be unique across all posts
 * Typically core only accounts for posts and pages where the slug is /post-name/
 */

add_action("load-post-new.php","lpp_f_count");

    function lpp_f_count( $userid, $post_type = 'landingpage_f' ) {
    global $wpdb;

    $userid = get_current_user_id();

    $where = get_posts_by_author_sql( $post_type, true, $userid );

    $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );

    $screen = get_current_screen();

    if (current_user_can( 'edit_posts') and $screen->post_type === 'landingpage_f') { 
        //Is  admin and all users - so impose the limit
        if($count>=3)
            header("Location: /wp-content/plugins/ultimate-landing-page/phuf.php");
            

        }
    }

    function add_lpp_tabs_to_dropdown_f( $pages ){
    $args = array(
        'post_type' => 'landingpage_f'
    );
    $items = get_posts($args);
    $pages = array_merge($pages, $items);

    return $pages;
}
add_filter( 'get_pages', 'add_lpp_tabs_to_dropdown_f' );



    




?>