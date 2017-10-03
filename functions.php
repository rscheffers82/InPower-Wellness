<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');


// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');

// ******************************************************** \\
// *                                                      * \\
// *        Additions needed for InPowerWellness          * \\
// *                                                      * \\
// ******************************************************** \\

// add fallback for date field for older browsers and FF
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

// Tell WordPress to allow these query params
function add_custom_query_var( $vars ){
  $vars[] = "fname";
  $vars[] = "fcontact";
  $vars[] .= "fdate";
  $vars[] .= "ftime";
  return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );


//Add Custom image size for BLog Thumbnail
// add_action( 'after_setup_theme', 'add_image_size' );
// function add_image_size() {
//     add_image_size( 'blog-thumb', 190, 168, true );
// }

//Registers new SIDEBAR for Footer
function custom_sidebar_init() {
	register_sidebar( array(
		'name'          => __( 'Footer', 'theme_text_domain' ),
		'id'            => 'footer',
		'description'   => '',
	  'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget large-4 medium-12 columns">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	 ) );
}
add_action( 'widgets_init', 'custom_sidebar_init' );

