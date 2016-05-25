<?php

/**

 * Custom template tags for Tribute

 *

 * Eventually, some of the functionality here could be replaced by core features.

 *

 * @package WordPress

 * @subpackage Tribute

 * @since Tribute 1.0

 */

define('TRIBUTE_POST_CONTENT_LENGTH', 40);

if(!function_exists('tribute_comment_nav')) :



function tribute_comment_nav() {
// Are there comments to navigate through?
if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
?>
<nav class="navigation comment-navigation" role="navigation">
    <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'tribute' ); ?></h2>
    <div class="nav-links">
        <?php
            if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'tribute' ) ) ) :
                printf( '<div class="nav-previous">%s</div>', $prev_link );
            endif;

 
            if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'tribute' ) ) ) :
                printf( '<div class="nav-next">%s</div>', $next_link );
            endif;
        ?>
    </div><!-- .nav-links -->
</nav><!-- .comment-navigation -->
<?php
endif;

}

endif;





if ( ! function_exists( 'tribute_post_thumbnail')) :

/**

 * Display an optional post thumbnail.

 *

 * Wraps the post thumbnail in an anchor element on index views, or a div

 * element when on single views.

 *

 * @since Tribute 1.0

 */

function tribute_post_thumbnail() {

	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {

		return;

	}



	if ( is_singular() ) :

	?>



	<div class="entry-summary">

		<?php the_post_thumbnail(); ?>

	</div><!-- .post-thumbnail -->



	<?php else : ?>



	<a href="<?php the_permalink(); ?>">

		<?php

			the_post_thumbnail('post-thumbnail', array( 'alt' => get_the_title() ));

		?>

	</a>



	<?php endif; // End is_singular()

}

endif;



if(!function_exists( 'tribute_post_title')) : 
function tribute_post_title()
{
  if ( is_single() ) :

 ?>
      <?php the_title(); ?>
      <?php else: ?>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endif; 
}

endif;




/**
 * Clean up the_excerpt()
 */
function tribute_excerpt_length($length) {
  return TRIBUTE_POST_CONTENT_LENGTH;
}

function tribute_remove_more_link_scroll( $link ) {
  $link = preg_replace( '|#more-[0-9]+|', '', $link );
  return $link;
}
add_filter( 'the_content_more_link', 'tribute_remove_more_link_scroll' );

function tribute_excerpt_more($more) {
  return ' [&hellip;]';
}
add_filter('excerpt_length', 'tribute_excerpt_length',999);
add_filter('excerpt_more', 'tribute_excerpt_more');


?>