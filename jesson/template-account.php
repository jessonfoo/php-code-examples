<?php
/*
 * Template name: Account Page
 */
get_header();
?>


<div align=center class="full-width w-1200 bg-white mh-600">
  <div class="row-fluid a-left mw-1200">
    <div align=center class="row-fluid mw-1200 over-f-h">
      <div class="span5 mt-50 ml-50  ptb-50 h-400 border-g">
                        <!-- Login form -->
        <div class="toggle-login">
        <h2 class="f-airborne a-left ml-75">Sign In</h2>
          <form name="loginform" id="loginform" action="<?php echo get_site_url();?>/wp-login.php" method="post">
            <p align=center class="w-350 ml-50 f-l">
              <label class="f-l ml-40" for="user_login">Username<br></label>
              <input type="text" style=" width: 325px; margin-left: 25px !important; " name="log" id="user_login" align=center class="input mw-275 mlr-0" value="" size="20">
            </p>
            <p align=center class="w-350 ml-50 f-l">
              <label class="f-l ml-40" for="user_pass">Password<br></label>
              <input type="password" style=" width: 325px; margin-left: 25px !important; " name="pwd" id="user_pass" class="input mw-275 mlr-0" value="" size="20">
            </p>
              <!-- <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p> -->
            <p class="submit" style="margin-left:-30px;">
              <input type="submit" name="wp-submit" id="wp-submit" class="bg-grey button button-primary h-50 fs-24 w-250 f-airborne bold button-large" value="Log In">
              <input type="hidden" name="redirect_to" value="<?php echo get_site_url();?>/wp-admin/">
              <input type="hidden" name="testcookie" value="1">
            </p>
          </form>
        </div>
      </div>
      <div class="span5 f-r mt-50 mr-50 ptb-50 h-400 border-g">
                     <!-- Registration Form -->
        <div class="toggle-registration">
          <h2 class="f-airborne a-left pl-75">Register</h2>
          <form name="registerform" id="registerform" action="<?php echo get_site_url();?>/wp-login.php?action=register" method="post" novalidate="novalidate">
            <p align=center class="w-350 ml-50 f-l">
              <label class="f-l ml-40" for="user_login">Username<br></label>
              <input type="text" style=" width: 325px; margin-left: 25px !important; " name="user_login" id="user_login" class="input mw-275 mlr-0" value="" size="20">
            </p>
            <p align=center class="w-350 ml-50 f-l">
              <label class="f-l ml-45" for="user_email">E-mail<br></label>
              <input type="email" name="user_email" id="user_email" style=" width: 325px; margin-left: 25px !important; " class="input mw-275 mlr-0" value="" size="25">
            </p>
            <p align=center class="w-350 ml-50 f-l" id="reg_passmail">A password will be e-mailed to you.</p>
            <br class="clear">
            <input type="hidden" name="redirect_to" value="">
            <p class="submit">
              <input type="submit" name="wp-submit" id="wp-submit" class="bg-grey h-50 fs-24 w-250 f-airborne bold button button-primary button-large" value="Register">
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
