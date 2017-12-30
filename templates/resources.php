<?php
  /**
   * The Resources page template.
   *
   * Template Name: Resources
   */
  get_header();

  get_template_part('parts/resources/resources', 'nav');
  get_template_part('parts/global/hero');
  get_template_part('parts/resources/content');
  get_template_part('parts/global/sign-up');

  get_footer();
