<?php
/**
 * Bizness Customizer Styles
 *
 * @package Bizness
 */

class Bizness_Customizer_Inline_Style {

    /**
     * Get CSS Built from Customizer Options.
     *
     * @access static public
     * @param string $type Whether to return CSS for the "front-end" and "customizer-preview".
     * @return string
     */
    public static function css_output( $type = 'front-end' ) {

        ob_start();

        // Front-End Styles.
        if ('front-end' === $type) {
            // Blog Content Alignment
            $blog_content_text_align = get_theme_mod('blog_post_content_alignment','left');
            if ($blog_content_text_align === 'left') {
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap'],
                    ['text-align'],
                    'left'
                );
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap .post-meta-wrapper ul.post-meta,.bizness-blog .section-post-container .entry-content-wrap .social-share-wrap'],
                    ['-ms-flex-pack'],
                    'start'
                );
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap .post-meta-wrapper ul.post-meta,.bizness-blog .section-post-container .entry-content-wrap .social-share-wrap'],
                    ['justify-content'],
                    'flex-start'
                );
            }
            elseif ($blog_content_text_align === 'center') {
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap'],
                    ['text-align'],
                    'center'
                );
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap .post-meta-wrapper ul.post-meta,.bizness-blog .section-post-container .entry-content-wrap .social-share-wrap'],
                    ['-ms-flex-pack'],
                    'center'
                );
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap .post-meta-wrapper ul.post-meta,.bizness-blog .section-post-container .entry-content-wrap .social-share-wrap'],
                    ['justify-content'],
                    'center'
                );  
            }
            elseif ($blog_content_text_align === 'right') {
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap'],
                    ['text-align'],
                    'right'
                );
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap .post-meta-wrapper ul.post-meta,.bizness-blog .section-post-container .entry-content-wrap .social-share-wrap'],
                    ['-ms-flex-pack'],
                    'end'
                );
                self::generate_css(
                    ['.bizness-blog .section-post-container .entry-content-wrap .post-meta-wrapper ul.post-meta,.bizness-blog .section-post-container .entry-content-wrap .social-share-wrap'],
                    ['justify-content'],
                    'flex-end'
                );
            }
            
            // Team Gradient Color
            if (get_theme_mod('front_page_team_bg_type','color_image') === 'colors_gradient') {
                self::gradient_colors(
                    '.bizness-team-section',
                    'front_page_team_bg_gradient',
                    [
                        'color_1'            => '',
                        'color_2'            => ''
                    ]
                );
            }

            // Portfolio Gradient Color
            if (get_theme_mod('front_page_portfolio_bg_type','color_image') === 'colors_gradient') {
                self::gradient_colors(
                    '.bizness-portfolio-section',
                    'front_page_portfolio_bg_gradient',
                    [
                        'color_1'            => '',
                        'color_2'            => ''
                    ]
                );
            }
        }

        // Return the results.
        return ob_get_clean();

    }

    /**
     * Gradient control value output
     *
     * @access static public
     * @param array $selector
     * @param string $setting
     * @param null $default
     * @return string
     */
    public static function gradient_colors( $selector, $setting, $default = null ) {

        $values         = get_theme_mod( $setting, $default );
        $return         = '';
        $output         = '';
    
        if ( $values && $values !== $default && is_array($values) ) {

            if (isset($values['color_1']) || isset($values['color_2'])) {

                if (isset($values['color_1']) && isset($values['color_2'])) {
                     // Set Gradient
                    $output .= 'background:-webkit-linear-gradient(to right,';
                    $output .= isset( $values['color_1'] ) ? esc_attr( $values['color_1'] ) . ', ' : '';
                    $output .= isset( $values['color_2'] ) ? esc_attr( $values['color_2'] ) : '' ;
                    $output .= ')!important;';

                    $output .= 'background:linear-gradient(to right,';
                    $output .= isset( $values['color_1'] ) ? esc_attr( $values['color_1'] ) . ', ' : '';
                    $output .= isset( $values['color_2'] ) ? esc_attr( $values['color_2'] ) : '';
                    $output .= ')!important;';
                }
                else {
                    // Set Background
                    $output .= 'background:';
                    $output .= isset( $values['color_1'] ) ? esc_attr( $values['color_1'] ) : esc_attr( $values['color_2'] ) .'';
                    $output .= '!important;';
                }
            }
        }

        // return property with selector
        $return = ( '' != $output ) ? $selector . '{' . $output . '}'  : '';

        echo $return;
    }
    
    /**
	 * Generate CSS.
	 *
	 * @param array|string $selector The CSS selector.
	 * @param array $property  The CSS style.
	 * @param string $values The CSS value.
	 * @param string $prefix The CSS prefix.
	 * @param string $suffix The CSS suffix.
	 * @param void echo style
	 */
	public static function generate_css( $selector, $property , $values, $prefix = '', $suffix = '', $media = null ) {

		$output = '';

		/*
         * Bail early if we have no $selector elements or properties and $value.
         */
		if ( ! $values || ! $selector ) {
			return;
		}

		if ( $media ) {
			$output .= $media .'{';
		}

		$selector = is_array( $selector ) ? join( ',', $selector ) : $selector;

		$output .= $selector . '{';
		foreach ( $property  as $key => $style ) {
			$output .= $style . ':' . esc_attr( $prefix . $values . $suffix ) . ';';
		}
		$output .= '}';

		if ( $media ) {
			$output .= '}';
		}

		echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

}
new Bizness_Customizer_Inline_Style();