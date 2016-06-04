<?php 
/* Template Name: Contact */
get_header();
the_post();
 ?>
   <section class="main"> 
   <h1 >Contact me</h1>
      <section class="description"><?php the_content(); ?>
      <img class="contact-img" src="<?php echo get_template_directory_uri(); ?>/images/chrisport_laptop.svg" alt="Chris working on a laptop">
      </section>
      <section class="contact"><?php chrisport_front(); ?></section>
    </section>      
<?php get_footer();
