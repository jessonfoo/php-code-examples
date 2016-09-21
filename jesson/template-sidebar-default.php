<?php
/*
 * Template Name: Default with Sidebar Template
 */
get_header();
extract(etheme_get_page_sidebar());
?>

<div class="row-fluid bg-white color-grey mh-700 pt-50 w-1200">
  <div align=left class="f-l span3 p-abs w-350">
    <div class="a-center h-auto mb-30">
      <div class="sidebar sidebar-left">
        <?php etheme_get_sidebar($sidebarname); ?>
      </div>
    </div>
  </div>
  <div align=center class="span8 offset4 f-r mw-700">
    <div class="a-left h-auto mw-700 over-f-h mb-30">
      <?php while (have_posts()):the_post(); the_content(); endwhile;?> 
    </div>
  </div>

  <div align=center class="f-r w-700">
    <div class="a-left h-auto mw-700 mb-n20 over-f-h">
      <?php 
        $values = get_post_custom_values('content_2');
        $shortcode_output = do_shortcode($values[0]);
        print $shortcode_output;
        // echo get_post_meta(get_the_ID(), 'content_2', 1 ); 
  ?>
    </div>
  </div>
</div>

<?php get_footer();?>
