<?php get_header(); ?>
<div class="contact-section">
	<div class="container">
		<div class="row">

			<?php 
			if(have_posts()):
			while(have_posts()): the_post(); ?>
			<div class="col-md-12">
				<div class="title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="welcome_about">
					<div class="row">
						<div class="col-md-7">
							<?php the_content(); ?>
						</div>
						<div class="col-md-5">
							<?php if(has_post_thumbnail()){the_post_thumbnail('', array('class' => 'img-fluid'));} ?>
						</div>
					</div>
				</div>
			</div>
		<?php	endwhile;
		endif; 
		wp_reset_postdata();
		?>


	</div>
</div>
</div>

<div class="parallax">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="dTable">
					<div class="dTableCell">
						<?php
							$args = array(
								'type' => 'post',
								'posts_per_page' => 1,
								'category__in' => array(27),
							);
							$loop = new WP_Query($args);
							if($loop->have_posts()):
								while($loop->have_posts()): $loop->the_post(); ?>
									<h3 class="parallax-Text"><?php the_title(); ?></h3>
									<script>
										jQuery(function(){
											jQuery('.parallax').parallax({
												src: '<?php if(has_post_thumbnail()){echo the_post_thumbnail_url();}else{ echo get_template_directory_uri()."/images/defaultBanner.jpg";}?>',
												speed: 0.5,
											});
										});
									</script>
						<?php	endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('recent.php'); ?> 


<?php get_footer(); ?>