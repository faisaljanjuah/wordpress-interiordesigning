<?php get_header(); ?>

<div class="product-wrap">
	<div class="container">
		<?php
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;

			if(have_posts()):
				while(have_posts()): the_post();
					?>
					<div class="row">
						<?php 
							$iszoom = 'post_image';
							if( get_field('product_id') ){
								$iszoom = 'post_image isZoom';
								$xoriginal = 'data-zoom-image="'.get_the_post_thumbnail_url().'"';
							}
							$classShow = 'col-12 col-sm-6 col-md-8';
							if(has_post_thumbnail()){ ?>
								<div class="col-12 col-sm-6 col-md-4">
									<a href="<?php the_post_thumbnail_url(); ?>" data-fancybox="productView">
									<img class="<?php echo $iszoom; ?>" <?php echo $xoriginal; ?> src="<?php the_post_thumbnail_url(); ?>"/></a>
									<?php if( get_field('product_id') ){echo '<p><small><em>Use mouse wheel to zoom In or Out.</em></small></p>';} ?>
								</div>
						
						<?php
							}
							else{
								$classShow = 'col-12';
							}
						?>
						<div class="<?php echo $classShow; ?>">
							<div class="title">
								<h2><?php the_title(); ?></h2>
								<?php if( get_field('product_id') ){ ?>
									<p class="productNum"><strong>Item #</strong>: <?php echo get_field('product_id'); ?></p>
								<?php } ?>
						<?php 	if( get_field('date_recent_work') ){ ?>
									<p class="productCat">Dated: <?php echo the_field('date_recent_work'); ?></p>
						<?php 	}
								else { ?>
								<p class="productCat">Category: <a href="<?php echo get_category_link($category_id); ?>"><?php echo get_field( 'front_name', 'category_'.$category_id ); ?></a></p>
						<?php 
								}
								?>
							</div>
							<div class="post_description">
								<?php the_content(); ?>
							</div>
							<?php
								if( get_field('available_colors') ){ ?>
									<div class="avb_color">
										<h3>Available Colors are:</h3>
										<div class="avb_color_container"><?php echo get_field('available_colors'); ?></div>
									</div>
								<?php 
								}
							?>
						</div>
					</div>
		<?php	
				endwhile;
			endif;
		?>
	</div>
</div>
<?php include('recent.php'); ?>
<?php if( get_field('product_id') ){ ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/elevateZoom.min.js"></script>
		<script>
			jQuery(function(){
				var imgHeight = jQuery('.isZoom').height();
				var imgWidth = jQuery('.isZoom').width();
				jQuery('.isZoom').elevateZoom({
					loadingIcon: '<?php echo get_template_directory_uri(); ?>/images/loading.gif',
					zoomWindowHeight : imgHeight,
					zoomWindowWidth : imgWidth,
					zoomWindowOffetx : 15,
					cursor : "crosshair",
					responsive : true,
					scrollZoom : true,
					borderSize : 0,
					lensSize : 200,
					tint : true,
					tintColour :'#000', 
					tintOpacity : 0.5
				});
				if(jQuery('.avb_color').length>0){
					var str = jQuery('.avb_color_container').html();
					str = str.replace(/\-\-+/g, '-'); // remove double --
					if(str.indexOf(' ') >= 0){
						str = str.replace(/\s/g, ''); // remove if found spaces
					}
					if (str.match(/^[a-fA-F0-9._-]+$/)) { // check if not colors
						if(str.slice(-1) === '-'){ // remove if last character is -
							str = str.substring(0, str.length-1);
						}
						if(str.charAt(0) === '-'){ // remove if first character is -
							str = str.substring(1);
						}
						str = '["'+str+'"]';  // wrap all string into ["..."]
						str = str.split('-').join('","'); // split - into ", "
						str = JSON.parse(str); // convert string into array
						var colorhtml = '';
						for (var i = 0; i < str.length; ++i) {
							colorhtml += '<div class="color_holder" style="background: #'+str[i]+';"></div>'
						}
						jQuery('.avb_color_container').html(colorhtml);
					}
					else{
						jQuery('.avb_color_container').html("Website administrator has inserted wrong colors for this product.");
					}
				}
			});
		</script>
<?php } ?>
<script>
	jQuery(function(){
		jQuery('section.event').addClass('sectionGray');
	});
</script>

<?php get_footer(); ?>