<?php
/**
 * Shop photography template part
 *
 * Template part used on the shop page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables
 $photography_description = get_field('photography_description');

?>

<section id="photography">
  <div class="row row--full-width description">
    <div class="col-10 col-centered">
      <?php echo $photography_description; ?>
    </div>
  </div>
  <div class="row row--full-width row--justify-content-center square-container">
    <div class="square"></div>
  </div>

  <?php if(have_rows('photography_store')) : ?>
    <section class="container products">
      <?php while(have_rows('photography_store')) : the_row();
        // Variables
        $product_image = get_sub_field('image');
        $product_description = get_sub_field('description');
        $product_button = get_sub_field('button');
      ?>
        <div class="row">
          <div class="col-10 col-centered">
            <div class="row">
              <div class="col-4 stretch" style="background: url(<?php echo $product_image['url']; ?>) center center/cover no-repeat"></div>
              <div class="col-7 offset-1 stretch">
                <?php echo $product_description; ?>
                <a href="" class="button button--secondary">
                  <?php echo $product_button; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>
</section>
