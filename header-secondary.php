<?php
/**
 * The Header template 
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * 
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Orbitron:400,900,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<div id="main_all_content_wrapper_2">
<div id="main_menu_trigger_style" class="menu_toggle"> <a href="#">
  <h4>MENU<span class="glyphicon glyphicon-menu-hamburger" id="footerGlyphs"></span></h4>
  </a> </div>
<div class="container-fluid" id="seconday_header_main_image_wrapper">
<section class="secondary_header_wrapper row">
	<img src="<?php bloginfo('template_directory'); ?>/images/main_welcome_image.svg" class="img-responsive col-lg-3 col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0" />
</section>
</div>