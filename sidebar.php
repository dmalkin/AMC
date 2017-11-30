<?php
  /**
   * The template for the sidebar containing the main widget area
   */

   // WP_Query arguments
   $args = array(
    'post_type'        => 'f1_staffgrid_cpt',
    'f1_staffgrid_tax' => 'Site Owner',
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


  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <aside class="sidebar">
      <div class="site-owner">
        <img src="<?php featuredURL('full'); ?>">
        <h6 class="script">Hello There!</h6>
        <?php echo $excerpt; ?>
        <a href="">More About Me &rarr;</a>
      </div>
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
  <?php endif; ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
