<?php
/**
 * Template to show the content of Home Page Sider
 *
 * @package VW_Pet_Shop_Pro
 */

$section_hide = get_theme_mod( 'vw_charity_pro_slider_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}?>
<section id="slider">
  <?php $number=get_theme_mod('vw_charity_pro_slide_number', '3'); ?>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
      <?php
        $slideimage = '';
        $slideno = array();
        $slideimage = array(
          '1' =>  get_template_directory_uri().'/images/slides/slide1.jpg',
          '2' =>  get_template_directory_uri().'/images/slides/slide2.jpg',
          '3' =>  get_template_directory_uri().'/images/slides/slide3.jpg'
        );
        $count =  get_theme_mod('vw_charity_pro_slide_number', '3');
      ?>
      <div class="carousel-inner" role="listbox">
        <?php for ($i=1,$j=1; $i<=$number; $i++,$j++) { 
          if($j>=4){ $j=1; } ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php if ( get_theme_mod('vw_charity_pro_slide_image',true) != "" ) {?>
              <img  src="<?php echo esc_url(get_theme_mod('vw_charity_pro_slide_image'.$i, $slideimage[$j])); ?>" alt="<?php echo esc_attr(get_theme_mod('vw_charity_pro_slide_title'.$i, true)); ?>" title="#slidecaption<?php echo esc_html($i); ?>">
            <?php } ?>
              <div class="carousel-caption d-none d-md-block">
                <div class="slide_outer">
                  <div class="inner_carousel">
                    <?php if( get_theme_mod('vw_charity_pro_slide_heading'.$i, true) != ''){ ?>
                      <h2 class="font-weight-bold"><?php echo esc_html(get_theme_mod('vw_charity_pro_slide_heading'.$i,__('Welcome to Charity Wordpress Theme','vw-charity-pro'))); ?>
                      </h2>
                    <?php } if( get_theme_mod('vw_charity_pro_slide_btntext'.$i, true) != ''){ ?>
                    <div class="font-weight-bold prop_desc">
                      <p><?php echo esc_html(get_theme_mod('vw_charity_pro_slide_text'.$i,__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500 when an unknown printer took a galley of type and scrambled it to make a type specimen book.','vw-charity-pro'))); ?></p>
                    </div>
                    <?php } if( get_theme_mod('vw_charity_pro_slide_btntext'.$i, true) != ''){ ?>
                      <a class="read-more font-weight-bold btn btn-primary theme_button" href="<?php echo esc_url(get_theme_mod('vw_charity_pro_slide_btnurl'.$i)); ?>"><?php echo esc_html(get_theme_mod('vw_charity_pro_slide_btntext'.$i,__('Donate Now','vw-charity-pro'))); ?></a>
                    <?php } ?>

                    <?php if( get_theme_mod('vw_charity_pro_slide_btntext2'.$i, true) != ''){ ?>
                      <a class="read-more font-weight-bold btn btn-primary theme_white_button" href="<?php echo esc_url(get_theme_mod('vw_charity_pro_slide_btnurl2'.$i)); ?>"><?php echo esc_html(get_theme_mod('vw_charity_pro_slide_btntext2'.$i,__('Raise Refund','vw-charity-pro'))); ?></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
          </div>
        <?php } ?>
      </div>
      <?php if( get_theme_mod('vw_charity_pro_slider_numberbullets', true) != ''){ ?>
        <ol class="carousel-indicators">
          <?php for($i=1;$i<=$number;$i++) { ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo (esc_html($i)-1); ?>" class="<?php if($i == 1){echo 'active';}?>"><span class="count"><?php echo (esc_html($i)); ?></span></li>
          <?php } ?>
        </ol>
      <?php }?>
      <?php if( get_theme_mod('vw_charity_pro_slider_arrows', true) != ''){ ?>
        <div class="slider_arrow">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="sr-only"><?php esc_html_e('Previous','vw-charity-pro'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="sr-only"><?php esc_html_e('Next','vw-charity-pro'); ?></span>
          </a>
        </div>
      <?php }?>
    </div>
    <div class="clearfix"></div>
</section>
