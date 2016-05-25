<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Tribute
 * @since Tribute 1.0
 */
?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <header class="entry-header wow fadeInUp">
<h2 class="entry-title"><?php tribute_post_title(); ?></h2>
    <div class="entry-meta">
      <?php the_time('F j, Y') ?>
     <?php printf(__('by', 'tribute' )); ?> 
      <?php the_author_posts_link() ?>
      <?php printf(__('|', 'tribute' )); ?> 
      <?php comments_number(__('No Comments','tribute'), __('One Comment', 'tribute'), __('% Comments', 'tribute') );?>
    </div>
    
    <!--entry-meta--> 
    
  </header>
  <div class="entry-summary wow fadeInUp">
    <?php tribute_post_thumbnail(); ?>
    <?php if ( is_single() ) : ?>
     <?php the_content(); else: ?>
      <p><?php the_excerpt(); ?></p>
      <p><?php echo '<a class="btn btn-default" href="' . esc_url(get_permalink()). '">' . __('Continue Reading', 'tribute') . '</a>'; ?> </p>
    <?php endif; ?>
    <?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'tribute' ) . '</span>', 'after' => '</p>' ) );?>	
  </div>
  
  <!--entry-summary--> 
  
  <div class="entry-footer">
  <div class="entry-meta">
 <span class="Posted"> <?php printf(__('Posted in:', 'tribute' )); ?> </span><?php the_category();?> <div class="tag"><?php the_tags();?></div>
  
</div></div>
  
</div>
<!--entry--> 
