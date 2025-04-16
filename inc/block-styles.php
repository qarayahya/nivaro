<?php

/**
 * Block Styles
 *
 * @package nivaro
 * @author Yahya Qara
 * @since 1.0.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Registers custom block styles.
if ( ! function_exists( 'nvro_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since 1.0.5
	 *
	 * @return void
	 */
	function nvro_block_styles() {
		register_block_style(
			'core/button',
			array(
				'name'  => 'secondary-button',
				'label' => __( 'Secondary', 'nivaro' ),
			)
		);
		
		register_block_style(
			'core/button',
			array(
				'name'  => 'tertiary-button',
				'label' => __( 'Tertiary', 'nivaro' ),
			)
		);
	}
endif;
add_action( 'init', 'nvro_block_styles' );