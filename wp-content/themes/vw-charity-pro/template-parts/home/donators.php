<?php
/**
 * Template to show the content of Causes Section
 *
 * @package VW_Pet_Shop_Pro
 */ 
$about_section = get_theme_mod( 'vw_charity_pro_radio_donators_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vw_charity_pro_donators_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_donators_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_donators_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_donators_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="donators" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
  	<?php if(get_theme_mod('vw_charity_pro_donators_title',true) != ''){?>
        <h2 class="text-center"><?php echo esc_html(get_theme_mod('vw_charity_pro_donators_title', __('Latest Donators','vw-charity-pro'))); ?></h2>
    <?php } ?>
    <?php if(get_theme_mod('vw_charity_pro_donators_subtitle',true) != ''){?>
      <p class="w-75 subtext mb-5"><?php echo esc_html(get_theme_mod('vw_charity_pro_donators_subtitle', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'))); ?></p>
    <?php } ?>
    <div class="owl-carousel slide_content">
	    <?php if ( defined( 'VW_CHARITY_PRO_POSTTYPE_VERSION' ) ) { ?>
			<?php
				$args = array(
				'post_type' => 'donator',
				'post_status' => 'publish'
			);
			$new = new WP_Query($args); ?>
				<?php $j=1;
				 	while ( $new->have_posts() ){
				        $new->the_post();  ?>
				          <div class="donators_content text-center">
				          	<div class="donator_thumb media">
					          	<?php if(has_post_thumbnail()){
					          		the_post_thumbnail();
					          	}?>
							</div>
							<h6><a class="font-weight-bold text-uppercase" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
							<?php if(get_post_meta($post->ID,'meta-desig',true)){?>
			                    <p class=""><?php echo esc_html(get_post_meta($post->ID,'meta-desig',true)); ?></p>
		                  	<?php } ?>
		                  	<?php if(get_post_meta($post->ID,'meta-donated',true)){?>
			                    <p class="donated"><?php esc_html_e('Donated: ','vw-charity-pro'); ?><?php echo esc_html(get_post_meta($post->ID,'meta-donated',true)); ?></p>
		                  	<?php } ?>
				          </div>
					<?php $j++; }
				wp_reset_query(); ?>
		<?php } else{ ?>
	      <h3 class="text-center"><?php echo esc_html_e('Please install VW Charity pro Posttype plugin and add your donors to enable this section','vw-charity-pro')?></h3>
	    <?php }?>
	</div>
    <div class="clearfix"></div>
  </div>
</section>