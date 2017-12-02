<?php
/**
 * Single Post More
 *
 * Used when a single post is queried.
 *
 * @package Allie Malkin Creative
 * @author Dana Malkin
 * @since 0.0.1
 */
?>

<?php
  // the query
  $currentID = get_the_ID();
  $categories = get_the_category();
  $category_id = $categories[0]->cat_ID;
  $category_name = $categories[0]->cat_name;

  $args = array(
      'posts_per_page' => 2,
      'cat' => $category_id,
      'post__not_in' => array($currentID),
  );
  $nav_query = new WP_Query( $args );
?>

<?php if ( $nav_query->have_posts() ) : ?>

  <section class="container blog-more">
    <div class="row">
      <div class="col-10 sm-col-12 col-centered blog-post-more__content">
        <h3 class="blog-post-more__content__title global-padding--small">
          More <?php echo $category_name; ?> Blog Posts...
        </h3>
        <div class="row">
          <?php while ( $nav_query->have_posts() ) : $nav_query->the_post(); ?>
            <div class="col-6 sm-col-12 blog-post-more__single">
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
              <h5 class="text-center">
                <?php get_template_part('parts/meta'); ?>
              </h5>
              <?php the_excerpt(); ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>

<?php endif; $wp_query->reset_postdata(); ?>
