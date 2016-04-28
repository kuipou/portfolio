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
}
add_action( 'wp_enqueue_scripts', 'chrisport_scripts' );