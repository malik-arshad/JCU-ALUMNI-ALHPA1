<?php get_header(); ?> 
<section id="content" class="wow fadeInUp">
<div class="container">
  <div class="row"><article class="col-md-8 col-sm-8 col-xs-12">
        
		<?php
            // Start the loop.
		while ( have_posts() ) : the_post();
			/*

			 * Include the post format-specific template for the content. If you want to

			 * use this in a child theme, then include a file called called content-___.php

			 * (where ___ is the post format) and that will be used instead.

			 */
			get_template_part( 'content', get_post_format() );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav alignright" aria-hidden="true">' . __( '', 'tribute' ) . '</span> ' .

					'<span class="screen-reader-text alignright">' . __( 'Next post:', 'tribute' ) . '</span> ' .

					'<span class="post-title alignright">' . __( 'Next &raquo;', 'tribute' ) . '</span>',

				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'tribute' ) . '</span> ' .

					'<span class="screen-reader-text alignleft">' . __( 'Previous post:', 'tribute' ) . '</span> ' .

					'<span class="post-title alignleft">' . __('&laquo; Previous', 'tribute') . '</span>',

			) );



		// End the loop.

		endwhile;

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