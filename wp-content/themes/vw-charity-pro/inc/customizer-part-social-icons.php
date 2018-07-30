<?php
    /* Footer Sections */
    $wp_customize->add_section('vw_charity_pro_social_icons',array(
        'title' => __('Social Icons','vw-charity-pro'),
        'description'   => __('Add social Icons details Here','vw-charity-pro'),
        'panel' => 'vw_charity_pro_panel_id',
    ));

    $wp_customize->add_setting('vw_charity_pro_headertwitter',array(
        'default'   => 'https://twitter.com/',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headertwitter',array(
        'label' => __('Add twitter link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headertwitter',
        'type'      => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headerpinterest',array(
        'default'   => 'https://www.pinterest.com/',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headerpinterest',array(
        'label' => __('Add pinterest link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headerpinterest',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headerfacebook',array(
        'default'   => 'https://www.facebook.com/',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headerfacebook',array(
        'label' => __('Add facebook link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headerfacebook',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headeryoutube',array(
        'default'   => 'https://www.youtube.com',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headeryoutube',array(
        'label' => __('Add Youtube link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headeryoutube',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headerinstagram',array(
        'default'   => 'https://www.instagram.com',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headerinstagram',array(
        'label' => __('Add Instagram link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headerinstagram',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headerlinkedin',array(
        'default'   => 'https://www.linkedin.com',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headerlinkedin',array(
        'label' => __('Add Linkedin link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headerlinkedin',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headertumblric',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headertumblric',array(
        'label' => __('Add Tumblr link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headertumblric',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headergoogleplus',array(
        'default'   => 'https://plus.google.com/',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headergoogleplus',array(
        'label' => __('Add GooglePlus link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headergoogleplus',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headerflickr',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headerflickr',array(
        'label' => __('Add Flickr link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headerflickr',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_charity_pro_headervk',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_charity_pro_headervk',array(
        'label' => __('Add VK link','vw-charity-pro'),
        'section'   => 'vw_charity_pro_social_icons',
        'setting'   => 'vw_charity_pro_headervk',
        'type'  => 'text'
    ));
?>