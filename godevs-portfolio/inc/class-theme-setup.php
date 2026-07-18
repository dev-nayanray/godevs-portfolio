<?php
/**
 * Core theme support declarations and block bindings.
 *
 * @package GoDevs_Portfolio
 */

namespace GoDevs_Portfolio;

defined( 'ABSPATH' ) || exit;

/**
 * Registers core WordPress theme support flags and the copyright-year
 * block binding source.
 *
 * Nav menu locations are intentionally NOT registered here: this is a
 * pure FSE theme using core/navigation blocks, which reference a
 * wp_navigation post directly rather than a classic menu location.
 *
 * No custom skip-link code lives here: WordPress core (7.0+) already
 * injects an accessible, translated skip link automatically for every
 * block theme via _block_template_add_skip_link(), which detects and
 * reuses the first <main> element's existing id attribute as its jump
 * target — exactly the "main-content" anchor set on every template's
 * main group in templates/*.html. A theme-side implementation would only
 * duplicate it. Confirmed by inspecting wp-includes/block-template.php
 * and by reading the rendered HTML during Phase 2 verification.
 */
class Theme_Setup {

	/**
	 * Hook this class's callbacks into WordPress.
	 *
	 * Called during the after_setup_theme action (see functions.php), so
	 * add_theme_support() calls run directly here rather than being
	 * re-hooked onto after_setup_theme. add_action( 'init', ... ) here is
	 * safe because after_setup_theme always fires before init.
	 */
	public static function init() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'html5',
			array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' )
		);

		add_action( 'init', array( __CLASS__, 'register_block_bindings' ) );
	}

	/**
	 * Register a block binding source that resolves to the current year,
	 * used by the footer copyright line so it never needs a manual
	 * yearly update. Runs on init per the Block Bindings API contract.
	 */
	public static function register_block_bindings() {
		register_block_bindings_source(
			'godevs-portfolio/copyright-year',
			array(
				'label'              => __( 'Copyright Year', 'godevs-portfolio' ),
				'get_value_callback' => array( __CLASS__, 'get_copyright_year' ),
			)
		);
	}

	/**
	 * Block binding value callback: "© {current year}".
	 */
	public static function get_copyright_year() {
		return sprintf(
			/* translators: %s: current year. */
			esc_html__( '© %s', 'godevs-portfolio' ),
			esc_html( gmdate( 'Y' ) )
		);
	}
}
