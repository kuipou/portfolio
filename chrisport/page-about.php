<?php 
/* Template Name: About */
get_header();
the_post();
 ?>
    
    <section class="main">
    <section class="screenshot">
         <img src="<?php echo get_template_directory_uri(); ?>/images/chrisport_hero.svg" alt="Comical Drawing of Chris" width="80%"></section>
          
          <section class="description">
          <?php 
          the_title( '<h1>', '</h1>'); 
          the_content(); 
          ?>
          </section>
         
          </section>
    </section>




<!-- post -->

<!-- post navigation -->
<?php get_footer();