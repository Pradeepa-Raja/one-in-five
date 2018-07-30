<?php
/**
 * Template to show the content of our record section 
 *
 * @package VW_Pet_Shop_Pro
 */

$about_section = get_theme_mod( 'vw_charity_pro_radio_goals_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('vw_charity_pro_goals_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_charity_pro_goals_bgcolor','')).';';
}elseif( get_theme_mod('vw_charity_pro_goals_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_charity_pro_goals_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="goals" style="<?php echo esc_attr($about_backg); ?>" class="p-0">
    <div class="container p-0">
        <div class="goal_outer">
          <div class="owl-carousel">
          <?php $count =  get_theme_mod('vw_charity_pro_goals_number', 3); 
          for($i=1; $i<=$count; $i++) { ?>
          <div class="<?php if ($i==1) echo 'active' ?>">
            <div class="text-center goal_box">
              <?php if(get_theme_mod('vw_charity_pro_goals_sec_icon'.$i,true) != ''){?>
                <div class="icon_goal"><i class="<?php echo esc_html(get_theme_mod('vw_charity_pro_goals_sec_icon'.$i)); ?> fa-3x"></i></div>
              <?php } else {?>
                <img class="" src="<?php echo esc_url(get_theme_mod('vw_charity_pro_goals_icon_image'.$i)); ?>" alt=""/>
              <?php } if(get_theme_mod('vw_charity_pro_goals_sec_title'.$i,true) != ''){?>
              <a href="<?php echo esc_url(get_theme_mod('vw_charity_pro_goals_sec_readmore_link'.$i)); ?>">
                <h6 class="goal_head text-uppercase font-weight-bold"><?php echo esc_html_e(get_theme_mod('vw_charity_pro_goals_sec_title'.$i,__('fundraising','vw-charity-pro'))); ?></h6></a>
              <?php } if(get_theme_mod('vw_charity_pro_goals_sec_details'.$i,true) != ''){?>
                <p class="record_details"><?php echo esc_html(get_theme_mod('vw_charity_pro_goals_sec_details'.$i,__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed felis nunc. Maecenas eget leo suscipit','vw-charity-pro'))); ?></p>
              <?php }?>
            </div>
          </div>
          <?php } ?>
        </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>