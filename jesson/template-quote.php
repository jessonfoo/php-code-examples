<?php
/*
 * Template name: Quote Page 
*/
get_header();
?>
<div class="top-banner">
  <img class="full-width" src="<?php echo get_site_url();?>/wp-content/uploads/2015/04/testimonial_banner.jpg">
</div>

<div class="container">
  <div class="page-content sidebar-position-<?php echo $position;?> responsive-sidebar-<?php echo $responsive;?>">
    <div class="row-fluid">
      <div class="content span10 offset1">
        <?php while (have_posts()): the_post();?>
		         <?php the_content();?>
		       <?php endwhile;?>
     </div>
   </div>
 </div>
</div>
<?php include 'secondary-foot.php';?>
<?php function curPageURL() { $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80") { $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
  } else { $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; }
return $pageURL; }
$current_url = str_replace("www.", "", curPageURL());

echo $current_url;
?>
<p>
<?php echo curPageURL();?>
</p>
<?php
get_footer();
?>
