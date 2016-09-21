<?php
/*
 * Template Name: accutek about Page
 */
get_header();
?>
  <div class="full-width" style="background-size:cover;background:url(<?php get_img($texture);?>);">
    <div class="container full-width p-rel" style="min-height:157px;background-size:contain;background-image:url(<?php get_img($banner);?>);">
      <p style="left:30px; bottom:-30px;" class="f-play fs-42 color-white p-abs"><?php the_title();?></p>
    </div>
  </div>
  <div class="him full-width mh-500 pb-50" style="background:white;">
      <div class="container pb-50">
        <div style="width:1180px;margin:50px 0px 50px 0px !important;background:#E5E7E8;border-radius:8px;" class="row-fluid a-left bg-white">
          <div class="a-left span12 p-30">
          <h2><?php the_title();?></h2>
            <?php while (have_posts()):the_post(); the_content(); endwhile;?>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/app.js"> </script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/jesson/app/controllers/HimController.js"></script>
    </div>

<?php get_footer();?>

<style>
@media screen and (max-width:736px){
	body > div.him.full-width.mh-500.pb-50 > div > div{
		width:100% !important;
	}
}

</style>