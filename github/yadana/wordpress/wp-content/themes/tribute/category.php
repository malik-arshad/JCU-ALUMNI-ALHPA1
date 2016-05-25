<?php get_header(); ?>  
    
  
  <!--banner--><section id="content" class="wow fadeInUp">
    <div class="container">
      <div class="row">
          
          <?php if ( have_posts() ) : ?>
          <article class="col-md-8 col-sm-8 col-xs-12">
              
              <div class="left-section wow fadeInUp">
                       
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
  