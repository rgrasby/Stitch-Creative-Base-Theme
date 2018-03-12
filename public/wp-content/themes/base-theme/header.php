<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if ( is_front_page() ) { echo 'The Craft of Marketing'; } elseif (is_home()) { echo get_the_title( get_option('page_for_posts', true) ); } else { echo the_title(); } ?> | <?php echo get_bloginfo( 'name' ); ?></title>
<meta name="description" content="At Stitch Creative, we are marketers driven equally by creativity and curiosity. We are inquisitive by nature. A need to understand why means doing everything for the right reason. That’s why strategic thinking drives all the work we do."/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>

<body <?php body_class(); ?>>
    
<?php get_template_part('icons/icon', 'sprite.svg'); ?>
    
    
<div id="page" class="site">

	<header class="site-header">
       
        Header
	</header><!-- #masthead -->
    

