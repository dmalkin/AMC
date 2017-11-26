<?php
/**
 * Contributor template part
 *
 * Template part used globaly
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

  // WP_Query arguments
  // if ( is_home() ) :
    $args = array(
     'post_type'        => 'f1_staffgrid_cpt',
     'f1_staffgrid_tax' => 'Site Owner',
     'meta_key'         => 'last_name',
    );
  // endif;

   // The Query
   $staff = new WP_Query( $args );
?>

<?php if ($staff->have_posts()) : while ($staff->have_posts()) : $staff->the_post();
 // Variables
 $title = get_field( 'title' );
 $excerpt = get_the_excerpt();


?>

 <section class="container about">
   <div class="row">
     <div class="col-5">
       <img src="<?php featuredURL('full'); ?>" title="<?php echo $img['title']; ?>">
       <a href="<?php echo $link; ?>" class="button button--dark" >Oh, you want more?</a>
     </div>
     <div class="col-6 offset-1">
       <h2>
         Hello
       </h2>
       <p>
         <?php echo $excerpt; ?>
       </p>
       <br>
     </div>
   </div>
 </section>

<?php endwhile; endif; wp_reset_postdata(); ?>
