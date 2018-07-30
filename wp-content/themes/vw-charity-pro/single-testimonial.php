<?php
/**
 * The Template for displaying all single team.
 *
 * @package vw-charity-pro
 */
get_header(); 
get_template_part( 'template-parts/banner' );?>
<?php do_action('vw_charity_pro_before_contact_title'); ?>
<div class="container">
    <div id="testimonial_single">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="testimonial_des">
                <?php the_content();?>
            </div>
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="team_feature-box">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                    </div>
                <?php } ?>
                <h4><?php the_title();?></h4>                    
                <?php if(get_post_meta($post->ID,'vw_charity_pro_posttype_testimonial_desigstory',true)!= ''){ ?>
                <div class="teams-desig mb-3"><?php echo esc_html(get_post_meta($post->ID,'vw_charity_pro_posttype_testimonial_desigstory',true)); ?></div>
                <?php }?>
                <div class="clearfix"></div>
        <?php endwhile; // end of the loop. ?>
        <?php the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-charity-pro' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'vw-charity-pro' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-charity-pro' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-charity-pro' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );?>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>