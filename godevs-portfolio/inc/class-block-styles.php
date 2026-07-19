<?php
/**
 * Custom block style registration (register_block_style).
 *
 * @package GoDevs_Portfolio
 */

namespace GoDevs_Portfolio;

defined( 'ABSPATH' ) || exit;

/**
 * Registers any custom core block styles the theme ships beyond what
 * theme.json's styles/*.json variations already cover.
 *
 * Intentionally empty (Phase 6 audit): nothing in docs/PRD.md or
 * docs/CLAUDE.md ever promised a custom register_block_style() call,
 * and none of the 13 patterns built in Phase 3 need one — the one
 * alternate button treatment they use ("is-style-outline") is a WordPress
 * core-registered style, not a theme-registered one. Kept as a documented
 * no-op rather than deleted, so the extension point exists if a future
 * pattern genuinely needs an alternate block style; a custom block style
 * must not become a substitute for theme.json tokens — see
 * docs/CLAUDE.md rule 1.
 */
class Block_Styles {

	/**
	 * Hook this class's callbacks into WordPress.
	 *
	 * No-op today — see class docblock. Left in place (not deleted) to
	 * keep the four inc/ classes' structure symmetric and predictable.
	 */
	public static function init() {}
}
