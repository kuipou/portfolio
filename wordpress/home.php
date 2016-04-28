<?php get_header();
$category = get_categories();
?>

<section class="main">
  <h1>Work</h1>

  <?php 
  foreach ($category as $category) {
    $cat_id = $category->term_id;
    ?>
    <h2><a href="#<?php echo $category->name ?>"><?php echo $category->name ?></a></h2><br />
    <section class="gallery">
      <?php 
      query_posts("cat=$cat_id&posts_per_page=50" );
      if ( have_posts() ) : while ( have_posts() ) : the_post(); 
      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
      $thumb_url = $thumb_url_array[0];
      ?>
      <article class="gallery-item">
      <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url ?>" alt="Screen shot of <? get_the_title(); ?>"></a>
      </article>

      

    
  <?php endwhile;
   ?></section><?php endif; }  // foreach ?>
</section>
<?php get_footer(); ?>
