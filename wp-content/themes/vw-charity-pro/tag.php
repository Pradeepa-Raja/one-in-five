<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
<div class="container mt-5">
	<div class="middle-align">
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-md-8">
				<?php the_archive_title( '<h1>', '</h1>' ); ?>
				<?php if ( have_posts() ) : ?>
	                <?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post-content' );
					endwhile; ?>
		            <div class="navigation">
						<?php // Previous/next page navigation.
				            the_posts_pagination( array(
				                'prev_text'  => __( 'Previous page', 'vw-charity-pro' ),
				                'next_text'  => __( 'Next page', 'vw-charity-pro' ),
				                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-charity-pro' ) . ' </span>',
				            ));
						?>
					</div>
				<?php else : ?>
					<?php get_template_part( 'no-results', 'archive' ); ?>
				<?php endif; ?>
	        </div>
		   	<div class="col-lg-4 col-md-4 col-sm-12">
				<?php get_sidebar( 'page' ); ?>
			</div>
	        <div class="clearfix"></div>
	    </div>
	</div>
</div>
<?php get_footer(); ?>