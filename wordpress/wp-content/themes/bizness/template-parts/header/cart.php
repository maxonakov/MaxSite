<?php
/**
 * Template part for displaying header wc cart
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */

 $widget_class = is_cart() ? 'wc-cart-widget-wrapper d-none' : 'wc-cart-widget-wrapper';
?>
<div class="d-flex align-items-center site-header-item">
    <div class="d-flex align-items-center header-wc-cart-wrap">
        <a class="wc-icon cart-icon" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'bizness' ); ?>">
            <i class="fa fa-shopping-basket"></i>
            <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ); ?></span>
        </a>
        <div class="<?php echo esc_attr( $widget_class ); ?>">
            <?php $instance = array(
                'title' => esc_html__( 'Your Cart', 'bizness' ),
            );
            the_widget( 'WC_Widget_Cart', $instance ); ?>
        </div>
    </div>
</div>
