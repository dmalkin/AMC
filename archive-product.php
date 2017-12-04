<?php
  /**
   * The product archive template.
   *
   * Used when the store is queried.
   */
  get_header();

  get_template_part('parts/global/hero');
  get_template_part('parts/store/image-nav');
  get_template_part('parts/store/categories');

  wp_reset_postdata();

  get_footer();
