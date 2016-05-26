<?php 
/* Template Name: Contact */
get_header();
get_sidebar();
the_post();
 ?>
    
   <h1 >Contact me</h1>
      <section class="description"><?php the_content(); ?> <p>If you'd like to hire me or you'd want me to work on a project, feel free to contact me. </p>
      <p>I'll respond in the next business day </p>
      <img class="contact-img" src="images/chrisport_laptop.svg" alt="Chris working on a laptop">
      </section>
      <?php get_template_part( 'content', 'form' );



 get_footer();

