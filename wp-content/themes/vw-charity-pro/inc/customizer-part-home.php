<?php

	// Our Goals
    $wp_customize->add_section('vw_charity_pro_goals_sec',array(
		'title'	=> __('Goals','vw-charity-pro'),
		'description'	=> __('Add Our Record content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_goals_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_charity_pro_radio_goals_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-charity-pro'),
	        'section' => 'vw_charity_pro_goals_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-charity-pro'),
	            'Disable' => __('Disable', 'vw-charity-pro')
	        ),
	    )
    );

	$wp_customize->add_setting('vw_charity_pro_goals_number',array(
		'default'	=> 3,
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_goals_number',array(
		'label'	=> __('Number of Goals to show','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_goals_sec',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_charity_pro_goals_number', 3);

	for($i=1; $i<=$count; $i++) {

		$wp_customize->add_setting('vw_charity_pro_goals_sec_icon'.$i,array(
			'default'	=> __('fas fa-calendar-check','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_goals_sec_icon'.$i,array(
			'label'	=> __('Add Icon Class','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_goals_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_charity_pro_goals_icon_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_charity_pro_goals_icon_image'.$i,array(
	        'label' => __('Icon Image(Image Resolution 200*200)If you want to add image first remove the icon','vw-charity-pro'),
	        'section' => 'vw_charity_pro_goals_sec',
	        'settings' => 'vw_charity_pro_goals_icon_image'.$i
		)));

		$wp_customize->add_setting('vw_charity_pro_goals_sec_title'.$i,array(
			'default'	=> __('Title','vw-charity-pro').$i,
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_goals_sec_title'.$i,array(
			'label'	=> __('Donate Now','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_goals_sec',
			'type'	=> 'text'
		));
        
        $wp_customize->add_setting('vw_charity_pro_goals_sec_readmore_link'.$i,array(
			'default'	=> __('#','vw-charity-pro').$i,
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_goals_sec_readmore_link'.$i,array(
			'label'	=> __('Donate Now Link','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_goals_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_charity_pro_goals_sec_details'.$i,array(
			'default'	=> __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed felis nunc. Maecenas eget leo suscipit','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_goals_sec_details'.$i,array(
			'label'	=> __('Service Content','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_goals_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting( 'vw_charity_pro_how_you_goals_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_how_you_goals_color', array(
		'label' => __('Button Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_goals_sec',
		'settings' => 'vw_charity_pro_how_you_goals_color',
	)));

	   $wp_customize->add_setting('vw_charity_pro_goalsheading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_goalsheading_font_family', array(
	    'section'  => 'vw_charity_pro_goals_sec',
	    'label'    => __( 'Button Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
     
     $wp_customize->add_setting( 'vw_charity_pro_how_you_goalstext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_how_you_goalstext_color', array(
		'label' => __('Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_goals_sec',
		'settings' => 'vw_charity_pro_how_you_goalstext_color',
	)));

	   $wp_customize->add_setting('vw_charity_pro_goalstext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_goalstext_font_family', array(
	    'section'  => 'vw_charity_pro_goals_sec',
	    'label'    => __( 'Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	}

	// What We Do
    $wp_customize->add_section('vw_charity_pro_what_we_do_sec',array(
		'title'	=> __('What We Do','vw-charity-pro'),
		'description'	=> __('Add What We Do content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_what_we_do_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_charity_pro_radio_what_we_do_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-charity-pro'),
	        'section' => 'vw_charity_pro_what_we_do_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-charity-pro'),
	            'Disable' => __('Disable', 'vw-charity-pro')
	        ),
	    )
    );

	$wp_customize->add_setting( 'vw_charity_pro_what_we_do_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_what_we_do_bgcolor',array(
		'label' => __('Background Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_what_we_do_sec',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-charity-pro'),
		'settings' => 'vw_charity_pro_what_we_do_bgcolor',
	)));
	$wp_customize->add_setting('vw_charity_pro_what_we_do_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_charity_pro_what_we_do_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1520*237)','vw-charity-pro'),
                   'section' => 'vw_charity_pro_what_we_do_sec',
                   'settings' => 'vw_charity_pro_what_we_do_bgimage',
    )));

    $wp_customize->add_setting('vw_charity_pro_what_we_do_section_title',array(
			'default'	=> __('Title','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_charity_pro_what_we_do_section_title',array(
			'label'	=> __('','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_what_we_do_sec',
			'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_charity_pro_what_we_do_section_subtitle',array(
			'default'	=> __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_charity_pro_what_we_do_section_subtitle',array(
			'label'	=> __('Sub text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_what_we_do_sec',
			'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_charity_pro_what_we_do_number',array(
		'default'	=> 3,
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_what_we_do_number',array(
		'label'	=> __('Number of record to show','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_what_we_do_sec',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_charity_pro_what_we_do_number', 3);

	for($i=1; $i<=$count; $i++) {

		$wp_customize->add_setting('vw_charity_pro_what_we_do_sec_icon'.$i,array(
			'default'	=> __('fas fa-hand-holding-usd','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_what_we_do_sec_icon'.$i,array(
			'label'	=> __('Add Icon Class','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_what_we_do_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_charity_pro_what_we_do_icon_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_charity_pro_what_we_do_icon_image'.$i,array(
	        'label' => __('Icon Image(Image Resolution 200*200)If you want to add image first remove the icon','vw-charity-pro'),
	        'section' => 'vw_charity_pro_what_we_do_sec',
	        'settings' => 'vw_charity_pro_what_we_do_icon_image'.$i
		)));

		$wp_customize->add_setting('vw_charity_pro_what_we_do_sec_title'.$i,array(
			'default'	=> __('Title','vw-charity-pro').$i,
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_what_we_do_sec_title'.$i,array(
			'label'	=> __('Donate Now','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_what_we_do_sec',
			'type'	=> 'text'
		));
        
        $wp_customize->add_setting('vw_charity_pro_what_we_do_sec_btnurl'.$i,array(
			'default'	=> __('#','vw-charity-pro').$i,
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_what_we_do_sec_btnurl'.$i,array(
			'label'	=> __('Donate Now Link','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_what_we_do_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_charity_pro_what_we_do_sec_details'.$i,array(
			'default'	=> __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed felis nunc. Maecenas eget leo suscipit','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_what_we_do_sec_details'.$i,array(
			'label'	=> __('Service Content','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_what_we_do_sec',
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_what_we_do_sec_readmore'.$i,array(
			'default'	=> __('Read More','vw-charity-pro').$i,
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_what_we_do_sec_readmore'.$i,array(
			'label'	=> __('read More Text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_what_we_do_sec',
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_what_we_do_sec_readmore_link'.$i,array(
			'default'	=> __('#','vw-charity-pro').$i,
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_what_we_do_sec_readmore_link'.$i,array(
			'label'	=> __('read More Link','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_what_we_do_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting( 'vw_charity_pro_what_we_doheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_what_we_doheading_color', array(
		'label' => __('Title Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_what_we_do_sec',
		'settings' => 'vw_charity_pro_what_we_doheading_color',
	)));

	   $wp_customize->add_setting('vw_charity_pro_what_we_doheading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_what_we_doheading_font_family', array(
	    'section'  => 'vw_charity_pro_what_we_do_sec',
	    'label'    => __( 'Title Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_what_we_dobutton_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_what_we_dobutton_color', array(
		'label' => __('Button Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_what_we_do_sec',
		'settings' => 'vw_charity_pro_what_we_dobutton_color',
	)));

	   $wp_customize->add_setting('vw_charity_pro_what_we_dobutton_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_what_we_dobutton_font_family', array(
	    'section'  => 'vw_charity_pro_what_we_do_sec',
	    'label'    => __( 'Button Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_what_we_dotext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_what_we_dotext_color', array(
		'label' => __(' Sub Title Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_what_we_do_sec',
		'settings' => 'vw_charity_pro_what_we_dotext_color',
	)));

	   $wp_customize->add_setting('vw_charity_pro_what_we_dotext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	   $wp_customize->add_control(
	    'vw_charity_pro_what_we_dotext_font_family', array(
	    'section'  => 'vw_charity_pro_what_we_do_sec',
	    'label'    => __( 'Sub Title Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	   $wp_customize->add_setting( 'vw_charity_pro_what_we_doread_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_what_we_doread_color', array(
		'label' => __(' Button Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_what_we_do_sec',
		'settings' => 'vw_charity_pro_what_we_doread_color',
	)));

	   $wp_customize->add_setting('vw_charity_pro_what_we_doread_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	   $wp_customize->add_control(
	    'vw_charity_pro_what_we_doread_font_family', array(
	    'section'  => 'vw_charity_pro_what_we_do_sec',
	    'label'    => __( 'Button Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	}
	
	// How Can You Help
	$wp_customize->add_section('vw_charity_pro_how_you_help_sec',array(
		'title'	=> __('How Can You Help','vw-charity-pro'),
		'description'	=> __('Add How Can You Help content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_how_you_help_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_charity_pro_radio_how_you_help_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-charity-pro'),
	        'section' => 'vw_charity_pro_how_you_help_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-charity-pro'),
	            'Disable' => __('Disable', 'vw-charity-pro')
	        ),
	    )
    );
	
	$wp_customize->add_setting('vw_charity_pro_how_you_help_title',array(
			'default'	=> __('How Can You Help','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_how_you_help_title',array(
			'label'	=> __('Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_how_you_help_sec',
			'setting'	=> 'vw_charity_pro_how_you_help_title',
			'type'		=> 'text'
		)
	);

	$wp_customize->add_setting('vw_charity_pro_how_you_help_subtitle',array(
			'default'	=> __('Help For Cause','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_how_you_help_subtitle',array(
			'label'	=> __('Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_how_you_help_sec',
			'setting'	=> 'vw_charity_pro_how_you_help_subtitle',
			'type'		=> 'text'
		)
	);
	
	$wp_customize->add_setting('vw_charity_pro_how_you_help_content',array(
		'default'            => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		'capability'         => 'edit_theme_options',
		'sanitize_callback'  => 'wp_kses_post'
	));
	$wp_customize->add_control(new vw_charity_pro_Editor_Control($wp_customize,'vw_charity_pro_how_you_help_content',array(
		'label'       => 'Add content here',
		'section'     => 'vw_charity_pro_how_you_help_sec',
		'setting'     => 'vw_charity_pro_how_you_help_content'
	)));
	
	$wp_customize->add_setting( 'vw_charity_pro_how_you_help_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_how_you_help_bgcolor',array(
		'label' => __('Background Color', 'vw-charity-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_how_you_help_sec',
		'settings' => 'vw_charity_pro_how_you_help_bgcolor',
	)));
	$wp_customize->add_setting('vw_charity_pro_how_you_help_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_charity_pro_how_you_help_bgimage',
               array(
                   'label' => __('Background image(Image Resolution:1520*237)','vw-charity-pro'),
                   'section' => 'vw_charity_pro_how_you_help_sec',
                   'settings' => 'vw_charity_pro_how_you_help_bgimage',
    )));

    $wp_customize->add_setting('vw_charity_pro_how_you_help_number',array(
		'default'	=> 2,
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_how_you_help_number',array(
		'label'	=> __('Number of boxes to show','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_how_you_help_sec',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_charity_pro_how_you_help_number', 2);

	for($i=1; $i<=$count; $i++) {

		$wp_customize->add_setting('vw_charity_pro_how_you_help_sec_tabtitle'.$i,array(
			'default'	=> __('Title','vw-charity-pro').$i,
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_how_you_help_sec_tabtitle'.$i,array(
			'label'	=> __(' Add Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_how_you_help_sec',
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_how_you_help_sec_tabdesc'.$i,array(
			'default'	=> __('Lorem ipsum dolor sit amet, consectetur massa cursus sed. Vivamus fermentum aliquet ','vw-charity-pro').$i,
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_how_you_help_sec_tabdesc'.$i,array(
			'label'	=> __(' Add Description','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_how_you_help_sec',
			'type'	=> 'text'
		));
	}
	// Video
	$wp_customize->add_setting('vw_charity_pro_how_you_help_video',array(
		'default'	=> 'https://www.youtube.com/embed/IGhTywl-S7Y',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_how_you_help_video',array(
		'label'	=> __('Enter embed video Link ','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_how_you_help_sec',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'vw_charity_pro_how_you_helpheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_how_you_helpheading_color', array(
		'label' => __('Title Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_how_you_help_sec',
		'settings' => 'vw_charity_pro_how_you_helpheading_color',
	)));

	   $wp_customize->add_setting('vw_charity_pro_how_you_helptext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	   $wp_customize->add_control(
	    'vw_charity_pro_how_you_helptext_font_family', array(
	    'section'  => 'vw_charity_pro_how_you_help_sec',
	    'label'    => __( 'Title Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	   $wp_customize->add_setting( 'vw_charity_pro_how_you_helpsub_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_how_you_helpsub_color', array(
		'label' => __(' Sub Title Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_how_you_help_sec',
		'settings' => 'vw_charity_pro_how_you_helpsub_color',
	)));

	   $wp_customize->add_setting('vw_charity_pro_how_you_helpsub_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	   $wp_customize->add_control(
	    'vw_charity_pro_how_you_helpsub_font_family', array(
	    'section'  => 'vw_charity_pro_how_you_help_sec',
	    'label'    => __( 'Sub Title Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	   $wp_customize->add_setting( 'vw_charity_pro_how_you_helphead_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'vw_charity_pro_how_you_helphead_color', array(
		'label' => __(' Sub Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_how_you_help_sec',
		'settings' => 'vw_charity_pro_how_you_helphead_color',
	)));

	// Recent Causes
	$wp_customize->add_section('vw_charity_pro_causes_sec',array(
		'title'	=> __('Recent Causes','vw-charity-pro'),
		'description'	=> __('Add Causes content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_causes_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_charity_pro_radio_causes_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-charity-pro'),
	        'section' => 'vw_charity_pro_causes_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-charity-pro'),
	            'Disable' => __('Disable', 'vw-charity-pro')
	        ),
	    )
    );
	
	$wp_customize->add_setting('vw_charity_pro_causes_title',array(
			'default'	=> __('Recent Causes','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_causes_title',array(
			'label'	=> __('Section Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_causes_sec',
			'setting'	=> 'vw_charity_pro_causes_title',
			'type'		=> 'text'
		)
	);
	$wp_customize->add_setting('vw_charity_pro_causes_subtitle',array(
			'default'	=> __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_charity_pro_causes_subtitle',array(
			'label'	=> __('Sub text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_causes_sec',
			'type'	=> 'text'
	));
	
	$wp_customize->add_setting( 'vw_charity_pro_causes_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_causes_bgcolor',array(
		'label' => __('Background Color', 'vw-charity-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_causes_sec',
		'settings' => 'vw_charity_pro_causes_bgcolor',
	)));
	$wp_customize->add_setting('vw_charity_pro_causes_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_charity_pro_causes_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1520*237)','vw-charity-pro'),
                   'section' => 'vw_charity_pro_causes_sec',
                   'settings' => 'vw_charity_pro_causes_bgimage',
    )));

    $wp_customize->add_setting('vw_charity_pro_causes_currency',array(
      'default' => __('$','vw-charity-pro'),
      'sanitize_callback' => 'sanitize_text_field'
    	)
  	);
	$wp_customize->add_control('vw_charity_pro_causes_currency',array(
	  'label' => __('Currency','vw-charity-pro'),
	  'section' => 'vw_charity_pro_causes_sec',
	  'setting' => 'vw_charity_pro_causes_currency',
	  'type'    => 'text'
	)
	);

  	$wp_customize->add_setting('vw_charity_pro_causes_overlaybtntext',array(
			'default'	=> __('Donate Now','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_causes_overlaybtntext',array(
			'label'	=> __('Overlay Button Text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_causes_sec',
			'setting'	=> 'vw_charity_pro_causes_overlaybtntext',
			'type'		=> 'text'
		)
	);

	$wp_customize->add_setting( 'vw_charity_pro_causesheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_causesheading_color', array(
		'label' => __('Title Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_causes_sec',
		'settings' => 'vw_charity_pro_causesheading_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_causesheading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_causesheading_font_family', array(
	    'section'  => 'vw_charity_pro_causes_sec',
	    'label'    => __( 'Title Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_causestext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_causestext_color', array(
		'label' => __('Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_causes_sec',
		'settings' => 'vw_charity_pro_causestext_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_causestext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_causestext_font_family', array(
	    'section'  => 'vw_charity_pro_causes_sec',
	    'label'    => __( 'Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_causesplugin_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_causesplugin_color', array(
		'label' => __('Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_causes_sec',
		'settings' => 'vw_charity_pro_causesplugin_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_causesplugin_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_causesplugin_font_family', array(
	    'section'  => 'vw_charity_pro_causes_sec',
	    'label'    => __( 'Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_causescontent_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_causescontent_color', array(
		'label' => __('Content Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_causes_sec',
		'settings' => 'vw_charity_pro_causescontent_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_causescontent_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_causescontent_font_family', array(
	    'section'  => 'vw_charity_pro_causes_sec',
	    'label'    => __( 'Content Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//Our Records Start
	$wp_customize->add_section('vw_charity_pro_our_records',array(
		'title'	=> __('Our Records','vw-charity-pro'),
		'description'	=> __('Add our records sections content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	//Our Records enable or disable
	$wp_customize->add_setting('vw_charity_pro_our_records_enable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_charity_pro_our_records_enable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_charity_pro_our_records',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));
    //Our Records background color picker setting
	$wp_customize->add_setting( 'vw_charity_pro_our_records_bg_color', array(
		'default' => __('','vw-charity-pro'),
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_our_records_bg_color', array(
		'label' => 'Background Color',
		'section' => 'vw_charity_pro_our_records',
		'settings' => 'vw_charity_pro_our_records_bg_color',
	)));
	//Our Records background image picker setting
	$wp_customize->add_setting('vw_charity_pro_our_records_bg_image',array(
		'default'	=> get_template_directory_uri().'/images/record-bg.png',
		'sanitize_callback'	=> 'esc_url_raw',
	));		
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_charity_pro_our_records_bg_image',array(
            'label' => __('Background imageBackground Image(Either add background color or background image, if you add both background color will be top most priority)','vw-charity-pro'),
            'section' => 'vw_charity_pro_our_records',
            'settings' => 'vw_charity_pro_our_records_bg_image'
	)));
	//Our Records add color picker control
	$wp_customize->add_setting( 'vw_charity_pro_records_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_records_text_color', array(
		'label' => 'Text Color',
		'section' => 'vw_charity_pro_our_records',
		'settings' => 'vw_charity_pro_records_text_color',

	)));
	//Our Records font family picker setting
	$wp_customize->add_setting('vw_charity_pro_records_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_charity_pro_records_text_font_family', array(
	    'section'  => 'vw_charity_pro_our_records',
	    'label'    => __( 'Text Font Family','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting('vw_charity_pro_our_records_number',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_our_records_number',array(
		'label'	=> __('Number of record to show','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_our_records',
		'type'		=> 'number'
	));
	$record_count =  get_theme_mod('vw_charity_pro_our_records_number', 4);
	for($i=1;$i<=$record_count;$i++) {

		$wp_customize->add_setting('vw_charity_pro_our_records_icon'.$i,array(
			'default'	=> __('far fa-heart','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_charity_pro_our_records_icon'.$i,array(
			'label'	=> __('Add Icon Class(If you want to add image first remove the icon class)','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_our_records',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_charity_pro_our_records_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_charity_pro_our_records_image'.$i,array(
	            'label' => __('Counter Image(Image Resolution:500*237)','vw-charity-pro'),
	            'section' => 'vw_charity_pro_our_records',
	            'settings' => 'vw_charity_pro_our_records_image'.$i
		)));
		$wp_customize->add_setting('vw_charity_pro_number_title1'.$i,array(
			'default'=> __('300','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));		
		$wp_customize->add_control('vw_charity_pro_number_title1'.$i,array(
			'label'	=> __('Number','vw-charity-pro'),
			'section'=> 'vw_charity_pro_our_records',
			'type'=> 'text'
		));
		$wp_customize->add_setting('vw_charity_pro_circle_content1'.$i,array(
			'default'=> __('Title','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));		
		$wp_customize->add_control('vw_charity_pro_circle_content1'.$i,array(
			'label'	=> __('Counter Title','vw-charity-pro'),
			'section'=> 'vw_charity_pro_our_records',
			'type'	=> 'text'
		));
	}

	// Donators
	$wp_customize->add_section('vw_charity_pro_donators_sec',array(
		'title'	=> __('Latest Donators','vw-charity-pro'),
		'description'	=> __('Add Donators content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_donators_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_charity_pro_radio_donators_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-charity-pro'),
	        'section' => 'vw_charity_pro_donators_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-charity-pro'),
	            'Disable' => __('Disable', 'vw-charity-pro')
	        ),
	    )
    );
	
	$wp_customize->add_setting('vw_charity_pro_donators_title',array(
			'default'	=> __('Latest Donators','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_donators_title',array(
			'label'	=> __('Section Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_donators_sec',
			'setting'	=> 'vw_charity_pro_donators_title',
			'type'		=> 'text'
		)
	);
	$wp_customize->add_setting('vw_charity_pro_donators_subtitle',array(
			'default'	=> __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_charity_pro_donators_subtitle',array(
			'label'	=> __('Sub text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_donators_sec',
			'type'	=> 'text'
	));
	$wp_customize->add_setting( 'vw_charity_pro_donators_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_donators_bgcolor',array(
		'label' => __('Background Color', 'vw-charity-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_donators_sec',
		'settings' => 'vw_charity_pro_donators_bgcolor',
	)));
	$wp_customize->add_setting('vw_charity_pro_donators_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_charity_pro_donators_bgimage',
               array(
                   'label' => __('Background ImageBackground image(Image Resolution:1520*237)','vw-charity-pro'),
                   'section' => 'vw_charity_pro_donators_sec',
                   'settings' => 'vw_charity_pro_donators_bgimage',
    )));

    $wp_customize->add_setting( 'vw_charity_pro_donatorsheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_donatorsheading_color', array(
		'label' => __('Title Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_donators_sec',
		'settings' => 'vw_charity_pro_donatorsheading_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_donatorsheading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_donatorsheading_font_family', array(
	    'section'  => 'vw_charity_pro_donators_sec',
	    'label'    => __( 'Title Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_donatorstext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_donatorstext_color', array(
		'label' => __('Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_donators_sec',
		'settings' => 'vw_charity_pro_donatorstext_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_donatorstext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_donatorstext_font_family', array(
	    'section'  => 'vw_charity_pro_donators_sec',
	    'label'    => __( 'Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_donators_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_donators_heading_color', array(
		'label' => __('Name Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_donators_sec',
		'settings' => 'vw_charity_pro_donators_heading_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_donators_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_donators_text_font_family', array(
	    'section'  => 'vw_charity_pro_donators_sec',
	    'label'    => __( 'Name Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_donators_para_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_donators_para_color', array(
		'label' => __('Designation Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_donators_sec',
		'settings' => 'vw_charity_pro_donators_para_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_donators_Des_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_donators_Des_font_family', array(
	    'section'  => 'vw_charity_pro_donators_sec',
	    'label'    => __( 'Designation Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

    // Upcoming Events
	$wp_customize->add_section('vw_charity_pro_events_sec',array(
		'title'	=> __('Upcoming Events','vw-charity-pro'),
		'description'	=> __('Add Events  content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_events_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_charity_pro_radio_events_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-charity-pro'),
	        'section' => 'vw_charity_pro_events_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-charity-pro'),
	            'Disable' => __('Disable', 'vw-charity-pro')
	        ),
	    )
    );
	
	$wp_customize->add_setting('vw_charity_pro_events_title',array(
			'default'	=> __('Upcoming Events','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_events_title',array(
			'label'	=> __('Section Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_events_sec',
			'setting'	=> 'vw_charity_pro_events_title',
			'type'		=> 'text'
		)
	);
	$wp_customize->add_setting('vw_charity_pro_events_subtitle',array(
			'default'	=> __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_charity_pro_events_subtitle',array(
			'label'	=> __('Sub text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_events_sec',
			'type'	=> 'text'
	));
	
	$wp_customize->add_setting( 'vw_charity_pro_events_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_events_bgcolor',array(
		'label' => __('Background Color', 'vw-charity-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_events_bgcolor',
	)));
	$wp_customize->add_setting('vw_charity_pro_events_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_charity_pro_events_bgimage',
               array(
                   'label' => __('Background ImageBackground image(Image Resolution:1520*237)','vw-charity-pro'),
                   'section' => 'vw_charity_pro_events_sec',
                   'settings' => 'vw_charity_pro_events_bgimage',
    )));

  	$wp_customize->add_setting('vw_charity_pro_events_btntext',array(
			'default'	=> __('Enroll Now','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_events_btntext',array(
			'label'	=> __('Button Text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_events_sec',
			'setting'	=> 'vw_charity_pro_events_btntext',
			'type'		=> 'text'
		)
	);
	$wp_customize->add_setting('vw_charity_pro_events_viewall',array(
			'default'	=> __('View All Events','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_events_viewall',array(
			'label'	=> __('View All Text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_events_sec',
			'setting'	=> 'vw_charity_pro_events_viewall',
			'type'		=> 'text'
		)
	);

	$wp_customize->add_setting('vw_charity_pro_events_viewall_url',array(
			'default'	=> __('#','vw-charity-pro'),
			'sanitize_callback'	=> 'esc_url_raw'
		)
	);
	$wp_customize->add_control('vw_charity_pro_events_viewall_url',array(
			'label'	=> __('View All URL','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_events_sec',
			'setting'	=> 'vw_charity_pro_events_viewall_url',
			'type'		=> 'url'
		)
	);

	$wp_customize->add_setting( 'vw_charity_pro_eventsheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_eventsheading_color', array(
		'label' => __('Title Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_eventsheading_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_eventsheading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_eventsheading_font_family', array(
	    'section'  => 'vw_charity_pro_events_sec',
	    'label'    => __( 'Title Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_eventstext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_eventstext_color', array(
		'label' => __('Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_eventstext_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_eventstext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_eventstext_font_family', array(
	    'section'  => 'vw_charity_pro_events_sec',
	    'label'    => __( 'Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_events_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_events_heading_color', array(
		'label' => __('Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_events_heading_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_events_heading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_events_heading_font_family', array(
	    'section'  => 'vw_charity_pro_events_sec',
	    'label'    => __( 'Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_events_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_events_content_color', array(
		'label' => __('Content Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_events_content_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_events_content_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_events_content_font_family', array(
	    'section'  => 'vw_charity_pro_events_sec',
	    'label'    => __( 'Content Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_events_enroll_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_events_enroll_color', array(
		'label' => __('Enroll Now Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_events_enroll_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_events_enroll_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_events_enroll_font_family', array(
	    'section'  => 'vw_charity_pro_events_sec',
	    'label'    => __( 'Enroll Now Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_events_enroll_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_events_enroll_bg_color', array(
		'label' => __(' Background-color Enroll Now Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_events_enroll_bg_color',
	)));

	$wp_customize->add_setting( 'vw_charity_pro_events_view_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_events_view_color', array(
		'label' => __('View All Events Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_events_view_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_events_view_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_events_view_font_family', array(
	    'section'  => 'vw_charity_pro_events_sec',
	    'label'    => __( 'View All  Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_events_view_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_events_view_bg_color', array(
		'label' => __('View All Events Background-Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_events_sec',
		'settings' => 'vw_charity_pro_events_view_bg_color',
	)));

	// Testimonials
	$wp_customize->add_section('vw_charity_pro_testimonials_sec',array(
		'title'	=> __('What Our Donators Say','vw-charity-pro'),
		'description'	=> __('Add Testimonials content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_testimonials_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_charity_pro_radio_testimonials_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-charity-pro'),
	        'section' => 'vw_charity_pro_testimonials_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-charity-pro'),
	            'Disable' => __('Disable', 'vw-charity-pro')
	        ),
	    )
    );
	
	$wp_customize->add_setting('vw_charity_pro_testimonials_title',array(
			'default'	=> __('Recent Causes','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_testimonials_title',array(
			'label'	=> __('Section Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_testimonials_sec',
			'setting'	=> 'vw_charity_pro_testimonials_title',
			'type'		=> 'text'
		)
	);
	$wp_customize->add_setting('vw_charity_pro_testimonials_subtitle',array(
			'default'	=> __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_charity_pro_testimonials_subtitle',array(
			'label'	=> __('Sub text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_testimonials_sec',
			'type'	=> 'text'
	));
	
	$wp_customize->add_setting( 'vw_charity_pro_testimonials_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_testimonials_bgcolor',array(
		'label' => __('Background Color', 'vw-charity-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_testimonials_sec',
		'settings' => 'vw_charity_pro_testimonials_bgcolor',
	)));
	$wp_customize->add_setting('vw_charity_pro_testimonials_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_charity_pro_testimonials_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1520*237)','vw-charity-pro'),
                   'section' => 'vw_charity_pro_testimonials_sec',
                   'settings' => 'vw_charity_pro_testimonials_bgimage',
    )));

    $wp_customize->add_setting( 'vw_charity_pro_testimonialsheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_testimonialsheading_color', array(
		'label' => __('Title Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_testimonials_sec',
		'settings' => 'vw_charity_pro_testimonialsheading_color',
	)));

    $wp_customize->add_setting('vw_charity_pro_testimonials_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_testimonials_font_family', array(
	    'section'  => 'vw_charity_pro_testimonials_sec',
	    'label'    => __( 'Title Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_testimonialstext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_testimonialstext_color', array(
		'label' => __('Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_testimonials_sec',
		'settings' => 'vw_charity_pro_testimonialstext_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_testimonialstext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_testimonialstext_font_family', array(
	    'section'  => 'vw_charity_pro_testimonials_sec',
	    'label'    => __( 'Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
    
    $wp_customize->add_setting( 'vw_charity_pro_testimonials_block_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_testimonials_block_color', array(
		'label' => __('Quotes Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_testimonials_sec',
		'settings' => 'vw_charity_pro_testimonials_block_color',
	)));

	$wp_customize->add_setting( 'vw_charity_pro_testimonials_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_testimonials_content_color', array(
		'label' => __('Content Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_testimonials_sec',
		'settings' => 'vw_charity_pro_testimonials_content_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_testimonialscontent_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_testimonialscontent_font_family', array(
	    'section'  => 'vw_charity_pro_testimonials_sec',
	    'label'    => __( 'Content Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_testimonials_name_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_testimonials_name_color', array(
		'label' => __('Name Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_testimonials_sec',
		'settings' => 'vw_charity_pro_testimonials_name_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_testimonialsname_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_testimonialsname_font_family', array(
	    'section'  => 'vw_charity_pro_testimonials_sec',
	    'label'    => __( 'Name Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

    // Latest News
	$wp_customize->add_section('vw_charity_pro_blog_post_sec',array(
		'title'	=> __('Latest News','vw-charity-pro'),
		'description'	=> __('Add Latest News content here.','vw-charity-pro'),
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_blog_post_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_charity_pro_radio_blog_post_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-charity-pro'),
	        'section' => 'vw_charity_pro_blog_post_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-charity-pro'),
	            'Disable' => __('Disable', 'vw-charity-pro')
	        ),
	    )
    );
	
	$wp_customize->add_setting('vw_charity_pro_blog_post_title',array(
			'default'	=> __('Latest News','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_blog_post_title',array(
			'label'	=> __('Section Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_blog_post_sec',
			'setting'	=> 'vw_charity_pro_blog_post_title',
			'type'		=> 'text'
		)
	);
	$wp_customize->add_setting('vw_charity_pro_blog_post_subtitle',array(
			'default'	=> __('Read More','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_charity_pro_blog_post_subtitle',array(
			'label'	=> __('Read More text','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_blog_post_sec',
			'type'	=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('vw_charity_pro_latestblogpost_setting',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_latestblogpost_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select category from here','vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_post_sec',
	));
	$wp_customize->add_setting('vw_charity_pro_blog_post_btntitle',array(
			'default'	=> __('Latest News','vw-charity-pro'),
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_charity_pro_blog_post_title',array(
			'label'	=> __('Section Title','vw-charity-pro'),
			'section'	=> 'vw_charity_pro_blog_post_sec',
			'setting'	=> 'vw_charity_pro_blog_post_title',
			'type'		=> 'text'
		)
	);
	$wp_customize->add_setting( 'vw_charity_pro_blog_post_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_blog_post_bgcolor',array(
		'label' => __('Background Color', 'vw-charity-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_post_sec',
		'settings' => 'vw_charity_pro_blog_post_bgcolor',
	)));
	$wp_customize->add_setting('vw_charity_pro_blog_post_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_charity_pro_blog_post_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1520*237)','vw-charity-pro'),
                   'section' => 'vw_charity_pro_blog_post_sec',
                   'settings' => 'vw_charity_pro_blog_post_bgimage',
    )));

    $wp_customize->add_setting( 'vw_charity_pro_blog_postheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_blog_postheading_color', array(
		'label' => __('Title Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_post_sec',
		'settings' => 'vw_charity_pro_blog_postheading_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_blog_post_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_blog_post_font_family', array(
	    'section'  => 'vw_charity_pro_blog_post_sec',
	    'label'    => __( 'Title Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_blog_posttext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_blog_posttext_color', array(
		'label' => __('Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_post_sec',
		'settings' => 'vw_charity_pro_blog_posttext_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_blog_posttext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_blog_posttext_font_family', array(
	    'section'  => 'vw_charity_pro_blog_post_sec',
	    'label'    => __( 'Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_blog_postheads_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_blog_postheads_color', array(
		'label' => __('Heading Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_post_sec',
		'settings' => 'vw_charity_pro_blog_postheads_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_blog_postheads_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_blog_postheads_font_family', array(
	    'section'  => 'vw_charity_pro_blog_post_sec',
	    'label'    => __( 'Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_blog_contentheads_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_blog_contentheads_color', array(
		'label' => __('Content Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_post_sec',
		'settings' => 'vw_charity_pro_blog_contentheads_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_blog_postcontent_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_blog_postcontent_font_family', array(
	    'section'  => 'vw_charity_pro_blog_post_sec',
	    'label'    => __( 'Content Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_blog_donate_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_blog_donate_color', array(
		'label' => __('Donate Now Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_post_sec',
		'settings' => 'vw_charity_pro_blog_donate_color',
	)));

	$wp_customize->add_setting('vw_charity_pro_blog_donate_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_blog_donate_font_family', array(
	    'section'  => 'vw_charity_pro_blog_post_sec',
	    'label'    => __( 'Donate Now Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_blog_donate_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_blog_donate_bg_color', array(
		'label' => __('Donate Now Background-Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_post_sec',
		'settings' => 'vw_charity_pro_blog_donate_bg_color',
	)));

    // Newsletter
	$wp_customize->add_section('vw_charity_pro_newsletter_section',array(
		'title'	=> __('Newsletter','vw-charity-pro'),
		'description'	=> __('Add Newsletter details here','vw-charity-pro'),
		'priority'	=> null,
		'panel' => 'vw_charity_pro_panel_id',
	));
	$wp_customize->add_setting('vw_charity_pro_radio_newsletter_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_charity_pro_radio_newsletter_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-charity-pro'),
        'section' => 'vw_charity_pro_newsletter_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-charity-pro'),
            'Disable' => __('Disable', 'vw-charity-pro')
	)));	
	$wp_customize->add_setting( 'vw_charity_pro_newsletterbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_newsletterbg_color',array(
		'label' => __('Background Color(Either add background color or background image, if you add both background color will be top most priority)', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_newsletter_section',
		'settings' => 'vw_charity_pro_newsletterbg_color',
	)));
	$wp_customize->add_setting('vw_charity_pro_newsletterbg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_charity_pro_newsletterbg_image',array(
        'label' => __('Background image(Image Resolution:1520*237)','vw-charity-pro'),
        'section' => 'vw_charity_pro_newsletter_section',
        'settings' => 'vw_charity_pro_newsletterbg_image'
	)));
	$wp_customize->add_setting('vw_charity_pro_newsletter_title',array(
		'default'	=> __('Newsletter sign up','vw-charity-pro'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_newsletter_title',array(
		'label'	=> __('Section Title','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_newsletter_section',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_charity_pro_newsletter_subtitle',array(
		'default'	=> __('Ut lobortis sapien ligula. Sed dapibus quam in sapien porttitor dignissim. Vivamus finibus pretium libero eget fermentum. Ut dictum congue orci a varius','vw-charity-pro'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_newsletter_subtitle',array(
		'label'	=> __('Content','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_newsletter_section',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_charity_pro_newsletter_shortcode',array(
		'default'	=> __('Add Contact Form 7 shortcode here','vw-charity-pro'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_newsletter_shortcode',array(
		'label'	=> __('','vw-charity-pro'),
		'section'	=> 'vw_charity_pro_newsletter_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting( 'vw_charity_pro_newsletterheading_section', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_newsletterheading_section', array(
		'label' => __('Section Title Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_newsletter_section',
		'settings' => 'vw_charity_pro_newsletterheading_section',
	)));

	$wp_customize->add_setting('vw_charity_pro_newsletter_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_newsletter_font_family', array(
	    'section'  => 'vw_charity_pro_newsletter_section',
	    'label'    => __( 'Title Heading Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_newslettertext_section', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_newslettertext_section', array(
		'label' => __('Section Text Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_newsletter_section',
		'settings' => 'vw_charity_pro_newslettertext_section',
	)));

	$wp_customize->add_setting('vw_charity_pro_newslettertext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_newslettertext_font_family', array(
	    'section'  => 'vw_charity_pro_newsletter_section',
	    'label'    => __( 'Text Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_newsletterbutton_section', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_newsletterbutton_section', array(
		'label' => __('Email Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_newsletter_section',
		'settings' => 'vw_charity_pro_newsletterbutton_section',
	)));

	$wp_customize->add_setting('vw_charity_pro_newsletterbutton_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_newsletterbutton_font_family', array(
	    'section'  => 'vw_charity_pro_newsletter_section',
	    'label'    => __( 'Email Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_charity_pro_newsletternow_section', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
		'vw_charity_pro_newsletternow_section', array(
		'label' => __('Subscribe Now Color', 'vw-charity-pro'),
		'section' => 'vw_charity_pro_newsletter_section',
		'settings' => 'vw_charity_pro_newsletternow_section',
	)));

	$wp_customize->add_setting('vw_charity_pro_newsletternow_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_charity_pro_newsletternow_font_family', array(
	    'section'  => 'vw_charity_pro_newsletter_section',
	    'label'    => __( 'Subscribe Now Fonts','vw-charity-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	/*Blog page category*/
	$wp_customize->add_section('vw_charity_pro_blog_category',array(
		'title'	=> __('Blog Page','vw-charity-pro'),
		'description'	=> __('select the category you wish to be get displayed on blog page .','vw-charity-pro'),
		'priority'	=> null,
		'panel' => 'vw_charity_pro_panel_id',
	));
	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('vw_charity_pro_category_setting',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_charity_pro_category_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Blog page (select category to show selected post)','vw-charity-pro'),
		'section' => 'vw_charity_pro_blog_category',
	));	
?>