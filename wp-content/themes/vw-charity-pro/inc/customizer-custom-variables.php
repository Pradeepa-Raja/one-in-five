<?php
  //General Color Pallete
  $wp_customize->add_section('vw_charity_pro_color_pallette',array(
      'title' => __('Typography settings','vw-charity-pro'),
      'description'=> __('Typography settings','vw-charity-pro'),
      'panel' => 'vw_charity_pro_panel_id',
  ));
  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting('vw_charity_pro_body_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_charity_pro_body_font_family', array(
      'section'  => 'vw_charity_pro_color_pallette',
      'label'    => __( 'Body Font family','vw-charity-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_charity_pro_body_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_charity_pro_body_font_size',array(
      'label' => __('font size in px','vw-charity-pro'),
      'section' => 'vw_charity_pro_color_pallette',
      'setting' => 'vw_charity_pro_body_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_charity_pro_body_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_body_color', array(
    'label' => __('Body color', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_body_color',
  )));
  $wp_customize->add_setting('vw_charity_pro_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_charity_pro_h1_font_family', array(
      'section'  => 'vw_charity_pro_color_pallette',
      'label'    => __( 'H1','vw-charity-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_charity_pro_h1_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_charity_pro_h1_font_size',array(
      'label' => __('H1 font size in px','vw-charity-pro'),
      'section' => 'vw_charity_pro_color_pallette',
      'setting' => 'vw_charity_pro_h1_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_charity_pro_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_h1_color', array(
    'label' => __('H1 color', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_h1_color',
  )));
  $wp_customize->add_setting('vw_charity_pro_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_charity_pro_h2_font_family', array(
      'section'  => 'vw_charity_pro_color_pallette',
      'label'    => __( 'H2','vw-charity-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_charity_pro_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_charity_pro_h2_font_size',array(
      'label' => __('H2 font size in px','vw-charity-pro'),
      'section' => 'vw_charity_pro_color_pallette',
      'setting' => 'vw_charity_pro_h2_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_charity_pro_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_h2_color', array(
    'label' => __('H2 color', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_h2_color',
  )));

  $wp_customize->add_setting('vw_charity_pro_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_charity_pro_h3_font_family', array(
      'section'  => 'vw_charity_pro_color_pallette',
      'label'    => __( 'H3','vw-charity-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_charity_pro_h3_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_charity_pro_h3_font_size',array(
      'label' => __('H3 font size in px','vw-charity-pro'),
      'section' => 'vw_charity_pro_color_pallette',
      'setting' => 'vw_charity_pro_h3_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_charity_pro_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_h3_color', array(
    'label' => __('H3 color', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_h3_color',
  )));
  $wp_customize->add_setting('vw_charity_pro_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_charity_pro_h4_font_family', array(
      'section'  => 'vw_charity_pro_color_pallette',
      'label'    => __( 'H4','vw-charity-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_charity_pro_h4_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_charity_pro_h4_font_size',array(
      'label' => __('H4 font size in px','vw-charity-pro'),
      'section' => 'vw_charity_pro_color_pallette',
      'setting' => 'vw_charity_pro_h4_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_charity_pro_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_h4_color', array(
    'label' => __('H4 color', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_h4_color',
  )));
  $wp_customize->add_setting('vw_charity_pro_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_charity_pro_h5_font_family', array(
      'section'  => 'vw_charity_pro_color_pallette',
      'label'    => __( 'H5','vw-charity-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_charity_pro_h5_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_charity_pro_h5_font_size',array(
      'label' => __('H5 font size in px','vw-charity-pro'),
      'section' => 'vw_charity_pro_color_pallette',
      'setting' => 'vw_charity_pro_h5_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_charity_pro_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_h5_color', array(
    'label' => __('H5 color', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_h5_color',
  )));
  $wp_customize->add_setting('vw_charity_pro_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_charity_pro_h6_font_family', array(
      'section'  => 'vw_charity_pro_color_pallette',
      'label'    => __( 'H6','vw-charity-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_charity_pro_h6_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_charity_pro_h6_font_size',array(
      'label' => __('H6 font size in px','vw-charity-pro'),
      'section' => 'vw_charity_pro_color_pallette',
      'setting' => 'vw_charity_pro_h6_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_charity_pro_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_h6_color', array(
    'label' => __('H6 color', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_h6_color',
  )));
  //paragarph font family
  $wp_customize->add_setting('vw_charity_pro_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_charity_pro_paragarpah_font_family', array(
      'section'  => 'vw_charity_pro_color_pallette',
      'label'    => __( 'Paragraph','vw-charity-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_charity_pro_para_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_charity_pro_para_font_size',array(
      'label' => __('Para font size in px','vw-charity-pro'),
      'section' => 'vw_charity_pro_color_pallette',
      'setting' => 'vw_charity_pro_para_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_charity_pro_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_para_color', array(
    'label' => __('Para color', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_para_color',
  )));
  // $wp_customize->add_setting( 'vw_charity_pro_hi_color', array(
  //   'default' => '#1e1d1c',
  //   'sanitize_callback' => 'sanitize_hex_color'
  // ));
  // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_hi_color', array(
  //   'label' => __('Highlight color one(It will change it globally)', 'vw-charity-pro'),
  //   'section' => 'vw_charity_pro_color_pallette',
  //   'settings' => 'vw_charity_pro_hi_color',
  // )));
  $wp_customize->add_setting( 'vw_charity_pro_hi_color_second', array(
    'default' => '#f75e61',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_charity_pro_hi_color_second', array(
    'label' => __('Highlight color two (It will change it globally)', 'vw-charity-pro'),
    'section' => 'vw_charity_pro_color_pallette',
    'settings' => 'vw_charity_pro_hi_color_second',
  )));
?>
