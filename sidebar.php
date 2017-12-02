<?php
  /**
   * The template for the sidebar containing the main widget area
   */
   // Variables

   $author = get_field('author');
   $id = $author->ID;
   $name = $author->post_title;
   $excerpt = $author->post_excerpt;
   $image = get_the_post_thumbnail_url($id, 'full');
   $link = get_permalink();

   // Social Media
   $facebook = get_field('facebook_url', $id);
   $twitter = get_field('twitter_url', $id);
   $linkedin = get_field('linkedin_url', $id);
   $insta = get_field('instagram_url', $id);

 ?>


  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <aside class="sidebar">
      <h3 class="text-center">About the Author</h3>
      <div class="row">
        <div class="col-2 col-centered">
          <hr>
        </div>
      </div>
      <div class="site-owner">
        <img src="<?php echo $image; ?>">

        <!-- Social Media -->
           <?php if ($twitter || $facebook || $linkedin || $insta ) : ?>
             <div class="social-menu">
               <ul>
                 <?php if ($twitter) : ?>
                   <li class="menu-item">
                     <a href="http://<?php echo $twitter; ?>"></a>
                   </li>
                 <?php endif; if($facebook) : ?>
                   <li class="menu-item">
                     <a href="http://<?php echo $facebook; ?>"></a>
                   </li>
                 <?php endif; if($insta) : ?>
                   <li class="menu-item">
                     <a href="http://<?php echo $insta; ?>"></a>
                   </li>
                 <?php endif; if($linkedin) : ?>
                   <li class="menu-item">
                     <a href="http://<?php echo $linkedin; ?>"></a>
                   </li>
                 <?php endif; ?>
               </ul>
             </div>
           <?php endif; ?>
        <p>
          <?php echo $excerpt; ?>
        </p>
        <a href="<?php echo $link; ?>">More About Me &rarr;</a>
      </div>
    </aside>
  <?php endif; ?>
