<?php
/**
 * Front-end and editor asset enqueueing.
 *
 * @package GoDevs_Portfolio
 */

namespace GoDevs_Portfolio;

defined( 'ABSPATH' ) || exit;

/**
 * Enqueues theme stylesheets/scripts and the editor stylesheet
 * (assets/css/editor.css).
 *
 * TODO: Phase 2/3 — assets/js/ enqueues once those files have real
 * content.
 */
class Enqueue {

	/**
	 * Hook this class's callbacks into WordPress.
	 *
	 * add_editor_style() runs directly here (init() already executes
	 * during after_setup_theme via functions.php) rather than being
	 * re-hooked onto after_setup_theme.
	 */
	public static function init() {
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'enqueue_front_end_styles' ] );
		add_editor_style( 'assets/css/editor.css' );
	}

	/**
	 * Enqueue the front-end stylesheet (style.css).
	 */
	public static function enqueue_front_end_styles() {
		wp_enqueue_style(
			'godevs-portfolio-style',
			get_stylesheet_uri(),
			array(),
			GODEVS_PORTFOLIO_VERSION
		);
	}
}
