<?php
/**
 * Template Name: Blog Template
 */
?>
<?php get_header(); 
// generalBannerTop('USSV BLOG'); ?>

<div class="row-fluid mh-700 pt-50">
  <!-- <div align=left class="f&#45;l w&#45;300"> -->
  <!--   <div class="a&#45;left h&#45;auto mw&#45;300 mb&#45;30"> -->
      <!-- <div class="<?php //echo $sidebar_span; ?> sidebar sidebar&#45;left"> -->
        <?php //etheme_get_sidebar($sidebarname); ?>
      <!-- </div> -->
  <!--   </div> -->
  <!-- </div> -->

  <div class="w-1000 f-r">
    <div class="a-left h-auto mw-1100 mb-30">
<?php
get_template_part('content', $blog_layout);
query_posts('cat=1');
while (have_posts()) : the_post(); the_content(); endwhile; 
$recent_posts = wp_get_recent_posts();
foreach( $recent_posts as $recent ){
  echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
}
?>
    </div>
  </div>
</div>
<?php get_footer();?>

