<?php
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function vw_charity_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'VW Charity Pro Posttype', 'vw-charity-pro' ),
			'slug'             => 'vw-charity-pro-posttype',
			'source'           => get_template_directory() . '/inc/plugins/vw-charity-pro-posttype',
			'required'         => true,
			'force_activation' => true,
		),
		array(
			'name'             => __( 'VW Title Banner Image', 'vw-charity-pro' ),
			'slug'             => 'vw-title-banner-image',
			'source'           => get_template_directory() . '/inc/plugins/vw-title-banner-image.zip',
			'required'         => false,
			'force_activation' => true,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'vw_charity_pro_register_recommended_plugins' );