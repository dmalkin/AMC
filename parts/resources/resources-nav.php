<?php
/**
 * Resources Nav
 *
 * Used on resources page.
 *
 * @package Allie Malkin Creative
 * @author Dana Malkin
 * @since 0.0.1
 */
 // Variables
 $tags = get_terms(array(
   'hide_empty' => false,
   'taxonomy' => 'resources',
 ));

?>
<section class="container gallery-nav">
  <div class="row row--justify-content-center">
    <?php
      $html = '<ul>';
      foreach ($tags as $tag) {
        $tag_link = get_term_link( $tag->term_id );

        $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a></li>";
      }
      $html .= '</ul>';
      echo $html;
    ?>
  </div>
</section>
