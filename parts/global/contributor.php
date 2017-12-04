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

while ( have_posts() ) : the_post();

  // WP_Query arguments
  if ( is_front_page() ) {
    $tax = 'Site Owner';
  }

    $args = array(
     'post_type'        => 'f1_staffgrid_cpt',
     'f1_staffgrid_tax' => $tax,
     'meta_key'         => 'last_name',
    );

   // The Query
   $staff = new WP_Query( $args );
?>

<?php if ($staff->have_posts()) : while ($staff->have_posts()) : $staff->the_post();
 // Variables
 $title = get_field( 'title' );
 $excerpt = get_the_excerpt();

?>

 <section class="container about-global">
   <div class="row row--full-width">
     <div class="col-5 stretch col-no-pad about-global__img" style="background:url(<?php featuredURL('full'); ?>) center center/cover no-repeat;">
       <a href="<?php echo $link; ?>" class="button button--dark" >More About Me &rarr;</a>
     </div>
     <div class="col-6 stretch offset-1 about-global__text">
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

<?php endwhile; endif; wp_reset_postdata(); endwhile;?>
