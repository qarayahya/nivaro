<?php

/**
 * Block Styles
 *
 * @package nivaro
 * @author Yahya Qara
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Register block styles for core/button.
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
