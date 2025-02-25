<?php
function school_register_custom_post_types() {
    //Registring Students post type
  	$labels = array(
		'name'                  => _x( 'students', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'student', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Students', 'text_domain' ),
		'name_admin_bar'        => __( 'Students', 'text_domain' ),
		'archives'              => __( 'Student Archives', 'text_domain' ),
		'attributes'            => __( 'Student attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All students', 'text_domain' ),
		'add_new_item'          => __( 'Add New student', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New student', 'text_domain' ),
		'edit_item'             => __( 'Edit student', 'text_domain' ),
		'update_item'           => __( 'Update student', 'text_domain' ),
		'view_item'             => __( 'View student', 'text_domain' ),
		'view_items'            => __( 'View student', 'text_domain' ),
		'search_items'          => __( 'Search student', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into student', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this student', 'text_domain' ),
		'items_list'            => __( 'students list', 'text_domain' ),
		'items_list_navigation' => __( 'students list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter students list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'students',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'student', 'text_domain' ),
		'description'           => __( 'students', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businesswoman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template'              => array(
                array( 'core/paragraph', array(
                    'placeholder' => 'Write a short biography...',
                ) ),
                array( 'core/button', array(
                    'text' => 'View My Portfolio',
                    'url' => '#',
                    'align' => 'center',
                ) ),
            ),
        'template_lock'         => 'all'

        
	);
	register_post_type( 'school_students', $args );

    //registering staff post type
	$labels = array(
		'name'                  => _x( 'Staffs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'staff', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Staff', 'text_domain' ),
		'name_admin_bar'        => __( 'Staff', 'text_domain' ),
		'archives'              => __( 'Staff Archives', 'text_domain' ),
		'attributes'            => __( 'Staff Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All staff', 'text_domain' ),
		'add_new_item'          => __( 'Add New Staff', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New staff', 'text_domain' ),
		'edit_item'             => __( 'Edit staff', 'text_domain' ),
		'update_item'           => __( 'Update staff', 'text_domain' ),
		'view_item'             => __( 'View staff', 'text_domain' ),
		'view_items'            => __( 'View staff', 'text_domain' ),
		'search_items'          => __( 'Search staff', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into staff', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this staff', 'text_domain' ),
		'items_list'            => __( 'staff list', 'text_domain' ),
		'items_list_navigation' => __( 'staff list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter staff list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'school_staff',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'staff', 'text_domain' ),
		'description'           => __( 'A custom post for staff', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
        'template'              => array(
            array(
                'core/paragraph',
                array(
                    'placeholder' => 'Enter job title...',
                )
            ),
            array(
                'core/paragraph',
                array(
                    'placeholder' => 'Enter email address...',
                )
            ),
        ),
        'template_lock' => 'all', 
    );
	register_post_type( 'school_staff', $args );

}
add_action( 'init', 'school_register_custom_post_types' );


add_filter('enter_title_here', 'custom_student_title_placeholder', 10, 2);

function custom_student_title_placeholder($placeholder, $post) {
    if ($post->post_type === 'school_students') {
        return 'Add student name';
    }
    if($post->post_type === 'school_staff') {
        return "Add staff name";
    }
    return $placeholder;
}

function school_rewrite_flush() {
    school_register_custom_post_types();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'school_rewrite_flush' );
