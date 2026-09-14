<?php
/**
 * Philosophy Blocks theme setup.
 *
 * Philosophy Blocks is a block theme: the layout lives in templates/*.html, the
 * design system in theme.json, and the sections in patterns/*.php. This file
 * carries only what those cannot express — supports flags, asset enqueues,
 * block styles and the pattern category.
 *
 * @package Philosophy_Blocks
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'PHILOSOPHY_BLOCKS_VERSION' ) ) {
	$philosophy_blocks_theme = wp_get_theme( get_template() );
	define( 'PHILOSOPHY_BLOCKS_VERSION', $philosophy_blocks_theme->get( 'Version' ) ? $philosophy_blocks_theme->get( 'Version' ) : '2.0.7' );
	unset( $philosophy_blocks_theme );
}

if ( ! defined( 'PHILOSOPHY_BLOCKS_FONTAWESOME_VERSION' ) ) {
	define( 'PHILOSOPHY_BLOCKS_FONTAWESOME_VERSION', '7.3.1' );
}

/**
 * Theme supports.
 *
 * A block theme gets most of this from theme.json; what remains is the set of
 * flags that have no theme.json equivalent.
 */
function philosophy_blocks_setup() {
	load_theme_textdomain( 'philosophy-blocks', get_theme_file_path( 'languages' ) );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Philosophy has always styled these two formats.
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'philosophy_blocks_setup' );

/**
 * Front-end assets.
 *
 * Three files: the webfaces, the icon set and the small amount of behaviour
 * theme.json cannot describe. Everything else is block markup and global styles.
 */
function philosophy_blocks_assets() {
	$uri = trailingslashit( get_template_directory_uri() );
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// theme.json registers the font faces, so this is only the extra subsets.
	wp_enqueue_style( 'philosophy-blocks-fonts', $uri . 'assets/css/fonts.css', array(), PHILOSOPHY_BLOCKS_VERSION );

	wp_enqueue_style(
		'philosophy-blocks-icons',
		$uri . 'assets/css/fontawesome/all' . $min . '.css',
		array(),
		PHILOSOPHY_BLOCKS_FONTAWESOME_VERSION
	);

	wp_enqueue_style(
		'philosophy-blocks-style',
		get_stylesheet_uri(),
		array(),
		PHILOSOPHY_BLOCKS_VERSION
	);

	wp_enqueue_style(
		'philosophy-blocks-layout',
		$uri . 'assets/css/theme' . $min . '.css',
		array( 'philosophy-blocks-style' ),
		PHILOSOPHY_BLOCKS_VERSION
	);

	// The masonry grid and the scroll reveal. Both degrade to a plain stacked
	// layout when the script does not run, so neither is required for the page
	// to be readable.
	wp_enqueue_script(
		'philosophy-blocks-scripts',
		$uri . 'assets/js/philosophy-blocks' . $min . '.js',
		array(),
		PHILOSOPHY_BLOCKS_VERSION,
		true
	);

	// The search overlay is built in the browser, so its strings have to reach
	// it from here rather than being written into the script.
	wp_localize_script(
		'philosophy-blocks-scripts',
		'philosophyBlocksL10n',
		array(
			'search'      => __( 'Search', 'philosophy-blocks' ),
			'closeSearch' => __( 'Close the search form', 'philosophy-blocks' ),
			'hint'        => __( 'Press Enter to begin your search.', 'philosophy-blocks' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'philosophy_blocks_assets' );

/**
 * Loads the icon set and the webfaces into the editor too.
 */
function philosophy_blocks_editor_assets() {
	$uri = trailingslashit( get_template_directory_uri() );
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style( 'philosophy-blocks-editor-fonts', $uri . 'assets/css/fonts.css', array(), PHILOSOPHY_BLOCKS_VERSION );
	wp_enqueue_style(
		'philosophy-blocks-editor-icons',
		$uri . 'assets/css/fontawesome/all' . $min . '.css',
		array(),
		PHILOSOPHY_BLOCKS_FONTAWESOME_VERSION
	);
}
add_action( 'enqueue_block_editor_assets', 'philosophy_blocks_editor_assets' );

/**
 * The theme's pattern category.
 */
function philosophy_blocks_pattern_category() {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	register_block_pattern_category(
		'philosophy',
		array(
			'label'       => esc_html__( 'Philosophy', 'philosophy-blocks' ),
			'description' => esc_html__( 'Sections from the Philosophy theme.', 'philosophy-blocks' ),
		)
	);
}
add_action( 'init', 'philosophy_blocks_pattern_category' );

require_once get_theme_file_path( 'inc/block-styles.php' );
require_once get_theme_file_path( 'inc/updates.php' );
