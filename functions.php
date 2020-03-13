<?php
add_action('wp_enqueue_scripts','style_theme');
add_action('wp_footer','scripts_theme');
add_action('after_setup_theme','my_menu');

function style_theme(){
	wp_enqueue_style('style', get_stylesheet_uri(), false, time());
	//wp_enqueue_script('parkingjs', get_stylesheet_directory_uri() . '/js/script.js', false, time(),true);
};
function scripts_theme(){
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', false, time(),true);
}
function my_menu(){
 register_nav_menus(array(
 	'head_menu' => 'Главное меню'
 ));
}

?>