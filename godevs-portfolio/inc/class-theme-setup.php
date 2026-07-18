<?php
/**
 * Core theme support declarations (add_theme_support, nav menus, etc.).
 *
 * @package GoDevs_Portfolio
 */

namespace GoDevs_Portfolio;

defined( 'ABSPATH' ) || exit;

/**
 * Registers core WordPress theme support flags and other one-time setup.
 *
 * TODO: Phase 2 — title-tag, post-thumbnails, responsive-embeds, html5,
 * and register_nav_menus() once navigation structure is decided.
 */
class Theme_Setup {

	/**
	 * Hook this class's callbacks into WordPress.
	 *
	 * Called during the after_setup_theme action (see functions.php), so
	 * add_theme_support() calls run directly here rather than being
	 * re-hooked onto after_setup_theme.
	 */
	public static function init() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
	}
}
