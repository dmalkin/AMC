<?php
/**
 * Shop image nav template part
 *
 * Template part used on the shop page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables

?>

<?php if( have_rows('featured_categories', 5) ) : ?>
  <section class="container store-page">
    <div class="row row--justify-content-center">
      <div class="sm-block-grid-1 block-grid-3">
        <?php while( have_rows('featured_categories', 5) ) : the_row();

          // Variables
          $title = get_sub_field('title');
          $image = get_sub_field('image');
          $link = get_sub_field('category_link');

        ?>

          <div class="col">
            <a id="<?php echo $title; ?>">
              <div class="text-center image-nav__block" style="background: url(<?php echo $image['url']; ?>) center center/cover no-repeat;">
                <h2 class="image-nav__title button">
                  <?php echo $title; ?>
                </h2>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-10 col-centered">
        <hr>
      </div>
    </div>
  </section>
<?php endif; ?>
