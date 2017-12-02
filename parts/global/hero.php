<?php
/**
 * Home Hero template part
 *
 * Template part used on the home page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

  // Global Hero Custom Fields
  // Assigns variables based on whether page is blog page
  if( is_home() ) {
    $img_field = get_post_thumbnail_id( get_option('page_for_posts', true) );
    $blog_title = get_the_title( get_option('page_for_posts', true) );
  } else {
    $img_field = get_field('hero_image');
  }

  $img = wp_get_attachment_image_src($img_field, 'global_hero');

  if( is_archive() ) {
    $img = wp_get_attachment_image_src(116, 'global_hero');
  }

  if( is_home() || is_archive()) {
    $title = 'Blog';
  } else {
    $title = get_title();
  }

?>

 <section class="container global-hero">
  <div class="row row--full-width global-hero__img" style="background:url(<?php echo $img[0]; ?>) center center/cover no-repeat;">
    <div class="col-12 col-no-pad">
      <div class="row row--justify-content-end page-title">
        <h1 class=" global-title script">
          <?php echo $title; ?>
        </h1>
      </div>
    </div>
  </div>
</section>
