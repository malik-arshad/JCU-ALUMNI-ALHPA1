<?php

/**

 * The default template for displaying content

 *

 * Used for both single and index/archive/search.

 *

 * @package WordPress
 */

?>



<?php if ( is_single() ) : ?>

<div class="entry">

   <?php else : ?> 
<div class="left-section wow fadeInUp">
  
      <?php endif; ?>
    
       <header class="entry-header wow fadeInUp">
            <h1 class="page-title"><?php tribute_post_title(); ?></h1>
         
              <!--entry-meta--> 
          </header>
  
            <div class="entry-summary wow fadeInUp"> <?php tribute_post_thumbnail(); ?>
         
                <?php the_content(); ?>
            
            
          
          
          
            </div>
          <!--entry-summary--> 
  
 
        </div>
 
      <!--entry-->



