<?php
/**
 * Template Name: Home Page
 */
?>
<?php get_header();
	
	get_template_part( 'template-parts/home/slider' );
	do_action( 'vw_charity_pro_after_slider' );

	get_template_part( 'template-parts/home/goals' );
	do_action( 'vw_charity_pro_before_goals' );

	do_action( 'vw_charity_pro_before_content_area' );
	get_template_part( 'template-parts/home/content-area' );

	get_template_part( 'template-parts/home/what-we-do' );
	do_action( 'vw_charity_pro_before_pet_what_we_do' );

	get_template_part( 'template-parts/home/how-can-you-help' );
	do_action( 'vw_charity_pro_before_pet_how-can-you-help' );

	get_template_part( 'template-parts/home/causes' );
	do_action( 'vw_charity_pro_before_pet_causes' );

	get_template_part( 'template-parts/home/our-records' );
	do_action( 'vw_charity_pro_before_pet_our_records' );

	get_template_part( 'template-parts/home/donators' );
	do_action( 'vw_charity_pro_before_pet_donators' );

	get_template_part( 'template-parts/home/events' );
	do_action( 'vw_charity_pro_before_pet_events' );

	get_template_part( 'template-parts/home/testimonials' );
	do_action( 'vw_charity_pro_before_pet_testimonials' );

	get_template_part( 'template-parts/home/latest-post' );
	do_action( 'vw_charity_pro_before_pet_latest-post' );

	get_template_part( 'template-parts/home/newsletter' );
	do_action( 'vw_charity_pro_before_pet_newsletter' );
	
get_footer(); ?>