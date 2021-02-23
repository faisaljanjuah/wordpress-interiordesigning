<?php get_header(); ?>

<!-- Kitchen Section -->
<?php $kitchens_ID = 2; ?>
<section class="SectionWhite">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php echo get_cat_name($kitchens_ID); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
				$icounter = 1;
				$args = array('child_of' => $kitchens_ID, 'hide_empty'=> 0, 'orderby'=>'id' );
				$categories = get_categories( $args );
				foreach($categories as $category) { ?>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="courses_box mb-5">
							<div class="course-img-wrap">
								<div class="d_coverImage" style="background-image:url(<?php echo z_taxonomy_image_url($category->term_id, 'medium'); ?>);">
									<div class="link-wrap">
										<a href="<?php echo get_category_link( $category->term_id ); ?>" class="linkSlide"><span>View Details</span></a>
									</div>
								</div>
							</div>
							<div class="courses_icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
							</div>
							<div class="blockContent">
								<h3><?php echo get_field('front_name', $category); ?></h3>
								<p><?php echo $category->description; ?></p>
								<a class="btn btn-view" href="<?php echo get_category_link( $category->term_id ); ?>">View</a>
							</div>
						</div>
					</div>
			<?php
				if ($icounter++ == 4) break;
				}
			?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="<?php echo get_category_link($kitchens_ID); ?>" class="btn btn-default btn-courses">View all <?php echo get_cat_name($kitchens_ID); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- Wardrobes Section -->
<?php $wardrobes_ID = 8; ?>
<section class="sectionGray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo get_cat_name($wardrobes_ID); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php 
				$icounter = 1;
				$args = array('child_of' => $wardrobes_ID, 'hide_empty'=> 0, 'orderby'=>'id' );
				$categories = get_categories( $args );
				foreach($categories as $category) { ?>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="courses_box mb-5">
							<div class="course-img-wrap">
								<div class="d_coverImage" style="background-image:url(<?php echo z_taxonomy_image_url($category->term_id, 'medium'); ?>);">
									<div class="link-wrap">
										<a href="<?php echo get_category_link( $category->term_id ); ?>" class="linkSlide"><span>View Details</span></a>
									</div>
								</div>
							</div>
							<div class="courses_icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
							</div>
							<div class="blockContent">
								<h3><?php echo get_field('front_name', $category); ?></h3>
								<p><?php echo $category->description; ?></p>
								<a class="btn btn-view" href="<?php echo get_category_link( $category->term_id ); ?>">View</a>
							</div>
						</div>
					</div>
			<?php
				if ($icounter++ == 4) break;
				}
			?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="<?php echo get_category_link($wardrobes_ID); ?>" class="btn btn-default btn-courses">View all <?php echo get_cat_name($wardrobes_ID); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- Doors Section -->
<?php $doors_ID = 13; ?>
<section class="SectionWhite">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo get_cat_name($doors_ID); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
				$icounter = 1; 
				$args = array('child_of' => $doors_ID, 'hide_empty'=> 0, 'orderby'=>'id' );
				$categories = get_categories( $args );
				foreach($categories as $category) { ?>
				<!-- <p>Doors: <?php print_r ($category); ?></p> -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="courses_box mb-5">
							<div class="course-img-wrap">
								<div class="d_coverImage" style="background-image:url(<?php echo z_taxonomy_image_url($category->term_id, 'medium'); ?>);">
									<div class="link-wrap">
										<a href="<?php echo get_category_link( $category->term_id ); ?>" class="linkSlide"><span>View Details</span></a>
									</div>
								</div>
							</div>
							<div class="courses_icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
							</div>
							<div class="blockContent">
								<h3><?php echo get_field('front_name', $category); ?></h3>
								<p><?php echo $category->description; ?></p>
								<a class="btn btn-view" href="<?php echo get_category_link( $category->term_id ); ?>">View</a>
							</div>
						</div>
					</div>
			<?php
				if ($icounter++ == 4) break;
				}
			?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="<?php echo get_category_link($doors_ID); ?>" class="btn btn-default btn-courses">View all <?php echo get_cat_name($doors_ID); ?></a>
			</div>
		</div>
	</div>
</section>


<!-- Others Section -->
<section class="sectionGray blog">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="otherBlockWao">
					<?php $corianBath_ID = 18; ?>
					<a href="<?php echo get_category_link($corianBath_ID); ?>">
						<div class="otherCatImage" style="background-image:url(<?php echo z_taxonomy_image_url($corianBath_ID, 'medium'); ?>);">
							<div class="proHover">
								<span>View Details</span>
							</div>
						</div>
					</a>
					<div class="blogtitle">
						<a class="pull-right btn btn-view" href="<?php echo get_category_link($corianBath_ID); ?>">View All</a>
						<h3><?php echo get_field( 'front_name', 'category_'.$corianBath_ID ); ?></h3>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="otherBlockWao">
					<?php $mediaWalls_ID = 19; ?>
					<a href="<?php echo get_category_link($mediaWalls_ID); ?>">
						<div class="otherCatImage" style="background-image:url(<?php echo z_taxonomy_image_url($mediaWalls_ID, 'medium'); ?>);">
							<div class="proHover">
								<span>View Details</span>
							</div>
						</div>
					</a>
					<div class="blogtitle">
						<a class="pull-right btn btn-view" href="<?php echo get_category_link($mediaWalls_ID); ?>">View All</a>
						<h3><?php echo get_field( 'front_name', 'category_'.$mediaWalls_ID ); ?></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="otherBlockWao">
					<?php $studyUnits_ID = 20; ?>
					<a href="<?php echo get_category_link($studyUnits_ID); ?>">
						<div class="otherCatImage" style="background-image:url(<?php echo z_taxonomy_image_url($studyUnits_ID, 'medium'); ?>);">
							<div class="proHover">
								<span>View Details</span>
							</div>
						</div>
					</a>
					<div class="blogtitle">
						<a class="pull-right btn btn-view" href="<?php echo get_category_link($studyUnits_ID); ?>">View All</a>
						<h3><?php echo get_field( 'front_name', 'category_'.$studyUnits_ID ); ?></h3>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="otherBlockWao">
					<?php $appliances_ID = 21; ?>
					<a href="<?php echo get_category_link($appliances_ID); ?>">
						<div class="otherCatImage" style="background-image:url(<?php echo z_taxonomy_image_url($appliances_ID, 'medium'); ?>);">
							<div class="proHover">
								<span>View Details</span>
							</div>
						</div>
					</a>
					<div class="blogtitle">
						<a class="pull-right btn btn-view" href="<?php echo get_category_link($appliances_ID); ?>">View All</a>
						<h3><?php echo get_field( 'front_name', 'category_'.$appliances_ID ); ?></h3>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="otherBlockWao">
					<?php $accessories_ID = 22; ?>
					<a href="<?php echo get_category_link($accessories_ID); ?>">
						<div class="otherCatImage" style="background-image:url(<?php echo z_taxonomy_image_url($accessories_ID, 'medium'); ?>);">
							<div class="proHover">
								<span>View Details</span>
							</div>
						</div>
					</a>
					<div class="blogtitle">
						<a class="pull-right btn btn-view" href="<?php echo get_category_link($accessories_ID); ?>">View All</a>
						<h3><?php echo get_field( 'front_name', 'category_'.$accessories_ID ); ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>