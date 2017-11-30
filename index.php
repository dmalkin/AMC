<?php
  /**
   * The default blog / index template.
   */
  get_header();

  get_template_part('parts/global/hero');

  if ( have_posts() ) : ?>

    <section class="container blog-archive">
      <div class="row">
        <div class="sm-block-grid-1 block-grid-2">
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="col">
              <div class="blog-archive__single-img" style="background:url(<?php featuredURL(); ?>) center center/cover;"></div>
              <h5 class="blog-archive__category text-center">
                <?php the_category(); ?>
              </h5>
              <h2 class="blog-archive__title text-center">
                <?php the_title(); ?>
              </h2>
              <div class="row">
                <div class="col-2 col-centered">
                  <hr>
                </div>
              </div>
              <?php the_excerpt(); ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>

  <?php
      the_posts_pagination( array('mid_size' => 2) );
  else :
    echo '<h2>Sorry, no posts have been found</h2>';
  endif;

  get_footer();
