<?php
/**
 * Template part for displaying Top Bar Content
 *
 * @package VW_Pet_Shop_Pro
 */ 

$about_section = get_theme_mod( 'vw_charity_pro_topbar_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('vw_charity_pro_topbar_bgcolor','') ) {
  $background_setting = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_topbar_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_topbar_bgimage','') ){
  $background_setting = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_topbar_bgimage')).'\')';
}else{
  $background_setting = '';
}
?>
<section id="site_top" class="top_bar" style="<?php echo esc_attr($background_setting);  ?>">
  <div class="container container-full-width">
    <div class="contact_details">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-8">
          <ul class="left-side-content">
            <?php if(get_theme_mod('vw_charity_pro_header_address',true) != ''){ ?>
              <li>
                <span class="hi_normal"><i class="far fa-clock"></i><?php echo esc_html(get_theme_mod('vw_charity_pro_header_address',__('Orlando, FL 32830, united States','vw-charity-pro')));?></span>
              </li>
            <?php } ?>
            <?php if(get_theme_mod('vw_charity_pro_header_callnumber',true) != ''){ ?>
              <li class="">
                <span class="hi_normal"><i class="fas fa-phone-volume"></i><?php echo esc_html(get_theme_mod('vw_charity_pro_header_callnumber',__('+109688895785','vw-charity-pro')));?></span>
              </li>
            <?php } ?>
            <?php if(get_theme_mod('vw_charity_pro_header_email_address',true) != ''){ ?>
              <li class="email_wrap">
                <span class="hi_normal"><i class="far fa-envelope-open"></i><?php echo esc_html(get_theme_mod('vw_charity_pro_header_email_address',__('abcdefxyz@gmail.com','vw-charity-pro')));?></span>
              </li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-4">
          <ul class="right-side-content">
            <?php if(get_theme_mod('vw_charity_pro_footer_section_social_icon',true)!= ""){?>
              <div class="social-icons">
                <?php get_template_part( 'template-parts/home/social-icons' ); ?>
              </div>
          <?php }?>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>