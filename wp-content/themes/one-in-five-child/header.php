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
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="/wp-content/themes/one-in-five-child/js/main.js"></script>
	<link rel="stylesheet" href="/wp-content/themes/one-in-five-child/css/demo.css">
		<link rel="stylesheet" href="/wp-content/themes/one-in-five-child/css/style.css">

	<?php wp_head(); ?>
	<script>
jQuery(document).ready(function($){  
	$("#content div").hide(); // Initially hide all content
    $("#tabs li:first").attr("id","current"); // Activate first tab
    $("#content div:first").fadeIn(); // Show first tab content
    $('#tabs li a').click(function(e) {
        e.preventDefault();
        if ($(this).attr("id") == "current"){ //detection for current tab
         return       
        }
        else{             
        $("#content div").hide(); //Hide all content
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $( $(this).attr('href')).fadeIn(); // Show content for current tab
        }
    });
});

</script>
	<script>
jQuery(document).ready(function($){
	$(document).ready(function(){
    $('#lifeline a').click(function(){
        $('.content1').hide();
        $('#'+this.rel+'').show();
        return false;
    });
    $('.content1 input.close').click(function(){
        $(this).parent().hide();
    });
});
});
		</script>
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