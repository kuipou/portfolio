<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

 <header id="top">
    <aside class="logo">&nbsp;</aside>
    <nav class="top"><?    /**
      * Displays a navigation menu
      * @param array $args Arguments
      */
      $args = array(
        'theme_location' => 'nav',
        'menu' => '',
        'container' => 'nav',
        'container_class' => 'top',
        'container_id' => '',
        'menu_class' => '',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
        'depth' => 0,
        'walker' => ''
      );
    
      wp_nav_menu( $args ); ?>
      </nav>
      </header>
      <div class="content">