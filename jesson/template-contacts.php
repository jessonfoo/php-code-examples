<?php
/*
 * Template Name: accutek contact Page
 */
get_header();
?>
  <div class="full-width" style="background-size:cover;background:url(<?php get_img($texture);?>);">
    <div class="container full-width p-rel" style="min-height:157px;background-size:contain;background-image:url(<?php get_img($banner);?>);">
      <p style="left:30px; bottom:-30px;" class="f-play fs-42 color-white p-abs">Contact Us</p>
    </div>
  </div>
  <div class="him full-width mh-500 pb-50" style="background:white;">
      <div class="container pb-50">
        <div class="row-fluid pt-30 pb-20">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.5683971650883!2d-117.7177686!3d34.00361819999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c332b9c4ddd023%3A0x183c12989f4dfd8f!2sAccutek+Imaging+Resource+Inc.!5e0!3m2!1sen!2sus!4v1438020466804" width="1180" height="250" frameborder="0" style="border:10px solid #E5E7E8;border-radius:8px;" allowfullscreen></iframe>
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

<style>
	.span12 table td{
		width:100%;
		display:block;
		margin:0 auto;
	}
</style>