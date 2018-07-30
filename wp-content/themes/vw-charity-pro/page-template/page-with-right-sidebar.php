<?php
/**
 * Template Name:Page with Right Sidebar
 */

get_header();

get_template_part('template-parts/banner'); ?>

<?php do_action('vw_charity_pro_before_page'); ?>

<div class="container">
  <div class="middle-align">
    <div class="row">
      <div class="col-lg-8 col-sm-6 col-md-8 content_page">
        <?php while ( have_posts() ) : the_post();
          the_content();

          //If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() ){
            comments_template();
          }
        endwhile; // end of the loop. ?>
      </div>
       <div class="col-lg-4 col-md-4 col-sm-12" id="sidebar">
          <?php dynamic_sidebar('sidebar-2'); ?>
       </div>
       <div class="clear"></div>
    </div>
  </div>
</div>
<?php do_action('vw_charity_pro_after_page'); ?>

<?php get_footer(); ?>