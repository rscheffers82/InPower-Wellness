<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/dist/what-input.min.js', array(), '', true );

    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '6.2.3', true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    //load font-awesome in the theme
    //wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome-4.7.0/css/font-awesome.min.css', array(), '', 'all' );

    // load momentjs for quick date formatting from Lead Gen to Thank you page
    wp_enqueue_script( 'moment-js', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js', array( 'jquery' ), '', true );

    wp_enqueue_script( 'inpowerwellness-scripts', get_template_directory_uri() . '/js/lead-gen-thank-you.js', array( 'jquery', 'moment-js' ), '', true );
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
