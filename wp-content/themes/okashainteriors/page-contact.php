<?php get_header(); ?>
<div class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="contact-form">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-6 contact-option">
							<div class="contact-option_rsp">
								<h3>Leave a message</h3>
								<div class="contact-fields">
									<?php echo do_shortcode( '[contact-form-7 id="174" title="ContactForm"]' ); ?> 
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6">
							<div class="contact-address">
								<h3>Location</h3>
								<div class="contact-details">
									<?php wp_nav_menu(array('theme_location' => 'ContactInfo', 'menu_class' => 'detailInfo' )); ?>
								</div>
								<div class="address">
									<?php wp_nav_menu(array('theme_location' => 'SocialInfo', 'container' => false, 'menu_class' => 'footer-social-icons' )); ?>
								</div>
							</div>
						</div>
						<p class="contact-center">OR</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="map" data-lat="33.526563" data-lon="73.138964" data-zoom="16"></div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyDMTUkJAmi1ahsx9uCGSgmcSmqDTBF9ygg"></script>
<?php get_footer(); ?>