<?php
/* MENU FUNCTIONALITY */
add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Main Menu' ),
            'secondary-menu' => __( 'Mobile Menu' )
        )
    );
}
/* ADVANCED CUSTOM FIELDS */
if( function_exists('acf_add_options_page') ) {
 	acf_add_options_page();
 	acf_add_options_sub_page('General');
 	acf_add_options_sub_page('Header');
 	acf_add_options_sub_page('Footer');
 	acf_add_options_sub_page('Social Media');
 	/* CHANGE TITLE OF OPTIONS AREA */
 	if( function_exists('acf_set_options_page_title') )
 	{
 	    acf_set_options_page_title( __('Theme Options') );
 	}
}

/* STYLESHEETS */
function styles()
{
   wp_register_style('main', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
   wp_enqueue_style('main');

   wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
   wp_enqueue_style('normalize');
   
   wp_register_style('parallaxer-css', get_template_directory_uri() . '/css/dzsparallaxer.css', array(), '1.0', 'all');
   wp_enqueue_style('parallaxer-css');
}
add_action( 'wp_enqueue_scripts', 'styles' );

/* CUSTOM WP EDITOR STYLES */
function themeit_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'themeit_mce_buttons_2' );
function themeit_tiny_mce_before_init( $settings ) {
	$style_formats = array(
		array( 'title' => 'Orange CTA Button', 'block' => 'div', 'classes' => 'book-button no-float' )
	);
	$settings['style_formats'] = json_encode( $style_formats );
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'themeit_tiny_mce_before_init' );

/* FEATURED IMAGE ACTIVATION */
add_theme_support( 'post-thumbnails' );
/* LOGO IMAGE CROP */
add_image_size( 'logo-crop', 500, 455 );

/* CUSTOM MENU LINK CLASS */
function add_menuclass($ulclass) {
    return preg_replace('/<a/', '<a class="smoothScroll"', $ulclass);
    return $output;
}
add_filter('wp_nav_menu', 'add_menuclass');

/* SHORTCODE IN TEXT WIDGET ACTIVATION */
add_filter('widget_text', 'do_shortcode');

/* SCRIPTS IN FOOTER */
function footer_scripts() 
{
		wp_register_script( 'parallax', get_stylesheet_directory_uri() . '/js/parallax.min.js', array( 'jquery' ), '1.1', true );
		wp_enqueue_script('parallax');
		
		wp_register_script( 'parallaxer-script', get_stylesheet_directory_uri() . '/js/dzsparallaxer.js', array( 'jquery' ), '', true );
		wp_enqueue_script('parallaxer-script');
		
		wp_register_script( 'fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array( 'jquery' ), '1.1', true );
		wp_enqueue_script('fontawesome');
		
		wp_register_script( 'vimeo', 'https://player.vimeo.com/api/player.js', array( 'jquery' ), '1.1', true );
		wp_enqueue_script('vimeo');
		
		wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.1', true );
		wp_enqueue_script('scripts');
}
add_action( 'wp_enqueue_scripts', 'footer_scripts' );

/* IMAGE SIZES */

function sgr_display_image_size_names_muploader( $sizes ) {
$new_sizes = array();
$added_sizes = get_intermediate_image_sizes();
// $added_sizes is an indexed array, therefore need to convert it
// to associative array, using $value for $key and $value
foreach( $added_sizes as $key => $value) {
$new_sizes[$value] = $value;
}
// This preserves the labels in $sizes, and merges the two arrays
$new_sizes = array_merge( $new_sizes, $sizes );
return $new_sizes;
}
add_filter('image_size_names_choose', 'sgr_display_image_size_names_muploader', 11, 1);

/* ADD NO JS */
add_filter('language_attributes', 'modernizr');
function modernizr($output) {
    return $output . ' class="no-js"';
}

function portfolio() {
    ob_start();
    get_template_part('includes/portfolio');
    return ob_get_clean();
} 
add_shortcode( 'portfolio', 'portfolio' );