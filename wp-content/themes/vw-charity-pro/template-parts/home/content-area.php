<?php
/**
 * Template to show the content of page editor
 *
 * @package VW_Pet_Shop_Pro
 */
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="container editor_content">
	<?php the_content(); ?>
</div>
<?php endwhile; ?>