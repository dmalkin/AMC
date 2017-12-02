<?php
/**
 * Blog Post Content
 *
 * Used when a single post is queried.
 *
 * @package Allie Malkin Creative
 * @author Dana Malkin
 * @since 0.0.1
 */

 ?>

  <section class="container blog-single">
    <div class="row">
      <div class="col-3">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-8 offset-1">
        <div class="row">
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-12">
              <div class="row">
                <div class="col-8 col-centered">
                  <h1 class="blog-archive__title text-center">
                    <?php the_title(); ?>
                  </h1>
                </div>
              </div>
              <div class="row">
                <div class="col-2 col-centered">
                  <hr>
                </div>
              </div>
              <h5 class="text-center">
                <?php get_template_part('parts/meta'); ?>
              </h5>
              <img class="blog-single__img" src="<?php featuredURL(); ?>" />
              <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
