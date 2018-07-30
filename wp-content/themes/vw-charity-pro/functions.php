<?php
/**
 * vw-charity-pro functions and definitions
 *
 * @package vw-charity-pro
 */


if ( ! function_exists( 'vw_charity_pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function vw_charity_pro_setup() {
	$GLOBALS['content_width'] = apply_filters( 'vw_charity_pro_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 640;
	load_theme_textdomain( 'vw-charity-pro', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-header' );

	// Woocommerce Extension
	add_theme_support('wc-product-gallery-zoom'); 
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_image_size('vw-charity-pro-homepage-thumb',240,145,true);

	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'vw-charity-pro' ),
		'left'   => __( 'Left Menu', 'vw-charity-pro' ),
		'right'   => __( 'Right Menu', 'vw-charity-pro' ),
		'footer'   => __( 'Footer Menu', 'vw-charity-pro' )
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_editor_style();
}
endif;
add_action( 'after_setup_theme', 'vw_charity_pro_setup' );
/* Theme Widgets Setup */
function vw_charity_pro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-charity-pro' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-charity-pro' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-charity-pro' ),
		'description'   => __( 'Appears on page sidebar', 'vw-charity-pro' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'vw-charity-pro' ),
		'description'   => __( 'Appears on footer', 'vw-charity-pro' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'vw-charity-pro' ),
		'description'   => __( 'Appears on footer', 'vw-charity-pro' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'vw-charity-pro' ),
		'description'   => __( 'Appears on footer', 'vw-charity-pro' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'vw-charity-pro' ),
		'description'   => __( 'Appears on footer', 'vw-charity-pro' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_charity_pro_widgets_init' );
/* Theme Font URL */
function vw_charity_pro_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins';
	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}
/* Theme enqueue scripts */
function vw_charity_pro_scripts() {
	wp_enqueue_style( 'vw-charity-pro-font', vw_charity_pro_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'vw-charity-pro-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'vw-charity-pro-style', 'rtl', 'replace' );
	wp_enqueue_style( 'vw-charity-pro-editor-style', get_template_directory_uri().'/editor-style.css' );
	//General Button Color Pallete option
	    $vw_charity_pro_body_font_family = get_theme_mod('vw_charity_pro_body_font_family');
	    $vw_charity_pro_body_font_size = get_theme_mod('vw_charity_pro_body_font_size');
	    $vw_charity_pro_body_color = get_theme_mod('vw_charity_pro_body_color');
	    $vw_charity_pro_h1_font_family = get_theme_mod('vw_charity_pro_h1_font_family');
	    $vw_charity_pro_h1_font_size = get_theme_mod('vw_charity_pro_h1_font_size');
	    $vw_charity_pro_h1_color = get_theme_mod('vw_charity_pro_h1_color');
	    $vw_charity_pro_h2_font_family = get_theme_mod('vw_charity_pro_h2_font_family');
	    $vw_charity_pro_h2_font_size = get_theme_mod('vw_charity_pro_h2_font_size');
	    $vw_charity_pro_h2_color = get_theme_mod('vw_charity_pro_h2_color');
	    $vw_charity_pro_h3_font_family = get_theme_mod('vw_charity_pro_h3_font_family');
	    $vw_charity_pro_h3_font_size = get_theme_mod('vw_charity_pro_h3_font_size');
	    $vw_charity_pro_h3_color = get_theme_mod('vw_charity_pro_h3_color');
	    $vw_charity_pro_h4_font_family = get_theme_mod('vw_charity_pro_h4_font_family');
	    $vw_charity_pro_h4_font_size = get_theme_mod('vw_charity_pro_h4_font_size');
	    $vw_charity_pro_h4_color = get_theme_mod('vw_charity_pro_h4_color');
	    $vw_charity_pro_h5_font_family = get_theme_mod('vw_charity_pro_h5_font_family');
	    $vw_charity_pro_h5_font_size = get_theme_mod('vw_charity_pro_h5_font_size');
	    $vw_charity_pro_h5_color = get_theme_mod('vw_charity_pro_h5_color');
	    $vw_charity_pro_h6_font_family = get_theme_mod('vw_charity_pro_h6_font_family');
	    $vw_charity_pro_h6_font_size = get_theme_mod('vw_charity_pro_h6_font_size');
	    $vw_charity_pro_h6_color = get_theme_mod('vw_charity_pro_h6_color');
	    $vw_charity_pro_paragarpah_font_family = get_theme_mod('vw_charity_pro_paragarpah_font_family');
	    $vw_charity_pro_para_font_size = get_theme_mod('vw_charity_pro_para_font_size');
	    $vw_charity_pro_para_color = get_theme_mod('vw_charity_pro_para_color');
	    $vw_charity_pro_hi_color = get_theme_mod('vw_charity_pro_hi_color');
	    $vw_charity_pro_hi_color_second = get_theme_mod('vw_charity_pro_hi_color_second');
	// Top bar / Header
	    $vw_charity_pro_topbaricon_color = get_theme_mod('vw_charity_pro_topbaricon_color');
	    $vw_charity_pro_header_title_color = get_theme_mod('vw_charity_pro_header_title_color');
	    $vw_charity_pro_header_title_font_family = get_theme_mod('vw_charity_pro_header_title_font_family');
	    $vw_charity_pro_header_contact_details_color = get_theme_mod('vw_charity_pro_header_contact_details_color');
	    $vw_charity_pro_header_contact_details_font_family = get_theme_mod('vw_charity_pro_header_contact_details_font_family');
	    $vw_charity_pro_header_contact_detailsicon_color = get_theme_mod('vw_charity_pro_header_contact_detailsicon_color');
	    $vw_charity_pro_headerhomebg_color = get_theme_mod('vw_charity_pro_headerhomebg_color');
	    $vw_charity_pro_headermenu_color = get_theme_mod('vw_charity_pro_headermenu_color');
	    $vw_charity_pro_headermenu_font_family = get_theme_mod('vw_charity_pro_headermenu_font_family');
	    $vw_charity_pro_header_menuhovercolor = get_theme_mod('vw_charity_pro_header_menuhovercolor');
	    $vw_charity_pro_dropdownbg_itemcolor = get_theme_mod('vw_charity_pro_dropdownbg_itemcolor');
	    $vw_charity_pro_dropdownbg_item_hovercolor = get_theme_mod('vw_charity_pro_dropdownbg_item_hovercolor');
	    $vw_charity_pro_dropdownbg_color = get_theme_mod('vw_charity_pro_dropdownbg_color');
	    $vw_charity_pro_dropdownbg_hovercolor = get_theme_mod('vw_charity_pro_dropdownbg_hovercolor');
	    $vw_charity_pro_dropdownbg_responsivecolor = get_theme_mod('vw_charity_pro_dropdownbg_responsivecolor');
	    $vw_charity_pro_headermenu_responsive_item_color = get_theme_mod('vw_charity_pro_headermenu_responsive_item_color');
	    $vw_charity_pro_menubarbg_color = get_theme_mod('vw_charity_pro_menubarbg_color');
    // Sider
	    $vw_charity_pro_sliderHeading_color = get_theme_mod('vw_charity_pro_sliderHeading_color');
	    $vw_charity_pro_sliderHeading_font_family = get_theme_mod('vw_charity_pro_sliderHeading_font_family');
	    $vw_charity_pro_slidertext_color = get_theme_mod('vw_charity_pro_slidertext_color');
	    $vw_charity_pro_slidertext_font_family = get_theme_mod('vw_charity_pro_slidertext_font_family');
	    $vw_charity_pro_slide_buttoncolor = get_theme_mod('vw_charity_pro_slide_buttoncolor');
	    $vw_charity_pro_slide_buttonbgcolor = get_theme_mod('vw_charity_pro_slide_buttonbgcolor');
	    $vw_charity_pro_button_fontfamily = get_theme_mod('vw_charity_pro_button_fontfamily');

	//Footer
	   $vw_charity_pro_footerheading_color = get_theme_mod('vw_charity_pro_footerheading_color');
	   $vw_charity_pro_footerheading_font_family = get_theme_mod('vw_charity_pro_footerheading_font_family');
	   $vw_charity_pro_footercontent_color = get_theme_mod('vw_charity_pro_footercontent_color');
	   $vw_charity_pro_footercontent_font_family = get_theme_mod('vw_charity_pro_footercontent_font_family');
	   $vw_charity_pro_footerborder_color = get_theme_mod('vw_charity_pro_footerborder_color');
    //Contact
	   $vw_charity_pro_contact_page_heading_color = get_theme_mod('vw_charity_pro_contact_page_heading_color');
	   $vw_charity_pro_contact_page_heading_font_family = get_theme_mod('vw_charity_pro_contact_page_heading_font_family');
	   $vw_charity_pro_contact_page_content_color = get_theme_mod('vw_charity_pro_contact_page_content_color');
	   $vw_charity_pro_contact_page_contact_font_family = get_theme_mod('vw_charity_pro_contact_page_contact_font_family');
	   $vw_charity_pro_contact_page_icon_color = get_theme_mod('vw_charity_pro_contact_page_icon_color');
	   //Recent Causes
       $vw_charity_pro_causesheading_color = get_theme_mod('vw_charity_pro_causesheading_color');
       $vw_charity_pro_causesheading_font_family = get_theme_mod('vw_charity_pro_causesheading_font_family');
       $vw_charity_pro_causestext_color = get_theme_mod('vw_charity_pro_causestext_color');
       $vw_charity_pro_causestext_font_family = get_theme_mod('vw_charity_pro_causestext_font_family');
       $vw_charity_pro_causesplugin_color = get_theme_mod('vw_charity_pro_causesplugin_color');
       $vw_charity_pro_causesplugin_font_family = get_theme_mod('vw_charity_pro_causesplugin_font_family');
       $vw_charity_pro_causescontent_color = get_theme_mod('vw_charity_pro_causescontent_color');
       $vw_charity_pro_causescontent_font_family = get_theme_mod('vw_charity_pro_causescontent_font_family');
       //Donators
       $vw_charity_pro_donatorsheading_color = get_theme_mod('vw_charity_pro_donatorsheading_color');
       $vw_charity_pro_donatorsheading_font_family = get_theme_mod('vw_charity_pro_donatorsheading_font_family');
       $vw_charity_pro_donatorstext_color = get_theme_mod('vw_charity_pro_donatorstext_color');
       $vw_charity_pro_donatorstext_font_family = get_theme_mod('vw_charity_pro_donatorstext_font_family');
       $vw_charity_pro_donators_heading_color = get_theme_mod('vw_charity_pro_donators_heading_color');
       $vw_charity_pro_donators_text_font_family = get_theme_mod('vw_charity_pro_donators_text_font_family');
       $vw_charity_pro_donators_para_color = get_theme_mod('vw_charity_pro_donators_para_color');
       $vw_charity_pro_donators_Des_font_family = get_theme_mod('vw_charity_pro_donators_Des_font_family');
       //Events
       $vw_charity_pro_eventsheading_color = get_theme_mod('vw_charity_pro_eventsheading_color');
       $vw_charity_pro_eventsheading_font_family = get_theme_mod('vw_charity_pro_eventsheading_font_family');
       $vw_charity_pro_eventstext_color = get_theme_mod('vw_charity_pro_eventstext_color');
       $vw_charity_pro_eventstext_font_family = get_theme_mod('vw_charity_pro_eventstext_font_family');
       $vw_charity_pro_events_heading_color = get_theme_mod('vw_charity_pro_events_heading_color');
       $vw_charity_pro_events_heading_font_family = get_theme_mod('vw_charity_pro_events_heading_font_family');
       $vw_charity_pro_events_content_color = get_theme_mod('vw_charity_pro_events_content_color');
       $vw_charity_pro_events_content_font_family = get_theme_mod('vw_charity_pro_events_content_font_family');
       $vw_charity_pro_events_enroll_color = get_theme_mod('vw_charity_pro_events_enroll_color');
       $vw_charity_pro_events_enroll_font_family = get_theme_mod('vw_charity_pro_events_enroll_font_family');
       $vw_charity_pro_events_view_color = get_theme_mod('vw_charity_pro_events_view_color');
       $vw_charity_pro_events_view_font_family = get_theme_mod('vw_charity_pro_events_view_font_family');
       $vw_charity_pro_events_enroll_bg_color = get_theme_mod('vw_charity_pro_events_enroll_bg_color');
       $vw_charity_pro_events_view_bg_color = get_theme_mod('vw_charity_pro_events_view_bg_color');
       //Testimonials
       $vw_charity_pro_testimonialsheading_color = get_theme_mod('vw_charity_pro_testimonialsheading_color');
       $vw_charity_pro_testimonials_font_family = get_theme_mod('vw_charity_pro_testimonials_font_family');
       $vw_charity_pro_testimonialstext_color = get_theme_mod('vw_charity_pro_testimonialstext_color');
       $vw_charity_pro_testimonialstext_font_family = get_theme_mod('vw_charity_pro_testimonialstext_font_family');
       $vw_charity_pro_testimonials_content_color = get_theme_mod('vw_charity_pro_testimonials_content_color');
       $vw_charity_pro_testimonials_block_color = get_theme_mod('vw_charity_pro_testimonials_block_color');
       $vw_charity_pro_testimonialscontent_font_family = get_theme_mod('vw_charity_pro_testimonialscontent_font_family');
       //Latest News
        $vw_charity_pro_blog_postheading_color = get_theme_mod('vw_charity_pro_blog_postheading_color');
        $vw_charity_pro_blog_post_font_family = get_theme_mod('vw_charity_pro_blog_post_font_family');
        $vw_charity_pro_blog_posttext_color = get_theme_mod('vw_charity_pro_blog_posttext_color');
        $vw_charity_pro_blog_posttext_font_family = get_theme_mod('vw_charity_pro_blog_posttext_font_family');
        $vw_charity_pro_blog_postheads_color = get_theme_mod('vw_charity_pro_blog_postheads_color');
        $vw_charity_pro_blog_postheads_font_family = get_theme_mod('vw_charity_pro_blog_postheads_font_family');
        $vw_charity_pro_blog_contentheads_color = get_theme_mod('vw_charity_pro_blog_contentheads_color');
        $vw_charity_pro_blog_postcontent_font_family = get_theme_mod('vw_charity_pro_blog_postcontent_font_family');
        $vw_charity_pro_blog_donate_color = get_theme_mod('vw_charity_pro_blog_donate_color');
        $vw_charity_pro_blog_donate_font_family = get_theme_mod('vw_charity_pro_blog_donate_font_family');
        $vw_charity_pro_testimonials_name_color = get_theme_mod('vw_charity_pro_testimonials_name_color');
        $vw_charity_pro_testimonialsname_font_family = get_theme_mod('vw_charity_pro_testimonialsname_font_family');
        $vw_charity_pro_blog_donate_bg_color = get_theme_mod('vw_charity_pro_blog_donate_bg_color');
         //Newsletter
         $vw_charity_pro_newsletterheading_section = get_theme_mod('vw_charity_pro_newsletterheading_section');
         $vw_charity_pro_newsletter_font_family = get_theme_mod('vw_charity_pro_newsletter_font_family');
         $vw_charity_pro_newslettertext_section = get_theme_mod('vw_charity_pro_newslettertext_section');
         $vw_charity_pro_newslettertext_font_family = get_theme_mod('vw_charity_pro_newslettertext_font_family');
         $vw_charity_pro_newsletterbutton_section = get_theme_mod('vw_charity_pro_newsletterbutton_section');
         $vw_charity_pro_newsletterbutton_font_family = get_theme_mod('vw_charity_pro_newsletterbutton_font_family');
         $vw_charity_pro_newsletternow_section = get_theme_mod('vw_charity_pro_newsletternow_section');
         $vw_charity_pro_newsletternow_font_family = get_theme_mod('vw_charity_pro_newsletternow_font_family');
         //What we do
         $vw_charity_pro_what_we_doheading_color = get_theme_mod('vw_charity_pro_what_we_doheading_color');
         $vw_charity_pro_what_we_doheading_font_family = get_theme_mod('vw_charity_pro_what_we_doheading_font_family');
         $vw_charity_pro_what_we_dotext_color = get_theme_mod('vw_charity_pro_what_we_dotext_color');
         $vw_charity_pro_what_we_dotext_font_family = get_theme_mod('vw_charity_pro_what_we_dotext_font_family');
         $vw_charity_pro_what_we_dobutton_color = get_theme_mod('vw_charity_pro_what_we_dobutton_color');
         $vw_charity_pro_what_we_dobutton_font_family = get_theme_mod('vw_charity_pro_what_we_dobutton_font_family');
         $vw_charity_pro_what_we_doread_color = get_theme_mod('vw_charity_pro_what_we_doread_color');
         $vw_charity_pro_what_we_doread_font_family = get_theme_mod('vw_charity_pro_what_we_doread_font_family');
         //How you help
         $vw_charity_pro_how_you_helpheading_color = get_theme_mod('vw_charity_pro_how_you_helpheading_color');
         $vw_charity_pro_how_you_helptext_font_family = get_theme_mod('vw_charity_pro_how_you_helptext_font_family');
         $vw_charity_pro_how_you_helpsub_color = get_theme_mod('vw_charity_pro_how_you_helpsub_color');
         $vw_charity_pro_how_you_helpsub_font_family = get_theme_mod('vw_charity_pro_how_you_helpsub_font_family');
         $vw_charity_pro_how_you_helphead_color = get_theme_mod('vw_charity_pro_how_you_helphead_color');
          //Goals
         $vw_charity_pro_how_you_goals_color = get_theme_mod('vw_charity_pro_how_you_goals_color');
         $vw_charity_pro_goalsheading_font_family = get_theme_mod('vw_charity_pro_goalsheading_font_family');
         $vw_charity_pro_how_you_goalstext_color = get_theme_mod('vw_charity_pro_how_you_goalstext_color');
         $vw_charity_pro_goalstext_font_family = get_theme_mod('vw_charity_pro_goalstext_font_family');
         //Records
         $vw_charity_pro_records_text_color = get_theme_mod('vw_charity_pro_records_text_color');
         $vw_charity_pro_records_text_font_family = get_theme_mod('vw_charity_pro_records_text_font_family');

	$custom_css ='html body{
			    font-family: '.esc_html($vw_charity_pro_body_font_family).';
			    color: '.esc_html($vw_charity_pro_body_color).';
			    font-size: '.esc_html($vw_charity_pro_body_font_size).';
			}
			h1, #header .logo h1, #header .logo h1 a, .title-box h1, .woocommerce .summary h1{
			    font-family: '.esc_html($vw_charity_pro_h1_font_family).';
			    color: '.esc_html($vw_charity_pro_h1_color).';
			    font-size: '.esc_html($vw_charity_pro_h1_font_size).';
			}
			h2, section h2, .postbox h2, #comments h2.comments-title, #comments h2#reply-title, #slider h2, h2.woocommerce-loop-product__title{
			    font-family: '.esc_html($vw_charity_pro_h2_font_family).';
			    color: '.esc_html($vw_charity_pro_h2_color).';
			    font-size: '.esc_html($vw_charity_pro_h2_font_size).';
			}
			h3, #footer h3, h3.team_name, h3.contact-page, .postbox h3, #comments h3.comment-reply-title, #sidebar h3, .postbox h3{
			    font-family: '.esc_html($vw_charity_pro_h3_font_family).';
			    color: '.esc_html($vw_charity_pro_h3_color).';
			    font-size: '.esc_html($vw_charity_pro_h3_font_size).';
			}
			h4, section h4, #how_you_help h4, #our_records h4, .category-page h4{
			    font-family: '.esc_html($vw_charity_pro_h4_font_family).';
			    color: '.esc_html($vw_charity_pro_h4_color).';
			    font-size: '.esc_html($vw_charity_pro_h4_font_size).';
			}
			h5, #slider h5{
			    font-family: '.esc_html($vw_charity_pro_h5_font_family).';
			    color: '.esc_html($vw_charity_pro_h5_color).';
			    font-size: '.esc_html($vw_charity_pro_h5_font_size).';
			}
			h6, #goals h6, .causes_content h6, #events h6, #blog_post h6 , .events_content h6, .news_box_outer h6{
			    font-family: '.esc_html($vw_charity_pro_h6_font_family).';
			    color: '.esc_html($vw_charity_pro_h6_color).';
			    font-size: '.esc_html($vw_charity_pro_h6_font_size).';
			}
			p{
			    font-family: '.esc_html($vw_charity_pro_paragarpah_font_family).';
			    color: '.esc_html($vw_charity_pro_para_color).';
			    font-size: '.esc_html($vw_charity_pro_para_font_size).';
			}

			input[type="submit"], .main-navigation .menu > ul > li.highlight, .menu > ul > li > a:hover:after, .menu > ul > li.current_page_item > a:after, .menu > ul > li.current-menu-item > a:after, section h2:after, .what_we_do:after, a.button, a.theme_button, a.theme_white_button:hover, #slider a i:focus, #slider a i:active, #slider a i:hover, #slider h2:after, .goal_box, .goal_box:hover .icon_goal, .what_we_do_box .icon_what_we_do, .box_img, .causes_content h6:after, .events_content h6:after, .news_box_outer h6:after, #blog_post h6:after, #footer h3:after, .progress-bar, #donators .owl-dot.active, #newsletter, .social_widget a:hover, #footer input[type="submit"], #return-to-top, .inner-sbox h4:after, .bradcrumbs a:hover, aside input[type="submit"], input[type="submit"], li.search-box, .main-navigation .menu > ul > li.highlight, .post-content-details a.post-read-more{
				background-color: '.esc_html($vw_charity_pro_hi_color_second).';
			}
			a.button, #slider li.active span.count, .icon_what_we_do, .icon_news, span.progress_percentage, #donators .owl-dot, p.donated, .donators_content:hover .donator_thumb, .donators_content:hover, #comments input[type="submit"].submit, .goal_box{
				border-color: '.esc_html($vw_charity_pro_hi_color_second).';
			}
			ul.sub-menu, .goal_box, .goal_box:hover, span.progress_percentage:after{
				border-top-color: '.esc_html($vw_charity_pro_hi_color_second).' !important;
			}
			blockquote:before, .contact_details ul li span i, .main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, a.theme_white_button, span.credit-link a, .goal_box i, .what_we_do_box i, .what_we_do_box:hover i, .read_more, span.auther span, span.entry-date span, span.progress_percentage, #our_records h4, .counter-icon i, .event_location i, .icon_news i, h3.blog_name a, a.post-readmore, .contact-email i, .contact-address i, .contact-phone i, #sidebar h3, blockquote:before, .contact_details ul li span i, .main-navigation .current_page_item > a,.main-navigation .current-menu-item > a,.main-navigation .current_page_ancestor > a{
				color: '.esc_html($vw_charity_pro_hi_color_second).';
			}
			#header .logo h1 a, #header .logo p, p.site-description{
				color: '.esc_html($vw_charity_pro_header_title_color).';
				font-family: '.esc_html($vw_charity_pro_header_title_font_family).';
			}
			.contact_details ul li, .contact_details ul li a{
				color: '.esc_html($vw_charity_pro_header_contact_details_color).';
				font-family: '.esc_html($vw_charity_pro_header_contact_details_font_family).';
			}
			.contact_details i{
				color: '.esc_html($vw_charity_pro_header_contact_detailsicon_color).';
			}
			#header{
				background-color: '.esc_html($vw_charity_pro_headerhomebg_color).';
			}
			.main-navigation a{
					color: '.esc_html($vw_charity_pro_headermenu_color).';
					font-family:'.esc_html($vw_charity_pro_headermenu_font_family).';
			}
			.main-navigation a:hover{
					color: '.esc_html($vw_charity_pro_header_menuhovercolor).';
			}
			.main-navigation ul ul{
				background: '.esc_html($vw_charity_pro_dropdownbg_color).';
			}
			.main-navigation ul ul a{
				color: '.esc_html($vw_charity_pro_dropdownbg_itemcolor).';
			}
			.main-navigation ul ul li:hover > a{
				color: '.esc_html($vw_charity_pro_dropdownbg_item_hovercolor).';
			}
			@media screen and (min-width:720px) {
				.menubar .nav ul.sub-menu li:hover{
					background-color: '.esc_html($vw_charity_pro_dropdownbg_hovercolor).';
				}
				.menubar{
					background-color: '.esc_html($vw_charity_pro_menubarbg_color).';
				}
			}
			@media screen and (max-width:719px) {
				.menubar .nav ul{
					background-color: '.esc_html($vw_charity_pro_dropdownbg_responsivecolor).';
				}
				.menubar .nav ul li a{
					color: '.esc_html($vw_charity_pro_headermenu_responsive_item_color).';
				}
			}
			#causes h2.text-center{
				color: '.esc_html($vw_charity_pro_causesheading_color).';
				font-family:'.esc_html($vw_charity_pro_causesheading_font_family).';
			}
			#causes p.subtext{
	            color: '.esc_html($vw_charity_pro_causestext_color).';
	            font-family:'.esc_html($vw_charity_pro_causestext_font_family).';
		    }
		    #donators h2.text-center{
				color: '.esc_html($vw_charity_pro_donatorsheading_color).';
			font-family:'.esc_html($vw_charity_pro_donatorsheading_font_family).';
			}
			 #donators p.subtext{
	            color: '.esc_html($vw_charity_pro_donatorstext_color).';
	            font-family:'.esc_html($vw_charity_pro_donatorstext_font_family).';
		    }
		     #events h2.text-center{
                color: '.esc_html($vw_charity_pro_eventsheading_color).';
	            font-family:'.esc_html($vw_charity_pro_eventstext_font_family).';
		    }
		     #events p.subtext{
                color: '.esc_html($vw_charity_pro_eventstext_color).';
	            font-family:'.esc_html($vw_charity_pro_eventstext_color).';
		    }
		    #testimonials h2.head_white{
                color: '.esc_html($vw_charity_pro_testimonialsheading_color).';
				font-family:'.esc_html($vw_charity_pro_testimonials_font_family).';
		    }
		    #testimonials p.subtext.head_white{
                color: '.esc_html($vw_charity_pro_testimonialstext_color).';
			font-family:'.esc_html($vw_charity_pro_testimonialstext_font_family).';
		    }
		    #blog_post h2.text-center{
		   	    color: '.esc_html($vw_charity_pro_blog_postheading_color).';
				font-family:'.esc_html($vw_charity_pro_blog_post_font_family).';
		    }
		    #blog_post p.subtext{
                color: '.esc_html($vw_charity_pro_blog_posttext_color).';
				font-family:'.esc_html($vw_charity_pro_blog_posttext_font_family).';
		    }
		    #newsletter h6.mb-1{
                color: '.esc_html($vw_charity_pro_newsletterheading_section).';
				font-family:'.esc_html($vw_charity_pro_newsletter_font_family).';
		   }
		   #newsletter p.mt-1.mb-1{
                color: '.esc_html($vw_charity_pro_newslettertext_section).';
				font-family:'.esc_html($vw_charity_pro_newslettertext_font_family).';
		   }
		   #what_we_do h2{
				color: '.esc_html($vw_charity_pro_what_we_doheading_color).';
				font-family:'.esc_html($vw_charity_pro_what_we_doheading_font_family).';
			}
			#what_we_do p.w-75.subtext.mb-5,p.record_details{
                color: '.esc_html($vw_charity_pro_what_we_dotext_color).';
				font-family:'.esc_html($vw_charity_pro_what_we_dotext_font_family).';
		   }
		   #how_you_help h2.head_white{
                color: '.esc_html($vw_charity_pro_how_you_helpheading_color).';
				font-family:'.esc_html($vw_charity_pro_how_you_helptext_font_family).';
		   }
		   #how_you_help h4{
                color: '.esc_html($vw_charity_pro_how_you_helpsub_color).';
				font-family:'.esc_html($vw_charity_pro_how_you_helpsub_font_family).';
		   }
		   #how_you_help .about-editor,#how_you_help .li_content p{
                color: '.esc_html($vw_charity_pro_how_you_helphead_color).';
				font-family:'.esc_html($vw_charity_pro_how_you_helpsub_font_family).';
		   }
		   #goals h6.goal_head.text-uppercase.font-weight-bold{
		        color: '.esc_html($vw_charity_pro_how_you_goals_color).';
				font-family:'.esc_html($vw_charity_pro_goalsheading_font_family).';
		   }
		   #goals p.record_details{
                color: '.esc_html($vw_charity_pro_how_you_goalstext_color).';
				font-family:'.esc_html($vw_charity_pro_goalstext_font_family).';
		   }
		    #what_we_do h6.what_we_do{
                color: '.esc_html($vw_charity_pro_what_we_dobutton_color).';
				font-family:'.esc_html($vw_charity_pro_what_we_dobutton_font_family).';
		   }
		   #what_we_do a.read_more{
                color: '.esc_html($vw_charity_pro_what_we_doread_color).';
				font-family:'.esc_html($vw_charity_pro_what_we_doread_font_family).';
		   }
		   #causes h6 a{
                color: '.esc_html($vw_charity_pro_causesplugin_color).';
				font-family:'.esc_html($vw_charity_pro_causesplugin_font_family).';
		   }
		   .causes_content p{
		   	    color: '.esc_html($vw_charity_pro_causescontent_color).';
				font-family:'.esc_html($vw_charity_pro_causescontent_font_family).';
		   }
		   #donators a{
                color: '.esc_html($vw_charity_pro_donators_heading_color).';
				font-family:'.esc_html($vw_charity_pro_donators_text_font_family).';
		   }
		   .donators_content p{
		   	    color: '.esc_html($vw_charity_pro_donators_para_color).';
				font-family:'.esc_html($vw_charity_pro_donators_Des_font_family).';
		   } 
		   .events_content h6 a{
		   	    color: '.esc_html($vw_charity_pro_events_heading_color).';
				font-family:'.esc_html($vw_charity_pro_events_heading_font_family).';
		   }
		   .events_content p{
		   	    color: '.esc_html($vw_charity_pro_events_content_color).';
				font-family:'.esc_html($vw_charity_pro_events_content_font_family).';
		   }
		   .enroll_now a{
		   	    color: '.esc_html($vw_charity_pro_events_enroll_color).';
		   	    background-color: '.esc_html($vw_charity_pro_events_enroll_bg_color).';
				font-family:'.esc_html($vw_charity_pro_events_enroll_font_family).';
		   }
		   .view_all a.read-more.font-weight-bold.btn.btn-primary.theme_button.v{
		   	    color: '.esc_html($vw_charity_pro_events_view_color).';
		   	    background-color: '.esc_html($vw_charity_pro_events_view_bg_color).';
				font-family:'.esc_html($vw_charity_pro_events_view_font_family).';
		   }
		   .testimonials_content blockquote{
		   	    color: '.esc_html($vw_charity_pro_testimonials_content_color).';
				font-family:'.esc_html($vw_charity_pro_testimonialscontent_font_family).';
		   }
		   .testimonials_content blockquote:before{
                color: '.esc_html($vw_charity_pro_testimonials_block_color).';
		    }
		    .blog_post_content h6{
		    	color: '.esc_html($vw_charity_pro_blog_postheads_color).';
				font-family:'.esc_html($vw_charity_pro_blog_postheads_font_family).';
		    }
		    .blog_post_content p{
		    	color: '.esc_html($vw_charity_pro_blog_contentheads_color).';
				font-family:'.esc_html($vw_charity_pro_blog_postcontent_font_family).';
		    }
		    .blog_post_content a.read-more.font-weight-bold.btn.btn-primary.theme_button{
		    	color: '.esc_html($vw_charity_pro_blog_donate_color).';
		    	background-color: '.esc_html($vw_charity_pro_blog_donate_bg_color).';
				font-family:'.esc_html($vw_charity_pro_blog_donate_font_family).';
		    }
		    .news_content label{
		    	color: '.esc_html($vw_charity_pro_newsletterbutton_section).';
				font-family:'.esc_html($vw_charity_pro_newsletterbutton_font_family).';
		    }
		    .news_content input.wpcf7-form-control.wpcf7-submit{
		    	color: '.esc_html($vw_charity_pro_newsletternow_section).';
				font-family:'.esc_html($vw_charity_pro_newsletternow_font_family).';
		    }
		    #our_records p{
                color: '.esc_html($vw_charity_pro_records_text_color).';
				font-family:'.esc_html($vw_charity_pro_records_text_font_family).';
		    }
		    .other_info cite a, .other_info p{
		    	color: '.esc_html($vw_charity_pro_testimonials_name_color).';
				font-family:'.esc_html($vw_charity_pro_testimonialsname_font_family).';
		    }
			#slider h2{
				color: '.esc_html($vw_charity_pro_sliderHeading_color).';
				font-family:'.esc_html($vw_charity_pro_sliderHeading_font_family).';
			}
			#slider p{
				color: '.esc_html($vw_charity_pro_slidertext_color).';
				font-family:'.esc_html($vw_charity_pro_slidertext_font_family).';
			}
			#slider .btn-primary{
				color: '.esc_html($vw_charity_pro_slide_buttoncolor).';
				background-color: '.esc_html($vw_charity_pro_slide_buttonbgcolor).';
				font-family:'.esc_html($vw_charity_pro_button_fontfamily).';
			}
			#slider .btn-primary{
				color: '.esc_html($vw_charity_pro_slide_buttoncolor).';
				background-color: '.esc_html($vw_charity_pro_slide_buttonbgcolor).';
				font-family:'.esc_html($vw_charity_pro_button_fontfamily).';
			}
			.copyright{
				border-color: '.esc_html($vw_charity_pro_footerborder_color).';
			}
			.contact-info span, .contact-info h2, .contac_form h2{
				color: '.esc_html($vw_charity_pro_contact_page_heading_color).';
				font-family:'.esc_html($vw_charity_pro_contact_page_heading_font_family).';
			}
			.contact-info p, .contac_form p{
				color: '.esc_html($vw_charity_pro_contact_page_content_color).';
				font-family:'.esc_html($vw_charity_pro_contact_page_contact_font_family).';
			}
			.contact-email i, .contact-address i, .contact-phone i{
				color: '.esc_html($vw_charity_pro_contact_page_icon_color).';
			}
			#footer h3{
				color: '.esc_html($vw_charity_pro_footerheading_color).';
				font-family:'.esc_html($vw_charity_pro_footerheading_font_family).';
			}
			.col-footer p, .col-footer ul li, .col-footer ul li a, .col-footer a, .col-footer span, .col-footer tr, .col-footer td, .col-footer th, .copyright p{
			    color:'.esc_html($vw_charity_pro_footercontent_color).';
			    font-family:'.esc_html($vw_charity_pro_footercontent_font_family).';
			}';
			wp_add_inline_style( 'vw-charity-pro-basic-style',$custom_css );
			wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/css/animate.css' );
			wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.min.css' );
			wp_enqueue_style( 'effect', get_template_directory_uri().'/css/effect.css' );
			wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/css/owl.carousel.css' );
			wp_enqueue_script( 'vanimation-wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'),'', true);
			wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'),'', true);
			wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.js', array('jquery'), '', true);
			wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
			wp_enqueue_script( 'superfsh', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery'), '', true);
			wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '', true);
			wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smoothScroll.js', array('jquery'), '', true);
			wp_enqueue_script( 'vw-charity-pro-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
			wp_enqueue_style('vw-charity-pro-ie', get_template_directory_uri().'/css/ie.css', array('vw-charity-pro-basic-style'));
			wp_style_add_data( 'vw-charity-pro-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'vw_charity_pro_scripts' );
/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';
/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';
/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';
/* TGM. */
require get_template_directory() . '/inc/tgm.php';
/* Get Started. */
require get_template_directory() . '/inc/getstarted/getstarted.php';
//social widget file
require get_parent_theme_file_path( '/inc/widget/socail-widget.php' );
/* URL DEFINES */
define('VW_PET_CARE_PRO_SITE_URL','https://www.vwthemes.com/');
/* get slug by id */
function vw_charity_pro_get_slug_by_id( $id ) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug;
}
/* Theme Credit link */
function vw_charity_pro_credit_link() {
	echo esc_html_e('Design & Developed by','vw-charity-pro'). "<a href=".esc_url(VW_PET_CARE_PRO_SITE_URL)." target='_blank'> VW Themes</a>";
}
/*Radio Button sanitization*/
function vw_charity_pro_sanitize_choices( $input, $setting ) {
	global $wp_customize;
	$control = $wp_customize->get_control( $setting->id );
	if ( array_key_exists( $input, $control->choices ) ) {
		return $input;
	} else {
		return $setting->default;
	}
}

function vw_charity_pro_single_posttype($single_template) {
	global $post;
	if ($post->post_type == 'donator') {
		$single_template = dirname( __FILE__ ) . '/single-donator.php';
	}
	else if ($post->post_type == 'testimonials') {
		$single_template = dirname( __FILE__ ) . '/single-testimonial.php';
	}
	else if ($post->post_type == 'causes') {
		$single_template = dirname( __FILE__ ) . '/single-causes.php';
	}
	else if ($post->post_type == 'event') {
		$single_template = dirname( __FILE__ ) . '/single-events.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'vw_charity_pro_single_posttype' );

 /* Breadcrumb Begin */
function vw_charity_pro_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo esc_url(home_url());
		echo '">';
		bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(', ');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			 the_title();
		}
	}
}
/* Excerpt Limit Begin */
function vw_charity_pro_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}
function vw_charity_pro_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}
	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vw-charity-pro' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'vw_charity_pro_excerpt_more' );

// Recent post widget with thumbnails
Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
    function widget($args, $instance) {
            if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'vw-charity-pro' );
        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number )
            $number = 5;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
        /**
         * Filter the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         */
        $r = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $number,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true
        ) ) );
        if ($r->have_posts()) :
        ?>
        <?php echo $args['before_widget']; 
         if ( $title ) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        } ?>
        <ul>
        <?php while ( $r->have_posts() ) : $r->the_post(); ?>
            <li>
                <div class="row recent-post-box m-0">
	                <div class="post-thumb <?php if(has_post_thumbnail()) { echo 'col-md-4 col-sm-4 col-4'; } ?> ">
	                    <?php the_post_thumbnail(); ?>
	                </div>
	                <div class="post-content <?php if(has_post_thumbnail()) { echo 'col-md-8 col-sm-8 col-8'; } else { echo 'col-md-12 col-sm-12 col-12'; }?>">
	                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		                <?php if ( $show_date ) : ?>
		                    <p class="post-date"><?php the_date(); ?></p>
		                <?php endif; ?>
	                </div>
                </div>
            </li>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <?php echo $args['after_widget']; ?>
        <?php
        endif;
    }
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');
// mailing Function
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
// do your stuff
$url = get_site_url();
// The message
$message = "A new Pets Shop Pro Theme is activated on $url ";
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");
// Send
wp_mail('support@vwthemes.com', 'Theme Activated', $message);
}

define('VW_CHARITY_PRO_THEME_DOC','https://vwthemes.com/docs/vw-charity-ngo-pro/');
define('VW_CHARITY_PRO_SUPPORT','https://www.vwthemes.com/support/vw-theme/');
define('VW_CHARITY_PRO_FAQ','https://www.vwthemes.com/faqs/');
define('VW_CHARITY_PRO_CONTACT','https://www.vwthemes.com/contact/');
define('VW_CHARITY_PRO_REVIEW','https://www.vwthemes.com/topic/reviews-and-testimonials/');
define('VW_CHARITY_PRO_THEME_BUNDLE','https://www.vwthemes.com/premium/theme-bundle/');
define('VW_CHARITY_PRO_FITNESS','https://www.vwthemes.com/premium/gym-fitness-wordpress-theme/');
define('VW_CHARITY_PRO_ECOMMERCE','https://www.vwthemes.com/premium/ecommerce-wordpress-theme/');
define('VW_CHARITY_PRO_LAWYER','https://www.vwthemes.com/themes/premium-lawyer-wordpress-theme/');
define('VW_CHARITY_PRO_CORPORATE','https://www.vwthemes.com/premium/corporate-wordpress-theme/');
define('VW_CHARITY_PRO_SPA','https://www.vwthemes.com/premium/salon-spa-wordpress-theme/');
define('VW_CHARITY_PRO_HOSPITAL','https://www.vwthemes.com/premium/hospital-wordpress-theme/');
define('VW_CHARITY_PRO_TOURS','http://www.vwthemes.com/product/vw-tour-theme/');
define('VW_CHARITY_PRO_EDUCATION','http://www.vwthemes.com/product/vw-education-theme/');
define('VW_CHARITY_PRO_AUTOMOBILE','https://www.vwthemes.com/premium/automobile-wordpress-theme/');
define('VW_CHARITY_PRO_RESTAURANT','https://www.vwthemes.com/premium/food-restaurant-wordpress-theme/');
define('VW_CHARITY_PRO_BLOG','https://www.vwthemes.com/themes/best-premium-wordpress-blog-theme/');
define('VW_CHARITY_PRO_CONSTRUCTION','https://www.vwthemes.com/themes/premium-construction-wordpress-theme/');
define('VW_CHARITY_PRO_PET_SHOP','https://www.vwthemes.com/themes/premium-pet-wordpress-theme/');
define('VW_CHARITY_PRO_MAGAZINE','https://www.vwthemes.com/themes/premium-magazine-wordpress-theme/');