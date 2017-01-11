<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

		
    <!-- Icon font 7 Stroke -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/fonts/icon-7/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/fonts/icon-7/css/helper.css">

    <!-- Icon font Renovation -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/fonts/renovation/icon-font-renovation.css">

    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Menu Mobile: mmenu -->
    <link type="text/css" rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/components/mmenu/jquery.mmenu.all.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/components/font-awesome/css/font-awesome.css" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/components/owl.carousel/assets/owl.carousel.css" />

    <!-- Light Gallery -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/components/lightgallery/css/lightgallery.css" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/components/bootstrap/css/bootstrap.css" />

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/assets/components/slider/slider.css">

    <!-- THEME STYLE -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/main.css">
	
	<script src="<?=get_template_directory_uri()?>/assets/components/jquery/jquery.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/bootstrap/js/bootstrap.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/owl.carousel/owl.carousel.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/parallax.js/parallax.js"></script>
  	<script src="<?=get_template_directory_uri()?>/assets/components/scrollup/jquery.scrollUp.js"></script>
  	<script src="<?=get_template_directory_uri()?>/assets/components/lightgallery/js/lightgallery.js"></script>

    <!-- Mobile Menu -->
    <script src="<?=get_template_directory_uri()?>/assets/components/mmenu/jquery.mmenu.min.all.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/jquery.themepunch.tools.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?=get_template_directory_uri()?>/assets/components/slider/extensions/revolution.extension.video.min.js"></script>

    <!-- ISOTOPE -->
    <script src="<?=get_template_directory_uri()?>/assets/components/isotope.pkgd.min.js"></script>

    <!-- HOVER ISOTOPE -->
    <script src="<?=get_template_directory_uri()?>/assets/components/jquery.directional-hover.min.js"></script>

    <!-- Image loaded ISOTOPE -->
    <script src="<?=get_template_directory_uri()?>/assets/components/imagesloaded.pkgd.min.js"></script>

    <script src="<?=get_template_directory_uri()?>/assets/js/main.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

