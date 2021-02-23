<?php
	$imgUrl = get_template_directory_uri().'/images/noImage.jpg';
	if( has_post_thumbnail() ) {
		$imgUrl = get_the_post_thumbnail_url();
	}
	$thisCategory = get_the_category();
	$catID = $thisCategory[0]->slug;
?>

<div class="col-md-4">
	<a href="<?php echo $imgUrl; ?>" data-fancybox="<?php echo $catID; ?>-grid" class="grid image-link">
		<figure class="effect-bubba gallery-img-wrap">
			<div class="galleryImageSingle" style="background-image: url('<?php echo $imgUrl; ?>');"></div>
			<figcaption>
				<p><span class="zoomIcon"></span></p>
			</figcaption>
			<span class="title_g"><?php the_title(); ?></span>
		</figure>
	</a>
</div>