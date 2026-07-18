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
 * TODO: Phase 2/3 — register_block_style() calls, if any are needed once
 * patterns are built. This must not become a substitute for theme.json
 * tokens — see docs/CLAUDE.md rule 1.
 */
class Block_Styles {

	/**
	 * Hook this class's callbacks into WordPress.
	 */
	public static function init() {
		// TODO: Phase 2/3 — wire up add_action( 'init', ... ).
	}
}
