<?php
/**
 * The template for displaying all pages.
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
<?php get_template_part( 'template-parts/banner' ); ?>
<?php do_action( 'vw_charity_pro_after_page_header' ); ?>

<div class="container inner_layout">
	<div class="middle-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content();
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template(); 
					}
				?>
			</article>
		<?php endwhile; // end of the loop. ?>
	</div>
	<div class="clearfix"></div>
</div>

<?php do_action( 'vw_charity_pro_before_page_footer' ); ?>

<?php get_footer(); ?>