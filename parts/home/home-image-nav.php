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
<?php if( have_rows('image_navigation') ) : ?>
  <section class="container image-nav">
    <div class="row">
      <div class="sm-block-grid-1 block-grid-3">
        <?php while( have_rows('image_navigation') ) : the_row();

          // Variables
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $link = get_sub_field('link');

        ?>
          <div class="col">
            <a href="<?php echo $link['url']; ?>">
              <div class="text-center image-nav__block" style="background: url(<?php echo esc_attr($image['sizes']['image-nav']); ?>) center center/cover no-repeat;">
                <h2 class="image-nav__title button">
                  <?php echo $link['title']; ?>
                </h2>
              </div>
            </a>
          </div>
        <?php endwhile;?>
      </div>
    </div>
  </section>
<?php endif; ?>
