<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<html lang="en">
<head>
	<!-- Basic Page Needs  -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('Name'); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- Mobile Specific Meta  -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<?php wp_head(); ?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<?php
	if ( is_home () ) { ?>
	<header>
		<div class="mainLogoPlacement">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logoTitle.png" class="titleLogo" />
		</div>
		<div class="menu">
			<button class="res_button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<div class="m_holder">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<a href="<?php echo get_site_url(); ?>"><?php
					if ( has_custom_logo() ) {
						echo '<img src="'. esc_url( $logo[0] ) .'">';
					} else {
						echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}
				?></a>
				<?php wp_nav_menu(array('theme_location' => 'MainMenu', 'menu_class' => 'main_menu' )); ?>
			</div>
		</div>
	</header>
<?php
	}
	else{
?>
	<header class="headerPage">
		<div class="menu vizXS">
			<div class="m_holder">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
					<a href="<?php echo get_site_url(); ?>"><?php 
					if ( has_custom_logo() ) {
						echo '<img src="'. esc_url( $logo[0] ) .'">';
					} else {
						echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}?></a>
					<div class="menuWrapper">
						<button class="res_button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<?php wp_nav_menu(array('theme_location' => 'MainMenu', 'menu_class' => 'main_menu' )); ?>
					</div>
			</div>
		</div>
		<div class="container hidXS">
			<div class="menu">
				<div class="m_holder">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
					<a href="<?php echo get_site_url(); ?>"><?php 
					if ( has_custom_logo() ) {
						echo '<img src="'. esc_url( $logo[0] ) .'">';
					} else {
						echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}?></a>
					<div class="menuWrapper">
						<button class="res_button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<?php wp_nav_menu(array('theme_location' => 'MainMenu', 'menu_class' => 'main_menu' )); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="page-banner"></div>
	</header>
		<script>
			jQuery(function(){
				jQuery('.page-banner').parallax({
					src: '<?php if(has_header_image()){echo(get_header_image());}else{ echo get_template_directory_uri()."/images/defaultBanner.jpg";}?>',
					speed: 0.5,
				});
			});
		</script>
	<?php 
	}
?>

