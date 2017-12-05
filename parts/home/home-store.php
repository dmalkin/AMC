<?php
/**
 * Home Store template part
 *
 * Template part used on the home page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables
 $headline = get_field('store_headline');

?>

<?php if( have_rows('featured_categories') ) : ?>
  <section class="container home-store">
    <div class="row row--justify-content-center">
      <div class="text-center">
        <?php echo $headline; ?>
      </div>
      <div class="sm-block-grid-1 block-grid-3">
        <?php while( have_rows('featured_categories') ) : the_row();

          // Variables
          $title = get_sub_field('title');
          $image = get_sub_field('image');
          $link = get_sub_field('category_link');

        ?>

          <div class="col">
            <a href="<?php echo $link; ?>">
              <div class="text-center image-nav__block" style="background: url(<?php echo $image['url']; ?>) center center/cover no-repeat;">
                <h2 href="<?php echo $link; ?>" class="image-nav__title button">
                  <?php echo $title; ?>
                </h2>
              </div>
            </a>
          </div>
        <?php endwhile;?>
      </div>
    </div>
  </section>
<?php endif; wp_reset_postdata(); ?>
