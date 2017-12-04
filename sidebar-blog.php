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
  $tags = get_tags(array(
    'hide_empty' => false
  ));

 ?>


  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <aside class="sidebar">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
      <div class="site-owner">
        <img src="<?php featuredURL('full'); ?>">
        <h6 class="site-owner__welcome script">Hello</h6>
        <?php echo $excerpt; ?>
        <a href="">More About Me &rarr;</a>
      </div>
    </aside>
  <?php endif; ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
