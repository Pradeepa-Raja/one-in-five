<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package vw-charity-pro
 */
get_header(); ?>
<?php do_action('vw_charity_pro_before_contact_title'); ?>
<div class="container mt-5">
	<h1 class="entry-title"><?php printf('Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
</div>
<div class="container">
	<div class="middle-align">
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-md-8">
				<?php if ( have_posts() ) : ?>
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
				<?php else : ?>
					<?php get_template_part( 'no-results', 'search' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<?php get_sidebar('page'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>