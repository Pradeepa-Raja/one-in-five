<?php
/**
 * Template part for displaying posts
 *
 * @package VW_Pet_Shop_Pro
 */
?>
<div id="header">
  <div class="container">
    <div class="menubar m-0 mt-2 mt-md-0 mt-lg-2 mb-2">
      <div class="row bg-media">
        <div class="col-lg-3 col-md-3 col-9">
          <div class="logo">
            <?php if( has_custom_logo() ){ vw_charity_pro_the_custom_logo();
            }else{ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
              <?php $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo esc_html($description); ?></p>
            <?php endif; } ?>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 col-3 right_menu">
          <div class="innermenubox ">
            <div class="toggle-nav mobile-menu">
              <span onclick="openNav()"><i class="fas fa-bars"></i></span>
            </div>
            <div id="mySidenav" class="nav sidenav">
              <nav id="site-navigation" class="main-navigation">
                <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="closeNav()"><i class="fas fa-times"></i></a>
                <?php 
                  wp_nav_menu( array( 
                    'theme_location' => 'primary',
                    'container_class' => 'menu clearfix' ,
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) ); 
                ?>
              </nav><!-- #site-navigation -->
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3">
          <?php if( get_theme_mod('vw_charity_pro_header_btntext', true) != ''){ ?>
            <a class="font-weight-bold btn btn-primary theme_button mt-2" href="<?php echo esc_url(get_theme_mod('vw_charity_pro_header_btnurl')); ?>"><?php echo esc_html(get_theme_mod('vw_charity_pro_header_btntext',__('Donate Now','vw-charity-pro'))); ?></a>
          <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
