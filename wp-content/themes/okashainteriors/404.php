<?php get_header(); ?>

<div class="notfound-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'okashainteriors' ); ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'okashainteriors' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>