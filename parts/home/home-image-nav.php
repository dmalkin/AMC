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

 <?php if( have_rows('page_links') ) : ?>
  <section class="container image-nav">
    <div class="row row--justify-content-center">
      <div class="sm-block-grid-1 block-grid-3">
        <?php while( have_rows('page_links') ) : the_row();
          // Variables
          $page = get_sub_field('page');
          $title = $page->post_title;
          $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), $size );
          $url = $thumb['0'];
          $link = get_post_permalink($page->ID);
        ?>

          <div class="col">
            <a href="<?php echo $link; ?>">
              <div class="text-center image-nav__block" style="background: url(<?php echo $url; ?>) center center/cover no-repeat;">
                <h2 href="<?php echo $link; ?>" class="image-nav__title button">
                  <?php echo $title; ?>
                </h2>
              </div>
            </a>
          </div>
        <?php endwhile;?>
      </div>
    </div>
    <div class="row row--justify-content-center">
      <div class="square"></div>
    </div>
  </section>
 <?php endif; wp_reset_postdata(); ?>
