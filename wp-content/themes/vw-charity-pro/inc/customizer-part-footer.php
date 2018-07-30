<?php
    /* Footer Sections */
    $wp_customize->add_section('vw_charity_pro_footer_section_first',array(
        'title' => __('Footer','vw-charity-pro'),
        'description'   => __('Edit footer sections','vw-charity-pro'),
        'panel' => 'vw_charity_pro_panel_id',
    ));

    // This is Footer Heading Color picker setting
    $wp_customize->add_setting( 'vw_charity_pro_footerheading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_footerheading_color', array(
        'label' => __('Footer Heading Color', 'vw-charity-pro'),
        'section' => 'vw_charity_pro_footer_section_first',
        'settings' => 'vw_charity_pro_footerheading_color',
    )));
    //This is Footer Heading FontFamily picker setting
    $wp_customize->add_setting('vw_charity_pro_footerheading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_charity_pro_footerheading_font_family', array(
        'section'  => 'vw_charity_pro_footer_section_first',
        'label'    => __( 'Footer Heading Fonts','vw-charity-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_charity_pro_footercontent_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_footercontent_color', array(
        'label' => __('Footer Content Color', 'vw-charity-pro'),
        'section' => 'vw_charity_pro_footer_section_first',
        'settings' => 'vw_charity_pro_footercontent_color',
    )));
    //This is Footer Heading FontFamily picker setting
    $wp_customize->add_setting('vw_charity_pro_footercontent_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_charity_pro_footercontent_font_family', array(
        'section'  => 'vw_charity_pro_footer_section_first',
        'label'    => __( 'Footer Content Fonts','vw-charity-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('vw_charity_pro_radiolast_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_charity_pro_radiolast_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_charity_pro_footer_section_first',
        'choices' => array(
            'Enable' => __('Enable', 'vw-charity-pro'),
            'Disable' => __('Disable', 'vw-charity-pro')
        ),
    ));
    // add color picker setting
    $wp_customize->add_setting( 'vw_charity_pro_section_footer_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_section_footer_bgcolor', array(
        'label' => __('Background Color(Either add background color or background image, if you add both background color will be top most priority)', 'vw-charity-pro'),
        'section' => 'vw_charity_pro_footer_section_first',
        'settings' => 'vw_charity_pro_section_footer_bgcolor',
    )));
    $wp_customize->add_setting('vw_charity_pro_footer_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,
            'vw_charity_pro_footer_bgimage',array(
                'label' => __('Background image','vw-charity-pro'),
                'section' => 'vw_charity_pro_footer_section_first',
                'settings' => 'vw_charity_pro_footer_bgimage'
            )));
    //Contact Page section
    $wp_customize->add_section('vw_charity_pro_contact_page_section',array(
        'title' => __('Contact','vw-charity-pro'),
        'description'   => __('Add contact page settings here.','vw-charity-pro'),
        'priority'  => null,
        'panel' => 'vw_charity_pro_panel_id',
    ));
    $wp_customize->add_setting('vw_charity_pro_address_longitude',array(
        'default'   => __('79.088155','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_charity_pro_address_longitude',array(
        'label' => __('Longitude','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_address_latitude',array(
        'default'   => __('21.145800','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_charity_pro_address_latitude',array(
        'label' => __('Latitude','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_contactpage_section_title',array(
        'default'   => __('Get In Touch','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_charity_pro_contactpage_section_title',array(
        'label' => __('Get In Touch Title','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_contactpage_section_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_contactpage_section_subtitle',array(
        'default'   => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fringilla, est et mattis tempus, mauris neque commodo sapien, id consequat diam est a nibh. Donec consequat scelerisque augue mollis aliquam. Ut nec porttitor sapien, nec rutrum ligula.','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_charity_pro_contactpage_section_subtitle',array(
        'label' => __('Sub Title','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_contactpage_section_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_contactpage_section_formtitle',array(
        'default'   => __('Contact Form','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_charity_pro_contactpage_section_formtitle',array(
        'label' => __('Contact Form Title','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_contactpage_section_formtitle',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_contactpage_section_formsubtitle',array(
        'default'   => __('Aliquam ac tempus lacus, in tempus nisl. Cras in auctor arcu. Phasellus orci erat, vestibulum a ante vitae, mollis feugiat nibh. Cras mattis dui eu eleifend dapibus. Donec eleifend bibendum tellus, et tincidunt nisl sagittis in. Nullam molestie lacus vitae dui rhoncus porta. ','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_charity_pro_contactpage_section_formsubtitle',array(
        'label' => __('Sub Title','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_contactpage_section_formsubtitle',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('vw_charity_pro_contactpage_email_title',array(
        'default'   => __('Email','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_charity_pro_contactpage_email_title',array(
        'label' => __('Email Title','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_contactpage_email_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_contactpage_email',array(
        'default'   => __('abc@gmail.com','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_charity_pro_contactpage_email',array(
        'label' => __('Email ','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_contactpage_email',
        'type'  => 'text'
    ));
    
    $wp_customize->add_setting('vw_charity_pro_address_title',array(
        'default'   => __('Address','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_charity_pro_address_title',array(
        'label' => __('Address Title','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_address_title',
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('vw_charity_pro_address',array(
        'default'   => __('OceanView Hall Fl 44000!','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_charity_pro_address',array(
        'label' => __('Address ','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_address',
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('vw_charity_pro_contactpage_phone_title',array(
        'default'   => __('Phone','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_charity_pro_contactpage_phone_title',array(
        'label' => __('Phone Title','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_contactpage_phone_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_contactpage_phone',array(
        'default'   => __('895-895-8956','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_charity_pro_contactpage_phone',array(
        'label' => __('Phone ','vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'setting'   => 'vw_charity_pro_contactpage_phone',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'vw_charity_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_contact_page_heading_color', array(
        'label' => __('Contact Heading Color', 'vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'settings' => 'vw_charity_pro_contact_page_heading_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_charity_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_charity_pro_contact_page_heading_font_family', array(
        'section'  => 'vw_charity_pro_contact_page_section',
        'label'    => __( 'Contact Heading Fonts','vw-charity-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_charity_pro_contact_page_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_contact_page_content_color', array(
        'label' => __('Contact Content Color', 'vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'settings' => 'vw_charity_pro_contact_page_content_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_charity_pro_contact_page_contact_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_charity_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_charity_pro_contact_page_contact_font_family', array(
        'section'  => 'vw_charity_pro_contact_page_section',
        'label'    => __( 'Contact Content Fonts','vw-charity-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_charity_pro_contact_page_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_contact_page_icon_color', array(
        'label' => __('Icon Color', 'vw-charity-pro'),
        'section' => 'vw_charity_pro_contact_page_section',
        'settings' => 'vw_charity_pro_contact_page_icon_color',
    )));
    $wp_customize->add_section('vw_charity_pro_footer_section',array(
        'title' => __('Footer Text','vw-charity-pro'),
        'description'   => __('Add some text for footer like copyright etc.','vw-charity-pro'),
        'priority'  => null,
        'panel' => 'vw_charity_pro_panel_id',
    ));
    $wp_customize->add_setting('vw_charity_pro_footer_copy',array(
        'default'   => __('VW Charity Wordpress Theme 2018 | All Rights Reserved.','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_charity_pro_footer_copy',array(
        'label' => __('Copyright Text','vw-charity-pro'),
        'section'   => 'vw_charity_pro_footer_section',
        'type'      => 'textarea'
    ));
    //Shortcode Section
    $wp_customize->add_section('vw_charity_pro_shortcode_section',array(
        'title' => __('Shortcode Settings','vw-charity-pro'),
        'description'   => __('Add Shortcode here.','vw-charity-pro'),
        'priority'  => null,
        'panel' => 'vw_charity_pro_panel_id',
    ));
   $wp_customize->add_setting('vw_charity_pro_shortcode',array(
        'default'   => __('[list-causes], [donator], [event], [testimonials]','vw-charity-pro'),
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('vw_charity_pro_shortcode',array(
        'label' => __('Shortcode that are availaible in theme are[list-causes], [donator], [event], [testimonials].','vw-charity-pro'),
        'section' => 'vw_charity_pro_shortcode_section',
        'setting'   => 'vw_charity_pro_shortcode',
        'type'=>'textarea'
    ));
?>