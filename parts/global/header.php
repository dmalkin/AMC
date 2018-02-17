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
  <div class="row row--align-items-center row--justify-content-center">

      <div class="col-4 sm-hide">
        <?php // Primary Menu (Left)
          wp_nav_menu( array('theme_location' => 'primary-left', 'container' => 'nav', 'container_class' => 'primary-nav') );
        ?>
      </div>
      <div class="col-4 text-center sm-hide">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Allie Malkin Creative" />
        </a>
      </div>
      <div class="col-4 sm-hide">
        <?php // Primary Menu (Right)
          wp_nav_menu( array('theme_location' => 'primary-right', 'container' => 'nav', 'container_class' => 'primary-nav') );
        ?>
      </div>

      <div class="mobile-logo sm-only">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sm.png" alt="Allie Malkin Creative" />
        </a>
      </div>
      <div class="menu-icon sm-only">
        <a id="nifty-nav-toggle" class="nifty-hamburger"><span></span></a>
      </div>
    </div>
  </header>

  <div class="nifty-panel">
    <?php // Primary Menu
      wp_nav_menu( array('theme_location' => 'primary-left', 'container' => 'nav', 'container_class' => 'mobile-nav') );
      wp_nav_menu( array('theme_location' => 'primary-right', 'container' => 'nav', 'container_class' => 'mobile-nav') );
    ?>
  </div>

</header>
