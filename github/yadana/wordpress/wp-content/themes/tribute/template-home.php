<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<section id="banner">
<?php if(get_theme_mod('banner_title','Free Responsive WordPress Theme') || get_theme_mod('banner_text','Tribute is a free WordPress theme for blogs that are designed to have beautiful typography.')) : ?>
<div class="banner-cnt">
    <?php if(get_theme_mod('banner_title','Free Responsive WordPress Theme')){ ?>
    <h1 class="banner-title"><?php echo esc_html(get_theme_mod('banner_title','Free Responsive WordPress Theme')); ?></h1>
    <?php } if(get_theme_mod('banner_text','Tribute is a free WordPress theme for blogs that are designed to have beautiful typography.')){ ?>
  <h3 class="banner-description"><?php echo esc_html(get_theme_mod('banner_text','Tribute is a free WordPress theme for blogs that are designed to have beautiful typography.')); ?></h3>
    <?php } ?>
</div>
<?php endif; ?>
  </section>

  <!--banner--><section id="content" class="wow fadeInUp">
<div class="container">
  <div class="row">
    
        <?php 



  // set up or arguments for our custom query

  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;

  $query_args = array(
'post_type' => 'post',
'posts_per_page' => 5,
'paged' => $paged

  );

  // create a new instance of WP_Query

  $the_query = new WP_Query( $query_args );

 
    
     if ($the_query->have_posts() ) : ?>
      <article class="col-md-8 col-sm-8 col-xs-12">
        
            <div class="left-section wow fadeInUp">
                 
    <?php while($the_query->have_posts()): $the_query->the_post(); 
            
                get_template_part( 'content', get_post_format() );
         
            endwhile;
        
          
          
               ?>
      
       
          <!--entry--> 
      </div>
      <!--left-section-->
     <?php if ($the_query->max_num_pages > 1) { ?>
     <nav class="pagination wow fadeInUp">
                      <div class="alignleft"><?php echo get_previous_posts_link(__('&laquo; Previous','tribute')); // display newer posts link ?></div>
               <div class="alignright"><?php echo get_next_posts_link(__('Next &raquo;','tribute'), $the_query->max_num_pages );?></div>

 
      </nav>
     <?php } ?>
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
