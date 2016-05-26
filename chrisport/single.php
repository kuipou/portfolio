<?php 
/* Template Name: About */
get_header();

 ?>
    
    <section class="main">
      <?php while ( have_posts() ) : the_post(); 
      
      the_title('<h1>', '</h1>' ); ?>
      <section class="screenshot">
      <?php the_post_thumbnail(); ?></section>
      <section class="description">
      <?php the_content( ); ?>
       
       <a class="demo btn" href="<?php /* get_metadata( $post->ID, chrisport_url, true );*/ ?>">Visit the site</a></aside>
        </section>
        <?php endwhile; ?>
      </section>




<!-- post -->

<!-- post navigation -->
<?php get_footer();