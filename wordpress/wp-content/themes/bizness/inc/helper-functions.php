<?php
/**
 * Theme custom useful helper functions
 *
 * @package Bizness
 */
/*
|--------------------------------------------------------------------------
| Check kirki plguin
|--------------------------------------------------------------------------
|
*/
if ( ! function_exists( 'bizness_kirki_plugin' ) ) {

    /**
     * Function to return the boolean value if `Kirki` plugin is activated or not.
     *
     * @return boolean
     */
    function bizness_kirki_plugin() {

        if ( class_exists( 'Kirki' ) ) {
            return true;
        } else {
            return false;
        }
    }
}

/*
|--------------------------------------------------------------------------
| Google font URL
|--------------------------------------------------------------------------
|
*/
if ( ! function_exists( 'bizness_fonts_url' ) ) {

    /**
     * Function to return Google Fonts URL
     *
     * @return boolean
     */
    function bizness_fonts_url() {
        $font_families = array(
            'Open+Sans:wght@300;400;500;600;700;800',
            'Poppins:wght@400;500;600'
        );

        $fonts_url = add_query_arg( array(
            'family' => implode( '&family=', $font_families ),
            'display' => 'swap',
        ), 'https://fonts.googleapis.com/css2' );

        return esc_url_raw($fonts_url);
    }
}

/*
|--------------------------------------------------------------------------
| Header builder structure
|--------------------------------------------------------------------------
|
*/
if ( ! function_exists( 'bizness_header_builder' ) ) {
    /**
     * Function to return header builder elements
     *
     * @return void
     */
    function bizness_header_builder() {

        $header_elements = ['top','main','bottom'];

        if ( !empty( $header_elements ) && in_array( 'top', $header_elements, true ) ) {
            $top_left_col_elements      = get_theme_mod( 'header_top_left_elements');
            $top_center_col_elements    = get_theme_mod( 'header_top_center_elements');
            $top_right_col_elements     = get_theme_mod( 'header_top_right_elements');
            $top_header_class           = ['site-header-row'];

            // If any left and right column is active
            if ( 
                ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id')) === FALSE ) || 
                ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id')) === FALSE ) 
                ) {

                $top_header_class[] = ( 
                    ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id')) === FALSE ) &&
                    ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id')) === FALSE )  
                    ) ? 'has-sides-column' : 'has-side-column';
            }
            else {
                $top_header_class[] = 'no-sides-column';
            }

            // If center column is active
            if ( ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id')) === FALSE ) ) {

                $top_header_class[] = ( empty( $top_left_col_elements ) && empty( $top_right_col_elements ) ) ? 'has-only-center-column has-center-column' : 'has-center-column';
            }
            else {
                $top_header_class[] = 'no-center-column';
            }
            if ( ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id')) === FALSE ) || ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id')) === FALSE ) || ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id')) === FALSE ) ) {
            ?>
            <div class="d-flex align-items-center site-header-wrap site-header-top-row">
                <div class="container">
                    <div class="<?php echo esc_attr( implode( ' ', $top_header_class ) ); ?>">

                        <?php if ( ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-start site-header-section">
                                <?php bizness_header_column_elements( $top_left_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-center site-header-section">
                                <?php bizness_header_column_elements( $top_center_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-end site-header-section">
                                <?php bizness_header_column_elements( $top_right_col_elements ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php
            }
        }
        if ( !empty( $header_elements ) && in_array( 'main', $header_elements, true ) ) {
            $main_left_col_elements      = get_theme_mod( 'header_main_left_elements',
                [
                    [
                        'element_id' => 'identity'
                    ]
                ]
            );
            $main_center_col_elements    = get_theme_mod( 'header_main_center_elements' );
            $main_right_col_elements     = get_theme_mod( 'header_main_right_elements',
                [
                    [
                        'element_id' => 'menu_1'
                    ]
                ]
            );
            $main_header_class           = ['site-header-row'];

            // If any left and right column is active
            if ( 
                ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id')) === FALSE ) || 
                ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id')) === FALSE ) 
                ) {

                $main_header_class[] = ( 
                    ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id')) === FALSE ) &&
                    ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id')) === FALSE )  
                    ) ? 'has-sides-column' : 'has-side-column';
            }
            else {
                $main_header_class[] = 'no-sides-column';
            }
            
            // If center column is active
            if ( ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id')) === FALSE ) ) {
                $main_header_class[] = ( empty( $main_left_col_elements ) && empty( $main_right_col_elements ) ) ? 'has-only-center-column has-center-column' : 'has-center-column';
            }
            else {
                $main_header_class[] = 'no-center-column';
            }
            if ( 
                ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id')) === FALSE ) 
                || 
                ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id')) === FALSE ) 
                || 
                ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id')) === FALSE ) 
            ) {
            ?>
            <div class="d-flex align-items-center site-header-wrap site-header-main-row">
                <div class="container">
                    <div class="<?php echo esc_attr( implode( ' ', $main_header_class ) ); ?>">

                        <?php if ( ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-start site-header-section">
                                <?php bizness_header_column_elements( $main_left_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-center site-header-section">
                                <?php bizness_header_column_elements( $main_center_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-end site-header-section">
                                <?php bizness_header_column_elements( $main_right_col_elements ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php
            }
        }
        if ( !empty( $header_elements ) && in_array( 'bottom', $header_elements, true ) ) {
            $bottom_left_col_elements      = get_theme_mod( 'header_bottom_left_elements' );
            $bottom_center_col_elements    = get_theme_mod( 'header_bottom_center_elements' );
            $bottom_right_col_elements     = get_theme_mod( 'header_bottom_right_elements');
            $bottom_header_class           = ['site-header-row'];

            // If any left and right column is active
            if ( 
                ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id')) === FALSE ) || 
                ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id')) === FALSE ) 
                ) {

                $bottom_header_class[] = ( 
                    ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id')) === FALSE ) &&
                    ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id')) === FALSE )  
                    ) ? 'has-sides-column' : 'has-side-column';
            }
            else {
                $bottom_header_class[] = 'no-sides-column';
            }
            // If center column is active
            if ( ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id')) === FALSE ) ) {
                $bottom_header_class[] = ( empty( $bottom_left_col_elements ) && empty( $bottom_right_col_elements ) ) ? 'has-only-center-column has-center-column' : 'has-center-column';
            }
            else {
                $bottom_header_class[] = 'no-center-column';
            }
            if ( ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id')) === FALSE ) || ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id')) === FALSE ) || ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id')) === FALSE ) ) {
            ?>
            <div class="d-flex align-items-center site-header-wrap site-header-bottom-row">
                <div class="container">
                    <div class="<?php echo esc_attr( implode( ' ', $bottom_header_class ) ); ?>">

                        <?php if ( ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-start site-header-section">
                                <?php bizness_header_column_elements( $bottom_left_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-center site-header-section">
                                <?php bizness_header_column_elements( $bottom_center_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id')) === FALSE ) ) : ?>
                            <div class="d-flex justify-content-end site-header-section">
                                <?php bizness_header_column_elements( $bottom_right_col_elements ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php
            }
        }
    }
}

/**
 *Column Element
 *
 * @param $header_column_elements
 */
function bizness_header_column_elements( $header_column_elements ) {

    foreach ( $header_column_elements as $column => $single_element ) {

        if ( array_search('none', array_column($header_column_elements, 'element_id')) === FALSE ) {
            $id = $single_element['element_id'];
            if ( file_exists( trailingslashit( get_template_directory() ) . 'template-parts/header/' . $id . '.php' ) ) {
                get_template_part( 'template-parts/header/' . $id );
            } else {
                echo esc_html__( 'Create New File ', 'bizness' ) . 'template-parts/header/' . $id . '.php';
            }
        }
    }
}

/*
|--------------------------------------------------------------------------
| Footer builder structure
|--------------------------------------------------------------------------
|
*/
if ( ! function_exists( 'bizness_footer_builder' ) ) {
    /**
     * Function to return footer builder elements
     *
     * @return void
     */
    function bizness_footer_builder() {
        $footer_elements = ['top','main','bottom'];
        // Top Section
        if ( !empty( $footer_elements ) && in_array( 'top', $footer_elements, true ) ) {
            $top_left_col_elements      = get_theme_mod( 'footer_top_left_elements');
            $top_center_col_elements    = get_theme_mod( 'footer_top_center_elements');
            $top_right_col_elements     = get_theme_mod( 'footer_top_right_elements');
            $top_footer_class           = ['row site-footer-row'];
            $top_col_class              = ['site-footer-section'];
            $top_col_class[]            = ( ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id') ) === FALSE ) 
                                            && ( 
                                                ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id') ) === FALSE )
                                                ||
                                                ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id') ) === FALSE )
                                                ) ) 
                                            ? 'col-12 col-md-4' 
                                            : ( 
                                                ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id') ) === FALSE )
                                                &&
                                                ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id') ) === FALSE )
                                                ? 'col-12 col-md-6'
                                                : 'col-12'
                                            );
            $top_col_class[]            = 'd-flex align-items-center';

            // If any left and right column is active
            if ( 
                ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id') ) === FALSE )
                &&
                ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id') ) === FALSE )
             ) {
                $top_footer_class[] = 'has-sides-column';
            }
            else {
                $top_footer_class[] = 'no-sides-column';
            }
            // If center column is active
            if ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id') ) === FALSE ) {

                $top_footer_class[] = ( empty( $top_left_col_elements ) && empty( $top_right_col_elements ) ) ? 'has-only-center-column has-center-column' : 'has-center-column';
            }
            else {
                $top_footer_class[] = 'no-center-column';
            }

            if ( ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id')) === FALSE ) || ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id')) === FALSE ) || ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id')) === FALSE ) ) {
            ?>
            <div class="d-flex align-items-center site-footer-wrap site-footer-top-row">
                <div class="container">
                    <div class="<?php echo esc_attr( implode( ' ', $top_footer_class ) ); ?>">

                        <?php if ( 
                            ( ! empty( $top_left_col_elements ) && array_search('none', array_column($top_left_col_elements, 'element_id')) === FALSE ) 
                            || 
                            ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id')) === FALSE ) 
                            ) :
                            $top_left_col_class     = $top_col_class;
                            $top_left_col_class[]   = 'justify-content-start';
                            ?>
                            <div class="<?php echo esc_attr( implode( ' ', $top_left_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $top_left_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id')) === FALSE ) :
                            $top_center_col_class      = $top_col_class;
                            $top_center_col_class[]    = 'justify-content-center';?>
                            <div class="<?php echo esc_attr( implode( ' ', $top_center_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $top_center_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( 
                            ( ! empty( $top_right_col_elements ) && array_search('none', array_column($top_right_col_elements, 'element_id')) === FALSE )
                            ||
                            ( ! empty( $top_center_col_elements ) && array_search('none', array_column($top_center_col_elements, 'element_id')) === FALSE )
                            ) :
                            $top_right_col_class    = $top_col_class;
                            $top_right_col_class[]  = 'justify-content-end';?>
                            <div class="<?php echo esc_attr( implode( ' ', $top_right_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $top_right_col_elements ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php
            }
        }
        // Main Section
        if ( !empty( $footer_elements ) && in_array( 'main', $footer_elements, true ) ) {
            $main_left_col_elements      = get_theme_mod( 'footer_main_left_elements', 
            [
                [
                    'element_id' => 'copyright'
                ]
            ] );
            $main_center_col_elements    = get_theme_mod( 'footer_main_center_elements');
            $main_right_col_elements     = get_theme_mod( 'footer_main_right_elements');
            $main_footer_class           = ['row site-footer-row'];
            $main_col_class              = ['site-footer-section'];
            $main_col_class[]            = ( ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id') ) === FALSE ) 
                                            && ( 
                                                ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id') ) === FALSE )
                                                ||
                                                ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id') ) === FALSE )
                                                ) ) 
                                            ? 'col-12 col-md-4' 
                                            : ( 
                                                ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id') ) === FALSE )
                                                &&
                                                ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id') ) === FALSE )
                                                ? 'col-12 col-md-6'
                                                : 'col-12'
                                            );
            $main_col_class[]            = 'd-flex align-items-center';

            // If any left and right column is active
            if ( 
                ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id') ) === FALSE )
                &&
                ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id') ) === FALSE )
             ) {
                $main_footer_class[] = 'has-sides-column';
            }
            else {
                $main_footer_class[] = 'no-sides-column';
            }
            // If center column is active
            if ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id') ) === FALSE ) {

                $main_footer_class[] = ( empty( $main_left_col_elements ) && empty( $main_right_col_elements ) ) ? 'has-only-center-column has-center-column' : 'has-center-column';
            }
            else {
                $main_footer_class[] = 'no-center-column';
            }

            if ( ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id')) === FALSE ) || ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id')) === FALSE ) || ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id')) === FALSE ) ) {
            ?>
            <div class="d-flex align-items-center site-footer-wrap site-footer-main-row">
                <div class="container">
                    <div class="<?php echo esc_attr( implode( ' ', $main_footer_class ) ); ?>">

                        <?php if ( 
                            ( ! empty( $main_left_col_elements ) && array_search('none', array_column($main_left_col_elements, 'element_id')) === FALSE ) 
                            || 
                            ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id')) === FALSE ) 
                            ) :
                            $main_left_col_class     = $main_col_class;
                            $main_left_col_class[]   = 'justify-content-start';
                            ?>
                            <div class="<?php echo esc_attr( implode( ' ', $main_left_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $main_left_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id')) === FALSE ) :
                            $main_center_col_class      = $main_col_class;
                            $main_center_col_class[]    = 'justify-content-center';?>
                            <div class="<?php echo esc_attr( implode( ' ', $main_center_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $main_center_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( 
                            ( ! empty( $main_right_col_elements ) && array_search('none', array_column($main_right_col_elements, 'element_id')) === FALSE )
                            ||
                            ( ! empty( $main_center_col_elements ) && array_search('none', array_column($main_center_col_elements, 'element_id')) === FALSE )
                            ) :
                            $main_right_col_class    = $main_col_class;
                            $main_right_col_class[]  = 'justify-content-end';?>
                            <div class="<?php echo esc_attr( implode( ' ', $main_right_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $main_right_col_elements ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php
            }
        }
        // Bottom Section
        if ( !empty( $footer_elements ) && in_array( 'bottom', $footer_elements, true ) ) {
            $bottom_left_col_elements      = get_theme_mod( 'footer_bottom_left_elements');
            $bottom_center_col_elements    = get_theme_mod( 'footer_bottom_center_elements');
            $bottom_right_col_elements     = get_theme_mod( 'footer_bottom_right_elements');
            $bottom_footer_class           = ['row site-footer-row'];
            $bottom_col_class              = ['site-footer-section'];
            $bottom_col_class[]            = ( ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id') ) === FALSE ) 
                                            && ( 
                                                ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id') ) === FALSE )
                                                ||
                                                ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id') ) === FALSE )
                                                ) ) 
                                            ? 'col-12 col-md-4' 
                                            : ( 
                                                ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id') ) === FALSE )
                                                &&
                                                ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id') ) === FALSE )
                                                ? 'col-12 col-md-6'
                                                : 'col-12'
                                            );
            $bottom_col_class[]            = 'd-flex align-items-center';

            // If any left and right column is active
            if ( 
                ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id') ) === FALSE )
                &&
                ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id') ) === FALSE )
             ) {
                $bottom_footer_class[] = 'has-sides-column';
            }
            else {
                $bottom_footer_class[] = 'no-sides-column';
            }
            // If center column is active
            if ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id') ) === FALSE ) {

                $bottom_footer_class[] = ( empty( $bottom_left_col_elements ) && empty( $bottom_right_col_elements ) ) ? 'has-only-center-column has-center-column' : 'has-center-column';
            }
            else {
                $bottom_footer_class[] = 'no-center-column';
            }

            if ( ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id')) === FALSE ) || ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id')) === FALSE ) || ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id')) === FALSE ) ) {
            ?>
            <div class="d-flex align-items-center site-footer-wrap site-footer-bottom-row">
                <div class="container">
                    <div class="<?php echo esc_attr( implode( ' ', $bottom_footer_class ) ); ?>">

                        <?php if ( 
                            ( ! empty( $bottom_left_col_elements ) && array_search('none', array_column($bottom_left_col_elements, 'element_id')) === FALSE ) 
                            || 
                            ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id')) === FALSE ) 
                            ) :
                            $bottom_left_col_class     = $bottom_col_class;
                            $bottom_left_col_class[]   = 'justify-content-start';
                            ?>
                            <div class="<?php echo esc_attr( implode( ' ', $bottom_left_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $bottom_left_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id')) === FALSE ) :
                            $bottom_center_col_class      = $bottom_col_class;
                            $bottom_center_col_class[]    = 'justify-content-center';?>
                            <div class="<?php echo esc_attr( implode( ' ', $bottom_center_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $bottom_center_col_elements ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( 
                            ( ! empty( $bottom_right_col_elements ) && array_search('none', array_column($bottom_right_col_elements, 'element_id')) === FALSE )
                            ||
                            ( ! empty( $bottom_center_col_elements ) && array_search('none', array_column($bottom_center_col_elements, 'element_id')) === FALSE )
                            ) :
                            $bottom_right_col_class    = $bottom_col_class;
                            $bottom_right_col_class[]  = 'justify-content-end';?>
                            <div class="<?php echo esc_attr( implode( ' ', $bottom_right_col_class ) ); ?>">
                                <?php bizness_footer_column_elements( $bottom_right_col_elements ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php
            }
        }
    }
}

/**
 * Footer Column Element
 *
 * @param $footer_column_elements
 */
function bizness_footer_column_elements( $footer_column_elements ) {

    foreach ( $footer_column_elements as $column => $single_element ) {

        if ( array_search('none', array_column($footer_column_elements, 'element_id')) === FALSE ) {
            $id = $single_element['element_id'];
            if ( file_exists( trailingslashit( get_template_directory() ) . 'template-parts/footer/' . $id . '.php' ) ) {
                get_template_part( 'template-parts/footer/' . $id );
            } else {
                echo esc_html__( 'Create New File ', 'bizness' ) . 'template-parts/footer/' . $id . '.php';
            }
        }
    }
}

/*
|--------------------------------------------------------------------------
| Social Network Options
|--------------------------------------------------------------------------
|
| Returns an array social network.
*/
if ( ! function_exists('bizness_social_network_list') ) {
    function bizness_social_network_list() {
        /**
         * Filters social network list
         *
         */
        return apply_filters(
            'bizness_social_network_list',
            array(
                'fa-facebook'       => esc_html__( 'Facebook', 'bizness' ),
                'fa-twitter'        => esc_html__( 'Twitter', 'bizness' ),
                'fa-instagram'      => esc_html__( 'Instagram', 'bizness' ),
                'fa-linkedin'       => esc_html__( 'Linkedin', 'bizness' ),
                'fa-youtube'        => esc_html__( 'Youtube', 'bizness' ),
                'fa-vimeo'          => esc_html__( 'Vimeo', 'bizness' )
            )
        );
    }
}

/*
|--------------------------------------------------------------------------
| Image Placeholder
|--------------------------------------------------------------------------
|
| Output image placeholder
*/
if ( ! function_exists( 'bizness_image_placeholder' ) ) {
    /**
     * Output image place holder for given size
     *
     * @param string $image_size - Image size.
     */
    function bizness_image_placeholder( $image_size ) {
        echo bizness_get_image_placeholder( $image_size );
    }
}

if ( ! function_exists( 'bizness_get_image_placeholder' ) ) {
    /**
     * Returns image place holder for given size
     *
     * @param string $image_size - Image size.
     *
     * @return string - Image HTML
     */
    function bizness_get_image_placeholder( $image_size ) {

        if ( empty( $image_size ) ) {
            return '';
        }

        // Get custom placeholder image if configured.
        $placeholder_custom_image_url = get_theme_mod( 'image_placeholder_image', '' );
        if ( ! empty( $placeholder_custom_image_url ) ) {
            $placeholder_custom_image_id = bizness_get_attachment_id_from_url( $placeholder_custom_image_url );
            if ( ! empty( $placeholder_custom_image_id ) ) {
                return wp_get_attachment_image( $placeholder_custom_image_id, $image_size, false, '' );
            }
            // Otherwise get default placeholder
        } else {
            return sprintf( '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQImWNgYGBgAAAABQABh6FO1AAAAABJRU5ErkJggg==" alt="%s">', the_title_attribute( 'echo=0' ) );
        }

        return '';
    }
}

/*
|--------------------------------------------------------------------------
| Sidebar Layout
|--------------------------------------------------------------------------
|
| Return sidebar layout
*/
if ( ! function_exists( 'bizness_get_sidebar_layout' ) ) {
    /**
     * Return sidebar layout value
     *
     * @param null $sidebar
     * @return string
     */
    function bizness_get_sidebar_layout($sidebar = 'none') {

        global $post;
        if ($post) {
           // Check meta first to override and return (prevents filters from overriding meta)
            $sidebar = get_post_meta( $post->ID, 'bizness_sidebar_layout', true );
            if ( $sidebar && $sidebar != 'default' ) {
                return $sidebar;
            }
            if ( is_single() ) {
                $sidebar = get_theme_mod( 'post_sidebar_layout', 'right' );
            } elseif ( is_page() ) {
                $sidebar = get_theme_mod( 'page_sidebar_layout', 'right' );
            } else {
                $sidebar = get_theme_mod( 'blog_sidebar_layout', 'right' );
            }
        }
        return $sidebar;
    }
}

/*
|--------------------------------------------------------------------------
| Site Main Primary Classes
|--------------------------------------------------------------------------
| 
*/
if ( ! function_exists( 'bizness_primary_class' ) ) {
    /**
     * Displays the class names for the primary element.
     *
     * @param string|string[] $class Space-separated string or array of class names to add to the class list.
     */
    function bizness_primary_class($class = '') {

        echo 'class="' . esc_attr( implode( ' ', bizness_get_primary_class( $class ) ) ) . '"';
    }
}

if ( ! function_exists( 'bizness_get_primary_class' ) ) {
    /**
     * Retrieves an array of the class names for the primary element.
     *
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @param string|string[] $class Space-separated string or array of class names to add to the class list.
     * @return string[] Array of class names.
     */
    function bizness_get_primary_class( $class = '' ) {
        
        $classes    = array('site-main');

        $classes[]  = bizness_get_sidebar_layout() === 'none' ? 'col-12' : 'col-lg-8';

        if ( ! empty( $class ) ) {
            if ( ! is_array( $class ) ) {
                $class = preg_split( '#\s+#', $class );
            }
            $classes = array_merge( $classes, $class );
        } else {
            // Ensure that we always coerce class to being an array.
            $class = array();
        }

        $classes = array_map( 'esc_attr', $classes );

        /**
         * Filters the list of CSS primary class.
         *
         * @param string[] $classes An array of primary class names.
         * @param string[] $class   An array of additional class names added to the primary.
         */
        $classes = apply_filters( 'bizness_primary_class', $classes, $class );

        return array_unique( $classes );
    }
}

/*
|--------------------------------------------------------------------------
| Display and retrive columns data values.
|--------------------------------------------------------------------------
| 
*/
if ( ! function_exists( 'bizness_columns_data' ) ) {
    /**
     * Output columns data attributes
     *
     * @param null $col_per_row
     * @return void
     */
    function bizness_columns_data($col_per_row = null) {
        echo bizness_get_columns_data($col_per_row);
    }
}

if ( ! function_exists( 'bizness_get_columns_data' ) ) {
    /**
     * Return columns data attributes values
     *
     * @param null $col_per_row
     * @return string
     */
    function bizness_get_columns_data( $col_per_row = null ) {

        if ( $col_per_row == 1 ) {
            return ' data-columns="'.esc_attr($col_per_row).'"';
        }
        elseif ( $col_per_row == 2 ) {
            return ' data-columns=1 data-columns-md="'.esc_attr($col_per_row).'"';
        }
        else {
            return ' data-columns=1 data-columns-md=2 data-columns-lg="'.esc_attr($col_per_row).'"';
        }
    }
}

/*
|--------------------------------------------------------------------------
| Display posts read more button.
|--------------------------------------------------------------------------
| 
*/
if ( ! function_exists( 'bizness_read_more' ) ) {
    /**
     * Post Read More
     *
     * @return void
     */
    function bizness_read_more() {

        $read_more_type = get_theme_mod('blog_post_read_more_btn_type','link');
        ob_start();
        ?>
        <div class="read-more-wrap">
            <a href="<?php the_permalink( get_the_ID() ); ?>" class="btn btn-<?php echo esc_attr( $read_more_type ); ?>">
                <?php esc_html_e( 'Read More', 'bizness' ); ?>
            </a>
        </div>

        <?php
        $output = ob_get_clean();

        echo apply_filters( 'bizness_read_more', $output ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}

/*
|--------------------------------------------------------------------------
| Page Title
|--------------------------------------------------------------------------
|
| Display the page title based on page load
*/
if ( ! function_exists( 'bizness_page_title' ) ) {
    /**
     * Page title
     *
     * @return void
     */
    function bizness_page_title() {
        $html_tag = 'h1';
        if ( is_page() ){
            the_title( '<' . esc_attr($html_tag) . ' class="page-title">', '</' . esc_attr($html_tag) . '>' );
        }
        elseif ( is_404() ) {
            echo '<' . esc_attr($html_tag) . ' class="page-title">' . esc_html__( '404 Page','bizness' ) . '</' . esc_attr($html_tag) . '>';
        }
        elseif ( is_single() ) {
            the_title( '<' . esc_attr($html_tag) . ' class="page-title">', '</' . esc_attr($html_tag) . '>' );
        }
        elseif ( is_home() && ! is_front_page() ) {
            echo '<' . esc_attr($html_tag) . ' class="page-title">' . esc_html__( 'Blog','bizness' ) . '</' . esc_attr($html_tag) . '>';
        }
        elseif( is_search() ) {
            echo '<' . esc_attr($html_tag) . ' class="page-title">' . get_search_query() . '</' . esc_attr($html_tag) . '>';
        }
        elseif ( is_archive() ) {
            the_archive_title( '<' . esc_attr($html_tag) . ' class="page-title">', '</' . esc_attr($html_tag) . '>' );
        }

    }
}

/*
|--------------------------------------------------------------------------
| Page Description
|--------------------------------------------------------------------------
|
| Display the page description based on page load
*/
if ( ! function_exists( 'bizness_page_description' ) ) {
    /**
     * Page description
     *
     * @return void
     */
    function bizness_page_description() {

        echo '<div class="page-description">';
        if ( is_singular() ){
            the_excerpt();
        }
        elseif (is_404()) {
            $description = esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bizness' );
            echo wpautop( wp_kses_post( $description ));
        }
        else {
            the_archive_description();
        }
        echo '</div><!-- .page-description -->';
    }
}

/*
|--------------------------------------------------------------------------
| Trail Breadcrumb
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'bizness_trail_breadcrumb' ) ) {
    /**
     * Display trail breadcrumb
     *
     * @return void
     */
    function bizness_trail_breadcrumb() {
        $defaults = array(
            'show_browse'   => false,
            'echo'          => true,
            'labels'        => array(
                'home'      => esc_html__( 'Home', 'bizness' ),
            ),
        );
        $args = apply_filters( 'breadcrumb_trail_args', $defaults );

        $breadcrumb = apply_filters( 'breadcrumb_trail_object', null, $args );

        if ( ! is_object( $breadcrumb ) )

            $breadcrumb = new Bizness_Breadcrumb_Trail( $args );

        return $breadcrumb->trail();
    }
}

/*
|--------------------------------------------------------------------------
| Page Site Class
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'bizness_site_class' ) ) {
    /**
     * Add the classes into page site
     *
     * @param string|array $class One or more classes to add to the class list.
     * @return void
     */
    function bizness_site_class() {
        
        $classes = ['site'];

        if ( ! empty( $class ) ) {
            if ( ! is_array( $class ) ) {
                $class = preg_split( '#\s+#', $class );
            }
            $classes = array_merge( $classes, $class );
        } else {
            // Ensure that we always coerce class to being an array.
            $class = array();
        }

        $classes = array_map( 'sanitize_html_class', $classes );

        /**
         * Filter site class names
         */
        $classes = apply_filters( 'bizness_site_class', $classes, $class );

        $classes = array_unique( $classes );

        echo 'class="' . esc_attr( join( ' ', $classes ) ) . '"'; // WPCS: XSS ok.

    }
}

/*
|--------------------------------------------------------------------------
| Get Author ID
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'bizness_get_author_id' ) ) {
	function bizness_get_author_id() {
		$author_id = get_queried_object_id();

		if (is_singular()) {
			$author_id = get_the_author_meta('ID');
		}

		if (! $author_id) {
			$author = get_user_by('slug', get_query_var('author_name'));
			$author_id = $author->ID;
		}

		return $author_id;
	}
}

/*
|--------------------------------------------------------------------------
| Author Box
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'bizness_author_box' ) ) {
    /**
     * Author Box Detail
     * 
     * @return void
     */
    function bizness_author_box() {
        // Only display for standard posts
        if ( 'post' != get_post_type() ) {
            return;
        }

        // Get author data
        $author             = get_the_author();
        $author_description = get_the_author_meta( 'description' );
        $author_url         = esc_url( get_author_posts_url( bizness_get_author_id() ) );
        $author_avatar      = get_avatar( bizness_get_author_id(), apply_filters( 'bizness_avatar_size', 150 ) );
        $author_website     = get_the_author_meta( 'url' );
        $posts_count        = count_user_posts(bizness_get_author_id());

        $section_heading    = get_theme_mod('single_post_author_box_section_heading','');
        $content_elements   = get_theme_mod('single_post_author_box_elements',[
            'name',
            'website',
            'bio-info',
            'articles'
        ]);
        ?>

        <div class="author-box-wrapper">
            <?php if ($section_heading !== '') { ?>
                <h3 class="entry-title"><?php echo esc_html($section_heading);?></h3>
            <?php } ?>
            <div class="author-content d-flex flex-row text-left">

                <?php if (get_theme_mod('single_post_author_box_avatar_enable',true)) { ?>
                    <figure class="author-avatar">
                        <a href="<?php echo esc_url( $author_url ); ?>" rel="<?php esc_attr_e( 'Author', 'bizness'); ?>"><?php echo wp_kses_post( $author_avatar ); ?></a>
                    </figure><!-- .author-avatar -->
                <?php } ?>

                <?php 
                if (!empty($content_elements)) { ?>
                    <div class="author-details">

                        <?php
                        foreach ( $content_elements as $index => $element ) {

                            echo '<div class="content-element element-'.esc_attr($element).'">';
                            // Is Author Name
                            if ( $element === 'name' ) {
                                ?>
                                <h5 class="author-name">
                                    <a href="<?php echo esc_url( $author_url ); ?>" class="author-name" rel="<?php esc_attr_e( 'Author', 'bizness'); ?>"><?php echo esc_html( $author ); ?></a>
                                </h5>
                                <?php
                            }
                            // Is Author Website
                            elseif ( $element === 'website' ) {
                                ?>
                                <div class="author-website">
                                    <a href="<?php echo esc_url( $author_website ); ?>" target="_blank"><?php echo esc_url( $author_website ); ?></a>
                                </div>
                                <?php
                            }
                            // Is Author Bio Info
                            elseif ( $element === 'bio-info' ) {
                                ?>
                                <div class="author-bio">
                                    <?php echo wp_kses_post( wpautop( $author_description ) ); ?>
                                </div>
                                <?php
                            }
                            // Is Author Articles
                            elseif ( $element === 'articles' ) {
                                printf( '<div class="author-articles"><a href="%1$s" class="author-more">' . esc_html__( 'Total Articles:', 'bizness' ) . ' %2$s</a></div>', esc_url( $author_url ), absint($posts_count) );
                            }
                            
                            echo '</div><!-- .content-element -->';
                        }
                        
                        ?>
                    </div><!-- .author-details -->
                <?php } ?>
            </div><!-- .author-content -->
        </div><!-- .author-box-wrapper -->
        <?php
    }
}

/*
|--------------------------------------------------------------------------
| Related Posts
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'bizness_related_posts' ) ) {
    /**
     * Related Posts
     * 
     * @return void
     */
    function bizness_related_posts() {
        // Only display for standard posts
        if ( 'post' != get_post_type() ) {
            return;
        }

        global $post, $authordata;
        $current_post   = $post;
        $args           = [];
        $posts_limit    = get_theme_mod('single_related_post_limit',4);

        // Categories arguments
        $cats   = wp_get_post_categories( $post->ID, [ 'fields' => 'ids' ] );
        if ( ! empty( $cats ) ) {
            $args['posts_per_page']         = absint($posts_limit);
            $args['post__not_in']           = [$current_post->ID];
            $args['category__in']           = $cats;
            $args['no_found_rows']          = true;
            $args['ignore_sticky_posts']    = true;
        }
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :

            // Columns per row
            $col_per_row    = [];
            $col_per_row[]  = get_theme_mod('single_related_post_sm_col_per_row','col-12');
            $col_per_row[]  = get_theme_mod('single_related_post_md_col_per_row','col-md-6');
            $col_per_row[]  = get_theme_mod('single_related_post_col_per_row','col-lg-6');

            $section_heading = get_theme_mod('single_related_post_heading',esc_html__( 'Related Posts', 'bizness' ));
            $content_elements= get_theme_mod('single_related_post_elements_structure',[
                'post-image',
                'post-title',
                'post-excerpt'
            ]);
            ?>

            <div class="related-posts-section">
                <?php if ($section_heading !== '') { ?>
                    <h3 class="entry-title"><?php echo esc_html($section_heading);?></h3>
                <?php } ?>

                <div class="row">

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post();

                        /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                        ?>
                        <div class="<?php echo implode( ' ', $col_per_row ); ?>">
                            <?php 
                            if (!empty($content_elements)) { ?>
                                <div class="post post-structure">
                                    <?php
                                    foreach ( $content_elements as $index => $element ) {

                                        echo '<div class="content-element element-'.esc_attr($element).'">';
                                        // Is Featured Image
                                        if ( $element === 'post-image' ) {
                                            $image_size = get_theme_mod('single_related_post_image_size','medium_large');
                                            bizness_post_thumbnail($image_size);
                                        }
                                        // Is Post Title
                                        elseif ( $element === 'post-title' ) {
                                            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                                        }
                                        // Is Post Excerpt
                                        elseif ( $element === 'post-excerpt' ) {
                                            the_excerpt();
                                        }
                                        // Is Post Meta
                                        elseif ( $element === 'meta-tags' ) {
                                            $post_meta = get_theme_mod('single_related_post_meta_elements',['post-date','post-author']);
                                            if ( !empty( $post_meta )) {
                                                bizness_the_post_meta( get_the_ID(),'related-posts-meta', $post_meta );
                                            }
                                        }
                                        // Is Post Read More
                                        elseif ( $element === 'read-more' ) {
                                            bizness_read_more();
                                        }

                                        echo '</div><!-- .content-element -->';
                                    }
                                    
                                    ?>
                                </div><!-- .post-structure -->
                            <?php } ?>
                           
                        </div><!-- .col-lg-6 -->

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                </div>
            </div><!-- .related-post-wrapper -->
        <?php
        endif;
    }
}
