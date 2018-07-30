<?php
/**
 * Template part for displaying Copyright
 *
 * @package VW_Pet_Shop_Pro
 */
if ( get_theme_mod( 'vw_charity_pro_section_color5','' ) ) {
	$about_backg = 'background-color:' . esc_attr( get_theme_mod( 'vw_charity_pro_section_color5','' ) ) . ';';
} elseif ( get_theme_mod( 'vw_charity_pro_section_image5','' ) ) {
	$about_backg = 'background-image:url(\'' . esc_url( get_theme_mod( 'vw_charity_pro_section_image5' ) ) . '\')';
} else {
	$about_backg = '';
}
?>
<div class="copyright">
	<div class="container">
		<div class="row main_sociobox">
			<div class="col-sm-12 text-center">
				<p><?php echo esc_html( get_theme_mod( 'vw_charity_pro_footer_copy',__( '&copy; 2018 VW Charity Wordpress Theme ','vw-charity-pro' ) ) ); ?><span class="credit-link text-right">&#032;<?php echo esc_html( vw_charity_pro_credit_link() ); ?></span></p>
				<a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
			</div>
		</div>
	</div>
</div>