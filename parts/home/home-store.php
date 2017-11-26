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
 $terms = get_field('featured_categories');

?>

<?php if( $terms ) : ?>
  <section class="container home-store">
    <div class="row row--justify-content-center">
      <h1>
        <?php echo $headline; ?>
      </h1>
      <div class="sm-block-grid-1 block-grid-3">
        <?php foreach( $terms as $term ) :

          // Variables
          $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
          $image = wp_get_attachment_url( $thumbnail_id );
          $term_link = get_term_link($term);

        ?>

          <div class="col">
            <a href="<?php echo $term_link; ?>">
              <div class="text-center image-nav__block" style="background: url(<?php echo $image; ?>) center center/cover no-repeat;">
                <h3 class="image-nav__title">
                  <?php echo $term->name; ?>
                </h3>
              </div>
            </a>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </section>
<?php endif; ?>
