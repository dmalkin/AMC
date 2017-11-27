<?php
/**
 * Home Resources template part
 *
 * Template part used on the home page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables
 $image = get_field('resources_background_image');
 $headline = get_field('resources_headline');
 $terms = get_field('resources_link');

?>

<?php if( $headline ) : ?>
  <section class="container container--justify-content-center home-resources" style="background: url(<?php echo esc_attr($image['sizes']['resources']); ?>) center center/cover no-repeat">
    <div class="row row--justify-content-center">
      <div class="text-center">
        <?php echo $headline; ?>
        <a href="<?php echo $terms['url']; ?>" class="button button--primary">
          <?php echo $terms['title']; ?>
        </a>
      </div>
    </div>
  </section>
<?php endif; ?>
