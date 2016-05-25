<?php get_header(); ?>
<section id="content" class="wow fadeInUp">
<section class="container">
  <section class="error-404">
    <section class="error-header">
      <h1 class="error-title"><?php _e( '404 Page Not Found', 'tribute'); ?></h1>
      <p class="error-text">
       
            <?php _e( 'Looks like nothing was found on this url.<br>
        Double-check that the url is correct or try the 
        search form below to find what you were looking for.', 'tribute' ); ?>
      </p>
      <?php get_search_form(); ?>
    </section>
  </section>
</section>

  </section>

  <!--content-->

  <?php get_footer(); ?>