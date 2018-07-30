<?php 
$about_section = get_theme_mod( 'vw_charity_pro_radio_newsletter_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('vw_charity_pro_newsletterbg_color','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_newsletterbg_color','')).';';
}elseif( get_theme_mod('vw_charity_pro_newsletterbg_image','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_newsletterbg_image')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="newsletter" class="p-0" style="<?php echo esc_attr($about_backg); ?>">
    <div class="container ">
      <div class="row news_inner">
        <div class="col-md-5 news_box_outer mt-3 mb-3">
          <div class="row">
            <div class="col-md-4 col-lg-4">
              <div class="icon_news"><i class="far fa-envelope-open fa-3x"></i></div>
            </div>
            <div class="col-md-8 col-lg-8">
              <div class="mid-content">
                <?php if(get_theme_mod('vw_charity_pro_newsletter_title',true != '')){?>
                  <h6 class="mb-1"><?php echo esc_html(get_theme_mod('vw_charity_pro_newsletter_title', __('Newsletter sign up','vw-charity-pro'))); ?></h6>
                  <?php }?>
                <?php if(get_theme_mod('vw_charity_pro_newsletter_subtitle',true != '')){?>
                  <p class="mt-1 mb-1"><?php echo esc_html(get_theme_mod('vw_charity_pro_newsletter_subtitle', __('Ut lobortis sapien ligula. Sed dapibus quam in sapien porttitor dignissim. Vivamus finibus pretium libero eget fermentum. Ut dictum congue orci a varius','vw-charity-pro'))); ?></p>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 offset-md-1">
          <div class="news_content mt-4 mb-4">
            <?php echo do_shortcode(get_theme_mod('vw_charity_pro_newsletter_shortcode','[contact-form-7 id="89" title="Contact form 1"]','vw-charity-pro')); ?>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
</section>