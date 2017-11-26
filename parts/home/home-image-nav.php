<?php
/**
 * Home Image Nav template part
 *
 * Template part used on the home page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

?>
<?php if(have_rows('')) :
  // Variables
  $image = get_sub_field('left_image');
  $title = get_sub_field('left_title');

  ?>
  <section class="container image-nav">
    <div class="sm-block-grid-1 block-grid-3">
      <?php while(have_rows('')) : the_row(); ?>
        <div class="col" style="background: url(<?php echo $image['url']; ?>) center center/cover no-repeat;">
          <h3 class="text-center image-nav__title">
            <?php echo $title; ?>
          </h3>
        </div>
      <?php endwhile;?>
    </div>
  </section>
<?php endif; ?>
