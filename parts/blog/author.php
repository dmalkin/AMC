<?php
/**
 * Author template part
 *
 * Template part used on single blog posts
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

while ( have_posts() ) : the_post();

  // Variables

  $author = get_field('author');
  $name = $author->post_title;
  $excerpt = $author->post_excerpt;
  $image = get_the_post_thumbnail_url($author->ID, 'full');

?>

 <section class="container about">
   <div class="row row--full-width">
     <div class="col-5 col-no-pad">
       <img src="<?php echo $image; ?>">
       <a href="<?php echo $link; ?>" class="button button--dark" >More About Me &rarr;</a>
     </div>
     <div class="col-6 offset-1">
       <h2>
         About the Author
       </h2>
       <h3>
        <?php echo $name; ?>
       </h3>
       <?php echo $excerpt; ?>
       <br>
     </div>
   </div>
 </section>

<?php endwhile;?>
