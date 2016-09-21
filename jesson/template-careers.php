<?php
/**
 * Template Name: Careers Template
 */
?>
<?php get_header();?>

<div class="vb-b container full-width" style="background:url('<?php echo get_site_url();?>/wp-content/uploads/2015/05/general_banner.jpg') no-repeat 0% 0%;height:335px;margin-top:-35px;">
<div class="w-600 mt-150 f-l"> <span class="a-center mw-700"><h1 class="color-white fs-64 f-airborne bold"> USSV CAREERS </h1></span> 
</div>
</DIV>
<div align=center class="full-width w-1100 h-800">
	<div class="a-left h-auto mw-1000 over-f-h mb-30">
<?php while (have_posts()):the_post();
the_content();
endwhile;?>
</div>
</div>
<?php get_footer();?>

