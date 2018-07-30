<?php
	$wp_customize->add_section('vw_charity_pro_slider_section',array(
		'title'	=> __('Slider Settings','vw-charity-pro'),
		'description'	=> __('Add slider images here.','vw-charity-pro'),
		'priority'	=> null,
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_slider_enabledisable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_charity_pro_slider_enabledisable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_charity_pro_slider_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));	
	$wp_customize->add_setting('vw_charity_pro_slide_number',array(
		'default'	=> 3,
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_slide_number',array(
		'label'	=> __('Number of slides to show','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_slider_section',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_charity_pro_slide_number', 3);
		
	for($i=1, $j=1; $i<=$count; $i++, $j++) {
		if($j>=4){ $j=1; }
		$wp_customize->add_setting('vw_charity_pro_slide_image'.$i,array(
			'default'	=> get_template_directory_uri().'/images/slides/slide'.$j.'.jpg',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_charity_pro_slide_image'.$i,
	        array(
	            'label' => __('Slider Image ','vw-charity-pro').$i.__(' (1600x622)','vw-charity-pro'),
	            'section' => 'vw_charity_pro_slider_section',
	            'settings' => 'vw_charity_pro_slide_image'.$i
		)));
		$wp_customize->add_setting('vw_charity_pro_slide_heading'.$i,array(
			'default'	=> __('Welcome to Charity Wordpress Theme','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_slide_heading'.$i,array(
			'label' => __('Slide Heading Title','vw-charity-pro').$i,
			'section' => 'vw_charity_pro_slider_section',
			'setting'	=> 'vw_charity_pro_slide_heading'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_slide_text'.$i,array(
			'default'	=> __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500 when an unknown printer took a galley of type and scrambled it to make a type specimen book.','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_charity_pro_slide_text'.$i,array(
			'label' => __('Slide Text','vw-charity-pro').$i,
			'section' => 'vw_charity_pro_slider_section',
			'setting'	=> 'vw_charity_pro_slide_text'.$i,
			'type'	=> 'textarea'
		));
		$wp_customize->add_setting('vw_charity_pro_slide_btntext'.$i,array(
			'default'	=> __('Donate Now','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_charity_pro_slide_btntext'.$i,array(
			'label' => __('Slider Button Text','vw-charity-pro').$i,
			'section' => 'vw_charity_pro_slider_section',
			'setting'	=> 'vw_charity_pro_slide_btntext'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_slide_btnurl'.$i,array(
			'default'	=> __('#','vw-charity-pro'),
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('vw_charity_pro_slide_btnurl'.$i,array(
			'label' => __('Button URL','vw-charity-pro').$i,
			'section' => 'vw_charity_pro_slider_section',
			'setting'	=> 'vw_charity_pro_slide_btnurl'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_slide_btntext2'.$i,array(
			'default'	=> __('Raise Refund','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('vw_charity_pro_slide_btntext2'.$i,array(
			'label' => __('Slider Button Text','vw-charity-pro').$i,
			'section' => 'vw_charity_pro_slider_section',
			'setting'	=> 'vw_charity_pro_slide_btntext2'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_slide_btnurl2'.$i,array(
			'default'	=> __('#','vw-charity-pro'),
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control('vw_charity_pro_slide_btnurl2'.$i,array(
			'label' => __('Button URL','vw-charity-pro').$i,
			'section' => 'vw_charity_pro_slider_section',
			'setting'	=> 'vw_charity_pro_slide_btnurl2'.$i,
			'type'	=> 'text'
		));
	}
	// This is Slider Heading Color picker setting
	$wp_customize->add_setting( 'vw_charity_pro_sliderHeading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_sliderHeading_color', array(
		'label' => __('Slider Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_slider_section',
		'settings' => 'vw_charity_pro_sliderHeading_color',
	)));
	//This is Slider Heading FontFamily picker setting
	$wp_customize->add_setting('vw_charity_pro_sliderHeading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_sliderHeading_font_family', array(
	    'section'  => 'vw_charity_pro_slider_section',
	    'label'    => __( 'Slider Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	// This is Slider Text Color picker setting
	$wp_customize->add_setting( 'vw_charity_pro_slidertext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_slidertext_color', array(
		'label' => __('Slider Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_slider_section',
		'settings' => 'vw_charity_pro_slidertext_color',
	)));
	//This is Slider Text FontFamily picker setting
	$wp_customize->add_setting('vw_charity_pro_slidertext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_slidertext_font_family', array(
	    'section'  => 'vw_charity_pro_slider_section',
	    'label'    => __( 'Slider Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	// Button color settings
	$wp_customize->add_setting( 'vw_charity_pro_slide_buttoncolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_slide_buttoncolor', array(
		'label' => 'Button Text Color',
		'section' => 'vw_charity_pro_slider_section',
		'settings' => 'vw_charity_pro_slide_buttoncolor',
	)));
	$wp_customize->add_setting( 'vw_charity_pro_slide_buttonbgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_slide_buttonbgcolor', array(
		'label' => 'Button Background Color',
		'section' => 'vw_charity_pro_slider_section',
		'settings' => 'vw_charity_pro_slide_buttonbgcolor',
	)));
	$wp_customize->add_setting('vw_charity_pro_button_fontfamily',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_charity_pro_button_fontfamily', array(
	    'section'  => 'vw_charity_pro_slider_section',
	    'label'    => __( 'Button Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
 	));
 	$wp_customize->add_setting('vw_charity_pro_slider_numberbullets',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_charity_pro_slider_numberbullets',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Number Bullets','vw-charity-pro'),
        'section' => 'vw_charity_pro_slider_section',
    ));
    $wp_customize->add_setting('vw_charity_pro_slider_arrows',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_charity_pro_slider_arrows',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Next & Previous Arrows','vw-charity-pro'),
        'section' => 'vw_charity_pro_slider_section',
    ));
?>