<?php
/**
 * Template Name: Order Page
 */
get_header();
?>
<div class="vb-b container full-width" style="background:url(<?php echo get_site_url();?>/wp-content/uploads/2015/05/gx_banner.jpg) no-repeat 0% 0%;height:600px;margin-top:-35px;"> </div>
<div class="row-fluid full-width pb-50 order-head-image">
  <h1 class="a-center lhh bold pb-30">Select Options</h1>
  <img class="color-option co1 active" src="/wp-content/uploads/coloroption1a.jpg">
  <img class="color-option co2 hidden" src="/wp-content/uploads/coloroption2a.jpg">
  <img class="color-option co3 hidden" src="/wp-content/uploads/coloroption3a.jpg">
</div>

<div align=center class="full-width container">
  <div class="pt-100 over-f-h pb-150">
    <div class="row-fluid mw-1100">
      <div class="span12 pl-50">
        <div class="row-fluid">
          <span class="a-left span8">
            <?php include 'partials/_order_options.php';
              $cPage = $_SERVER["REQUEST_URI"];
                if (strpos($cPage,'rhino-gx/order') != false) { 
                  include 'partials/_order_gx_description.php'; 
                } else if (strpos($cPage,'rhino-jx/order') != false) { 
                  include 'partials/_order_jx_description.php'; 
                } else if (strpos($cPage,'g-patton/order') != false) { 
                  include 'partials/_order_g_patton_description.php'; } 
            ?> 
          </span>
        <div class="span4"> 
          <?php include 'partials/_order_form.php';?>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>
