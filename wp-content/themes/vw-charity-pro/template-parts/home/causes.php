<?php
/**
 * Template to show the content of Causes Section
 *
 * @package VW_Pet_Shop_Pro
 */ 
$about_section = get_theme_mod( 'vw_charity_pro_radio_causes_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vw_charity_pro_causes_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_causes_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_causes_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_causes_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="causes" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
  	<?php if(get_theme_mod('vw_charity_pro_causes_title',true) != ''){?>
        <h2 class="text-center"><?php echo esc_html(get_theme_mod('vw_charity_pro_causes_title', __('Recent Causes','vw-charity-pro'))); ?></h2>
    <?php } ?>
    <?php if(get_theme_mod('vw_charity_pro_causes_subtitle',true) != ''){?>
      <p class="w-75 subtext mb-5"><?php echo esc_html(get_theme_mod('vw_charity_pro_causes_subtitle', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'))); ?></p>
    <?php } ?>
    <div class="row">
	    <?php if ( defined( 'VW_CHARITY_PRO_POSTTYPE_VERSION' ) ) { ?>
			<?php
				$args = array(
				'post_type' => 'causes',
				'post_status' => 'publish'
			);
			$new = new WP_Query($args); ?>
				<?php $j=1;
				 	while ( $new->have_posts() ){
				        $new->the_post();  ?>
			          	<div class="causes_content  col-lg-4 col-md-6">
				          	<div class="causes_thumb media">
					          	<?php if(has_post_thumbnail()){
					          		the_post_thumbnail();
					          	}?>
					         <?php if(has_post_thumbnail()){?>
					          	<div class="media__body">
					          		
								    <a class="read-more font-weight-bold btn btn-primary theme_button" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vw_charity_pro_causes_overlaybtntext',__('Donate Now','vw-charity-pro'))); ?></a>
							
							  	</div>
							<?php } ?>  	
							</div>
				          	
				          	<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
					        <p><?php $excerpt = get_the_excerpt(); echo esc_html(vw_charity_pro_string_limit_words($excerpt,25)); ?></p>
					        <?php 
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
			          	</div>
					<?php $j++; }
				wp_reset_query(); ?>
		<?php } else{ ?>
	      <h3 class="text-center"><?php echo esc_html_e('Please install VW Charity pro Posttype plugin and add your Causes to enable this section','vw-charity-pro')?></h3>
	    <?php }?>
	</div>
    <div class="clearfix"></div>
  </div>
</section>