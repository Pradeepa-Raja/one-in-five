<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vw-charity-pro
 */
get_header(); ?>
<?php do_action('vw_charity_pro_before_contact_title'); ?>
<div class="container mt-5">
	<div class="middle-align">
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-md-8">
				<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
					</header>
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post-content' );
					endwhile;?>
					<div class="navigation pagination">
						<?php // Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'vw-charity-pro' ),
							'next_text'          => __( 'Next page', 'vw-charity-pro' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-charity-pro' ) . ' </span>',
						));?>

					</div>
				<?php else :
					get_template_part( 'no-results', 'archive' ); ?>
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