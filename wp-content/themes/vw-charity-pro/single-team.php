<?php
/**
 * The Template for displaying all single team.
 *
 * @package vw-charity-pro
 */
get_header();
?>
<div class="container mt-5">
    <div id="team_prop">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <div class="team_feature-box">
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-8 team_desc_box">
                    <h2><?php the_title();?></h2>
                    <p><?php the_content();?></p>
                    <?php if(get_post_meta($post->ID,'meta-desig',true)!= ''){ ?>
                    <div class="teams-desig mb-3"><strong><?php esc_html_e('Email: ','vw-charity-pro');?> </strong> <?php echo esc_html(get_post_meta($post->ID,'meta-desig',true)); ?></div>
                    <?php }?>
                    <?php if(get_post_meta($post->ID,'meta-call',true)!= ''){ ?>
                    <div class="teams-call mb-3"><strong><?php esc_html_e('Call: ','vw-charity-pro');?></strong><?php echo esc_html(get_post_meta($post->ID,'meta-call',true)); ?></div>
                    <?php }?>
                    <div class="team-social">
                      <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-facebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                      <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-twitterurl',true)); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                      <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-googleplusurl',true)); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                      <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-linkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    
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
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>