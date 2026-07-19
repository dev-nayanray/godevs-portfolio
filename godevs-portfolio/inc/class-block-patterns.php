<?php
/**
 * Block pattern category registration.
 *
 * @package GoDevs_Portfolio
 */

namespace GoDevs_Portfolio;

defined( 'ABSPATH' ) || exit;

/**
 * Registers the theme's pattern categories so the headers in
 * patterns/*.php resolve to real, labeled categories in the inserter.
 *
 * Pattern files themselves need no manual registration: WordPress
 * auto-discovers any .php file in the theme's patterns/ directory and
 * registers it from its header comment (Title/Slug/Categories).
 */
class Block_Patterns {

	/**
	 * Hook this class's callbacks into WordPress.
	 */
	public static function init() {
		add_action( 'init', array( __CLASS__, 'register_pattern_categories' ) );
	}

	/**
	 * Register every custom pattern category referenced by patterns/*.php.
	 *
	 * phpcs:disable WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
	 * This sniff's "plugin territory" list predates FSE block themes and
	 * has not been updated for them: WordPress core's own developer docs
	 * (https://developer.wordpress.org/themes/patterns/pattern-categories/)
	 * explicitly instruct theme authors to call
	 * register_block_pattern_category() from the theme itself. Unlike a
	 * CPT/taxonomy, a pattern category stores no user content — losing it
	 * on theme switch is expected, normal behavior, not a functionality
	 * regression. Suppressed here rather than removed, since removing it
	 * would reintroduce the exact "categories referenced in pattern
	 * headers but never registered" gap the Phase 6 QA pass confirmed
	 * was fixed.
	 */
	public static function register_pattern_categories() {
		register_block_pattern_category(
			'godevs-portfolio-hero',
			array( 'label' => __( 'Portfolio: Hero', 'godevs-portfolio' ) )
		);
		register_block_pattern_category(
			'godevs-portfolio-services',
			array( 'label' => __( 'Portfolio: Services', 'godevs-portfolio' ) )
		);
		register_block_pattern_category(
			'godevs-portfolio-portfolio',
			array( 'label' => __( 'Portfolio: Work', 'godevs-portfolio' ) )
		);
		register_block_pattern_category(
			'godevs-portfolio-team',
			array( 'label' => __( 'Portfolio: Team', 'godevs-portfolio' ) )
		);
		register_block_pattern_category(
			'godevs-portfolio-testimonials',
			array( 'label' => __( 'Portfolio: Testimonials', 'godevs-portfolio' ) )
		);
		register_block_pattern_category(
			'godevs-portfolio-pricing',
			array( 'label' => __( 'Portfolio: Pricing', 'godevs-portfolio' ) )
		);
		register_block_pattern_category(
			'godevs-portfolio-cta',
			array( 'label' => __( 'Portfolio: Calls to Action', 'godevs-portfolio' ) )
		);
		register_block_pattern_category(
			'godevs-portfolio-social-proof',
			array( 'label' => __( 'Portfolio: Social Proof', 'godevs-portfolio' ) )
		);
		register_block_pattern_category(
			'godevs-portfolio-contact',
			array( 'label' => __( 'Portfolio: Contact', 'godevs-portfolio' ) )
		);
		// phpcs:enable WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
	}
}
