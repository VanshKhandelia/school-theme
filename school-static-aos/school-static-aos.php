<?php
/**
 * Plugin Name:       Static-aos
 * Plugin URI:        school-blocks
 * Description:       Adds animation
 * Version:           1.0.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Muskan,Vansh
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       school-static-aos
 *
 * @package SchoolBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function school_blocks_school_static_aos_block_init() {
	register_block_type( __DIR__ . '/build/school-static-aos' );
}
add_action( 'init', 'school_blocks_school_static_aos_block_init' );
