<?php
/**
 * Home Hero template part
 *
 * Template part used on the home page
 *
 * @package Allie Malkin Blog
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // WP_Query arguments
 $args = array(
   'category_name' => 'Featured',
 );

 // The Query
 $query = new WP_Query( $args );
 if( $query->have_posts() ):

?>
  <section class="container home-hero">
    <div class="row">
      <div class="col-12">
        <div class="home-slider">
          <?php while( $query->have_posts() ): $query->the_post(); ?>
            <div class="home-slider__slide global-padding--bottom--small" style="background: url(<?php featuredURL(); ?>) center center/cover no-repeat">
              <div class="row row--justify-content-center">
                <div class="col-12 text-center">
                  <h2>Blog</h2>
                  <div class="row">
                    <div class="col-2 col-centered">
                      <hr />
                    </div>
                  </div>
                  <a class="button button--primary" href="#" >Read More</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
