<!DOCTYPE html>
<!-- 
 _    _     
| |  | |    
| | _| |__  
| |/ / '_ \ 
|   <| | | |	Created by Kaleb Heitzman
|_|\_\_| |_|	http://kheitzman.com/wordpress
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
	
	<link rel="pingback" href="<?php bloginfo('pingback_url')?>" />

	<?php wp_head(); ?>

</head>
<body id="<?php echo content_slug() ?>" <?php body_class(); ?>>

<?php get_navbar(); ?>

<div class="row">
	<section id="content" class="large-12 columns" role="main">