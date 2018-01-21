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

 // Variables


?>

<?php if( have_rows('home_slide') ) : ?>
  <section class="container home-hero">
    <div class="row row--full-width">
      <div class="col-12 col-no-pad text-center">
        <div class="home-slider">
          <?php while( have_rows('home_slide') ) : the_row();
            // Variables
            $page = get_sub_field('home_slide');
            $title = $page->post_title;
            $size = 'resources';
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), $size );
            $url = $thumb['0'];
            $link = get_post_permalink($page->ID);

          ?>
            <div>
              <div class="home-slider__slide global-padding--bottom--small" style="background: url(<?php echo $url; ?>) center center/cover no-repeat">
                <div class="row">
                  <div class="col-12 text-center">
                    <h2>
                      <?php echo $title; ?>
                    </h2>
                    <div class="row">
                      <div class="col-4 col-centered">
                        <hr />
                      </div>
                    </div>
                    <a class="button button--primary" href="<?php echo $link; ?>">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;?>
        </div>
      </div>
    </div>
  </section>
<?php endif;?>
