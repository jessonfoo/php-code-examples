<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<div class="container">
      <img class="full-width pt-50 pb-10" src="<?php echo get_site_url(); ?>/wp-content/uploads/about_banner.jpg">
</div>

<div align=center class="full-width w-1200 bg-black mh-400">
  <div class="row-fluid a-left mw-1200">
    <div class="span12 ptb-30 color-white">
  <?php while (have_posts()):the_post();
  the_content();
  endwhile;?>
    </div>
  </div>
</div>

<div class="container">
  <div class="p-rel full-width pb-10" style="height:128px;background:url('<?php echo get_site_url(); ?>/wp-content/uploads/exclusive_banner.png') no-repeat;background-size:contain;">
    <a href="#"><img class="get-more" src="<?php echo get_site_url(); ?>/wp-content/uploads/getyoursnow.png"></a>
  </div>
</div>
<?php get_footer();?>

