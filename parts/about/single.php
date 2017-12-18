<?php
/**
 * About Contributor single template part
 *
 * Template part used on About Single page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables
 $name = get_the_title();
 $bio = get_field( 'staff_bio' );

 // Social Media
 $facebook = get_field('facebook_url');
 $twitter = get_field('twitter_url');
 $linkedin = get_field('linkedin_url');
 $insta = get_field('instagram_url');

 ?>

 <section class="single-staff">
   <div class="row">
     <div class="col-10 col-centered">
       <h1 class="text-center staff-name">
         <?php echo $name; ?>
       </h1>
       <div class="row">
         <div class="col-2 col-centered">
           <hr>
         </div>
       </div>
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
       <?php echo $bio; ?>
     </div>
   </div>
 </section>
