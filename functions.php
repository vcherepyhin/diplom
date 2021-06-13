<?php

add_action( 'wp_enqueue_scripts', 'set_up_styles' );
add_action( 'wp_footer', 'set_up_scripts' );
add_action( 'after_setup_theme', 'do_after_setup_theme' );


function set_up_styles() {
  wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css' );
  
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_style( 'home', get_template_directory_uri().'/css/home.css' );
  wp_enqueue_style( 'header', get_template_directory_uri().'/css/header.css' );
  wp_enqueue_style( 'footer', get_template_directory_uri().'/css/footer.css' );
  wp_enqueue_style( 'album', get_template_directory_uri().'/css/album.css' );
  wp_enqueue_style( 'album-short', get_template_directory_uri().'/css/album-short.css' );
  wp_enqueue_style( 'albums', get_template_directory_uri().'/css/albums.css' );
  wp_enqueue_style( 'contacts', get_template_directory_uri().'/css/contacts.css' );
  wp_enqueue_style( '_about', get_template_directory_uri().'/css/_about.css' );
  wp_enqueue_style( '404', get_template_directory_uri().'/css/404.css' );
}

function set_up_scripts() {
  wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array('jquery') );
  wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array('jquery') );
}

function do_after_setup_theme() {
  register_main_menu();
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails', array( 'post' ) );
  add_image_size( 'post_thumbnail', 600, 600, true );
}

function register_main_menu() {
	register_nav_menu( 'main_nav', 'Главное мню' );
}