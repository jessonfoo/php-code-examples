<?php
/**
 * Loop Add to Cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;

$class = '';

if(etheme_get_option('ajax_addtocart') && $product->is_purchasable()) {
	$class .= 'etheme_add_to_cart_button ';
}

				
echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s<img class="ml-10" src="'. get_site_url().'/wp-content/uploads/arrow_white.png"></a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		$class,
		esc_attr( $product->product_type ),
		esc_html( $product->add_to_cart_text() )
	),
$product );
