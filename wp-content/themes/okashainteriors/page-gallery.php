<?php get_header(); ?>

<div class="gallery-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>

		<?php
			$sectionID = 31;
			$args = array(
				'category__in' => array($sectionID),
			);
			$listGallery = new WP_Query($args);
			if($listGallery->have_posts()): ?>
				<div class="row">
					<div class="col-12">
						<h3 class="subtitle"><?php echo get_field( 'front_name', 'category_'.$sectionID ); ?></h3>
					</div>
			<?php	while($listGallery->have_posts()): $listGallery->the_post();
						get_template_part('formats/format-gallery', get_post_format());
					endwhile; ?>
				</div>
	<?php	endif;
			wp_reset_query();
		?>
		<?php /*-------End of Kitchens------*/ ?>




		<?php
			$sectionID = 32;
			$args = array(
				'category__in' => array($sectionID),
			);
			$listGallery = new WP_Query($args);
			if($listGallery->have_posts()): ?>
				<div class="row">
					<div class="col-12">
						<h3 class="subtitle"><?php echo get_field( 'front_name', 'category_'.$sectionID ); ?></h3>
					</div>
			<?php	while($listGallery->have_posts()): $listGallery->the_post();
						get_template_part('formats/format-gallery', get_post_format());
					endwhile; ?>
				</div>
	<?php	endif;
			wp_reset_query();
		?>
		<?php /*-------End of Wardrobes------*/ ?>




		<?php
			$sectionID = 33;
			$args = array(
				'category__in' => array($sectionID),
			);
			$listGallery = new WP_Query($args);
			if($listGallery->have_posts()): ?>
				<div class="row">
					<div class="col-12">
						<h3 class="subtitle"><?php echo get_field( 'front_name', 'category_'.$sectionID ); ?></h3>
					</div>
			<?php	while($listGallery->have_posts()): $listGallery->the_post();
						get_template_part('formats/format-gallery', get_post_format());
					endwhile; ?>
				</div>
	<?php	endif;
			wp_reset_query();
		?>
		<?php /*-------End of Doors------*/ ?>




		<?php
			$sectionID = 34;
			$args = array(
				'category__in' => array($sectionID),
			);
			$listGallery = new WP_Query($args);
			if($listGallery->have_posts()): ?>
				<div class="row">
					<div class="col-12">
						<h3 class="subtitle"><?php echo get_field( 'front_name', 'category_'.$sectionID ); ?></h3>
					</div>
			<?php	while($listGallery->have_posts()): $listGallery->the_post();
						get_template_part('formats/format-gallery', get_post_format());
					endwhile; ?>
				</div>
	<?php	endif;
			wp_reset_query();
		?>
		<?php /*-------End of corian bath vanaties------*/ ?>




		<?php
			$sectionID = 35;
			$args = array(
				'category__in' => array($sectionID),
			);
			$listGallery = new WP_Query($args);
			if($listGallery->have_posts()): ?>
				<div class="row">
					<div class="col-12">
						<h3 class="subtitle"><?php echo get_field( 'front_name', 'category_'.$sectionID ); ?></h3>
					</div>
			<?php	while($listGallery->have_posts()): $listGallery->the_post();
						get_template_part('formats/format-gallery', get_post_format());
					endwhile; ?>
				</div>
	<?php	endif;
			wp_reset_query();
		?>
		<?php /*-------End of Media Walls------*/ ?>




		<?php
			$sectionID = 36;
			$args = array(
				'category__in' => array($sectionID),
			);
			$listGallery = new WP_Query($args);
			if($listGallery->have_posts()): ?>
				<div class="row">
					<div class="col-12">
						<h3 class="subtitle"><?php echo get_field( 'front_name', 'category_'.$sectionID ); ?></h3>
					</div>
			<?php	while($listGallery->have_posts()): $listGallery->the_post();
						get_template_part('formats/format-gallery', get_post_format());
					endwhile; ?>
				</div>
	<?php	endif;
			wp_reset_query();
		?>
		<?php /*-------End of Study Units------*/ ?>




		<?php
			$sectionID = 37;
			$args = array(
				'category__in' => array($sectionID),
			);
			$listGallery = new WP_Query($args);
			if($listGallery->have_posts()): ?>
				<div class="row">
					<div class="col-12">
						<h3 class="subtitle"><?php echo get_field( 'front_name', 'category_'.$sectionID ); ?></h3>
					</div>
			<?php	while($listGallery->have_posts()): $listGallery->the_post();
						get_template_part('formats/format-gallery', get_post_format());
					endwhile; ?>
				</div>
	<?php	endif;
			wp_reset_query();
		?>
		<?php /*-------End of Appliances------*/ ?>




		<?php
			$sectionID = 38;
			$args = array(
				'category__in' => array($sectionID),
			);
			$listGallery = new WP_Query($args);
			if($listGallery->have_posts()): ?>
				<div class="row">
					<div class="col-12">
						<h3 class="subtitle"><?php echo get_field( 'front_name', 'category_'.$sectionID ); ?></h3>
					</div>
			<?php	while($listGallery->have_posts()): $listGallery->the_post();
						get_template_part('formats/format-gallery', get_post_format());
					endwhile; ?>
				</div>
	<?php	endif;
			wp_reset_query();
		?>
		<?php /*-------End of Accessories------*/ ?>



	</div>
</div>

<?php get_footer(); ?>