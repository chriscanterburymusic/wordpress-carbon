<!DOCTYPE html>
<!-- 
  _                         _               
 | |                       | |              
 | |__  _ __ __ _ _ __   __| |_ __ ___ ___  
 | '_ \| '__/ _` | '_ \ / _` | '__/ __/ _ \ 
 | |_) | | | (_| | | | | (_| | | | (_| (_) |
 |_.__/|_|  \__,_|_| |_|\__,_|_|  \___\___/ 
                                            
  This website was created by The Brandr Co. If you'd like to do business
  with us, send an email to connect@brandr.co. 
-->
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset')?>" />

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url')?>" />

	<?php wp_head(); ?>

</head>
<body id="<?php echo content_slug() ?>" <?php body_class('row'); ?>>

<?php get_sidebar(); ?>

<section id="content" class="nine columns" role="main">