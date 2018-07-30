<?php
/**
 * The Header for our theme.
 *
 * @package vw-charity-pro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="masthead" class="site-header">

    <!-- before header hook -->
    <?php do_action( 'vw_charity_pro_before_topbar' ); ?>
    <?php get_template_part('template-parts/header/top-bar'); ?>
    
    <?php do_action( 'vw_charity_pro_before_header' ); ?>
    <?php get_template_part('template-parts/header/content-header'); ?> 

    <div class="clearfix"></div>

  </header>