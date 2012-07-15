<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
 
<?php
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    wp_head();
?>
</head>
 
<body <?php body_class(); ?>>
 
    <header id="top">
        <hgroup>
            <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2><?php bloginfo( 'description' ); ?></h2>
        
        <?php if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
                <?php dynamic_sidebar( 'header-widget-area' ); ?>
        <?php endif; ?>
        </hgroup>
        
        <nav>
            <?php wp_nav_menu( array( 'container' => 'div', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
            <?php wp_nav_menu( array( 'container' => 'div', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'secondary' ) ); ?>
        </nav>
    </header>

<div id="container">