<?php
/**
 * Template to show the content of Pet Services
 *
 * @package VW_Pet_Shop_Pro
 */ 
$about_section = get_theme_mod( 'vw_charity_pro_radio_how_you_help_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('vw_charity_pro_how_you_help_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_how_you_help_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_how_you_help_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_how_you_help_bgimage')).'\')';
}else{
  $about_backg = 'background-image:url(\''.esc_url( get_template_directory_uri() ).'/images/how-can-you-help.png'.'\')';
}
?>
<section id="how_you_help" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <?php if(get_theme_mod('vw_charity_pro_how_you_help_title',true) != ''){?>
      <h2 class="head_white"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_how_you_help_title', __('How Can You Help','vw-charity-pro'))); ?></h2>
    <?php }?>
    <div class="row">
      <div class="col-lg-6 text-md-center text-lg-left">
        <div class="two-col-title">
          <?php if(get_theme_mod('vw_charity_pro_how_you_help_subtitle',true) != ''){?>
            <h4 class="font-weight-bold text-uppercase"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_how_you_help_subtitle', __('How Can You Help','vw-charity-pro'))); ?></h4>
          <?php } if(get_theme_mod('vw_charity_pro_how_you_help_content',true) != ''){?>
            <div class="about-editor">
              <?php echo get_theme_mod('vw_charity_pro_how_you_help_content',__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','vw-charity-pro')); ?>
            </div>
          <?php }?>
        </div>
        <ol class="box-content mt-2">
          <?php  
          $count =  get_theme_mod('vw_charity_pro_how_you_help_number', 2);
          for($i=1; $i<=$count; $i++) {?>
            <?php if(get_theme_mod('vw_charity_pro_how_you_help_sec_tabtitle'.$i,true) != '' || get_theme_mod('vw_charity_pro_how_you_help_sec_tabdesc'.$i,true) != ''){?>
              <li>
                <div class="li_content">
                  <p class="text-uppercase font-weight-bold"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_how_you_help_sec_tabdesc'.$i, __('Media','vw-charity-pro'))); ?></p>
                  <p class="mt-1"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_how_you_help_sec_tabtitle'.$i, __('Lorem ipsum dolor sit amet, consectetur massa cursus sed. Vivamus fermentum aliquet ','vw-charity-pro'))); ?></p>
                </div>
              </li>
            <?php } ?>
          <?php }?>
        </ol>
      </div>
      <div class="col-lg-6">
        <div class="how_you_help mt-4">
          <?php if( get_theme_mod('vw_charity_pro_how_you_help_video', true) != ''){ ?>
            <div class="video">
              <embed height="300px" width="100%" src="<?php echo esc_attr(get_theme_mod('vw_charity_pro_how_you_help_video','https://www.youtube.com/embed/IGhTywl-S7Y')); ?>" allowfullscreen></embed>
            </div>
          <?php } ?>
        </div>
      </div>
    <div class="clearfix"></div>
  </div>
</section>
