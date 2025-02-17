<?php

/**
 * Nivaro functions and definitions
 *
 * @package nivaro
 * @author  Yahya Qara
 * @link https://blocklayouts.com/product/nivaro/
 * @since 1.0.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'nvro_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.2
	 * @return void
	 */
	function nvro_setup() {
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'nvro_setup' );

/**
 * Enqueue styles.
 */
function nvro_enqueue_style_sheet() {

	$version = wp_get_theme( 'nivaro' )->get( 'Version' );
	wp_enqueue_style( 'nvro-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), $version );

	// Enqueue jQuery.
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'nvro-custom-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), $version, false );
}
add_action( 'wp_enqueue_scripts', 'nvro_enqueue_style_sheet' );

/**
 * Add editor styles
 */
function nvro_editor_enqueue_style_sheet() {
	wp_enqueue_style( 'nvro-editor-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'enqueue_block_editor_assets', 'nvro_editor_enqueue_style_sheet' );


if ( ! function_exists( 'nvro_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since 1.0.2
	 * @return void
	 */
	function nvro_pattern_categories() {
		// Register block pattern categories.
		$pattern_categories = array(
			array(
				'slug'        => 'nvro/page',
				'label'       => __( 'Pages', 'nivaro' ),
				'description' => __( 'A collection of full page layouts', 'nivaro' ),
			),
			array(
				'slug'        => 'nvro/pricing',
				'label'       => __( 'Pricing', 'nivaro' ),
				'description' => __( 'A collection of pricing patterns', 'nivaro' ),
			),
			array(
				'slug'        => 'nvro/hero',
				'label'       => __( 'Hero', 'nivaro' ),
				'description' => __( 'A collection of heroes patterns', 'nivaro' ),
			),
			array(
				'slug'        => 'nvro',
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

add_action( 'init', 'nvro_pattern_categories' );

require_once 'inc/block-styles.php';
require_once 'inc/welcome-notice.php';