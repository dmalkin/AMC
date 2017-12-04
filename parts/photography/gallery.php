<?php
/**
 * Photography Nav
 *
 * Used on photography page.
 *
 * @package Allie Malkin Creative
 * @author Dana Malkin
 * @since 0.0.1
 */
 // Variables
 $title = get_field('photography_title');
 $images = get_field('gallery');
 $size = 'full'; // (thumbnail, medium, large, full or custom size)

?>

<section class="container gallery">
  <div class="row row--justify-content-center">
    <h1>
      <?php echo $title; ?>
    </h1>
    <div id="grid" data-columns>
      <?php if( $images ): ?>
        <?php foreach( $images as $image ): ?>
          <div class="gallery-img">
            <img src="<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
