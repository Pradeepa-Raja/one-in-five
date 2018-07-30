<?php
/**
 * Template to show the content of Causes Section
 *
 * @package VW_Pet_Shop_Pro
 */ 
$about_section = get_theme_mod( 'vw_charity_pro_radio_blog_post_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vw_charity_pro_blog_post_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_blog_post_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_blog_post_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_blog_post_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="blog_post" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
  	<?php if(get_theme_mod('vw_charity_pro_blog_post_title',true != '')){?>
        <h2 class="text-center"><?php echo esc_html(get_theme_mod('vw_charity_pro_blog_post_title', __('latest news','vw-charity-pro'))); ?></h2>
    <?php } ?>
    <?php if(get_theme_mod('vw_charity_pro_blog_post_sub_title1',true) != ''){?>
      <p class="w-75 subtext mb-5"><?php echo esc_html(get_theme_mod('vw_charity_pro_blog_post_sub_title1', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'))); ?></p>
    <?php } ?>
    <div class="owl-carousel">
		<?php
			$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' => get_theme_mod('vw_charity_pro_latestblogpost_setting')
		);
		$new = new WP_Query($args); ?>
		<?php $j=1;
		 	while ( $new->have_posts() ){
		        $new->the_post();  ?>
		          <div class="blog_post_content">
		          	<?php if(has_post_thumbnail()){
		          		the_post_thumbnail();
		          	}?>
		          	<h6 href="<?php the_permalink(); ?>"><?php the_title(); ?></h6>
		          	<div class="post_meta mt-2 mb-2">
			          	<span class="auther float-left"><span class="font-weight-bold mr-2"><?php esc_html_e('Posted By:','vw-charity-pro'); ?></span><?php the_author(); ?></span>
			          	<span class="entry-date datebox float-right"><span class="font-weight-bold mr-2 "><?php esc_html_e('Posted On:','vw-charity-pro'); ?></span><?php echo esc_html( the_time('j M Y') ); ?></span>
			         </div>
			         <p><?php $excerpt = get_the_excerpt(); echo esc_html(vw_charity_pro_string_limit_words($excerpt,50)); ?></p>

			         <?php if( get_theme_mod('vw_charity_pro_blog_post_button_text', true) != ''){ ?>
			         <div class="div_theme_button w-100">
                      <a class="read-more font-weight-bold btn btn-primary theme_button" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vw_charity_pro_blog_post_button_text',__('Read More','vw-charity-pro'))); ?></a>
                      </div>
                    <?php } ?>
		          </div>
			<?php $j++; }
		wp_reset_query(); ?>
	</div>
    <div class="clearfix"></div>
  </div>
</section>