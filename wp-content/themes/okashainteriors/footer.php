<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="subscribe">
					<?php
						$args = array(
							'type' => 'post',
							'posts_per_page' => 1,
							'category__in' => 39
						);
						$footstatement = new WP_Query($args);
						if($footstatement->have_posts()):
							while($footstatement->have_posts()): $footstatement->the_post(); ?>
								<h3><?php the_title(); ?></h3>
						<?php	the_content();
							endwhile;
						endif;
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="foot-logo">
					<a href="<?php echo get_site_url(); ?>">
						<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							if ( has_custom_logo() ) {
								echo '<img src="'. esc_url( $logo[0] ) .'">';
							} else {
								echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
							}
						?>
					</a>
					<?php echo '<p>'. get_bloginfo( 'description' ) .'</p>'; ?>
				</div>
			</div>
			<div class="col-md-2">
				<div class="sitemap footCol">
					<h3>Navigation</h3>
					<?php wp_nav_menu(array('theme_location' => 'MainMenu', 'menu_class' => 'footerMenu' )); ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footerInfo footCol">
					<?php
						$args = array(
							'posts_per_page' => 1,	
							'category__in' => array(30),
						);
						$footerPost = new WP_Query($args);
						if($footerPost->have_posts()):
							while($footerPost->have_posts()): $footerPost->the_post(); ?>
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?>
					<?php	endwhile;
						endif;
						wp_reset_query();
					?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="address footCol">
					<h3>Contact us</h3>
					<?php wp_nav_menu(array('theme_location' => 'ContactInfo', 'container' => false, 'menu_class' => 'contact-info' )); ?>
					<?php wp_nav_menu(array('theme_location' => 'SocialInfo', 'container' => false, 'menu_class' => 'footer-social-icons' )); ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="bottomLine">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6">
				<p class="copyright">Copyright &copy; <?php echo date('Y').' '; echo get_bloginfo( 'name' ); ?>. All Rights Reserved.</p>
			</div>
			<div class="col-12 col-sm-6">
				<p class="siteBy">Powered by <a href="http://www.theagiletech.com/">Agile Technologies</a></p>
			</div>
		</div>
	</div>
</div>



<?php wp_footer(); ?>
</body>
</html>