<?php
/**
 * Customize Grouping Settings in tabs
 *
 * @package Bizness
 */


/**
 * The custom control class
 */
class Bizness_Customize_Group_Field_Control extends Kirki\Control\Base {

    /**
     * Hestia_Customize_Control_Tabs constructor.
     */
    public function __construct( $manager, $id, $args = array() ) {
        parent::__construct( $manager, $id, $args );

        if ( ! empty( $this->tabs ) ) {
            foreach ( $this->tabs as $value => $args ) {
                $this->controls[ $value ] = $args['controls'];
            }
        }
    }

    /**
     * Controls array from tabs.
     *
     * @var array
     */
    public $controls = array();

    /**
     * The type of customize control being rendered.
     */
    public $type = 'group-field';

    /**
     * The type refresh being used.
     */
    public $transport = 'postMessage';

    /**
     * The priority of the control.
     */
    public $priority = -10;

    /**
     * The tabs with keys of the controls that are under each tab.
     */
    public $tabs;

    /**
     * Displays the control content.
     */
    public function render_content() {

        /* If no tabs are provided, bail. */
        if ( empty( $this->tabs ) ) {
            return;
        }
        $output = '';
        $output .= '<div class="group-field-tabs-wrap" id="input_' . esc_attr( $this->id ) . '">';
        foreach ( $this->tabs as $value => $args ) {
            if ( ! empty( $args['controls'] ) ) {
                
                $controls_attribute = json_encode( $args['controls'] );

                $output .= '<div class="group-field-tab '.esc_attr( $value ).'">';

                $output .= '<input type="radio"';
                $output .= 'value="' . esc_attr( $value ) . '" ';
                $output .= 'name="' . esc_attr( "_customize-radio-{$this->id}" ) . '" ';
                $output .= 'id="' . esc_attr( "{$this->id}-{$value}" ) . '" ';
                $output .= 'data-controls="' . esc_js( $controls_attribute ) . '" ';
                $output .= 'data-preview="' . esc_js( $value ) . '" ';

                if ( ! empty( $args['active_tab'] ) && ( $args['active_tab'] == true ) ) {
                    $class = 'class="active"';
                } else {
                    $class = 'class="inactive"';
                }
                $output .= $class;
                $output .= '/><!-- /input -->';

                $label_classes = '';
                foreach ( $args['controls'] as $control_id ) {
                    $label_classes .= esc_attr( $control_id . ' ' );
                }

                $output .= '<label class = "' . $label_classes . '" ';
                $output .= 'for="' . esc_attr( "{$this->id}-{$value}" ) . '">';
                if ( ! empty( $args['nicename'] ) ) {
                    $output .= '<span class="interface-tab-label">' . esc_html( $args['nicename'] ) . '</span>';
                }
                $output .= '</label>';
                $output .= '</div><!-- /.group-field-tab -->';
            }
        }
        $output .= '</div><!-- /.group-field-tabs-wrap -->';

        echo $output;
    }
    /**
     * Loads the scripts and hooks our custom styles in.
     */
    public function enqueue() {

        if ( empty( $this->tabs ) ) {
            return;
        }

        wp_enqueue_script( 'bizness-customize-group-field-control', BIZNESS_THEME_URI . 'inc/customizer/controls/group-field/script.js', [ 'jquery' ], BIZNESS_THEME_VERSION, true );

    }

}
