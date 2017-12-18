<?php
  /**
   * The single post template for authors.
   *
   * Used when a single author is queried.
   */
  get_header();

  get_template_part('parts/global/hero');

  if ( have_posts() ) :

    get_template_part('parts/about/single');


  endif;

  wp_reset_postdata();

  get_footer();
