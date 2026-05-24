<?php
/**
 * Awesome Test theme functions.
 *
 * @package Awesome_Test
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function awesome_test_setup() {
	load_theme_textdomain( 'awesome-test', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'awesome-test' ),
		)
	);
}
add_action( 'after_setup_theme', 'awesome_test_setup' );

/**
 * Enqueue scripts and styles.
 */
function awesome_test_scripts() {
	wp_enqueue_style(
		'awesome-test-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'awesome_test_scripts' );
