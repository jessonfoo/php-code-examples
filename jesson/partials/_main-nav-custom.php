<div class="container t-0 p-rel">
  <div class="row-fluid mb-5 mtb-50 w-1100">
    <div class="span4 offset8 p-rel f-r">
      <span class="tb-wr">
      <div style="background:url(<?php echo get_site_url();?>/wp-content/uploads/toptab.png);background-size:cover;min-height:40px;" class="span8 offset2 top-links mw-125 a-center">
          <?php if (is_user_logged_in()):?>
              <a class="va-wbl lh-2-5 fs-14 f-l pl-20"  href="<?php echo wp_logout_url(home_url());?>"> <?php _e('Log Out', ETHEME_DOMAIN); ?> &nbsp; | &nbsp; </a>
              <a class="lh-2-5 fs-14 clear-both va-t a-center " href="<?php echo get_site_url();?>/my-account/"> &nbsp; My Account &nbsp; </a>
              <a class="va-wbl lh-2-5 fs-14 f-r pr-20" href="<?php echo get_site_url();?>/shop/">&nbsp; | &nbsp;Order Now&nbsp; </a>
          </div>
            <?php elseif (class_exists('Woocommerce') && !is_user_logged_in()): ?>
            <!-- <a class="va&#45;wbl lh&#45;2&#45;5 fs&#45;14 f&#45;l pl&#45;20"  href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id'));?>"> <?php _e('Log In', ETHEME_DOMAIN); ?> &#38;nbsp; | &#38;nbsp;</a> -->
            <!-- <a class="lh&#45;2&#45;5 fs&#45;12" href="<?php echo get_site_url();?>/sign&#45;up/">&#38;nbsp;Sign Up &#38;nbsp; </a> -->
            <a class="va-wbl lh-2-5 fs-14 f-l pl-30"  href="<?php echo get_site_url();?>/sign-up"><?php _e('Log In', ETHEME_DOMAIN); ?></a>&nbsp; | &nbsp;</a>
            <a class="lh-2-5 fs-14" href="<?php echo get_site_url();?>/cart/"> &nbsp;View Cart &nbsp; </a>
          <a class="va-wbl lh-2-5 fs-14 f-r pr-20" href="<?php echo get_site_url();?>/shop/">&nbsp; | &nbsp;Order Now&nbsp; </a>
      </div>
              <?php else:  ?> 
                 <?php //if (!is_user_logged_in()): ?>
            <!-- <a class="va&#45;wbl lh&#45;2&#45;5 fs&#45;14 f&#45;l pl&#45;20"  href="<?php echo wp_login_url();?>"> <?php _e('Log In', ETHEME_DOMAIN); ?> &#38;nbsp; | &#38;nbsp;</a> -->
            <!-- <a class="lh&#45;2&#45;5 fs&#45;14" href="<?php echo get_site_url();?>//"> &#38;nbsp;Sign Up &#38;nbsp; </a> -->
            <a class="va-wbl lh-2-5 fs-14 f-l pl-20"  href="<?php echo get_site_url();?>/sign-up"><?php _e('Log In', ETHEME_DOMAIN); ?></a>&nbsp; | &nbsp;</a>
            <a class="lh-2-5 fs-14" href="<?php echo get_site_url();?>/cart/"> &nbsp;View Cart &nbsp; </a>
            <a class="va-wbl lh-2-5 fs-14 f-r pr-20" href="<?php echo get_site_url();?>/shop/">&nbsp; | &nbsp;Order Now &nbsp; </a>
          </div>
         <?php endif;?>
      <!-- <div style="border&#45;left: 2px solid #FFF; margin&#45;top:5px" id="custom&#45;span6" class="span6"> -->
      <!-- <?php // include '_main&#45;nav&#45;social&#45;links.php';?> -->
      <!-- </div> -->
      </span>
    </div>
  </div>
  <span class="row-fluid full-width">
    <div class="span5 a-left mn-wr">
    <img src="<?php echo get_site_url();?>/wp-content/uploads/logo.png">
    </div>
  </span>
 </div>
