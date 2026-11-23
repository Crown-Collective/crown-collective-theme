<?php
/**
 * Crown Collective theme setup.
 *
 * @package crown-collective
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Google Fonts used by the Consulting look (Fraunces + DM Sans).
 * Later: self-host these files in assets/fonts for speed and privacy.
 */
function crown_collective_fonts_url() {
	return 'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;0,9..144,800;1,9..144,400;1,9..144,600&family=DM+Sans:wght@400;500;700&display=swap';
}

/**
 * Front-end styles.
 */
function crown_collective_enqueue() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'crown-collective-fonts', crown_collective_fonts_url(), array(), null );
	wp_enqueue_style( 'crown-collective', get_stylesheet_uri(), array(), $version );

	$forms_css = get_theme_file_path( 'assets/css/forms.css' );
	wp_enqueue_style(
		'crown-collective-forms',
		get_theme_file_uri( 'assets/css/forms.css' ),
		array( 'crown-collective' ),
		file_exists( $forms_css ) ? (string) filemtime( $forms_css ) : $version
	);
}
add_action( 'wp_enqueue_scripts', 'crown_collective_enqueue' );

/**
 * Same fonts and styles inside the block editor, so editing looks like the live page.
 */
function crown_collective_setup() {
	add_editor_style( array( crown_collective_fonts_url(), 'style.css' ) );
}
add_action( 'after_setup_theme', 'crown_collective_setup' );

/**
 * Pattern categories shown in the editor's + menu.
 */
function crown_collective_pattern_categories() {
	register_block_pattern_category(
		'crown-consulting',
		array(
			'label'       => __( 'Consulting', 'crown-collective' ),
			'description' => __( 'Sections for the Crown Collective Consulting pages.', 'crown-collective' ),
		)
	);
}
add_action( 'init', 'crown_collective_pattern_categories' );

/**
 * Text styles your team can pick from the block toolbar.
 */
function crown_collective_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'pill',
			'label' => __( 'Pill label', 'crown-collective' ),
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'eyebrow',
			'label' => __( 'Eyebrow', 'crown-collective' ),
		)
	);
}
add_action( 'init', 'crown_collective_block_styles' );
