<?php
/*
 * Template Name: Landing Page
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>US Specialty Vehicles</title>
    <link href="<?php echo dirname(get_bloginfo('stylesheet_url'));?>/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo dirname(get_bloginfo('stylesheet_url'));?>/style.css" rel="stylesheet" media="screen">
    <link href="<?php echo dirname(get_bloginfo('stylesheet_url'));?>/css/landing-page.css">
	<link rel="shortcut icon" href="<?php echo et_get_favicon();?>" />
  </head>
  <body style="position:inherit">
  <div class="row-fluid mtb-10 full-width">
    <div class="span4 offset8">
      <span class="tb-wr">
      <div class="span4 offset1">
<?php if (is_user_logged_in()):?>
            <a class="va-wbl lh-2-5 fs-14 color-white"  href="<?php echo wp_logout_url(home_url());?>"> <?php _e('Log Out', ETHEME_DOMAIN);
?> </a>
          <span class="va-wbl lh-2-5 fs-16 color-white">&nbsp;
 | &nbsp;
</span>
            <a class="va-wbl lh-2-5 fs-14 color-white" href="<?php echo get_site_url();?>/my-account/">Account &nbsp;
 </a>
        </div>
<?php  else :?>
            <?php if (class_exists('Woocommerce')):?>
              <a class="va-wbl lh-2-5 fs-14 color-white"  href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id'));?>"> <?php _e('Log In', ETHEME_DOMAIN);
?> </a>
          <span class="va-wbl lh-2-5 fs-16 color-white">&nbsp;
 | &nbsp;
</span>
            <a class="va-wbl lh-2-5 fs-12" href="<?php echo get_site_url();?>/my-account/">Sign Up &nbsp;
 </a>
        </div>
<?php endif;?>
            <a class="va-wbl lh-2-5 fs-14 color-white"  href="<?php echo wp_login_url();?>"> <?php _e('Log In', ETHEME_DOMAIN);
?> </a>
          <span class="va-wbl lh-2-5 fs-16 color-white">&nbsp;
 | &nbsp;
</span>
            <a class="va-wbl lh-2-5 fs-14 color-white" href="<?php echo get_site_url();?>/my-account/">Sign Up &nbsp;
 </a>
        </div>
<?php endif;?>
      <div style="border-left: 2px solid #FFF; padding-top: 0px; padding-bottom: 0px;" id="custom-span6" class="span6">
        <a href="#"><img src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/facebook.png"></a>
        <a href="#"><img src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/twitter.png"></a>
        <a href="#"><img src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/instagram.png"></a>
        <a href="#"><img src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/googleplus.png"></a>
        <a href="#"><img src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/pinterest.png"></a>
      </div>
      </span>
    </div>
  </div>
<div class="container full-width">
  <div class="row full-width p-abs land-nav">
    <span class="r-p-rel">
    <span class="n-wr">
    <div class="span4">
    <img src="<?php echo get_site_url();?>/wp-content/uploads/2015/05/logo.png">
    </div>
    <div align=center class="f-r custom-span8">
            <a class="l-nav-links" href="<?php echo get_site_url();?>/#">HOME</a>
            <a class="l-nav-links" href="<?php echo get_site_url();?>/rhino-gx/">RHINO GX</a>
            <a class="l-nav-links" href="<?php echo get_site_url();?>/rhino-jx/">RHINO JX</a>
            <a class="l-nav-links" href="<?php echo get_site_url();?>/g-patton/">G.PATTON</a>
            <a class="l-nav-links" href="<?php echo get_site_url();?>/blog/">NEWS/BLOG</a>
            <a class="l-nav-links" href="<?php echo get_site_url();?>/support/">SUPPORT</a>
            <a class="l-nav-links" href="<?php echo get_site_url();?>/contact/">CONTACT US</a>
      <!-- <a class="l&#45;nav&#45;links" href="<?php echo get_site_url();?>/">HOME</a> -->
      <!-- <a class="l&#45;nav&#45;links" href="<?php echo get_site_url();?>/rhino&#45;gx/">VEHICLES</a> -->
      <!-- <a class="l&#45;nav&#45;links" href="<?php echo get_site_url();?>/services/">SERVICES</a> -->
      <!-- <a class="l&#45;nav&#45;links" href="<?php echo get_site_url();?>/gallery/">GALLERY</a> -->
      <!-- <a class="l&#45;nav&#45;links" href="<?php echo get_site_url();?>/purchase/">PURCHASE</a> -->
      <!-- <a class="l&#45;nav&#45;links" href="<?php echo get_site_url();?>/about&#45;us/">ABOUT US</a> -->
      <!-- <a class="l&#45;nav&#45;links" href="<?php echo get_site_url();?>/contact&#45;us">CONTACT US</a> -->
    </div>
    </span>
    </span>

  </div>
</div>
<?php include "js/gzn.js"?>

  </body>
  <style>
    body {
    background: url('<?php echo get_site_url();?>/wp-content/uploads/homepage_background.jpg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      font-family:play;
    }
  </style>
</html>
