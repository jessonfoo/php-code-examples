<?php
/*
* Template name: Testimonial page
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

<?php
get_footer();
?>
