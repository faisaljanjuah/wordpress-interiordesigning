<div class="col-12 col-sm-6 col-md-4 col-lg-3">
	<div class="courses_box mb-5 productView">
		<div class="course-img-wrap">
			<div class="d_coverImage" style="background-image:url(<?php the_post_thumbnail_url('medium'); ?>);">
				<div class="link-wrap">
					<a href="<?php the_permalink(); ?>" class="linkSlide"><span>View Details</span></a>
				</div>
			</div>
		</div>
		<div class="blockContent withoutPlusIcon">
			<h3><?php the_title(); ?></h3>
			<?php
				if( get_field('product_id') ){ ?>
					<p><strong>Item #</strong>: <?php echo get_field('product_id'); ?></p>
			<?php
				}
			?>
			<a class="btn btn-view" href="<?php the_permalink(); ?>">View</a>
		</div>
	</div>
</div>