<?php
	$wp_customize->add_section('vw_charity_pro_topbar_header',array(
		'title'	=> __('Top Bar','vw-charity-pro'),
		'description'	=> __('Top Bar Settings','vw-charity-pro'),
		'priority'	=> null,
		'panel' => 'vw_charity_pro_panel_id',
	));

	$wp_customize->add_setting('vw_charity_pro_topbar_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_charity_pro_topbar_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_charity_pro_topbar_header',
        'choices' => array(
            'Enable' => __('Enable', 'vw-charity-pro'),
            'Disable' => __('Disable', 'vw-charity-pro')
        ),
    ));
	// Contact details
	$wp_customize->add_setting('vw_charity_pro_header_address',array(
		'default'	=> 'Orlando, FL 32830, united States',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_charity_pro_header_address',array(
		'label'	=> __('Add Address Here','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_topbar_header',
		'setting'	=> 'vw_charity_pro_header_address',
		'type'	=> 'text'
	));
	
	//Cell Number
	$wp_customize->add_setting('vw_charity_pro_header_callnumber',array(
		'default'	=> '+109688895785',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_charity_pro_header_callnumber',array(
		'label'	=> __('Add Cell Number here','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_topbar_header',
		'setting'	=> 'vw_charity_pro_header_callnumber',
		'type'	=> 'text'
	));
	// Emails
	$wp_customize->add_setting('vw_charity_pro_header_email_address',array(
		'default'	=> 'abcdefxyz@gmail.com',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_charity_pro_header_email_address',array(
		'label'	=> __('Add Email address Here','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_topbar_header',
		'setting'	=> 'vw_charity_pro_header_email_address',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_charity_pro_header_btntext',array(
			'default'	=> __('Donate Now','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_charity_pro_header_btntext',array(
			'label' => __('Header Button Text','vw-charity-pro'),
			'section' => 'vw_charity_pro_topbar_header',
			'setting'	=> 'vw_charity_pro_header_btntext',
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_header_btnurl',array(
			'default'	=> __('#','vw-charity-pro'),
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('vw_charity_pro_header_btnurl',array(
			'label' => __('Button URL','vw-charity-pro'),
			'section' => 'vw_charity_pro_topbar_header',
			'setting'	=> 'vw_charity_pro_header_btnurl',
			'type'	=> 'text'
		));
	
	$wp_customize->add_setting( 'vw_charity_pro_header_contact_details_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_header_contact_details_color', array(
		'label' => __('Top Bar Contact Details Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_topbar_header',
		'settings' => 'vw_charity_pro_header_contact_details_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_header_contact_details_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_header_contact_details_font_family', array(
	    'section'  => 'vw_charity_pro_topbar_header',
	    'label'    => __('Top Bar contact details Font family','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_charity_pro_header_contact_detailsicon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_header_contact_detailsicon_color', array(
		'label' => __('Top Bar contact icon Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_topbar_header',
		'settings' => 'vw_charity_pro_header_contact_detailsicon_color',
	)));

	$wp_customize->add_setting( 'vw_charity_pro_topbar_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_topbar_bgcolor', array(
		'label' => __('Top Bar Background Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_topbar_header',
		'settings' => 'vw_charity_pro_topbar_bgcolor',
	)));

	$wp_customize->add_setting('vw_charity_pro_topbar_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_charity_pro_topbar_bgimage',
            array(
                'label' => __('Top Bar Background image (1520px x 50px)','vw-charity-pro'),
                'section' => 'vw_charity_pro_topbar_header',
                'settings' => 'vw_charity_pro_topbar_bgimage'
            )
        )
    );

	// Header Section

	$wp_customize->add_section('vw_charity_pro_header_section',array(
		'title'	=> __('Header','vw-charity-pro'),
		'description'	=> __('Header Settings','vw-charity-pro'),
		'priority'	=> null,
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting( 'vw_charity_pro_header_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_header_title_color', array(
		'label' => __('Header Main title Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_header_title_color',
	)));
	$wp_customize->add_setting('vw_charity_pro_header_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_header_title_font_family', array(
	    'section'  => 'vw_charity_pro_header_section',
	    'label'    => __('Header Main title Font family','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_charity_pro_headerhomebg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_headerhomebg_color', array(
		'label' => __('Header Background Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_headerhomebg_color',
	)));
	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'vw_charity_pro_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_headermenu_color', array(
		'label' => __('Menu Item Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_headermenu_color',
	)));
	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('vw_charity_pro_headermenu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_charity_pro_headermenu_font_family', array(
	    'section'  => 'vw_charity_pro_header_section',
	    'label'    => __( 'Menu Item Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_charity_pro_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_header_menuhovercolor',
	)));
	
	// This is Nav Dropdown Background Color picker setting
	$wp_customize->add_setting( 'vw_charity_pro_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_dropdownbg_color',
	)));

	$wp_customize->add_setting( 'vw_charity_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_dropdownbg_itemcolor',
	)));

	$wp_customize->add_setting( 'vw_charity_pro_dropdownbg_item_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_dropdownbg_item_hovercolor', array(
		'label' => __('Menu DropDown Item Hover Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_dropdownbg_item_hovercolor',
	)));
	
	//In Responsive
	$wp_customize->add_setting( 'vw_charity_pro_dropdownbg_responsivecolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_dropdownbg_responsivecolor', array(
		'label' => __('Responsive Menu Background Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_dropdownbg_responsivecolor',
	)));
	$wp_customize->add_setting( 'vw_charity_pro_headermenu_responsive_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_headermenu_responsive_item_color', array(
		'label' => __('Responsive Menu item DropDown Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_header_section',
		'settings' => 'vw_charity_pro_headermenu_responsive_item_color',
	)));
?>