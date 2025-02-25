<?php
function school_register_custom_post_types() {
    //Registring Students post type

    //registering staff post type
}
add_action( 'init', 'school_register_custom_post_types' );

<?php
function school_rewrite_flush() {
    school_register_custom_post_types();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'school_rewrite_flush' );
?>