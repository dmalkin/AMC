<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  $prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

  if(strpos($prev_url, 'resources') !== false) :
    get_template_part('parts/resources/resources-nav');
  elseif(strpos($prev_url, 'tag') !== false) :
    get_template_part('parts/photography/photography-nav');
  endif;

  if ( have_posts() ) :

    get_template_part('parts/blog/content');

    get_template_part('parts/single/post-nav');

  endif;

  wp_reset_postdata();

  get_footer();
