<?php



function lpp_f_admin_scripts_add() {
	$screen = get_current_screen();
	if($screen->post_type === 'landingpage_f') 
	wp_enqueue_script('lpp_admin_banner_js',plugins_url('/js/lpp_admin_bann.js',__FILE__));
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'wp-color-picker');
    wp_enqueue_script( 'my-script-handle', plugins_url('/js/lpp_color_picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}

add_action('admin_enqueue_scripts', 'lpp_f_admin_scripts_add');


?>