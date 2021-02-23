<?php get_header(); ?>

<div class="services-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php
					if(have_posts()):
						while(have_posts()): the_post();
							the_content();
						endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>