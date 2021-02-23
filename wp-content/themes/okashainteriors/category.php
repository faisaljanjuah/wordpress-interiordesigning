<?php get_header(); ?>

<?php
	$slugs = explode('/', get_query_var('category_name'));
	$currentCategory = get_category_by_slug('/'.end($slugs));
	$thisID = $currentCategory->cat_ID;

	if(has_Children($thisID)) { ?>
		<!-- Show elements of Main Category  -->
		<section class="SectionWhite">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2><?php echo get_cat_name($thisID); ?></h2>
						<ul class="categoryTabs">
							<li><a href="<?php echo get_category_link( $thisID ); ?>"><?php echo get_cat_name($thisID); ?></a></li>
							<?php
								$args = array('child_of' => $thisID, 'hide_empty'=> 0, 'orderby'=>'id' );
								$categories = get_categories( $args );
								foreach($categories as $category) { ?>
									<li><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo get_field('front_name', $category); ?></a></li>
							<?php	}
							?>
						</ul>
					</div>
				</div>
				<div class="row">
					<?php
						$args = array('child_of' => $thisID, 'hide_empty'=> 0, 'orderby'=>'id' );
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
					<?php	}
					?>
				</div>
			</div>
		</section>
		<?php include('recent.php'); ?>
		<script>
			jQuery(function(){
				jQuery('section.event').addClass('sectionGray');
			});
		</script>
	<?php }
	else{
		// Show elements from Sub-Category

		// IF it is sub category
		if(is_subcategory($thisID)){
			$subCat = get_category($thisID);
			$parentCat = $subCat->parent;
			$parentCat_info = get_category($parentCat);
			$parentCat_name = $parentCat_info->name;
			$parentCat_id   = get_category_link($parentCat_info->cat_ID);
		?>
			<section class="SectionWhite">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2><?php echo $parentCat_name ?></h2>
							<ul class="categoryTabs">
								<li><a href="<?php echo $parentCat_id; ?>"><?php echo $parentCat_name ?></a></li>
								<?php
									$args = array('child_of' => $parentCat, 'hide_empty'=> 0, 'orderby'=>'id' );
									$categories = get_categories( $args );
									foreach($categories as $category) { ?>
										<li><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo get_field('front_name', $category); ?></a></li>
								<?php	}
								?>
							</ul>
						</div>
					</div>
					<div class="row">
						<?php
							$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'paged' => $currentPage, 
								'category__in' => array($thisID),
							);
							$listPosts = new WP_Query($args);
							if($listPosts->have_posts()):
								while($listPosts->have_posts()): $listPosts->the_post();
									get_template_part('formats/format-products', get_post_format());
								endwhile;
								?>
								<div class="col-12">
									<div class="row">
										<div class="col-12 naviga">
											<?php my_numeric_posts_nav(); ?>
										</div>
									</div>
								</div>
							<?php	
							else : ?>
								<div class="col-12">
									<p><?php echo "There are no products in this section."; ?></p>
								</div>
							<?php 
							endif;
							wp_reset_query();
						?>
					</div>
				</div>
			</section>
<?php
		}
		else{
			// else it is Main category with no sub-category
			?>
			<section class="SectionWhite">
				<div class="container">
					<div class="row">
						<div class="col-12">
						<h2><?php echo get_cat_name($thisID); ?></h2>
						</div>
					</div>
					<div class="row">
						<?php
							$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'paged' => $currentPage, 
								'category__in' => array($thisID),
							);
							$listPosts = new WP_Query($args);
							if($listPosts->have_posts()):
								while($listPosts->have_posts()): $listPosts->the_post();
									get_template_part('formats/format-products', get_post_format());
								endwhile;
								?>
								<div class="col-12">
									<div class="row">
										<div class="col-12 naviga">
											<?php
												my_numeric_posts_nav();
											?>
										</div>
									</div>
								</div>
							<?php	
							else : ?>
								<div class="col-12">
									<p><?php echo "There are no products in this section."; ?></p>
								</div>
							<?php 
							endif;
							wp_reset_query();
						?>
					</div>
				</div>
			</section> <?php
		}
	}
?>
<?php get_footer(); ?>