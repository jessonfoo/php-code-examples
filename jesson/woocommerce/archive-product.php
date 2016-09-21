<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>

<?php 
	extract(etheme_get_shop_sidebar());
	$sidebarname = 'shop';
?>

<!-- <div class="page&#45;heading bc&#45;type&#45;<?php // etheme_option('breadcrumb_type'); ?>"> -->
<!-- 	<div class="container"> -->
<!-- 		<div class="row&#45;fluid"> -->
<!-- 			<div class="span12 a&#45;center"> -->
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		
					<!-- <h1 class="title"><span><?php // woocommerce_page_title(); ?></span></h1> -->
		
				<?php  endif; ?>
				<?php
					/**
					 * woocommerce_before_main_content hook
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 */
					do_action('woocommerce_before_main_content');
				?>
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- </div> -->
<div class="container">
	<div class="page-content sidebar-position-<?php echo $position; ?> responsive-sidebar-<?php echo $responsive; ?>">
		<div class="container w-1200">
		    
		    <?php
$cate = get_queried_object();
$cateID = $cate->term_id;

?>		    
  <div class="row-fluid bg-lblue br-8" style="  margin-top: 8px;">
					<h3 class="span2 color-white pl-10 mt-15 mb-10 fs-18 lh-1 upcase f-play d-ib" style="white-space:nowrap;margin-top:20px;">product search</h3>
					<div class="span10 mt-10 plr-30 lh-1 upcase f-play d-ib">
          <form id="ps-form" class="color-white f-play ng-pristine ng-valid" action="<?php echo get_site_url();?>/shop-query/" method="post">
						<div class="row-fluid">
             
									<input type="hidden" name="ptype" value="<?php echo $cateID;?>">
           
              <label for="pbrand" style="display:inline-flex;width:7%;"> Brand: </label>
              <span style="display:inline-flex;width:14%;">
                <select name="pbrand" id="cat2" class="selector">
                  <option value="">ANY</option>    
                  <option value="hp">HP</option>    
                  <option value="lexmark">Lexmark</option>    
                  <option value="canon">Canon</option>    
                  <option value="xerox">Xerox</option>    
                </select>
            </span>
									<label for="pmodel" style="display:inline-flex;width:7%;"> Model: </label> 
							<span style="display:inline-flex;width:14%;"><input type="text" name="pmodel" >
              </span>
              <label for="pnumber" style="display:inline-flex;width:7%;">Part Number: </label>
							<span style="display:inline-flex;width:14%;">
                <input type="text" name="pnumber" >
              </span>
                <input type="submit" name="submit" class="p-rel" value="true" style="display: inline-flex; width: 75px; height: 25px; margin-top: -11px; background: rgba(0, 0, 0, 0);color:transparent;z-index:99999999999999999999999;">
                  <i class="fa fa-search fa-2x color-white t-0 l-0 p-rel"></i> 
            </div>
      </form>
  </div>
</div><br><br>
		<div class="row-fluid pb-50">
			<?php if($position != 'without' && ($position == 'left' || $responsive == 'top')): ?>
				<div class="<?php echo $sidebar_span; ?> sidebar sidebar-left">
					<?php etheme_get_sidebar($sidebarname); ?>
				</div>
			<?php endif; ?>
			
			<div style="width:72%;background:white;" class="plr-20 content <?php echo $content_span; ?>">
		              

					<?php if ( have_posts() ) : 
                    
    					// etheme_category_header();
    					
    					// do_action( 'woocommerce_archive_description' );
						
                if (woocommerce_products_will_display()): ?>
							
							<div class="toolbar toolbar-top">
								<?php
									/**
									 * woocommerce_before_shop_loop hook
									 *
									 * @hooked woocommerce_result_count - 20
									 * @hooked woocommerce_catalog_ordering - 30
									 */
									do_action( 'woocommerce_before_shop_loop' );
								?>
								<div class="clear"></div>
							</div>
						
						<?php endif ?>

						<?php $cats_displayed = woocommerce_product_subcategories(array('before' => '<div class="loop-subcategories">', 'after' => '<div class="clear"></div></div>')); ?>

						<?php woocommerce_product_loop_start(); ?>


							<?php while ( have_posts() ) : the_post(); ?>
			
								<?php woocommerce_get_template_part( 'content', 'product' ); ?>
			
							<?php endwhile; // end of the loop. ?>

							<?php if (etheme_get_option('product_img_hover') == 'tooltip'): ?>
								<script type="text/javascript">imageTooltip(jQuery('.imageTooltip'));</script>
							<?php endif ?>
							
							<div class="clear"></div>
							
						<?php woocommerce_product_loop_end(); ?>
			
						<div class="toolbar toolbar-bottom">
							<?php
								/**
								 * woocommerce_after_shop_loop hook
								 *
								 * @hooked woocommerce_pagination - 10
								 */
								do_action( 'woocommerce_after_shop_loop' );
							?>
							<div class="clear"></div>
						</div>
			
					<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
			
						<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>
			
					<?php endif; ?>
			
				<?php
					/**
					 * woocommerce_after_main_content hook
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action('woocommerce_after_main_content');
				?>
			


			</div>

			<?php if($position != 'without' && ($position == 'right' || $responsive == 'bottom')): ?>
				<div class="<?php echo $sidebar_span; ?> sidebar sidebar-right">
					<?php etheme_get_sidebar($sidebarname); ?>
				</div>
			<?php endif; ?>
		</div>

	</div>
</div>
<?php get_footer('shop'); ?>
