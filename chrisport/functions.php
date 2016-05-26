<?php 
/**
 * Christophe's Portfolio Functions
 *
 * [Long Description.]
 *
 * @link functions.php
 * @since 1.0
 *
 * @package plugin
 */
function cwc_maintenance_mode() {
    if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
        wp_die('Maintenance, please come back soon.');
    }
}
add_action('get_header', 'cwc_maintenance_mode');

function chrisport_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 9999 );
  add_image_size( 'featured-post-image', 500, 300, true );
  register_nav_menus( array(
    'nav' => __( 'Navigation', 'chrisport' )
    ) );

}
add_action( 'after_setup_theme', 'chrisport_setup' );
function chrisport_js_detect() {
  echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'chrisport_js_detect', 0 );

function chrisport_scripts() {
  wp_enqueue_style( 'chrisport_style', get_stylesheet_uri() );
  wp_enqueue_style( 'chrisport_fa_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
  wp_register_script('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js', array('jquery'), false, '0.97.6' );
  wp_enqueue_script('materialize' );
  wp_enqueue_script('chrisport_main_js', get_template_directory_uri() . '/js/main.js', array('jquery, materialize'), false, '2.1.1' );
}
add_action( 'wp_enqueue_scripts', 'chrisport_scripts' );

function modify_jquery() {
  if (!is_admin()) {
    // comment out the next two lines to load the local copy of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', false, '2.1.1');
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'modify_jquery');