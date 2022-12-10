<?php
// Adding advanced features
if ( ! function_exists('babyplaytime_theme_setup') ):
   function babyplaytime_theme_setup() {
      // Adding title tag
      add_theme_support( 'title-tag' );

      // Adding custom logo
      add_theme_support( 'custom-logo', [
         'height'      => 59,
         'width'       => 300,
         'flex-height' => true,
         'header-text' => 'BabyPlayTime',
         'unlink-homepage-logo' => true,
      ] );

      // Register navigation menu
      register_nav_menus( [
         'header_menu' => 'Header Menu',
         'footer_menu' => 'Footer Menu',
         'header_es_menu' => 'Header ES Menu',
         'footer_es_menu' => 'Footer ES Menu',
      ] );


      add_action( 'init', 'register_post_types' );
      function register_post_types(){
         register_post_type( 'review', [
            'label'  => null,
            'labels' => [
               'name'               => 'Reviews',
               'singular_name'      => 'Review',
               'add_new'            => 'Add a review',
               'add_new_item'       => 'Add new review',
               'edit_item'          => 'Edit a review',
               'new_item'           => 'New review',
               'view_item'          => 'View review',
               'search_items'       => 'Search reviews',
               'not_found'          => 'Not found',
               'not_found_in_trash' => 'Now found in trash',
               'parent_item_colon'  => '',
               'menu_name'          => 'Reviews',
            ],
            'description'         => 'Review section',
            'public'              => true,
            'show_in_menu'        => true,
            'show_in_rest'        => true,
            'rest_base'           => null,
            'menu_position'       => 6,
            'menu_icon'           => 'dashicons-format-quote',
            'capability_type'     => 'post',
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
         ] );
         register_post_type( 'articles-es', [
            'label'  => null,
            'labels' => [
               'name'               => 'Articles',
               'singular_name'      => 'Article',
               'add_new'            => 'Add an article',
               'add_new_item'       => 'Add a new article',
               'edit_item'          => 'Edit an article',
               'new_item'           => 'New article',
               'view_item'          => 'View article',
               'search_items'       => 'Search articles',
               'not_found'          => 'Not found',
               'not_found_in_trash' => 'Now found in trash',
               'parent_item_colon'  => '',
               'menu_name'          => 'ES — Articles',
            ],
            'description'         => 'Spanish Articles',
            'public'              => true,
            'show_in_menu'        => true,
            'show_in_rest'        => true,
            'rest_base'           => null,
            'menu_position'       => 7,
            'menu_icon'           => 'dashicons-format-quote',
            'capability_type'     => 'post',
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
         ] );
      }

      function revcon_change_post_label() {
         global $menu;
         global $submenu;
         $menu[5][0] = 'Articles';
         $submenu['edit.php'][5][0] = 'Articles';
         $submenu['edit.php'][10][0] = 'Add a new article';
         $submenu['edit.php'][16][0] = 'Tags';
      }
      function revcon_change_post_object() {
         global $wp_post_types;
         $labels = &$wp_post_types['post']->labels;
         $labels->name = 'Articles';
         $labels->singular_name = 'Articles';
         $labels->add_new = 'Add article';
         $labels->add_new_item = 'Add a new article';
         $labels->edit_item = 'Edit article';
         $labels->new_item = 'Article';
         $labels->view_item = 'View articles';
         $labels->search_items = 'Search articles';
         $labels->not_found = 'Articles not found';
         $labels->not_found_in_trash = 'Articles not found in trash';
         $labels->all_items = 'All articles';
         $labels->menu_name = 'Articles';
         $labels->name_admin_bar = 'Articles';
      }
      
      add_action( 'admin_menu', 'revcon_change_post_label' );
      add_action( 'init', 'revcon_change_post_object' );


      // Set a specific order in admin menu
      function wpse_custom_menu_order( $menu_ord ) {
         if ( !$menu_ord ) return true;

         return array(
            'index.php', // Dashboard
            'separator1', // First separator
            'edit.php?post_type=page', // Pages
            'edit.php?post_type=review', // Reviews
            'edit.php', // Articles (Post)
            'edit.php?post_type=articles-es', // Reviews
            'edit-comments.php', // Comments
            'upload.php', // Media
            'separator2', // Second separator
            'themes.php', // Appearance
            'plugins.php', // Plugins
            'users.php', // Users
            'tools.php', // Tools
            'options-general.php', // Settings
            'separator-last', // Last separator
         );
      }
      add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
      add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );

   }
endif;
add_action( 'after_setup_theme', 'babyplaytime_theme_setup' );

// Adding scripts and styles.
function enqueue_babyplaytime_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'babyplaytime-theme', get_template_directory_uri() . '/assets/css/babyplaytime-theme.css', 'style');
   wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', 'swiper', time(), true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_babyplaytime_style' );