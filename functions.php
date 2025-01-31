<?php

/**
 * Nivaro functions and definitions
 *
 * @package nivaro
 * @author  Yahya Qara
 * @link https://blocklayouts.com/product/nivaro/
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nivaro_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function nivaro_setup() {
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'nivaro_setup' );

/**
 * Enqueue styles.
 */
function nivaro_enqueue_style_sheet() {

	$version = wp_get_theme( 'nivaro' )->get( 'Version' );
	wp_enqueue_style( 'nivaro-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), $version );

	// Enqueue jQuery.
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'nivaro-custom-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), $version, false );
}
add_action( 'wp_enqueue_scripts', 'nivaro_enqueue_style_sheet' );

/**
 * Add editor styles
 */
function nivaro_editor_enqueue_style_sheet() {
	wp_enqueue_style( 'nivaro-editor-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'enqueue_block_editor_assets', 'nivaro_editor_enqueue_style_sheet' );


if ( ! function_exists( 'nivaro_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function nivaro_pattern_categories() {
		// Register block pattern categories.
		$pattern_categories = array(
			array(
				'slug'        => 'nivaro/page',
				'label'       => __( 'Pages', 'nivaro' ),
				'description' => __( 'A collection of full page layouts', 'nivaro' ),
			),
			array(
				'slug'        => 'nivaro/pricing',
				'label'       => __( 'Pricing', 'nivaro' ),
				'description' => __( 'A collection of pricing patterns', 'nivaro' ),
			),
			array(
				'slug'        => 'nivaro/hero',
				'label'       => __( 'Hero', 'nivaro' ),
				'description' => __( 'A collection of heroes patterns', 'nivaro' ),
			),
			array(
				'slug'        => 'nivaro',
				'label'       => __( 'Nivaro', 'nivaro' ),
				'description' => __( 'Nivaro patterns collection', 'nivaro' ),
			),
		);
		// Register each pattern category.
		foreach ( $pattern_categories as $category ) {
			register_block_pattern_category( $category['slug'], $category );
		}
	}

endif;

add_action( 'init', 'nivaro_pattern_categories' );

require_once 'inc/block-styles.php';
require_once 'inc/welcome-notice.php';