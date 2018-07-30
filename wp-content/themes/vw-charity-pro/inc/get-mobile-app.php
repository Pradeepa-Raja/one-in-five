<?php
/**
 * Pro customizer section.
 * All code, unless otherwise noted, is licensed under the GNU GPL, version 2 or later. 2016 © Justin Tadlock.
 * @since  1.0.0
 * @access public
 */
class vw_charity_pro_customize_get_mobile_app extends WP_Customize_Section {

    /**
     * The type of customize section being rendered.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $type = 'vw-charity-pro';

    /**
     * Custom button text to output.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $get_mobile_app_text = '';

    /**
     * Custom pro button URL.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $get_mobile_app_url = '';

    /**
     * Add custom parameters to pass to the JS via JSON.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function json() {
        $json = parent::json();

        $json['get_mobile_app_text'] = $this->get_mobile_app_text;
        $json['get_mobile_app_url']  = esc_url( $this->get_mobile_app_url );

        return $json;
    }

    /**
     * Outputs the Underscore.js template.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    protected function render_template() { ?>

        <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">

            <h3 class="accordion-section-title">
                {{ data.title }}

                <# if ( data.get_mobile_app_text && data.get_mobile_app_url ) { #>
                    <a href="{{ data.get_mobile_app_url }}" class="button button-secondary alignright" target="_blank">{{ data.get_mobile_app_text }}</a>
                <# } #>
            </h3>
        </li>
    <?php }
}