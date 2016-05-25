<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<header class="main-header">
<div class="container">
<?php $logo_placement=get_theme_mod('logo_placement') ; ?> 

<div class="brandlogo <?php  if($logo_placement=='left') { echo 'alignleft'; } else if($logo_placement=='right') { echo 'alignright'; }else if($logo_placement=='center') { echo 'aligncenter'; } else{ echo 'aligncenter'; } ?>"><a href="<?php echo esc_url(home_url()); ?>">
  <?php if ( get_theme_mod( 'logo-upload')) : ?> 
        <img src="<?php echo esc_url(get_theme_mod('logo-upload')); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
      
          <?php else : if(display_header_text()): ?>
    
    <h1 class="brand-title"><?php bloginfo('name'); ?></h1>
  <p class="brand-subtitle"><?php bloginfo('description'); ?></p>
 <?php endif; endif; ?>

    </a></div>
   
<!--brandlogo-->
  </div>
 <nav class="navbar main-nav">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only"><?php printf(__('Toggle navigation', 'tribute' )); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
         <?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'menu_id' => '' )); ?> 
      
      
      </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

  </header>

  