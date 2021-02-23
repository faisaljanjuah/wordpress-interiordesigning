<?php
function oi_enq_scripts(){
	// CSS Files
	wp_enqueue_style('Barlow', 'https://fonts.googleapis.com/css?family=Barlow:300,400,600', array(),'','all');
	wp_enqueue_style('Bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(),'4.0.0-alpha.6','all');
	wp_enqueue_style('fancyboxStyle', get_template_directory_uri().'/css/fancybox.min.css', array(),'3.1.25','all');
	wp_enqueue_style('slickStyle', get_template_directory_uri().'/css/slick.css', array(),'1.8.1','all');
	wp_enqueue_style('OIStyle', get_template_directory_uri().'/style.css', array(),'1.0.0','all');
	// JS Files
	// wp_enqueue_script('jqLib', get_template_directory_uri().'/js/jquery.min.js', array(), '3.2.1', true);
	wp_enqueue_script('BootQuery', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.0.47', true);
	wp_enqueue_script('fancyboxScript', get_template_directory_uri().'/js/fancybox.min.js', array(), '3.1.25', true);
	wp_enqueue_script('slickScript', get_template_directory_uri().'/js/slick.js', array(), '1.8.1', true);
	wp_enqueue_script('Parallax', get_template_directory_uri().'/js/parallax.js', array(), '2.0.0', true);
	wp_enqueue_script('CustomJS', get_template_directory_uri().'/js/custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts','oi_enq_scripts');

function admin_js() {
	echo '<script type="text/javascript" src="'. get_template_directory_uri() . '/js/admin.js"></script>';
	echo '<link type="text/css" rel="stylesheet" href="'.get_template_directory_uri().'/css/admin.css" />';
}
add_action('admin_footer', 'admin_js');


function oi_menus(){
	add_theme_support('menus');
	register_nav_menu('MainMenu', 'Main Menu');
	register_nav_menu('ContactInfo', 'Contact Info');
	register_nav_menu('SocialInfo', 'Social Info');
}
add_action('init', 'oi_menus');
add_theme_support('custom-header');	
add_theme_support('post-thumbnails');
// add_theme_support('custom-background');	

function oi_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'oi_logo_setup' );

if ( is_admin() ) {
	function remove_revolution_slider_meta_boxes() {
		remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
		remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
		// remove_meta_box( 'mymetabox_revslider_0', 'YOUR_CUSTOM_POST_TYPE', 'normal' );
	}
	add_action( 'do_meta_boxes', 'remove_revolution_slider_meta_boxes' );
}

// UN-wrap images from paragraph in wordpress
function filter_ptags_on_images($content)
{
    return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


function has_Children($cat_id){
	$children = get_terms('category', array('parent'=>$cat_id, 'hide_empty'=> false));
	return ( !$children ) ? false : true;
}
function is_subcategory($cat_id) {
	$cat_data = get_category($cat_id);
	return ( $cat_data->parent ) ? true : false;
}

function my_numeric_posts_nav() {
	if( is_singular() ){
		return;
	}
	global $wp_query;
	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 ){
		return;
	}
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	/** Add current page to the array */
	if ( $paged >= 1 ){
		$links[] = $paged;
	}
	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	echo '<div class="num_pagination"><ul>' . "\n";
	/** Previous Post Link */
	if ( get_previous_posts_link()){
		printf( '<li class="prevLink">%s</li>' . "\n", get_previous_posts_link() );
	}
	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) ){
			echo '<li>…</li>';
		}
	}
	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}
	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ){
			echo '<li>…</li>' . "\n";
		}
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}
	/** Next Post Link */
	if ( get_next_posts_link() ){
		printf( '<li class="nextLink">%s</li>' . "\n", get_next_posts_link() );
	}
	echo '</ul></div>' . "\n";
}









