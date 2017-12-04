<?php
  /**
   * The archive tag template.
   *
   * Used when a tag is queried.
   */
   // Variables
   $tags = get_tags(array(
     'hide_empty' => false
   ));

  get_header();

  get_template_part('parts/photography/photography-nav');

  ?>

    <section class="container blog-archive">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">
            <?php echo single_tag_title(); ?>
          </h1>
          <?php if ( have_posts() ) : ?>
          <div class="sm-block-grid-1 block-grid-3">
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="col">
                <a href="<?php echo get_permalink(); ?>">
                  <div class="blog-archive__single-img" style="background:url(<?php featuredURL(); ?>) center center/cover;"></div>
                </a>
                <h5 class="blog-archive__category text-center">
                  <ul class="post-categories">
	                   <li>
                       <a href="<?php echo get_permalink(); ?>">
                         <?php the_title(); ?>
                       </a>
                     </li>
                   </ul>

                </h5>
              </div>
            <?php endwhile; ?>
          </div>
          <?php
              the_posts_pagination( array('mid_size' => 2) );
          else :
            echo '<h2 class="text-center">Sorry, no posts have been found</h2>';
          endif;
          ?>
        </div>
      </div>
    </section>

  <?php

  wp_reset_postdata();

  get_footer();
