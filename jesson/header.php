<!doctype html>
<html <?php language_attributes();?>>
<?//php wp_deregister_script('jquery');wp_head(); ?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<?php global $etheme_responsive, $woocommerce;?>
	<!-- <meta http&#45;equiv="Content&#45;Type" content="text/html; charset=iso&#45;8859&#45;1" /> -->
<!-- 	<meta name="viewport" content="width=1200"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<?php if (woo_check() != true){ ?>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/#000000.4.2/angular.min.js"></script>
	<?php }?>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script> -->
	<link rel="shortcut icon" href="<?php echo et_get_favicon();?>" />
<!--  <script src="http://code.jquery.com/jquery.min.js"></script> -->
	<title>
		<?php global $page, $paged; wp_title('|', true, 'right'); bloginfo('name');
		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page())) {echo " | $site_description";}
		?>
	</title>


	<?php wp_head();
	// header("Content-Type: text/plain; charset=ISO-8859-1");?>
<!--
<style>
@media only screen and ( max-width: 1399px) and (max-device-width: 1399px){
  body {
      -moz-transform: scale(0.8, 0.8); / Moz-browsers /
      zoom: 0.8; / Other non-webkit browsers /
      zoom: 80%; / Webkit browsers /
  }
}
</style>
-->
<!--
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
-->
</head>
<style>
/* @-ms-viewport{ width: device-width; } */
/* body{ */
/* overflow:visible; */
/* } */
p,body {
color:black !important;
font-size:18px;
font-family: play;
}
.color-white{
color:white !important;
}
input#vfb-4{
color:black;
}
p.f-play.color-white.caps.a-center {
font-size:14px !important;
}

#login-tbar
{
font-size:14px;
}
.nav-sublist-dropdown ul li a{
font-family:play !important;
background-color:#888888;
padding-left:10px !important;
padding-right:10px !important;
font-size:16px!important;

}
.nav-sublist-dropdown {
margin-left:-120px !important;
margin-top:10px;
}

button {
background-color:#0A85D5 !important;
}

</style>



<!-- set angular app -->
<body ng-app="accutek" <?php body_class();?>>

<?php
  // $role= get_user_role();
// if ($role=='editor')addtestcart();

?>
	<?php $ht = 'Accutek Imaging';
	// $ht= apply_filters('custom_header_filter', $ht);?>

	<div class="page-wrapper" align=center>
    <div class="full-width bg-lblue mh-30" style="max-height:30px;">
			<div class="container p-rel">
				<div class="row-fluid">
					<div class="span3">
              <p class="f-play color-white caps a-center" style="margin-top:-2.5px;"> To Place an Order, Please Call 800-218-9222</p>
            <!-- <div class="span6 pt&#45;5"> -->
            <!--   <a href="http://192.185.175.151/~accutek/contacts/" class="f&#45;play color&#45;white caps a&#45;center"> Contact us </a> -->
            <!-- </div> -->
            <!-- <div class="span6 pt&#45;5"> -->
            <!--   <a href="http://192.185.175.151/~accutek/about&#45;us/" class="f&#45;play color&#45;white caps a&#45;center"> about us </a> -->
            <!-- </div> -->
					</div>
					<div class="span4 p-abs t-0 r-0">
						<div id="login-tbar" style="background:url(<?php echo get_site_url();?>/wp-content/uploads/graytab_middle.png) repeat-x;background-size:contain;" class="f-play color-lblue">
							<span class="span4">
								<a href="<?php echo get_site_url();?>/cart" data-toggle="modal"  class="log-in-link color-lblue"> <img src="<?php echo get_site_url();?>/wp-content/uploads/login_arrow.png"> &nbsp; &nbsp; &nbsp; My Cart </a>
							</span>
							<span class="span4">
								<a href="<?php echo get_site_url();?>/wp-login.php" data-toggle="modal"  class="nav-divider-before p-rel color-lblue">
								<?php
								if ( is_user_logged_in() ) {
    echo 'Logout';
} else {
    echo 'Login';
}

								?>
								</a>
							</span>
							<span class="span4">
								<a href="<?php echo get_site_url();?>/track-your-order/" data-toggle="modal" class="nav-divider-before p-rel color-lblue"> Track Order </a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="boxed-content m-0">
			<div class="header-wrapper<?php if (etheme_get_option('fade_animation')):?> fade-in delay3<?php endif;?> header-type-<?php echo $ht;?>">
				<?php if (etheme_get_option('top_bar')):?>
					<div class="top-bar">
						<div class="container">
							<div class="row-fluid">

								<?php if (class_exists('Woocommerce')):?>
									<a href="<?php echo esc_url($woocommerce->cart->get_cart_url());?>" class="shopping-cart-link" >
										<span> <?php _e('Cart', ETHEME_DOMAIN)?> </span>
										<span class="price-summ cart-totals"> <?php echo $woocommerce->cart->get_cart_subtotal();?></span>
									</a>
								<?php endif?>

								<?php if (is_user_logged_in() && etheme_get_option('top_links')):?>
									<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id'));?>" class="my-account-link hidden-desktop"> &nbsp;
									</a>
								<?php  elseif (etheme_get_option('top_links')):?>
								<?php endif?>

								<?php if (etheme_get_option('top_links')):?>
									<div class="top-links hidden-phone a-center">
										<?php etheme_top_links();?>
									</div>
								<?php endif?>
							</div>
						</div>
					</div>
				<?php endif?>
				<!-- <div class="main&#45;nav visible&#45;desktop"> -->
				<!--   <div class="menu&#45;wrapper menu&#45;type<?php etheme_option('menu_type');?>"> -->
				<!--     <div align="left" style="margin&#45;top:&#45;2px;" class="main&#45;menu&#45;container container"> -->
				<?php //etheme_logo(); ?>
				<!--     </div> -->
				<!--   </div> -->
				<!-- </div> -->
				<?php // include 'partials/_main-nav-custom.php';?>
				<!-- <div align=center class="container full&#45;width mw&#45;1100"> -->
                
				
                <!-- 
                <div class="container t-0 p-rel">
					<span class="row-fluid full-width">
						<div class="span4 a-left mn-wr">
						</div>
					</span>
				</div>
                -->
                
			</div>
			<div class="main-nav visible-desktop">
				<div class="menu-wrapper menu-type<?php etheme_option('menu_type'); ?>">
					<div class="logo-with-menu container p-rel" style="">
						<div class="row-fluid p-rel">
							<div id="logo-span" class="span6 d-ib mtb-30">
								<?php etheme_logo(); ?>
							</div>
							<div>
							</div>
							<div class="span4 p-abs r-0 b-0">
                  <img width=500 style="float:right;margin-top:-50px;width:500px;margin-right:-8px;" src="<?php echo get_site_url();?>/wp-content/uploads/shipping2.jpg">

            <div style="margin-left:0px !important;" class="span12 et-mega-search plr-30 mt-10 lh-1 upcase f-play d-ib" data-products="1" data-count="3" data-posts="1" data-portfolio="1" data-pages="1" data-images="1">
  		  <form class="p-rel" action="<?php echo get_site_url();?>/shop-query/" method="post">

  <!--          <form method="get" action="<?php echo get_site_url();?>" class="p-rel ng-pristine ng-valid">
   -->
                <input style="height:30px;margin-bottom:0px;margin-top:0px;border-radius:4px;" type="text" class="bg-lgrey lh-1 br-8 f-play"  name="pnumber"  autocomplete="off" placeholder="Search By Part Number">

                 <input type="submit" name="submit" value="" style="width:40px;background:url(<?php get_img('arrow_white.png');?>) no-repeat 50% 30% #BC232C !important;margin-right:-40px;" class="p-abs button active filled">
 </style>
              </form>
             <span class="et-close-results">
              </span>
              <div class="et-search-result"></div>
             </div>
               <!--<span data&#45;toggle="modal" data&#45;target="#searchModal" class="search bg&#45;red"><img src="<?php echo get_site_url();?>/wp&#45;content/uploads/arrow_white.png"></span>-->
                </div>
								<!-- <a href="#" data&#45;toggle="modal" data&#45;target="#searchModal" class="search&#45;icon hidden&#45;desktop">&#38;nbsp;</a> -->
								<!-- <img class="f&#45;r" src="<?php echo get_site_url();?>/wp&#45;content/uploads/callnow_banner.png"> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="background:#5A5B5C;" class="header-bg full-width">
			<div class="container main-nav visible-desktop" style="z-index:999999;" id="OG-Nav">
				<div class="row-fluid">
					<div class="span12">
						<?php if ( has_nav_menu( 'main-menu' ) ) :
						wp_nav_menu(
							array( 'theme_location' => 'main-menu',
								'before' => '',
								'after' => '',
								'link_before' => '',
								'link_after' => '',
								'depth' => 4,
								'fallback_cb' => false,
								'walker' => new Et_Navigation
								)
							);
							endif; ?>
						</div>
					</div>
				</div>
			</div>

<!-- 	MOBIE MENU		 -->
			<div class="container main-nav visible-desktop" style="z-index:999999;" id="respo-nav">
				<div class="row-fluid" id="mob-placeholder">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<div class="row-fluid" id="mob-menu">
					<div class="span12">
						<?php if ( has_nav_menu( 'main-menu' ) ) :
						wp_nav_menu(
							array( 'theme_location' => 'main-menu',
								'before' => '',
								'after' => '',
								'link_before' => '',
								'link_after' => '',
								'depth' => 4,
								'fallback_cb' => false,
								'walker' => new Et_Navigation
								)
							);
							endif; ?>
						</div>
					</div>
				</div>
			</div>
<!-- </div> -->
<style>
	#logo-span > a > img { width:100%;}
	/* .main-nav .menu > li.menu-item {background: #5A5B5C;padding-left:26px;padding-right:26px; } */
.main-nav .menu > li.menu-item {
  background: #5A5B5C;
  padding: 0;
  display: inline-flex;
  width: auto;
  padding: 0px 2.4%;
}
	.menu-wrapper.menu-type{ display:inline-block; }
  ul#menu-main-menu{ display:flex;width:100%; }
	.main-nav .menu > li:hover,
	.main-nav .menu > li.current-menu-item {
		background: #0A85D5;
		margin-top:-2px;
	}
	div#login-tbar {
		width: 100%;
		display: inline-block;
		padding-top: 9px;
		text-align:center;
	}
	div#login-tbar:before {
		content: url(<?php echo get_site_url();?>/wp-content/uploads/graytab_left.png);
		position:absolute;
		left: -9px;
		top: 0px;
		height: 40px;
	}
	div#login-tbar:after{
		content: url(<?php echo get_site_url();?>/wp-content/uploads/graytab_right.png);
		position:absolute;
		right: -8px;
		top: 0px;
		height: 40px;
	}
	.nav-divider-before:before {
		content:url( <?php echo get_site_url();?>/wp-content/uploads/graytab_dividers.png);
		position: absolute;
		top: -11px;
		left: -30px;
	}
.search-icon:before {
  content: "\e614";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 14px;
  line-height: 25px;
  font-family: "arrows";
  color: #6f6f6f;
  position: relative;
  top: 2px;
}
.search .et-mega-search form input[type="text"] {
  margin: 0;
  float: none;
  padding: 2px 11px;
  color: #6f6f6f;
  font-size: 13px;
  border: 1px solid #ebebeb;
  line-height: 24px;
  height: 40px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  background: #ECEDEE;
  box-sizing: border-box;
  border: none !important;
}
.search.bg-lgrey.hide-input.a-right {
  height:40px;
}
.search .bg-red {
  padding: 0px 10px 0px 10px;
  border-radius: 0px 8px 0px 0px;
  position: absolute;
  height: 40px;
  bottom: 0px;
  right: 0px;
}
.search .bg-red img {
  padding-top:10px;
}
div.row-fluid{
width:100%;
/* white-space:nowrap; */
}
</style>

    <!--<script src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/controllers/HomeController.js"></script> -->
