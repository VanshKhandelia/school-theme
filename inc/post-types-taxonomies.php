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
		'taxonomies'            => array('school-student-role'),
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
		'taxonomies'            => array('school-staff-category'),
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


function school_register_custom_taxonomies() {

	//adding student-roles custom taxonomies
	$labels = array(
		'name'                       => _x( 'student-roles', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'student-role', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'student-role', 'text_domain' ),
		'all_items'                  => __( 'all student-roles', 'text_domain' ),
		'parent_item'                => __( 'Parent student-role', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent student-role:', 'text_domain' ),
		'new_item_name'              => __( 'New student-role', 'text_domain' ),
		'add_new_item'               => __( 'Add New student-role', 'text_domain' ),
		'edit_item'                  => __( 'Edit student-role', 'text_domain' ),
		'update_item'                => __( 'Update student-role', 'text_domain' ),
		'view_item'                  => __( 'View student-role', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate student-role with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove student-role', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular student-roles', 'text_domain' ),
		'search_items'               => __( 'Search student-roles', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No student-roles', 'text_domain' ),
		'items_list'                 => __( 'student-roles list', 'text_domain' ),
		'items_list_navigation'      => __( 'student-roles list navigation', 'text_domain' ),
		'item_link_description'      => __( 'A link to student roles', 'school-theme' )
	);
	$rewrite = array(
		'slug'                       => 'student-role-taxonomy',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'school-student-role', array( 'school_students' ), $args );

	//adding staff-category custom taxonomy

	$labels = array(
		'name'                       => _x( 'staffcategories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'staffcategory', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'staff-category', 'text_domain' ),
		'all_items'                  => __( 'All staff-categories', 'text_domain' ),
		'parent_item'                => __( 'Parent staff-catgeories', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent staff-catgeories:', 'text_domain' ),
		'new_item_name'              => __( 'New staff-catgeory Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New staff-catgeory', 'text_domain' ),
		'edit_item'                  => __( 'Edit staff-catgeory', 'text_domain' ),
		'update_item'                => __( 'Update staff-catgeory', 'text_domain' ),
		'view_item'                  => __( 'View staff-catgeory', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate staff-catgeory with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove staff-catgeory', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular staff-catgeories', 'text_domain' ),
		'search_items'               => __( 'Search staff-catgeory', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No staff-catgeories', 'text_domain' ),
		'items_list'                 => __( 'staff-catgeories list', 'text_domain' ),
		'items_list_navigation'      => __( 'staff-catgeory list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'staff-catgeory',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$capabilities = array(
		'assign_terms'               => 'edit_staff-categories',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
		'capabilities'               => $capabilities,
		'show_in_rest'               => true,
	);

	register_taxonomy( 'school-staff-category', array( 'school_staff' ), $args );
}

add_action ('init' , 'school_register_custom_taxonomies');

