<?php get_header(); ?>

<div class="searchResults">
	<div class="container">
		<div class="row">
			<div class="col-12 search-list">
				<?php
					if(have_posts()){ ?>
						<div class="title">
							<h2>Search result for: "<?php echo get_search_query(); ?>"</h2>
						</div>
					<?php
						while(have_posts()): the_post(); ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_excerpt(); ?> </p>
							<a href="<?php the_permalink(); ?>">View Link <small>&#x276f;</small></a>
							<div class="hr"></div>
				<?php	endwhile; ?>

						<div class="row">
							<div class="col-12 naviga">
								<?php my_numeric_posts_nav(); ?>
							</div>
						</div>
			<?php	}
					else{ ?>
						<div class="title noListFound">
							<h3>Sorry no result found for your query "<?php echo get_search_query(); ?>", try another keyword...</h3>
							<br>
							<?php get_search_form(); ?>
						</div>
			<?php	}

						
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

