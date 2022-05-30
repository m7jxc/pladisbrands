<?php
//remove_filter( 'the_content', 'wpautop' ); 



//styles and scripts
function pladisbrands() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), 0.01 );
	wp_enqueue_style( 'lightGallery', get_template_directory_uri() . '/js/lightGallery/lightGallery.css',array(),'1.0','all');
	wp_enqueue_script('jquery.validate', get_template_directory_uri() . '/js/jquery.validate.js', array('jquery'), '', true);
	wp_enqueue_script('icon_customImage', get_template_directory_uri() . '/js/icon_customImage.js', array('jquery'), '', true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '', true);
	wp_enqueue_script('jquery.animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.js', array('jquery'), '', true);
	wp_enqueue_script('jquery.transit', get_template_directory_uri() . '/js/jquery.transit.min.js', array('jquery'), '', true);
	wp_enqueue_script('parall', get_template_directory_uri() . '/js/parall.js', array('jquery'), '', true);
	wp_enqueue_script('lightGallery', get_template_directory_uri() . '/js/lightGallery/lightGallery.js', array('jquery'), '', true);
	wp_enqueue_script('jquery.form', get_template_directory_uri() . '/js/jquery.form.js', array('jquery'), '', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '0.1', true);
	wp_enqueue_script('yandex-maps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '', true);
}

add_action( 'wp_enqueue_scripts', 'pladisbrands' );






//original code

function wpb_custom_new_menu()
{
	register_nav_menus(
		array(
			'my-custom-menu' => __('Top Menu'),
			'extra-menu' => __('Menu Footer')
		)
	);
}
add_action('init', 'wpb_custom_new_menu');
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('post'));          // Только для post