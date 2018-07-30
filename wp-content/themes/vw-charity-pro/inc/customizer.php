<?php
/**
 * vw-charity-pro Theme Customizer
 *
 * @package vw-charity-pro
 */
/**
 * Loads custom control for layout settings
 */
function vw_charity_pro_custom_controls() {
    require_once get_template_directory() . '/inc/admin/customize-texteditor-control.php';

}
add_action( 'customize_register', 'vw_charity_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_charity_pro_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    //add home page setting pannel
    $wp_customize->add_panel( 'vw_charity_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'vw-charity-pro' ),
        'description' => __( 'Description of what this panel does.', 'vw-charity-pro' ),
    ) );
        $font_array = array(
        '' => __( 'No Fonts', 'vw-charity-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-charity-pro' ),
        'Acme' => __( 'Acme', 'vw-charity-pro' ),
        'Anton' => __( 'Anton', 'vw-charity-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-charity-pro' ),
        'Arimo' => __( 'Arimo', 'vw-charity-pro' ),
        'Arsenal' => __( 'Arsenal', 'vw-charity-pro' ),
        'Arvo' => __( 'Arvo', 'vw-charity-pro' ),
        'Alegreya' => __( 'Alegreya', 'vw-charity-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-charity-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-charity-pro' ),
        'Bangers' => __( 'Bangers', 'vw-charity-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-charity-pro' ),
        'Bad Script' => __( 'Bad Script', 'vw-charity-pro' ),
        'Bitter' => __( 'Bitter', 'vw-charity-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-charity-pro' ),
        'BenchNine' => __( 'BenchNine', 'vw-charity-pro' ),
        'Cabin' => __( 'Cabin', 'vw-charity-pro' ),
        'Cardo' => __( 'Cardo', 'vw-charity-pro' ),
        'Courgette' => __( 'Courgette', 'vw-charity-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-charity-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-charity-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-charity-pro' ),
        'Cuprum' => __( 'Cuprum', 'vw-charity-pro' ),
        'Cookie' => __( 'Cookie', 'vw-charity-pro' ),
        'Chewy' => __( 'Chewy', 'vw-charity-pro' ),
        'Days One' => __( 'Days One', 'vw-charity-pro' ),
        'Dosis' => __( 'Dosis', 'vw-charity-pro' ),
        'Economica' => __( 'Economica', 'vw-charity-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-charity-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-charity-pro' ),
        'Francois One' => __( 'Francois One', 'vw-charity-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-charity-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-charity-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-charity-pro' ),
        'Handlee' => __( 'Handlee', 'vw-charity-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-charity-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-charity-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-charity-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-charity-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-charity-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-charity-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-charity-pro' ),
        'Kanit' => __( 'Kanit', 'vw-charity-pro' ),
        'Lobster' => __( 'Lobster', 'vw-charity-pro' ),
        'Lato' => __( 'Lato', 'vw-charity-pro' ),
        'Lora' => __( 'Lora', 'vw-charity-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-charity-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-charity-pro' ),
        'Merriweather' => __( 'Merriweather', 'vw-charity-pro' ),
        'Monda' => __( 'Monda', 'vw-charity-pro' ),
        'Montserrat' => __( 'Montserrat', 'vw-charity-pro' ),
        'Muli' => __( 'Muli', 'vw-charity-pro' ),
        'Marck Script' => __( 'Marck Script', 'vw-charity-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-charity-pro' ),
        'Open Sans' => __( 'Open Sans', 'vw-charity-pro' ),
        'Overpass' => __( 'Overpass', 'vw-charity-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-charity-pro' ),
        'Oxygen' => __( 'Oxygen', 'vw-charity-pro' ),
        'Orbitron' => __( 'Orbitron', 'vw-charity-pro' ),
        'Patua One' => __( 'Patua One', 'vw-charity-pro' ),
        'Pacifico' => __( 'Pacifico', 'vw-charity-pro' ),
        'Padauk' => __( 'Padauk', 'vw-charity-pro' ),
        'Playball' => __( 'Playball', 'vw-charity-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-charity-pro' ),
        'PT Sans' => __( 'PT Sans', 'vw-charity-pro' ),
        'Philosopher' => __( 'Philosopher', 'vw-charity-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-charity-pro' ),
        'Poiret One' => __( 'Poiret One', 'vw-charity-pro' ),
        'Quicksand' => __( 'Quicksand', 'vw-charity-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-charity-pro' ),
        'Raleway' => __( 'Raleway', 'vw-charity-pro' ),
        'Rubik' => __( 'Rubik', 'vw-charity-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-charity-pro' ),
        'Russo One' => __( 'Russo One', 'vw-charity-pro' ),
        'Righteous' => __( 'Righteous', 'vw-charity-pro' ),
        'Slabo' => __( 'Slabo', 'vw-charity-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-charity-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-charity-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-charity-pro' ),
        'Sacramento' => __( 'Sacramento', 'vw-charity-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-charity-pro' ),
        'Tangerine' => __( 'Tangerine', 'vw-charity-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-charity-pro' ),
        'VT323' => __( 'VT323', 'vw-charity-pro' ),
        'Varela Round' => __( 'Varela Round', 'vw-charity-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-charity-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-charity-pro' ),
        'Volkhov' => __( 'Volkhov', 'vw-charity-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-charity-pro' )
    );
    //general Settings
    require get_template_directory() . '/inc/customizer-custom-variables.php';
    //Top bar
    require get_template_directory() . '/inc/customizer-part-topbar-header.php';
    //Slider
    require get_template_directory() . '/inc/customizer-part-slide.php';
    //Home page sections
    require get_template_directory() . '/inc/customizer-part-home.php';
    // Social icons
    require get_template_directory() . '/inc/customizer-part-social-icons.php';
    //Footer
    require get_template_directory() . '/inc/customizer-part-footer.php';

}
add_action( 'customize_register', 'vw_charity_pro_customize_register' );
//Integer
function vw_charity_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_charity_pro_customize {
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {
        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'sections' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }
    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/get-mobile-app.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_charity_pro_customize_get_mobile_app' );
        // Register sections.
        $manager->add_section(
            new vw_charity_pro_customize_get_mobile_app(
                $manager,
                'example_1',
                array(
                    'title'    => esc_html__( 'Get Mobile App', 'vw-charity-pro' ),
                    'get_mobile_app_text' => esc_html__( 'Click Here', 'vw-charity-pro' ),
                    'get_mobile_app_url'  => 'https://www.vwthemes.com/premium-plugin/vw-woocommerce-mobile-app/'
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
        wp_enqueue_script( 'vw-charity-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );
        wp_enqueue_style( 'vw-charity-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
    }
}
// Doing this customizer thang!
vw_charity_pro_customize::get_instance();