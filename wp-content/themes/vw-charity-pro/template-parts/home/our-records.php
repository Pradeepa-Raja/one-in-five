<?php 
  $vw_charity_pro_records_section = get_theme_mod( 'vw_charity_pro_our_records_enable' );
  if ( 'Disable' == $vw_charity_pro_records_section ) {
  return;
  }
  if( get_theme_mod('vw_charity_pro_our_records_bg_color','') ) { 
      $about_backg = 'background-color:'.esc_attr( get_theme_mod('vw_charity_pro_our_records_bg_color','') ).';';
    }elseif( get_theme_mod('vw_charity_pro_our_records_bg_image','') ){
      $about_backg = 'background-image:url(\''.esc_url( get_theme_mod('vw_charity_pro_our_records_bg_image') ).'\')';
    }else{
      $about_backg = 'background-image:url(\''.get_template_directory_uri().'/images/record-bg.png'.'\')'; 
    }
?>
<section id="our_records" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class=" counter-box row">
      <?php
        $number=get_theme_mod('vw_charity_pro_our_records_number', 4);
        for ($i=1; $i<=$number; $i++) {
          if ( get_theme_mod('vw_charity_pro_our_records_number',true) != "" ) { ?>
          <div class="counter_outer col-md-3 col-sm-6 col-6">
            <div class="row counter_inner m-0">
              <div class="counter-icon col-md-3">          
                <?php if(get_theme_mod('vw_charity_pro_our_records_icon'.$i,true) != ''){?>
                  <i class="<?php echo esc_html(get_theme_mod('vw_charity_pro_our_records_icon'.$i,'far fa-heart')); ?> fa-3x"></i>
                <?php } else {?>
                  <img class="" src="<?php echo esc_url(get_theme_mod('vw_charity_pro_our_records_image'.$i)); ?>" alt="Image"/>
                <?php } ?>
              </div>
              <div class="radius col-md-9">
                <h4 class="count"><?php echo esc_html(get_theme_mod('vw_charity_pro_number_title1'.$i,__('4512', 'vw-charity-pro'))); ?></h4>
                <p><?php echo esc_html(get_theme_mod('vw_charity_pro_circle_content1'.$i,__('Title','vw-charity-pro'))); ?></p>
              </div>
            </div>
          </div>
        <?php
          }
        }
      ?>
    </div>
  </div>   
  <div class="clearfix"></div>
</section>