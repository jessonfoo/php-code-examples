<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
header("Content-Type: text/html; charset=ISO-8859-1");
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;


?>
<div itemprop="description" class="short-description" style="font-family:play;">


	<?php 
	
the_content(); 

	?>
</div>