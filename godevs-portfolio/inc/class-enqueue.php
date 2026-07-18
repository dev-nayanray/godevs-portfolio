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
 * TODO: Phase 1 — wp_enqueue_style() for style.css, add_editor_style()
 * for assets/css/editor.css, and any assets/js/ enqueues once those
 * files have real content.
 */
class Enqueue {

	/**
	 * Hook this class's callbacks into WordPress.
	 */
	public static function init() {
		// TODO: Phase 1 — wire up add_action( 'wp_enqueue_scripts', ... ).
	}
}
