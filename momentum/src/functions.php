<?php // ==== FUNCTIONS ==== //

// Load the configuration file for this installation; all options are set here
if ( is_readable( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' ) )
  require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' );

// Load configuration defaults for this theme; anything not set in the custom configuration (above) will be set here
require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config-defaults.php' );

// An example of how to manage loading front-end assets (scripts, styles, and fonts)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/assets.php' );

// Required to demonstrate WP AJAX Page Loader (as WordPress doesn't ship with simple post navigation functions)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/navigation.php' );

// Only the bare minimum to get the theme up and running
function voidx_setup() {

  // Language loading
  load_theme_textdomain( 'voidx', trailingslashit( get_template_directory() ) . 'languages' );

  // HTML5 support; mainly here to get rid of some nasty default styling that WordPress used to inject
  add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

  // Automatic feed links
  add_theme_support( 'automatic-feed-links' );

  // $content_width limits the size of the largest image size available via the media uploader
  // It should be set once and left alone apart from that; don't do anything fancy with it; it is part of WordPress core
  global $content_width;
  if ( !isset( $content_width ) || !is_int( $content_width ) )
  $content_width = (int) 960;

  // Register header and footer menus
  register_nav_menu( 'header', __( 'Header menu', 'voidx' ) );
  register_nav_menu( 'footer', __( 'Footer menu', 'voidx' ) );

}
add_action( 'after_setup_theme', 'voidx_setup', 11 );




// Add JS to footer
function wpb_adding_scripts() {
  wp_register_script('vendor', get_template_directory_uri() . '/js/wp-vendor.js','','1.1', true);

  wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBc4ePmRzjvngPriEIh2WWOVkizllZFShQ&v=3.exp&sensor=false', array(), '3', true );

  wp_enqueue_script( 'teamup', 'https://assets.goteamup.com/teamup.js', array(), '3', false );

  wp_enqueue_script('vendor');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );



// Sidebar declaration
function voidx_widgets_init() {
  register_sidebar( array(
  'name'          => __( 'Main sidebar', 'voidx' ),
  'id'            => 'sidebar-main',
  'description'   => __( 'Appears to the left side of the blog page.', 'voidx' ),
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget'  => '</aside>',
  'before_title'  => '<h2>',
  'after_title'   => '</h2>'
  ) );
}
add_action( 'widgets_init', 'voidx_widgets_init' );


// Team custom post type
add_action( 'init', 'new_post_types');

function new_post_types(){

  $teamlabels = array(
    'name' =>  'Team',
    'singular_name' => 'Team member',
    'menu_name'          => __( 'Team'),
    'name_admin_bar'     => __( 'Team'),
    'add_new'            => __( 'Add New'),
    'add_new_item'       => __( 'Add New Team Member'),
    'new_item'           => __( 'New Team Member'),
    'edit_item'          => __( 'Edit Team Member'),
    'view_item'          => __( 'View Team Member'),
    'all_items'          => __( 'All Team Members'),
    'search_items'       => __( 'Search Team Members'),
    'parent_item_colon'  => __( 'Parent Team Members:'),
    'not_found'          => __( 'No Team Members found.'),
    'not_found_in_trash' => __( 'No Team Members found in Trash.')
  );

  $testimoniallabels = array(
    'name' =>  'Testimonials',
    'singular_name' => 'Testimonial',
    'menu_name'          => __( 'Testimonials'),
    'name_admin_bar'     => __( 'Testimonials'),
    'add_new'            => __( 'Add New'),
    'add_new_item'       => __( 'Add New Testimonial'),
    'new_item'           => __( 'New Testimonial'),
    'edit_item'          => __( 'Edit Testimonial'),
    'view_item'          => __( 'View Testimonial'),
    'all_items'          => __( 'All Testimonials'),
    'search_items'       => __( 'Search Testimonials'),
    'parent_item_colon'  => __( 'Parent Testimonials:'),
    'not_found'          => __( 'No Testimonials found.'),
    'not_found_in_trash' => __( 'No Testimonials found in Trash.')
  );

  $classlabels = array(
    'name' =>  'Classes',
    'singular_name' => 'Class',
    'menu_name'          => __( 'Classes'),
    'name_admin_bar'     => __( 'Classes'),
    'add_new'            => __( 'Add New'),
    'add_new_item'       => __( 'Add New Class'),
    'new_item'           => __( 'New Class'),
    'edit_item'          => __( 'Edit Class'),
    'view_item'          => __( 'View Class'),
    'all_items'          => __( 'All Classes'),
    'search_items'       => __( 'Search Classes'),
    'parent_item_colon'  => __( 'Parent Classes:'),
    'not_found'          => __( 'No Classes found.'),
    'not_found_in_trash' => __( 'No Classes found in Trash.')
  );

  $locationlabels = array(
    'name' =>  'Locations',
    'singular_name' => 'Location',
    'menu_name'          => __( 'Locations'),
    'name_admin_bar'     => __( 'Locations'),
    'add_new'            => __( 'Add New'),
    'add_new_item'       => __( 'Add New Location'),
    'new_item'           => __( 'New Location'),
    'edit_item'          => __( 'Edit Location'),
    'view_item'          => __( 'View Location'),
    'all_items'          => __( 'All Locations'),
    'search_items'       => __( 'Search Locations'),
    'parent_item_colon'  => __( 'Parent Locations:'),
    'not_found'          => __( 'No Locations found.'),
    'not_found_in_trash' => __( 'No Locations found in Trash.')
  );

  $locationargs = array(
    'labels' => $locationlabels,
    'description' => "",
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => false,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
  );

  $teamargs = array(
    'labels' => $teamlabels,
    'description' => "",
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'team' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    'taxonomies' => array('featured-team-member', 'category'),
  );

  $testimonialargs = array(
    'labels' => $testimoniallabels,
    'description' => "",
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'testimonials' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
  );

  $classargs = array(
    'labels' => $classlabels,
    'description' => "",
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'class' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
  );

  $pricelabels = array(
    'name' =>  'Prices',
    'singular_name' => 'Price',
    'menu_name'          => __( 'Prices'),
    'name_admin_bar'     => __( 'Prices'),
    'add_new'            => __( 'Add New'),
    'add_new_item'       => __( 'Add New Price'),
    'new_item'           => __( 'New Price'),
    'edit_item'          => __( 'Edit Price'),
    'view_item'          => __( 'View Price'),
    'all_items'          => __( 'All Prices'),
    'search_items'       => __( 'Search Prices'),
    'parent_item_colon'  => __( 'Parent Prices:'),
    'not_found'          => __( 'No Prices found.'),
    'not_found_in_trash' => __( 'No Prices found in Trash.')
  );

  $priceargs = array(
    'labels' => $pricelabels,
    'description' => "",
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => false,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
  );

  register_post_type( 'team', $teamargs);
  register_post_type( 'classes', $classargs);
  register_post_type( 'testimonials', $testimonialargs);
  register_post_type( 'locations', $locationargs);
  register_post_type( 'prices', $priceargs);
}


add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'team'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}
