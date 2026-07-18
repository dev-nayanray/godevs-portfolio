<?php
/**
 * Block pattern and pattern category registration.
 *
 * @package GoDevs_Portfolio
 */

namespace GoDevs_Portfolio;

defined( 'ABSPATH' ) || exit;

/**
 * Registers the theme's pattern categories (godevs-portfolio-hero,
 * godevs-portfolio-services, godevs-portfolio-portfolio, etc.) so the
 * headers in patterns/*.php resolve to real categories in the inserter.
 *
 * TODO: Phase 2 — register_block_pattern_category() for every category
 * referenced by patterns/*.php headers, once pattern content is written.
 */
class Block_Patterns {

	/**
	 * Hook this class's callbacks into WordPress.
	 */
	public static function init() {
		// TODO: Phase 2 — wire up add_action( 'init', ... ).
	}
}
