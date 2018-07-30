<?php
/**
 * Template to show the content of Causes Section
 *
 * @package VW_Pet_Shop_Pro
 */ 
$about_section = get_theme_mod( 'vw_charity_pro_radio_testimonials_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vw_charity_pro_testimonials_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_testimonials_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_testimonials_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_testimonials_bgimage')).'\')';
}else{
  $about_backg = 'background-image:url(\''.get_template_directory_uri().'/images/testimonial-bg.png'.'\')'; 
}
?>
<section id="testimonials" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
  	<?php if(get_theme_mod('vw_charity_pro_testimonials_title',true) != ''){?>
        <h2 class="text-center head_white"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_testimonials_title', __('What Our Donators Say','vw-charity-pro'))); ?></h2>
    <?php } ?>
    <?php if(get_theme_mod('vw_charity_pro_testimonials_subtitle',true) != ''){?>
      <p class="w-75 subtext mb-5 head_white"><?php echo esc_html(get_theme_mod('vw_charity_pro_testimonials_subtitle', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'))); ?></p>
    <?php } ?>
    <div class="owl-carousel">
	    <?php if ( defined( 'VW_CHARITY_PRO_POSTTYPE_VERSION' ) ) { ?>
			<?php
				$args = array(
				'post_type' => 'testimonial',
				'post_status' => 'publish'
			);
			$new = new WP_Query($args); ?>
				<?php $j=1;
				 	while ( $new->have_posts() ){
				        $new->the_post();  ?>
				          <div class="testimonials_content">
				          	<div class="qoute">
				          		<blockquote><?php $excerpt = get_the_excerpt(); echo esc_html(vw_charity_pro_string_limit_words($excerpt,25)); ?></blockquote>
				          	</div>
				          	<div class="row">
				          		<div class="col-md-3">
				          			<?php if(has_post_thumbnail()){
					          			the_post_thumbnail();
					          		}?>
				          		</div>
				          		<div class="col-md-9 other_info">
				          			<cite><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></cite>
				          			<p><?php echo esc_html( get_post_meta($post->ID,'vw_charity_pro_posttype_testimonial_desigstory',true) ); ?></p>
				          		</div>
				          	</div>
				          	
				          </div>
					<?php $j++; }
				wp_reset_query(); ?>
		<?php } else{ ?>
	      <h3 class="text-center"><?php echo esc_html_e('Please install VW Charity pro Posttype plugin and add your Testimonials to enable this section','vw-charity-pro')?></h3>
	    <?php }?>
	</div>
    <div class="clearfix"></div>
  </div>
</section>
