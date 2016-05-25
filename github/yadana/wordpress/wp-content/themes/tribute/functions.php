<?php
if ( ! isset( $content_width ) ) {

	$content_width = 770;

}

//Making jQuery Google API
function tribute_modify_jquery() {
      wp_deregister_script('jquery');
      wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.3' );
      wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'tribute_modify_jquery');



// Enqueue Scripts and style of Tribute
function tribute_scripts() {
        wp_enqueue_script('bootstrap_jquery', get_template_directory_uri() .'/js/bootstrap.min.js', array(),true );
        wp_enqueue_script('wow_min_js', get_template_directory_uri() . '/js/wow.min.js', array(),true );
        wp_enqueue_style('bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('responsive_css', get_template_directory_uri() . '/css/responsive.css' );
        wp_enqueue_style('font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style('animate_min', get_template_directory_uri() . '/css/animate.min.css');
		wp_enqueue_style('animate_min', get_template_directory_uri() . '/rtl.css');
		// Load the HTML5 Shiv.
		wp_enqueue_script('tribute-html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.2' );
	    wp_script_add_data( 'tribute-html5', 'conditional', 'lt IE 9' );
//Respond.js for IE8 support of HTML5 elements and media queries
        wp_enqueue_script('tribute-ie8supportofhtml5', get_template_directory_uri() . '/js/respond.min.js', array(), '1.4.2' );
        wp_script_add_data('tribute-ie8supportofhtml5', 'conditional', 'lt IE 8');
        wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800', false);
}
add_action('wp_enqueue_scripts', 'tribute_scripts');


/**

 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Tribute
 */

function tribute_widgets_init() {

	register_sidebar( array(
	  'name'          => __( 'Widget Area', 'tribute' ),
	  'id'            => 'sidebar-one',
	  'description'   => __( 'Add widgets here to appear in your sidebar.', 'tribute' ),
	  'before_widget' => '<section id="%1$s" class="widget wow fadeInUp %2$s">',
	  'after_widget'  => '</section>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',

	) );

}

add_action( 'widgets_init', 'tribute_widgets_init');
require get_template_directory() . '/admin/template-tags.php';
require get_template_directory() . '/admin/customizer.php';
require get_template_directory() . '/admin/custom_header.php';
require get_template_directory() . '/admin/custom_css.php';

function tribute_editor_styles() {

    add_editor_style( 'editor-style.css');

}

add_action('admin_init', 'tribute_editor_styles' );

add_filter('comments_open', 'tribute_comments_open', 10, 2 );
function tribute_comments_open( $open, $post_id ) {
	$post = get_post( $post_id );
    if (get_post_meta($post->ID, 'Allow Comments', true)) {$open = true;}
	return $open;

}
?>
