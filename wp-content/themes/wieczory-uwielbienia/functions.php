<?php

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_styles() {
    wp_enqueue_style( 'main-css', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'main-css', 'https://fonts.googleapis.com/css?family=Fira+Sans:300,400,700' );
    wp_enqueue_style( 'menu', get_stylesheet_directory_uri().'/public/css/hamburgers.css' );
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js' , array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');

}
add_action( 'wp_enqueue_styles', 'wpdocs_theme_name_styles' );

wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js', false, '3.2.1');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu Główne' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 $defaults = array(
	'default-color'          => '000',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => 'Kolor tła',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


 ?>
