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
    <div class="row">
    <div class="col-lg-8">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="causes-thumb">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="team_feature-box">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                    </div>
                <?php } ?>
            </div>
            <div class="team_desc_box">                
                <?php 
                if(get_post_meta(get_the_ID(),'meta-raised',true) != '' && get_post_meta(get_the_ID(),'meta-goal',true) != ''){
                    if(get_post_meta(get_the_ID(),'meta-raised',true) != ''){
                        $raised_meta = get_post_meta(get_the_ID());
                        $raised = number_format($raised_meta['meta-raised'][0], 2, '.', '');
                    }
                    if(get_post_meta(get_the_ID(),'meta-goal',true) != ''){
                        $goal_meta = get_post_meta(get_the_ID());
                        $goal = number_format($goal_meta['meta-goal'][0], 2, '.', '');
                    }
                    $percent = $raised/$goal;
                    $percentage = number_format( $percent * 100, 2 ) . '%';
                    ?>
                    <div class="progress mt-5">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $percentage ?>"><span class="progress_percentage"><?php echo $percentage ?></span></div>
                    </div>
                    <div class="post_meta mt-2 pb-3 mb-2 row">
                        <?php
                            if(get_post_meta(get_the_ID(),'meta-raised') != ''){?>
                            <div class="col-md-6 col-sm-6 col-6">
                                <p class="font-weight-bold mr-2"><?php esc_html_e('Raised:','vw-charity-pro'); ?>
                                <?php echo esc_html(get_theme_mod('vw_charity_pro_causes_currency',__('$','vw-charity-pro'))); 
                                echo esc_html($raised); ?></p>
                            </div>
                        <?php } ?>

                        <?php 
                        if(get_post_meta(get_the_ID(),'meta-goal') != ''){?>
                            <div class="col-md-6 col-sm-6 col-6">
                                <p class="font-weight-bold mr-2 text-right"><?php esc_html_e('Goal:','vw-charity-pro'); ?> 
                                <?php echo esc_html(get_theme_mod('vw_charity_pro_causes_currency',__('$','vw-charity-pro'))); 
                                echo esc_html($goal); ?></p>
                            </div>
                        <?php } ?>
                        
                     </div>
                <?php } ?>
                 <p><?php the_content();?></p>
                <div class="clearfix"></div>
            </div>
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
    <div class="col-lg-4" id="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
    </div>
    
</div>
<?php get_footer(); ?>