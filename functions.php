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
  $vars[] .= "fthank";
  return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );


//Add Custom image size for BLog Thumbnail
add_action( 'after_setup_theme', 'add_blog_thumbs' );
function add_blog_thumbs() {
    add_image_size( 'blog-thumb', 190, 168, true );
}

// Customize Excerpt Length
function custom_excerpt_length( $length ) {
	return 35; //20 chars
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Adds Custom Logo and Logo URL to login Page
add_action('login_head', 'custom_login_logo');
function custom_login_logo() {
		echo '<style type="text/css">
		h1 a { background-image:url('.get_template_directory_uri().'/assets/images/login-logo.png) !important; background-size: 320px 75px !important;height: 75px !important; width: 320px !important; margin-bottom: 0 !important; padding-bottom: 10px !important; }
		.login form { margin-top: 10px !important; }
		</style>';
}

function url_login_logo(){
		return get_bloginfo( 'wpurl' );
}
add_filter('login_headerurl', 'url_login_logo');

//Registers new SIDEBAR for Footer
function custom_sidebar_init() {
	register_sidebar( array(
		'name'          => __( 'Footer', 'theme_text_domain' ),
		'id'            => 'footer',
		'description'   => '',
	  'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget large-4 medium-6 small-12 columns">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	 ) );
}
add_action( 'widgets_init', 'custom_sidebar_init' );

// Add Custom shortcode to add Infographic Markup to page

function infographicMarkup() {
  ?>
  <div class="infographic1">
    <div class="outcomesWrap">
      <h3>Specific Outcomes Include</h3>
      <ul>
        <li>Drinking more water</li>
        <li>Eating more fruit &amp; veggies</li>
        <li>QUitting Smoking</li>
        <li>Running Again</li>
        <li>Fewer sick days</li>
        <li>Being resilient to setbacks</li>
        <li>Healthier work-life balance</li>
        <li>Fewer emotional upsets at work</li>
      </ul>
    </div>
  </div>
  <?php
}
add_shortcode('infographic', 'infographicMarkup');

