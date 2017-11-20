<?php
  /**
   * The Home page template.
   *
   * Template Name: Home
   */
  get_header();

  get_template_part('parts/home/home', 'hero');
  get_template_part('parts/home/home', 'image-nav');
  get_template_part('parts/global/contributor');
  get_template_part('parts/home/home', 'store');
  get_template_part('parts/global/sign-up');

  get_footer();
