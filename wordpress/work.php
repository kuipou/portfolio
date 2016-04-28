<?php get_header();
      $category = get_categories();
       ?>

    <section class="main">
      <h1>Work</h1>
      
      <?php 
        foreach ($category as $category) {
          $cat_id = $category->term_id;
          ?>
          <h2><a href="#<?php echo $category->name ?>"><?php echo $category->name ?></a></h2>
          <section class="gallery">
          <?php 
            query_posts("cat=$cat_id&posts_per_page=50" );
            if (have_post() : while (have_post()) : the_post; 
          ?>
          <article class="gallery-item">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?> </a>
          </article>
        <?php endwhile; endif; } ?> // foreach
      
   
      </section>
    </section>
 <?php get_footer(); ?>