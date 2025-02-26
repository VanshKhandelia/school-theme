<?php

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
