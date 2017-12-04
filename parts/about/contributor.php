<?php
/**
 * About Contributor template part
 *
 * Template part used on About page
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables

 ?>

<?php if(have_rows('contributors')) : ?>
   <section class="container about-contributors">
     <div class="row">
       <div class="col-12">
         <div class="row">
           <div class="col-7 col-centered">
             <h1 class="text-center about-contributors__headline">I get by with a little help from these friends...</h1>
           </div>
         </div>
       </div>

       <?php while(have_rows('contributors')) : the_row();
        // Variables
        $author = get_sub_field('contributor');
        $name = $author->post_title;
        $excerpt = $author->post_excerpt;
        $image = get_the_post_thumbnail_url($author->ID, 'full');

       ?>
         <div class="col-9 col-centered about-contributors__wrap">
           <div class="row">
             <div class="col-3 stretch about-contributors__img" style="background:url(<?php echo $image; ?>) center center/cover no-repeat"></div>
             <div class="col-8 stretch offset-1">
               <h2>
                 <?php echo $name; ?>
               </h2>
               <?php echo $excerpt; ?>
               <a href="<?php echo $link; ?>">More About Me &rarr;</a>
             </div>
           </div>
         </div>
       <?php endwhile; ?>
     </div>
   </section>
<?php endif; ?>
