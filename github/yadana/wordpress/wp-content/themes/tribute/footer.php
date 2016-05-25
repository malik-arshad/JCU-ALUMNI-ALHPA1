<footer>
<section class="container">
  <?php if ( get_theme_mod( 'hide_copyright')) :  else : ?>
  <div class="col-md-12">
  <?php if ( get_theme_mod( 'copyright_textbox')) : ?> 
  <p><?php echo esc_html(get_theme_mod('copyright_textbox')); ?></p>
  <?php endif; ?>
  </div>
  <?php endif; ?>
</section>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>



