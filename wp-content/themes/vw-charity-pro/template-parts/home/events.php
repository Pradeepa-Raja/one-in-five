<?php
/**
 * Template to show the content of Causes Section
 *
 * @package VW_Pet_Shop_Pro
 */ 
$about_section = get_theme_mod( 'vw_charity_pro_radio_events_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vw_charity_pro_events_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_events_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_events_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_events_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="events" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
  	<?php if(get_theme_mod('vw_charity_pro_events_title',true) != ''){?>
        <h2 class="text-center"><?php echo esc_html(get_theme_mod('vw_charity_pro_events_title', __('Upcoming Events','vw-charity-pro'))); ?></h2>
    <?php } ?>
    <?php if(get_theme_mod('vw_charity_pro_events_subtitle',true) != ''){?>
      <p class="w-75 subtext mb-5"><?php echo esc_html(get_theme_mod('vw_charity_pro_events_subtitle', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'))); ?></p>
    <?php } ?>
    <?php if ( defined( 'VW_CHARITY_PRO_POSTTYPE_VERSION' ) ) { ?>
    <div class="row">
		<?php
			$args = array(
			'post_type' => 'event',
			'post_status' => 'publish'
		);
		$new = new WP_Query($args); ?>
			<?php $j=1;
			 	while ( $new->have_posts() ){
			        $new->the_post();  ?>
			        <div class="events_content col-md-6">
			        	<div class="row">
				          	<div class="events_thumb col-md-4">
					          	<?php if(has_post_thumbnail()){
					          		the_post_thumbnail();
					          	}?>
							</div>
				          	<div class="col-md-8">
					          	<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						        <p><?php $excerpt = get_the_excerpt(); echo esc_html(vw_charity_pro_string_limit_words($excerpt,25)); ?></p>
						        <?php if(get_post_meta($post->ID,'meta-date',true) != '' || get_post_meta($post->ID,'meta-time',true) != ''){ ?>
							        <div class="post_meta mt-2">
						          		<span class="entry-date datebox"><i class="fas fa-stopwatch mr-2"></i><?php echo esc_html( get_post_meta($post->ID,'meta-date',true) ); ?></span>
						          		<span class="ml-3"><?php echo esc_html( get_post_meta($post->ID,'meta-time',true) ); ?></span>
							        </div>
							    <?php } 
							    if(get_post_meta($post->ID,'meta-location',true) != '') {?>
							    	<p class="mb-0 mt-2 event_location"><i class="fas fa-map-marker-alt mr-2"></i><?php echo esc_html( get_post_meta($post->ID,'meta-location',true) ); ?></p>
							    <?php } ?>
							    <div class="enroll_now">
								    <a class="read-more font-weight-bold btn btn-primary theme_button" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vw_charity_pro_events_btntext',__('Enroll Now','vw-charity-pro'))); ?>
								    </a>
								</div>
							</div>
						</div>
		          	</div>
				<?php $j++; }
		wp_reset_query(); ?>
		<div class="view_all mt-4">
			<a class="read-more font-weight-bold btn btn-primary theme_button v" href="<?php echo esc_url(get_theme_mod('vw_charity_pro_events_viewall_url')); ?>"><?php echo esc_html(get_theme_mod('vw_charity_pro_events_viewall',__('View All Events','vw-charity-pro'))); ?>
		    </a>
		</div>
	</div>
	<?php } else{ ?>
	      <h3 class="text-center"><?php echo esc_html_e('Please install VW Charity pro Posttype plugin and add your Events to enable this section','vw-charity-pro')?></h3>
    <?php }?>
    <div class="clearfix"></div>
  </div>
</section>