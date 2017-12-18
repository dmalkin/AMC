<?php
/**
 * Shop signs template part
 *
 * Template part used on the shop page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables
 $sign_description = get_field('sign_description');
 $gallery = get_field('sign_products');
 $display_custom_sign = get_field('display_custom_sign');
 $sign_button_text = get_field('sign_button_text');
 $custom_sign_form = get_field('custom_sign_form');

?>

<section class="container" id="sign">
  <div class="row row--full-width description">
    <div class="col-10 col-centered">
      <?php echo $sign_description; ?>
    </div>
  </div>
  <div class="row row--full-width row--justify-content-center square-container">
    <div class="square"></div>
  </div>

  <?php if($gallery) : ?>
    <section class="container products">
      <div class="row">
        <div class="col-12 col-centered text-center">
          <div class="sm-block-grid-1 block-grid-3">
            <?php foreach( $gallery as $image ): ?>
              <div class="col">
                <div class="sign-product" style="background:url(<?php echo $image['sizes']['large']; ?>) center center/cover no-repeat"></div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php if($display_custom_sign) : ?>
            <a href="#modal" class="button button--secondary">
              <?php echo $sign_button_text; ?>
            </a>
            <div class="remodal" data-remodal-id="modal">
              <button data-remodal-action="close" class="remodal-close"></button>
              <h1>Remodal</h1>
              <p>
                Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
              </p>
              <br>
              <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
              <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
</section>
