<?php
define('ETHEME_DOMAIN', 'legenda');
require_once( get_template_directory() . '/framework/init.php' );
include 'var.php';

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie', 'product' ) );

add_action( 'edit_page_form', 'gzn_e2' );
function gzn_2() {
  wp_editor( $content, 'gzne2' );
}


function generalBannerTop($title) {
  $url = get_site_url();
  echo " <div class='vb-b test container full-width' style='background:url( <?php echo get_img(($texture));?>) no-repeat 0% 0%;height:300px;margin-top:-35px;'>";
  echo "<div class='w-1300 mt-150 f-l'>";
  echo "<span class='a-left mw-1250'>";
  echo "<h1 class='pl-50 color-white fs-64 f-airborne bold'> $title </h1> </span> </div> </div> ";
}


function woo_check() {
  if(  function_exists ( "is_woocommerce" ) && is_woocommerce()){
    return true;
  }
  $woocommerce_keys   =   array ( "woocommerce_shop_page_id" ,
                                  "woocommerce_cart_page_id" ,
                                  "woocommerce_checkout_page_id" ,
                                  "woocommerce_pay_page_id" ,
                                  "woocommerce_view_order_page_id" ,
                                  "woocommerce_edit_address_page_id" ,
                                  "woocommerce_thanks_page_id" ,
                                  "woocommerce_terms_page_id" ,
                                  "woocommerce_myaccount_page_id" ,
                                  "woocommerce_change_password_page_id" ,
                                  "woocommerce_logout_page_id" ,
                                  "woocommerce_lost_password_page_id" ) ;
  foreach ( $woocommerce_keys as $wc_page_id ) {
          if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
                  return true ;
          }
  }
  return false;
}


function getParentSlug() {
  global $post;
  if($post->post_parent == 0) return '';
  $post_data = get_post($post->post_parent);
  return $post_data->post_name;
  echo $post_data->post_name;
}


function param_text() { return trim($_SERVER["REQUEST_URI"],'/-_+=%$#@!^*'); }
function param_text_upper() {
  return strtoupper(param_text());
}

function cur_page_url() {
  $pageURL = 'http';
  if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";
  }
  $pageURL .= "://";
  if ($_SERVER["SERVER_PORT"] != "80") { $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
  } else { $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  }
  return $pageURL;
}

function gml($content,$url,$name){
  echo '<span class="span3"><div class="row-fluid bg-lgrey pb-20 br-t-8">';
  echo '<a class="color-lblue f-play fs-20" href="' . get_site_url() . $url . '"><img class="mt-30 mb-10" src="';
  get_img($content);
  echo '"><br>' . $name . '</a>';
  echo '</div>';
  echo '<div style="padding-top:3px;padding-bottom:3px;" class="row-fluid bg-lblue br-b-8">';
  echo '<a class="f-r color-white f-play fs-16" href="' . get_stylesheet_directory_uri() . $url . '">Shop Now<img style="margin-right:20px;margin-top:-2px; margin-left:10px; max-width:15px;" src="';
  get_img('arrow_white.png');
  echo '"></a>';
  echo'</div></span>';
}
function gmd($content,$url,$name){
  echo '<span class="span3"><div class="row-fluid bg-lgrey pb-20 br-t-8">';
  echo '<a class="color-lblue f-play fs-20" href="' . get_site_url() . $url . '"><img class="mt-30 mb-10" src="';
  get_img($content);
  echo '"><br>' . $name . '</a>';
  echo '</div>';
  echo '<div style="padding-top:3px;padding-bottom:3px;" class="row-fluid bg-lblue br-b-8">';
  echo '<a class="f-r color-white f-play fs-16" href="' . get_site_url() . $url . '">Shop Now<img style="margin-right:20px;margin-top:-2px; margin-left:10px; max-width:15px;" src="';
  get_img('arrow_white.png');
  echo '"></a>';
  echo'</div></span>';
}
function get_img($str){ echo get_site_url() . '/wp-content/uploads/' . $str; }

function gcbpid ($id){

  $output= [];
  $args = array( 'number'=> $number, 'orderby'=> $orderby, 'order'=> $order, 'hide_empty'=> $hide_empty, 'include'=> $ids);
  $product_categories = get_terms( 'product_cat', $args );
  foreach($product_categories as $p) {
    $pid = $p -> parent;
    if ($pid == $id) {
      $output[]= $p;
    //echo $pid;
	}
  }
  return $output;

}

function get_user_role() {
	global $current_user;

	$user_roles = $current_user->roles;
	$user_role = array_shift($user_roles);

	return $user_role;
}

function addtestcart() {

		global $woocommerce;
		$product_id = 3642;
		$found = false;
		$cart_total = 0;


			if( $woocommerce->cart->total >= $cart_total ) {
			//check if product already in cart
			if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) {
				foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values ) {
					$_product = $values['data'];
					if ( $_product->id == $product_id )
						$found = true;
				}
				// if product not found, add it
				if ( ! $found )
					$woocommerce->cart->add_to_cart( $product_id );
			} else {
				// if no products in cart, add it
				$woocommerce->cart->add_to_cart( $product_id );
			}
		}

}

function wc_diff_rate_for_user( $tax_class, $product ) {
	if ( is_user_logged_in() && current_user_can( 'WHOLESALE_TAX_FREE' ) ) {
		$tax_class = 'Zero Rate';
	}
		if ( is_user_logged_in() && current_user_can( 'WHOLESALE_DISCOUNT_TAX_FREE' ) ) {
		$tax_class = 'Zero Rate';
	}

	return $tax_class;
}
add_filter( 'woocommerce_product_tax_class', 'wc_diff_rate_for_user', 1, 2 );

add_filter( 'woocommerce_variable_free_price_html',  'hide_free_price_notice' );

add_filter( 'woocommerce_free_price_html',           'hide_free_price_notice' );

add_filter( 'woocommerce_variation_free_price_html', 'hide_free_price_notice' );



/**
 * Hides the 'Free!' price notice
 */
function hide_free_price_notice( $price ) {

  return 'Call for Pricing';
}



/**
 * Hide shipping rates when free shipping is available.
 * Updated to support WooCommerce 2.6 Shipping Zones.
 *
 * @param array $rates Array of rates found for the package.
 * @return array
 */
function my_hide_shipping_when_free_is_available( $rates ) {
	$free = array();
	foreach ( $rates as $rate_id => $rate ) {
		if ( 'main' === $rate->method_id ) {
			$free[ $rate_id ] = $rate;
			break;
		}
	}
	return ! empty( $free ) ? $free : $rates;
}
add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );