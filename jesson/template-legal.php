<?php
/**
 * Template Name: Legal Template
 */
get_header();
generalBannerTop('USSV legal');
?>

<div align=center class="full-width w-1100 h-800">
	<div class="a-left h-auto mw-1000 over-f-h mb-30">
<?php while (have_posts()):the_post();
the_content();
endwhile;?>
</div>
</div>
<?php get_footer();?>

