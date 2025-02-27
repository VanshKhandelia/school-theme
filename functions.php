<?php
function school_enqueues() {
	// Loading style.css on the front-end
	// Parameters: Unique handle, Source, Dependencies, Version number, Media
	wp_enqueue_style( 
		'school-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);
	wp_enqueue_style( 
		'school-normalize', 
		get_theme_file_uri( 'assets/css/normalize-fwd.css'), 
		array(), 
		'12.1.0'
	);
	wp_enqueue_style( 
		'aos-stylesheet', 
		get_theme_file_uri( 'assets/css/aos.css'), 
		array(), 
		'12.1.0'
	);
	wp_enqueue_script(
		'aos-script',
		get_theme_file_uri( 'assets/js/aos.js'),
		array(),
		wp_get_theme()->get( 'Version' ),
		array('strategy' => 'defer')
	);
}
add_action( 'wp_enqueue_scripts', 'school_enqueues' );

function school_setup() {
	add_editor_style( get_stylesheet_uri() );
	add_image_size( '400x600', 400, 600, true );
	add_image_size( '200x300', 200, 300, true );

}
add_action( 'after_setup_theme', 'school_setup' );

function school_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'400x600' => __( '400x600', 'school-theme' ),
		'200x300' => __( '200x300', 'school-theme' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'school_add_custom_image_sizes' );


require get_template_directory() . '/inc/post-types-taxonomies.php';
?>
