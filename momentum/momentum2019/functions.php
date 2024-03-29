<?php
/**
 * Author: Robert DeVore | @deviorobert
 * URL: html5blank.com | @html5blank
 * Custom functions, support, custom post types and more.
 */

require_once 'modules/is-debug.php';

/*------------------------------------*\
    External Modules/Files
\*------------------------------------*/

// Load any external files you have here
//
//Remove Gutenberg Block Library CSS from loading on the frontend
function update23_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
}


/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if ( ! isset( $content_width ) ) {
    $content_width = 900;
}

if ( function_exists( 'add_theme_support' ) ) {

    // Add Thumbnail Theme Support.
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'large', 700, '', true ); // Large Thumbnail.
    add_image_size( 'medium', 250, '', true ); // Medium Thumbnail.
    add_image_size( 'small', 120, '', true ); // Small Thumbnail.
    add_image_size( 'custom-size', 700, 200, true ); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');


    // Enables post and comment RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Enable HTML5 support.
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    // Localisation Support.
    load_theme_textdomain( 'html5blank', get_template_directory() . '/languages' );
}

/*------------------------------------*\
    Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav() {
    wp_nav_menu(
    array(
        'theme_location'  => 'header-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
        )
    );
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts() {
    if ( $GLOBALS['pagenow'] != 'wp-login.php' && ! is_admin() ) {
        if ( HTML5_DEBUG ) {
            // jQuery
            wp_deregister_script( 'jquery' );
            wp_register_script( 'jquery', get_template_directory_uri() . '/js/lib/jquery.js', array(), '1.11.1' );

            // Conditionizr
            wp_register_script( 'conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0' );

            // Modernizr
            wp_register_script( 'modernizr', get_template_directory_uri() . '/js/lib/modernizr.js', array(), '2.8.3' );

            // Custom scripts
            wp_register_script(
                'html5blankscripts',
                get_template_directory_uri() . '/js/scripts.js',
                array(
                    'conditionizr',
                    'modernizr',
                    'jquery'
                ),
                '1.0.0' );

            // Enqueue Scripts
            wp_enqueue_script( 'html5blankscripts' );

        // If production
        } else {
            // Scripts minify
            wp_register_script( 'html5blankscripts-min', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0.0' );
            // Enqueue Scripts
            wp_enqueue_script( 'html5blankscripts-min' );
        }
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts() {
    if ( is_page( 'pagenamehere' ) ) {
        // Conditional script(s)
        wp_register_script( 'scriptname', get_template_directory_uri() . '/js/scriptname.js', array( 'jquery' ), '1.0.0' );
        wp_enqueue_script( 'scriptname' );
    }
}


// Load HTML5 Blank styles
function html5blank_styles() {
    if ( HTML5_DEBUG ) {
        // normalize-css
        wp_register_style( 'normalize', get_template_directory_uri() . '/css/lib/normalize.css', array(), '7.0.0' );

        // Custom CSS
        wp_register_style( 'html5blank', get_template_directory_uri() . '/style.css', array( 'normalize' ), '5.5' );

        // Register CSS
        wp_enqueue_style( 'html5blank' );
    } else {
        // Custom CSS
        wp_register_style( 'html5blankcssmin', get_template_directory_uri() . '/style.css', array(), '1.4' );
        // Register CSS
        wp_enqueue_style( 'html5blankcssmin' );
    }
}

// Register HTML5 Blank Navigation
function register_html5_menu() {
    register_nav_menus( array( // Using array to specify more menus if needed
        'header-menu'  => esc_html( 'Header Menu', 'html5blank' ), // Main Navigation
        'extra-menu'   => esc_html( 'Extra Menu', 'html5blank' ) // Extra Navigation if needed (duplicate as many as you need!)
    ) );
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args( $args = '' ) {
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter( $var ) {
    return is_array( $var ) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list( $thelist ) {
    return str_replace( 'rel="category tag"', 'rel="tag"', $thelist );
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class( $classes ) {
    global $post;
    if ( is_home() ) {
        $key = array_search( 'blog', $classes, true );
        if ( $key > -1 ) {
            unset( $classes[$key] );
        }
    } elseif ( is_page() ) {
        $classes[] = sanitize_html_class( $post->post_name );
    } elseif ( is_singular() ) {
        $classes[] = sanitize_html_class( $post->post_name );
    }

    return $classes;
}

// Remove the width and height attributes from inserted images
function remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
    return $html;
}


// If Dynamic Sidebar Exists
if ( function_exists( 'register_sidebar' ) ) {
    // Define Sidebar Widget Area 1
    register_sidebar( array(
        'name'          => esc_html( 'Widget Area 1', 'html5blank' ),
        'description'   => esc_html( 'Description for this widget-area...', 'html5blank' ),
        'id'            => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    // Define Sidebar Widget Area 2
    register_sidebar( array(
        'name'          => esc_html( 'Widget Area 2', 'html5blank' ),
        'description'   => esc_html( 'Description for this widget-area...', 'html5blank' ),
        'id'            => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style() {
    global $wp_widget_factory;

    if ( isset( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'] ) ) {
        remove_action( 'wp_head', array(
            $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
            'recent_comments_style'
        ) );
    }
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links( array(
        'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
        'format'  => '?paged=%#%',
        'current' => max( 1, get_query_var( 'paged' ) ),
        'total'   => $wp_query->max_num_pages,
    ) );
}

// Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
function html5wp_index( $length ) {
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post( $length ) {
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt( $length_callback = '', $more_callback = '' ) {
    global $post;
    if ( function_exists( $length_callback ) ) {
        add_filter( 'excerpt_length', $length_callback );
    }
    if ( function_exists( $more_callback ) ) {
        add_filter( 'excerpt_more', $more_callback );
    }
    $output = get_the_excerpt();
    $output = apply_filters( 'wptexturize', $output );
    $output = apply_filters( 'convert_chars', $output );
    $output = '<p>' . $output . '</p>';
    echo esc_html( $output );
}

// Remove Admin bar
function remove_admin_bar() {
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove( $tag ) {
    return preg_replace( '~\s+type=["\'][^"\']++["\']~', '', $tag );
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', '', $html );
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ( $avatar_defaults ) {
    $myavatar                   = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = 'Custom Gravatar';
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments() {
    if ( ! is_admin() ) {
        if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1 ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
}

// Custom Comments Callback
function html5blankcomments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    extract( $args, EXTR_SKIP );

    if ( 'div' == $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo esc_html( $tag ) ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID(); ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
    <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
    <?php printf( esc_html( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ) ?>
    </div>
<?php if ( $comment->comment_approved == '0' ) : ?>
    <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.' ) ?></em>
    <br />
<?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
        <?php
            printf( esc_html( '%1$s at %2$s' ), get_comment_date(), get_comment_time() ) ?></a><?php edit_comment_link( esc_html_e( '(Edit)' ), '  ', '' );
        ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
    <?php comment_reply_link( array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php }

/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action( 'wp_enqueue_scripts', 'html5blank_header_scripts' ); // Add Custom Scripts to wp_head
add_action( 'wp_print_scripts', 'html5blank_conditional_scripts' ); // Add Conditional Page Scripts
add_action( 'get_header', 'enable_threaded_comments' ); // Enable Threaded Comments
add_action( 'wp_enqueue_scripts', 'html5blank_styles' ); // Add Theme Stylesheet
add_action( 'wp_enqueue_scripts', 'update23_remove_wp_block_library_css' );
add_action( 'init', 'register_html5_menu' ); // Add HTML5 Blank Menu
//add_action( 'init', 'create_post_type_html5' ); // Add our HTML5 Blank Custom Post Type
add_action( 'widgets_init', 'my_remove_recent_comments_style' ); // Remove inline Recent Comment Styles from wp_head()
add_action( 'init', 'html5wp_pagination' ); // Add our HTML5 Pagination

// Remove Actions
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

// Add Filters
add_filter( 'avatar_defaults', 'html5blankgravatar' ); // Custom Gravatar in Settings > Discussion
add_filter( 'body_class', 'add_slug_to_body_class' ); // Add slug to body class (Starkers build)
add_filter( 'widget_text', 'do_shortcode' ); // Allow shortcodes in Dynamic Sidebar
add_filter( 'widget_text', 'shortcode_unautop' ); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' ); // Remove surrounding <div> from WP Navigation
// add_filter( 'nav_menu_css_class', 'my_css_attributes_filter', 100, 1 ); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter( 'nav_menu_item_id', 'my_css_attributes_filter', 100, 1 ); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter( 'page_css_class', 'my_css_attributes_filter', 100, 1 ); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter( 'the_category', 'remove_category_rel_from_category_list' ); // Remove invalid rel attribute
add_filter( 'the_excerpt', 'shortcode_unautop' ); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter( 'the_excerpt', 'do_shortcode' ); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter( 'excerpt_more', 'html5_blank_view_article' ); // Add 'View Article' button instead of [...] for Excerpts
add_filter( 'show_admin_bar', 'remove_admin_bar' ); // Remove Admin bar
add_filter( 'style_loader_tag', 'html5_style_remove' ); // Remove 'text/css' from enqueued stylesheet
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 ); // Remove width and height dynamic attributes to thumbnails
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 ); // Remove width and height dynamic attributes to post images
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 ); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter( 'the_excerpt', 'wpautop' ); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode( 'html5_shortcode_demo', 'html5_shortcode_demo' ); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode( 'html5_shortcode_demo_2', 'html5_shortcode_demo_2' ); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

// Add manifest file for mobiles
add_action( 'wp_head', 'inc_manifest_link' );
function inc_manifest_link()  {
echo '<link rel="manifest" href="/manifest.json">';
}

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

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
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
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

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  if(empty($first_img)){ //Defines a default image
    return false;
  }
  return $first_img;
}
