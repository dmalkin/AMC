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

 // Variables
 $leftImage = get_field('left_image');
 $centerImage = get_field('center_image');
 $rightImage = get_field('right_image');
 $leftTitle = get_field('left_title');
 $centerTitle = get_field('center_title');
 $rightTitle = get_field('right_title');

?>

<section class="container image-nav">
  <div class="sm-block-grid-1 block-grid-3">
    <div class="col" style="background: url(<?php echo $leftImage['url']; ?>) center center/cover no-repeat;">
      <h3 class="text-center image-nav__title">
        <?php echo $leftTitle; ?>
      </h3>
    </div>
    <div class="col" style="background: url(<?php echo $centerImage['url']; ?>) center center/cover no-repeat;">
      <h3 class="text-center home-nav__title">
        <?php echo $centerTitle; ?>
      </h3>
    </div>
    <div class="col" style="background: url(<?php echo $rightImage['url']; ?>) center center/cover no-repeat;">
      <h3 class="text-center home-nav__title">
        <?php echo $rightTitle; ?>
      </h3>
    </div>
  </div>
</section>
