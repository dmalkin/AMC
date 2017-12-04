<?php
/**
 * Photography Nav
 *
 * Used on photography page.
 *
 * @package Allie Malkin Creative
 * @author Dana Malkin
 * @since 0.0.1
 */
 // Variables
 $tags = get_tags(array(
   'hide_empty' => false
 ));

?>
<section class="container gallery-nav">
  <div class="row row--justify-content-center">
    <?php
      $html = '<ul>';
      foreach ($tags as $tag) {
        $tag_link = get_tag_link( $tag->term_id );

        $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a></li>";
      }
      $html .= '</ul>';
      echo $html;
    ?>
  </div>
</section>
