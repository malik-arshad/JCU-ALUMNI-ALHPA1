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
    <!--entry-meta--> 
 </header>
  <div class="entry-summary wow fadeInUp">
    <?php tribute_post_thumbnail(); ?>
   
     <?php the_content(); ?>
     
  </div>
  <!--entry-summary--> 
</div>