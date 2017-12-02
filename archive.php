<?php
  /**
   * The archive template.
   *
   * Used when a category, author, or date is queried.
   */
  get_header();

  get_template_part('parts/global/hero');

  if ( have_posts() ) : ?>

    <section class="container blog-archive">
      <div class="row">
        <div class="col-3">
          <?php get_template_part('sidebar-blog'); ?>
        </div>
        <div class="col-8 offset-1">
          <div class="sm-block-grid-1 block-grid-2">
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="col">
                <a href="<?php echo get_permalink(); ?>">
                  <div class="blog-archive__single-img" style="background:url(<?php featuredURL(); ?>) center center/cover;"></div>
                </a>
                <h5 class="blog-archive__category text-center">
                  <?php the_category(); ?>
                </h5>
                <a href="<?php echo get_permalink(); ?>">
                  <h1 class="blog-archive__title text-center">
                    <?php the_title(); ?>
                  </h1>
                </a>
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
      </div>
    </section>

  <?php
      the_posts_pagination( array('mid_size' => 2) );
  else :
    echo '<h2>Sorry, no posts have been found</h2>';
  endif;

  wp_reset_postdata();

  get_footer();
