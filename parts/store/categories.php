<?php
/**
 * Store categories template part
 *
 * Template part used on the store page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables

?>

<section class="container categories-content">

  <!-- Calligraphy -->

  <?php // Variables
        $calligraphy_description = get_field('calligraphy_description', 11);
  ?>

    <div class="row">
      <div class="col-10 col-centered">
        <?php echo $calligraphy_description; ?>
      </div>
    </div>
    <div class="row row--justify-content-center">
      <div class="square"></div>
    </div>

    <?php if(have_rows('calligraphy_products', 11)) : ?>
      <div class="row">
        <div class="sm-block-grid-1 block-grid-2">
          <?php while(have_rows('calligraphy_products', 11)) : the_row();
            // Variables
            $calligraphy_image = get_sub_field('calligraphy_image', 11);
            $calligraphy_title = get_sub_field('calligraphy_title', 11);
          ?>
            <div class="col" style="background:url(<?php echo $calligraphy_image['url']; ?>) center center/cover no-repeat">
              <h3>
                <?php echo $calligraphy_title; ?>
              </h3>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>

  <!-- End Calligraphy -->

  <!-- Signs -->
  <?php // Variables
        $sign_description = get_field('sign_description', 11);
  ?>

    <div class="row">
      <div class="col-10 col-centered">
        <?php echo $sign_description; ?>
      </div>
    </div>
    <div class="row row--justify-content-center">
      <div class="square"></div>
    </div>
  <!-- End Signs -->

  <!-- Photography -->
  <?php // Variables
        $photography_description = get_field('photography_description', 11);
  ?>

    <div class="row">
      <div class="col-10 col-centered">
        <?php echo $photography_description; ?>
      </div>
    </div>
    <div class="row row--justify-content-center">
      <div class="square"></div>
    </div>
  <!-- End Photography -->

</section>
