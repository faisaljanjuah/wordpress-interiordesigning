<section class="event">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<?php $recentWork = 29; ?>
				<h2><?php echo get_field( 'front_name', 'category_'.$recentWork ); ?></h2>
				<div class="event-img">
					<?php
						$args = array(
							'type' => 'post',
							'posts_per_page' => 1,
							'category__in' => array($recentWork),
							);
							$loop = new WP_Query($args);
							if($loop->have_posts()):
								while($loop->have_posts()): $loop->the_post(); ?>
									<span class="event-img_date"><?php echo the_field('date_recent_work'); ?></span>
									<div class="eventImg" style="background-image: url('<?php
										if(has_post_thumbnail()){
											the_post_thumbnail_url();
										}
										else{
											echo get_template_directory_uri().'/images/upcoming-event-img.jpg';
										}
									?>');"></div>
									<div class="event-img_title">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> &rarr;</a></h3>
										<?php the_content(); ?>
									</div>
						<?php	endwhile;
							endif;
							wp_reset_postdata();
					?>
				</div>
			</div>
			<div class="col-lg-6">
				<?php $reviewsID = 28; ?>
				<h2><?php echo get_field( 'front_name', 'category_'.$reviewsID ); ?></h2>
				<div class="single-item">
					<?php
						$args = array(
							'type' => 'post',
							'posts_per_page' => -1,
							'category__in' => array($reviewsID),
							);
							$loop = new WP_Query($args);
							if($loop->have_posts()):
								while($loop->have_posts()): $loop->the_post(); ?>
									<div class="quote">
										<span class="quote_icon"></span>
										<?php the_content(); ?>
										<div class="testi-img_block">
											<p><span><?php the_title(); ?></span> <?php echo the_field('client_designation'); ?></p>
										</div>
									</div>
						<?php	endwhile;
							endif;
							wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section>