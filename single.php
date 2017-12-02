<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  get_template_part('parts/global/hero');

  if ( have_posts() ) :

    get_template_part('parts/blog/content');

    get_template_part('parts/single/post-nav');

  endif;

  wp_reset_postdata();

  get_footer();
