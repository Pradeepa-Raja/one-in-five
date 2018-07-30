<?php
/**
 * The template for displaying index page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vw-charity-pro
 */
get_header();
?>
<div class="post-section mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-md-8">
				<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/post/post-content' );
				endwhile; ?>
			  <div class="navigation pagination">
				<?php // Previous/next page navigation.
				  the_posts_pagination( array(
					  'prev_text'          => __( 'Previous page', 'vw-charity-pro' ),
					  'next_text'          => __( 'Next page', 'vw-charity-pro' ),
					  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-charity-pro' ) . ' </span>',
				  )); ?>
			  </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12"><?php get_sidebar( 'sidebar-1' ); ?></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>