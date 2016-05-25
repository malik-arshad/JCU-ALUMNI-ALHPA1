<?php

/* 	Writing Board's Single Page to display Single Page or Post
	Copyright: 2014-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Writing Board 1.0
*/


get_header(); ?><div id="container">  
<div id="content">
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p class="postmetadataw"><?php _e('Posted by:', 'writing-board'); ?><?php the_author_posts_link() ?> |  <?php the_time('F j, Y'); ?></p> 
                        
            <div class="content-ver-sep"> </div>
            <div class="entrytext"><?php the_post_thumbnail('writingboard-category-thumb'); ?>
			<?php the_content(); ?>
            
            <div class="clear"> </div>
            <div class="up-bottom-border">
            <p class="postmetadata"><?php _e('Posted in', 'writing-board'); ?> <?php the_category(', ') ?> | <?php edit_post_link(__('Edit', 'writing-board'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'writing-board'), __('1 Comment &#187;', 'writing-board'), __('% Comments &#187;'.'writing-board')); ?> <?php the_tags(__('<br />Tags: ','writing-board'), ', ', '<br />'); ?></p>
            <?php  wp_link_pages( array( 'before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>' ) ); ?>
            <div class="content-ver-sep"> </div>
            <div id="page-nav">
            <div class="floatleft"><?php previous_post_link('&laquo; %link'); ?></div>
			<div class="floatright"><?php next_post_link('%link &raquo;'); ?></div><br /><br />
            <?php if ( is_attachment() ): ?>
            <div class="floatleft"><?php previous_image_link( false, __('&laquo; Previous Image','writing-board') ); ?></div>
			<div class="floatright"><?php next_image_link( false, __('Next Image &raquo;','writing-board') ); ?></div> 
            <?php endif; ?>
          	</div>
            </div></div>
			
			<?php endwhile;?>
          	            
          <!-- End the Loop. -->          
        	
			<?php if (comments_open( $post->ID ) == true ): comments_template('', true); endif;?>
                      
</div>			
<?php get_sidebar(); ?>
<?php get_footer(); ?>