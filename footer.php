<?php echo do_shortcode('[instagram-feed num=4]'); ?>
<?php // Close main ?>
</main>

<footer>
  <div class="container footer">
    <div class="row row--justify-content-end">
      <ul>
        <li>Allie Malkin Creative <?php echo date("Y"); ?></li>
        <li>All Rights Reserved</li>
        <li>
          <a href="">Site Credit</a>
        </li>
        <li>
          <a href="#contact">Get in Touch</a>
        </li>
      </ul>
    </div>

    <?php // Contact Modal ?>
    <div class="remodal footer-contact" data-remodal-id="contact">
      <button data-remodal-action="close" class="remodal-close"></button>
      <h1>Contact</h1>
      <?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]'); ?>
      <br>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
