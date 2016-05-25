<?php get_header(); ?> 
<section id="content" class="wow fadeInUp">
<div class="container">
  <div class="row"><article class="col-md-8 col-sm-8 col-xs-12">
        
           <?php

			 

		// Start the loop.

		while ( have_posts() ) : the_post();



			// Include the page content template.

			get_template_part( 'content', 'page' );



			// If comments are open or we have at least one comment, load up the comment template.

			if ( comments_open() || get_comments_number() ) :

				comments_template();

			endif;



		// End the loop.

		endwhile;

		?>
          <?php wp_link_pages( array(

	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tribute' ) . '</span>',

	'after'       => '</div>',

	'link_before' => '<span>',

	'link_after'  => '</span>',

	) );

?>
        
        <!--left-section--> 
    
      </article>
    <aside class="col-md-4 col-sm-4 col-xs-12">
    <?php get_sidebar(); ?>
    </aside>
  </div>
</div>

  </section>

  <!--content-->

  <?php get_footer(); ?>