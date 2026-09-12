<?php
/**
 * Block styles.
 *
 * @package Philosophy_Blocks
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers the theme's block styles.
 *
 * Each has matching CSS in assets/css/theme.css and the editor stylesheet.
 */
function philosophy_blocks_register_block_styles() {
	if ( ! function_exists( 'register_block_style' ) ) {
		return;
	}

	$styles = array(
		'core/quote'     => array(
			'name'  => 'philosophy-pull',
			'label' => __( 'Pull quote', 'philosophy-blocks' ),
		),
		'core/image'     => array(
			'name'  => 'philosophy-framed',
			'label' => __( 'Framed', 'philosophy-blocks' ),
		),
		'core/separator' => array(
			'name'  => 'philosophy-asterisks',
			'label' => __( 'Asterisks', 'philosophy-blocks' ),
		),
		'core/list'      => array(
			'name'  => 'philosophy-checked',
			'label' => __( 'Checked', 'philosophy-blocks' ),
		),
	);

	foreach ( $styles as $block => $style ) {
		register_block_style( $block, $style );
	}
}
add_action( 'init', 'philosophy_blocks_register_block_styles' );
