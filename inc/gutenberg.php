<?php
/**
 * Gutenberg functions
 *
 * @package Sydney
 */

function sydney_gutenberg_setup() {

  // Adding support for core block visual styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'sydney_gutenberg_setup' );

function sydney_gutenberg_scripts() {
  wp_enqueue_style('sydney-butenberg-style', get_template_directory_uri() . '/css/sydney-gutenberg.css');
}
add_action( 'wp_enqueue_scripts', 'sydney_gutenberg_scripts' );

/**
* Enqueue editor styles for Gutenberg
*/
function sydney_editor_styles() {
	$sydney_fonts_url = '';
	wp_enqueue_style( 'sydney-fonts', $sydney_fonts_url, array(), null );
	wp_enqueue_style( 'sydney-editor-style', get_template_directory_uri() . '/css/editor-style.css' );
}
add_action( 'enqueue_block_editor_assets', 'sydney_editor_styles' );
