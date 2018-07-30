<?php
/**
 * Template to show the content of our record section 
 *
 * @package VW_Pet_Shop_Pro
 */

$about_section = get_theme_mod( 'vw_charity_pro_radio_what_we_do_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('vw_charity_pro_what_we_do_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_what_we_do_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_what_we_do_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_what_we_do_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="what_we_do" style="<?php echo esc_attr($about_backg); ?>" class="">
  <div class="container text-center">
    <?php if(get_theme_mod('vw_charity_pro_what_we_do_section_title',true != '')){?>
        <h2><?php echo esc_html_e(get_theme_mod('vw_charity_pro_what_we_do_section_title', __('What We Do','vw-charity-pro'))); ?></h2>
    <?php } ?>
    <?php if(get_theme_mod('vw_charity_pro_what_we_do_section_subtitle',true != '')){?>
      <p class="w-75 subtext mb-5"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_what_we_do_section_subtitle', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'))); ?></p>
    <?php } ?>
    <div class="what_we_do_outer row">
      <?php $count =  get_theme_mod('vw_charity_pro_what_we_do_number', 3); 
      for($i=1; $i<=$count; $i++) { ?>
        <div class="col-md-4 text-center what_we_do_box">
          <?php if(get_theme_mod('vw_charity_pro_what_we_do_sec_icon'.$i,true) != ''){?>
            <div class="icon_what_we_do"><i class="<?php echo esc_html(get_theme_mod('vw_charity_pro_what_we_do_sec_icon'.$i,'fas fa-hand-holding-usd')); ?> fa-3x"></i></div>
          <?php } else {?>
            <img class="" src="<?php echo esc_url(get_theme_mod('vw_charity_pro_what_we_do_icon_image'.$i)); ?>" alt=""/>
          <?php } if(get_theme_mod('vw_charity_pro_what_we_do_sec_title'.$i,true) != ''){?>
            <a  href="<?php echo esc_url(get_theme_mod('vw_charity_pro_what_we_do_sec_btnurl'.$i)); ?>">
            <h6 class="what_we_do text-uppercase font-weight-bold"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_what_we_do_sec_title'.$i,__('Donate Now','vw-charity-pro'))); ?></h6></a>
          <?php } if(get_theme_mod('vw_charity_pro_what_we_do_sec_details'.$i,true) != ''){?>
            <p class="record_details"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_what_we_do_sec_details'.$i,__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed felis nunc. Maecenas eget leo suscipit','vw-charity-pro'))); ?></p>
          <?php }?>
          <?php if( get_theme_mod('vw_charity_pro_what_we_do_sec_readmore'.$i, true) != ''){ ?>
            <a class="font-weight-bold read_more" href="<?php echo esc_url(get_theme_mod('vw_charity_pro_what_we_do_sec_readmore_link'.$i)); ?>"><?php echo esc_html(get_theme_mod('vw_charity_pro_what_we_do_sec_readmore'.$i,__('Read More','vw-charity-pro'))); ?><i class="far fa-hand-point-right"></i></a>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="clearfix"></div>
</section>
