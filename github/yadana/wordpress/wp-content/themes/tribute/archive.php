<?php get_header(); ?>


  <!--banner--><section id="content" class="wow fadeInUp">
<div class="container">
  <div class="row">
    
        <?php if ( have_posts() ) : ?>
      <article class="col-md-8 col-sm-8 col-xs-12">
        
            <div class="left-section wow fadeInUp">
            
             <header class="archive-header">

				<h1 class="archive-title"><?php

					if ( is_day() ) :

						printf( __( 'Daily Archives: %s', 'tribute' ), get_the_date() );

					elseif ( is_month() ) :

						printf( __( 'Monthly Archives: %s', 'tribute' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'tribute' ) ) );

					elseif ( is_year() ) :

						printf( __( 'Yearly Archives: %s', 'tribute' ), get_the_date( _x( 'Y', 'yearly archives date format', 'tribute' ) ) );

					else :

						printf(__( 'Archives', 'tribute' ));

					endif;

				?></h1>

			</header><!-- .archive-header --> 
              
                   
    <?php while(have_posts()): the_post(); 
            
                get_template_part( 'content', get_post_format() );
            
            endwhile;
             ?>
      
        
          <!--entry--> 
      </div>
      <!--left-section-->
      <nav class="pagination wow fadeInUp">
           
                <div class="alignleft"> <?php previous_posts_link(__('&laquo; Previous', 'tribute')); ?></div>
                   <div class="alignright"><?php next_posts_link(__('Next &raquo;', 'tribute')); ?></div>
      
          </nav>
    </article>
    
        <?php endif; ?>
    
      <aside class="col-md-4 col-sm-4 col-xs-12">
    <?php get_sidebar(); ?>
    </aside>
  </div>
</div>

  </section>

  <!--content-->


<?php get_footer(); ?>

  