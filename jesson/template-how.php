<?php
/*
 * Template Name: How its Made Page
 */
get_header();
?>
  <div class="him full-width mh-500 pb-50" style="background:url(<?php echo get_site_url();?>{{bg.home}});" ng-controller="HimController">
      <div class="container pb-50">
        <img class="full-width" src="<?php echo get_site_url();?>{{banner.how}}">
        <div class="row-fluid pt-30 pb-20">
        </div>
        <div style="padding:50px 0px 50px 0px !important;" class="row-fluid h-300 a-left bg-white">
          <div class="a-left span12 pl-30 pr-30 ">
            <?php while (have_posts()):the_post(); the_content(); endwhile;?>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/app.js"> </script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/controllers/HimController.js"></script>
    </div>

<?php get_footer();?>
