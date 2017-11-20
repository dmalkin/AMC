<?php
/**
 * Header template part
 *
 * Template part used globaly
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */
?>

<header class="container header">
  <div class="row row--align-items-center">

      <div class="col-9 sm-hide">
        <?php // Primary Menu
        wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav') ); ?>
      </div>
      <div class="col-3 sm-hide">
        <?php // Search ?>

      </div>

      <div class="menu-icon sm-only">
        <a id="nifty-nav-toggle" class="nifty-hamburger"><span></span></a>
      </div>
    </div>
  </header>

  <div class="nifty-panel">
    <?php // Primary Menu
    wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav') ); ?>
  </div>

</header>
