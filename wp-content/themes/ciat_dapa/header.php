<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
<?php if(WP_VERSION < 3.0): ?>
<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', THEME_NS), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', THEME_NS), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" />
<?php endif; ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
remove_action('wp_head', 'wp_generator');
wp_enqueue_script('jquery');
if ( is_singular() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}
wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script.js"></script>
</head>
<body <?php if(function_exists('body_class')) body_class(); ?>>
<div id="art-page-background-middle-texture">
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
              
                <div class="art-header-inner">
		  <div class="header_links">
                    <?php wp_nav_menu (array ('theme_location' =>'menu-top')); ?>
                  </div>
                  <div class="titleh"><?php bloginfo('description'); ?></div>
                  <div class="art-logo" >
                    <div class="art-search-1">
                      <?php include (TEMPLATEPATH . '/searchform.php');?> 
                    </div>
                    <div class="art-iconos" >
                      <a href="https://twitter.com/ciat_dapa" class="icon25 tw-25" target="_blank"></a> 
                      <!--<a href="https://www.facebook.com/ciat.ecoefficient" class="icon25-1 fb-25" target="_blank"></a>-->
                      <!--<a href="http://www.youtube.com/user/ciatweb" class="icon25-1 yt-25" target="_blank"></a>--> 
                      <a href="http://www.flickr.com/photos/ciat/tags/dapa/" class="icon25-1 fk-25" target="_blank"></a> 
                      <a href="http://www.slideshare.net/ciatdapa" class="icon25-1 ss-25" target="_blank"></a> 
                      <a href="<?php echo site_url()."/?feed=rss2"; ?>" class="icon25-1 rs-25" target="_blank"></a> 
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="cleared reset-box"></div>
   <div id="subnav">
      <?php wp_nav_menu( array('menu' => 'main navigation menu' )); ?>
   </div>
    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
	
		
