<?php
/**
 * Template to show the content of Social Icons
 *
 * @package VW_Pet_Shop_Pro
 */
 ?>
<div class="socialbox">
<?php if( get_theme_mod('vw_charity_pro_headertwitter',true) != '' ){ ?>
    <a class="twitter" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headertwitter','https://twitter.com/' ) ); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
  <?php }
  if( get_theme_mod('vw_charity_pro_headerinstagram',true) != '' ){ ?>
    <a class="insta" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headerinstagram','https://www.instagram.com') ); ?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
  <?php } 
  if( get_theme_mod('vw_charity_pro_headerfacebook',true) != '' ){ ?>
    <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headerfacebook','https://www.facebook.com/' ) ); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
  <?php } 
  if( get_theme_mod('vw_charity_pro_headeryoutube',true) != '' ){ ?>
    <a class="youtube" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headeryoutube','https://www.youtube.com' ) ); ?>" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
  <?php }
  if( get_theme_mod('vw_charity_pro_headerpinterest',true) != '' ){ ?>
    <a class="pintrest" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headerpinterest','https://pinterest.com/' ) ); ?>" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
  <?php }
  if( get_theme_mod('vw_charity_pro_headerlinkedin',true) != '' ){ ?>
    <a class="linkedin" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headerlinkedin','https://www.linkedin.com' ) ); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
  <?php }
  if( get_theme_mod('vw_charity_pro_headertumblric') != '' ){ ?>
    <a class="tumbler" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headertumblric' ) ); ?>" target="_blank"><i class="fab fa-tumblr" aria-hidden="true"></i></a>
  <?php }
  if( get_theme_mod('vw_charity_pro_headergoogleplus',true) != '' ){ ?>
    <a class="gplus" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headergoogleplus','https://plus.google.com/' ) ); ?>" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
  <?php }
  if( get_theme_mod('vw_charity_pro_headerflickr')!= '' ){ ?>
    <a class="flicker" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headerflickr' ) ); ?>" target="_blank"><i class="fab fa-flickr" aria-hidden="true"></i></a>
  <?php }
  if( get_theme_mod('vw_charity_pro_headervk') != '' ){ ?>
    <a class="vk" href="<?php echo esc_url( get_theme_mod( 'vw_charity_pro_headervk' ) ); ?>" target="_blank"><i class="fab fa-vk" aria-hidden="true"></i></a>
  <?php } ?>
</div>