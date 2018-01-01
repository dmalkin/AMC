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

 //Variables
 $author = get_field('author');

 ?>

  <section class="container blog-single">
    <div class="row">
      <?php if( $author ) :
        // Variables
        $author_col = 'col-8 offset-1';
        ?>

        <div class="col-3">
          <?php get_sidebar(); ?>
        </div>

      <?php else :
        $author_col = 'col-12';
      endif; ?>

      <div class="<?php echo $author_col; ?>">
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

              <?php if(has_post_thumbnail()) : ?>
                <img class="blog-single__img" src="<?php featuredURL(); ?>" />
              <?php endif; ?>

              <div class="blog__content">
                <?php the_content(); ?>
              </div>

            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
