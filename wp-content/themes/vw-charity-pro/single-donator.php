<?php
/**
 * The Template for displaying all single team.
 *
 * @package vw-charity-pro
 */
get_header(); 
get_template_part( 'template-parts/banner' );?>
<?php do_action('vw_charity_pro_before_contact_title'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8" id="sidebar">
            <div id="donators_single">        
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <div class="donators_feature_box">
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                        </div>
                    <?php } ?>
                </div>
                <div class="team_desc_box">
                    <p><?php the_content();?></p>
                    <?php if(get_post_meta($post->ID,'meta-desig',true)!= ''){ ?>
                    <div class="teams-desig mb-3"><strong><?php esc_html_e('Designation: ','vw-charity-pro');?> </strong> <?php echo esc_html(get_post_meta($post->ID,'meta-desig',true)); ?></div>
                    <?php }?>  
                    <?php if(get_post_meta($post->ID,'meta-donated',true)){?>
                        <p class="donated"><?php esc_html_e('Donated: ','vw-charity-pro'); ?><?php echo esc_html(get_post_meta($post->ID,'meta-donated',true)); ?></p>
                    <?php } ?>                  
                    <div class="clearfix"></div>
                </div>
                <?php endwhile; // end of the loop. ?>
            </div>
            <?php the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-charity-pro' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'vw-charity-pro' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-charity-pro' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-charity-pro' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );?>
        </div>
        <div class="col-lg-4" id="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>