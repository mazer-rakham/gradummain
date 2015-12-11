<?php
add_theme_support( 'title-tag' );
function wpgradumante_register_theme_menu() {
	register_nav_menu( 'primary', 'Main Navigation Menu' );	
}
function add_last_nav_item($items) {
  return $items .= '<li><a href="#" class="menu_close" style="position:absolute;bottom:10px;padding-right:20px; padding-top:10px;width:100%; left:0;" ><span class="glyphicon glyphicon-remove" style="padding-right:10px;font-size:18px;"></span>Close Menu</a></li>';
}
add_filter('wp_nav_menu_items','add_last_nav_item');

add_action( 'init', 'wpgradumante_register_theme_menu');

function add_login_out_item_to_menu( $items, $args ){

	
	if( is_admin() ||  $args->theme_location != 'primary' )
		return $items; 

	$redirect = ( is_home() ) ? false : get_permalink();
	if( is_user_logged_in( ) )
		$link = '<a href="' . wp_logout_url( $redirect ) . '" title="' .  __( 'Logout' ) .'">' . __( 'Logout' ) . '</a>';
	else  $link = '<a href="' . wp_login_url( $redirect  ) . '" title="' .  __( 'Login' ) .'">' . __( 'Login' ) . '</a>';

	return $items.= '<li id="log-in-out-link" class="menu-item menu-type-link">'. $link . '</li>';
}add_filter( 'wp_nav_menu_items', 'add_login_out_item_to_menu', 50, 2 );
/*
function gwp_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'gwp' ),
		'id' => 'sidebar-1',
		'description' => __( 'This is inside the main navigation '),
		'before_widget' => '<aside id="%1$s" class="widget%2$s">',
		'after_widget' => '</aside>'
		));
		
}
add_action( 'widgets_init', 'gwp_widgets_init' );
*/
function my_scripts_method() {
	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/js/gradumante_custom_scripts.js',
		array( 'jquery' )	
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>