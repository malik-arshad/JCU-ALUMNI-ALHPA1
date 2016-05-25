<?php function tribute_add_customizer_css() {
	
	?>
	<!-- Debut customizer CSS -->
        <style type="text/css">
        
<?php if(get_theme_mod('bgimg-upload' )){ ?>
#banner{ display:block; text-align:center; position: relative; background:url(<?php echo esc_url(get_theme_mod('bgimg-upload')); ?>) center top no-repeat; background-size:cover; height:490px;  }
<?php } else { ?>
 #banner{ display:block; text-align:center;  position: relative; background:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/banner.jpg) center top no-repeat; background-size:cover; height:490px;  }
<?php }?>
			
<?php if(get_theme_mod('color-setting' )){ ?>
.btn,input[type="submit"],.main-nav .navbar-nav ul li a:hover,.main_nav.nav ul li:hover,.entry-meta,.sidebar ul li a.rsswidget,.t-color,.tagcloud a:hover,.sidebar ul li.recentcomments a,.sidebar ul li a:hover,footer a:hover,.error-404 .search-btn,.sidebar .widget-title,span.post-date,a,.main-nav .navbar-nav> li a:hover,.main-nav .navbar-nav> li.active > a,.main-nav .navbar-nav> li a:focus,.main-nav .nav .open>a,code,.commentlist footer a{ color:<?php echo esc_html(get_theme_mod('color-setting')); ?>; }
button.search-btn:hover,.btn:hover,.btn:focus,.btn:active:focus,input[type="submit"]:hover,.navbar-toggle .icon-bar,table#wp-calendar th,.error-404 .search-btn{ background:<?php echo esc_html(get_theme_mod('color-setting')); ?>; }
blockquote,.form-control:focus,.btn,input[type="submit"],.btn:hover,.btn:focus,.btn:active:focus,input[type="submit"]:hover,.main-nav .navbar-toggle,table#wp-calendar th,.sidebar .widget-title{ border-color:<?php echo esc_html(get_theme_mod('color-setting')); ?>; }
::-moz-selection{background:<?php echo esc_html(get_theme_mod('color-setting')); ?>;}
::selection{background:<?php echo esc_html(get_theme_mod('color-setting')); ?>;}
<?php } else { ?>
.btn,input[type="submit"],.main-nav .navbar-nav ul li a:hover,.main_nav.nav ul li:hover,.entry-meta,.sidebar ul li a.rsswidget,.t-color,.tagcloud a:hover,.sidebar ul li.recentcomments a,.sidebar ul li a:hover,footer a:hover,.error-404 .search-btn,.sidebar .widget-title,span.post-date,a,.main-nav .navbar-nav> li a:hover,.main-nav .navbar-nav> li.active > a,.main-nav .navbar-nav> li a:focus,.main-nav .nav .open>a,code,.commentlist footer a{ color:#da4453; }
button.search-btn:hover,.btn:hover,.btn:focus,.btn:active:focus,input[type="submit"]:hover,.navbar-toggle .icon-bar,table#wp-calendar th,.error-404 .search-btn{ background:#da4453; }
blockquote,.form-control:focus,.btn,input[type="submit"],.btn:hover,.btn:focus,.btn:active:focus,input[type="submit"]:hover,.main-nav .navbar-toggle,table#wp-calendar th,.sidebar .widget-title{ border-color:#da4453; }
::-moz-selection{background:#da4453;}
::selection{background:#da4453;}
<?php } ?>
			
			
<?php if(get_theme_mod('bgcolor-setting')){ ?>
body{color:#434343;font-family:'Open Sans',sans-serif;font-size:13px; line-height:1.625;background-color:<?php echo esc_html(get_theme_mod('bgcolor-setting')); ?>}
<?php } else { ?>
body{color:#434343;font-family:'Open Sans',sans-serif;font-size:13px; line-height:1.625;background-color:#fff}
<?php } ?>

<?php $header_image = get_header_image(); if($header_image!=''){?>
.main-header { background-image:url(<?php echo esc_url($header_image);  ?>);}
<?php }else{?>
.main-header {}
<?php } ?>
            
	</style>
<?php }
add_action('wp_head', 'tribute_add_customizer_css'); ?>