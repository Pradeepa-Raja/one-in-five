<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package vw-charity-pro
 */
get_header(); get_template_part( 'template-parts/banner' );?>
	<div class="inner_banner">
		<img src="<?php echo esc_url(get_theme_mod('vw_charity_pro_inner_banner',get_template_directory_uri().'/images/record-bg.png')); ?>" alt="Image"/>
		<div class="container">
			<h1><?php the_title();?></h1>
		</div>
	</div>
<?php do_action('vw_charity_pro_before_contact_title'); ?>
<div class="title-box">
	<div class="container">
		<h1><?php the_title();?></h1>	
	</div>
</div>
<div class="content_page">
	<div class="container">
		<div class="page-content">
				<h3><?php esc_html_e( '404 Not Found', 'vw-charity-pro' ); ?></h3>
				<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn &hellip; Don\'t worry &hellip; it happens to the best of us.', 'vw-charity-pro' ); ?></p>  
				<div class="read-moresec">
					<div><a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right">
					<?php esc_html_e( 'Back to Home Page', 'vw-charity-pro' ); ?></a></div>
					</div>			
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php get_footer(); ?>