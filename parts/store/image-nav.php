<?php
/**
 * Store image nav template part
 *
 * Template part used on the store page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables
 $args = array(
     'orderby'    => 'name',
     'order'      => 'asc',
     'hide_empty' => false,
 );
 $terms = get_terms( 'product_cat', $args );

?>

<?php if( $terms ) : ?>
  <section class="container home-store">
    <div class="row row--justify-content-center">
      <div class="sm-block-grid-1 block-grid-3">
        <?php foreach( $terms as $key => $term ) :

          // Variables
          $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
          $image = wp_get_attachment_url( $thumbnail_id );
          $term_link = get_term_link($term);
          $description = $term->description;

        ?>

          <div class="col">
            <a href="<?php echo $term_link; ?>">
              <div class="text-center image-nav__block" style="background: url(<?php echo $image; ?>) center center/cover no-repeat;">
                <h2 href="<?php echo $term_link; ?>" class="image-nav__title button">
                  <?php echo $term->name; ?>
                </h2>
              </div>
            </a>
          </div>
        <?php endforeach;?>
      </div>
    </div>
    <div class="row">
      <div class="col-10 col-centered">
        <hr>
      </div>
    </div>
  </section>
<?php endif; ?>
