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
get_header(); ?>
<?php do_action('vw_charity_pro_before_contact_title'); ?>
<div class="container mt-5">
	<?php the_archive_title( '<h1>', '</h1>' ); ?>
</div>
<div class="feature-box">
	<div class="container">
		<div class="col-md-12">
			<div class="bradcrumbs">
				<?php vw_charity_pro_the_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
		<div class="col-lg-8 col-sm-6 col-md-8">
			<?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/post/post-content' );
				endwhile; ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
            <div class="navigation pagination">
				<?php // Previous/next page navigation.
		            the_posts_pagination( array(
		                'prev_text'  => __( 'Previous page', 'vw-charity-pro' ),
		                'next_text'  => __( 'Next page', 'vw-charity-pro' ),
		                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-charity-pro' ) . ' </span>',
		            ));
				?>
			</div>
        </div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<?php get_sidebar( 'page' ); ?>
		</div>
        <div class="clearfix"></div>
    </div>
</div>
<?php get_footer(); ?>