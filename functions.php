<?php
// Adding advanced features
if ( ! function_exists('babyplaytime_theme_setup') ):
   function babyplaytime_theme_setup() {
      // Adding title tag
      add_theme_support( 'title-tag' );

      // Adding custom logo
      add_theme_support( 'custom-logo', [
         'height'      => 59,
         'width'       => 350,
         'flex-height' => true,
         'header-text' => 'BabyPlayTime',
         'unlink-homepage-logo' => true, // WP 5.5
      ] );

      // Register navigation menu
      register_nav_menus( [
         'header_menu' => 'Header Menu',
         'footer_menu' => 'Footer Menu'
      ] );
   }
endif;
add_action( 'after_setup_theme', 'babyplaytime_theme_setup' );

// Adding scripts and styles.
function enqueue_babyplaytime_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'babyplaytime-theme', get_template_directory_uri() . '/assets/css/babyplaytime-theme.css', 'style');
}
add_action( 'wp_enqueue_scripts', 'enqueue_babyplaytime_style' );