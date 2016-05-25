<?php
if ( ! function_exists('tribute_setup')):

function tribute_setup() {
load_theme_textdomain('tribute', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
        
        /* Load scripts. */
	add_theme_support( 
		'tribute-scripts', 
		array('comment-reply' ) 
	);

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );
        
        add_theme_support('content-width', 770);
// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __('Primary Menu', 'tribute'),
) );

add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

$args = array(
	'default-color' => '',
	'default-image' => '',
);
add_theme_support('custom-background', $args);

$args = array(
        'default-text-color' => 'da4453',
        'default-image' => '',
        'height' => 250,
        'width' => 1060,
        'max-width' => 2000,
        'flex-height' => true,
        'flex-width' => true,
        'random-default' => false,
        'wp-head-callback' => 'tribute_header_style',
       
    );
    add_theme_support('custom-header', $args);
        
}
endif; // Tribute_setup
add_action('after_setup_theme', 'tribute_setup');

function tribute_comment_reply_queue_js(){
if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
  wp_enqueue_script( 'comment-reply' );
}
add_action('wp_print_scripts', 'tribute_comment_reply_queue_js'); //This code checks if the visitor is browsing either a page or a post and adds the JavaScript required for threaded comments if they are.


/* Start tribute front page setting */
function tribute_front_page_template( $template ) {
    return is_home() ? '' : $template;
}
add_filter('frontpage_template', 'tribute_front_page_template' );
/* End tribute front page setting */

function tribute_header_style() {
    $text_color = esc_html(get_header_textcolor());
    ?>
    <style type="text/css">
    <?php if (!display_header_text() ) : ?>
        .brand-title{ color:#da4453; font-size:55px; text-transform:uppercase; margin:0px; }
    <?php else : ?>
        .brand-title{ color:#<?php echo $text_color; ?>; font-size:55px; text-transform:uppercase; margin:0px; }
    <?php endif; ?>
        
             
    </style>
    <?php } ?>