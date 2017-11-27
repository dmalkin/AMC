<?php
/**
 * Sign-up global template part
 *
 * Template part used globaly
 *
 * @package Allie Malkin Creative
 * @author Factor1 Studios <factor1studios.com>
 * @since 0.0.1
 */

 // Variables
 $form = get_field('contact_form', 'options');

?>

<section class="container mailing">
  <div class="row">
    <?php echo $form; ?>
  </div>
</section>
