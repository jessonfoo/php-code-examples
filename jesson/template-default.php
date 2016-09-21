<?php
/*
 * Template Name: jesson default page template
 */
get_header();
?>

<?php
do_action( 'woocommerce_before_my_page_page' );
;
?>
  <!-- <div class="container"> -->
  <!--       <img class="full&#45;width pb&#45;10" src="<?php echo get_site_url(); ?>/wp&#45;content/uploads/banner_shop.jpg"> -->
  <!-- </div> -->
  <div class="container bg-white mtb-20">
    <div align=center class="full-width w-1200">
      <div class="row-fluid a-left f-l mt-50" style="padding:0px 25px 50px 25px;width:95.7%;">
        <?php while (have_posts()):the_post(); the_content(); endwhile;?> 
      </div>
    </div>
    <div style="width:calc(100% - 4px);" class="row-fluid mb-30 pt-30 border-lgrey br-b-8">
      <span class="span12 plr-30">
        <?php $values = get_post_custom_values('content_2');
          $shortcode_output = do_shortcode($values[0]);
          print $shortcode_output;
          // echo get_post_meta(get_the_ID(), 'content_2', 1 ); ?>
      </span>
    </div>
  </div>

<!-- <style> -->
<!-- a:hover, .button:hover, button:hover, input[type=submit]:hover,  .page&#45;numbers li a:hover, .pagination li a:hover,  .thumbnail:hover i, .demo&#45;icons .demo&#45;icon:hover, .demo&#45;icons .demo&#45;icon:hover i, .switchToGrid:hover, .switchToList:hover, .switcher&#45;active, .switcher&#45;active:hover, .emodal .close&#45;modal:hover, .prev.page&#45;numbers:hover:after, .next.page&#45;numbers:hover:after, strong.active, span.active, em.active, a.active, p.active, .shopping&#45;cart&#45;widget .cart&#45;summ .price&#45;summ, .products&#45;small .product&#45;item h5 a:hover, .slider&#45;container .slider&#45;next:hover:before, .slider&#45;container .slider&#45;prev:hover:before, .fullwidthbanner&#45;container .tp&#45;rightarrow.default:hover:before, .fullwidthbanner&#45;container .tp&#45;leftarrow.default:hover:before, .side&#45;area .close&#45;block:hover i, .back&#45;to&#45;top:hover, .back&#45;to&#45;top:hover i, .product&#45;info .single_add_to_wishlist:hover:before, .images .main&#45;image&#45;slider ul.slides .zoom&#45;link i:hover, .footer_menu li:hover:before, .small&#45;slider&#45;arrow.arrow&#45;left:hover, .small&#45;slider&#45;arrow.arrow&#45;right:hover, .active2:hover, .checkout&#45;steps&#45;nav a.button.active:hover  { -->
<!--   color: grey !important; -->
<!--   text&#45;decoration:none !important; -->
<!-- } -->
<!-- </style> -->

<?php get_footer();?>
