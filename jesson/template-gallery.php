<?php
/*
 * Template Name: Gallery Page
 */
get_header();
extract(etheme_get_page_sidebar());
?>
</div>
<div align=center class="full-width">
  <div class="row-fluid a-center f-l full-width h-750 mx-h-750 over-f-h">
    <img id="active-image" class="" src="<?php echo get_site_url(); ?>/wp-content/uploads/g1.jpg">
  </div>
  <div style="margin-bottom: -15px;" class="row-fluid f-l h-150 bt-r bb-r">
    <div style="display:inline;">
      <ul style="display:inline;">
	  
	<?php
	$images =& get_children( array (
		'post_parent' => $post->ID,
		'post_type' => 'attachment',
		'post_mime_type' => 'image'
	));

	if ( empty($images) ) {
		// no attachments here
	} else {
		foreach ( $images as $attachment_id => $attachment ) {
			$img= wp_get_attachment_image_src($attachment_id,'full');
			?>
			<li class="gallery-img-li"><img onclick="galleryChange(this.src)" src="<?php echo $img[0]; ?>"></li>
			<?php
		}
	}
?>  
	  
        
      
      </ul> 
    </div>
  </div>
</div>

<?php get_footer();?>
