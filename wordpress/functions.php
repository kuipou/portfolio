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

function chrisport_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 9999 );
  register_nav_menu( 'Nav', 'Nav Menu' );

}
add_action( 'after_setup_theme', 'twentysixteen_setup' );