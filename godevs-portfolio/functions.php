<?php
/**
 * GoDevs Portfolio theme bootstrap.
 *
 * Loads the theme's class-based setup files. This theme is 100% FSE:
 * this file wires up theme support and pattern/style registration only —
 * it must never grow a settings page or Customizer panel that duplicates
 * Site Editor functionality. See docs/CLAUDE.md for the non-negotiable
 * rules that apply to every file in this theme.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

define( 'GODEVS_PORTFOLIO_VERSION', '0.5.1' );
define( 'GODEVS_PORTFOLIO_DIR', get_template_directory() );
define( 'GODEVS_PORTFOLIO_URI', get_template_directory_uri() );

require_once GODEVS_PORTFOLIO_DIR . '/inc/class-theme-setup.php';
require_once GODEVS_PORTFOLIO_DIR . '/inc/class-block-patterns.php';
require_once GODEVS_PORTFOLIO_DIR . '/inc/class-block-styles.php';
require_once GODEVS_PORTFOLIO_DIR . '/inc/class-enqueue.php';

/**
 * Heading level a hero pattern should render at.
 *
 * Patterns don't own page-level structure, so they default to H2 (see
 * docs/CLAUDE.md Phase 3 notes) — except when a hero instance happens to
 * be rendered as the current niche's actual front page, which has no
 * post-title of its own to supply the page's one required H1. Extracted
 * as a shared helper in Phase 10 (was duplicated ad-hoc inside
 * hero-agency.php since Phase 4) so every hero pattern — existing and
 * future — gets the "exactly one H1, on the actual front page" guarantee
 * for free instead of re-deriving it per pattern.
 *
 * @return int 1 on the front page, 2 everywhere else.
 */
function godevs_portfolio_hero_heading_level() {
	return is_front_page() ? 1 : 2;
}

/**
 * Boot the theme's setup classes.
 *
 * TODO: Phase 1 — flesh out each class's init() once theme.json tokens
 * and pattern/style content exist.
 */
function godevs_portfolio_boot() {
	GoDevs_Portfolio\Theme_Setup::init();
	GoDevs_Portfolio\Block_Patterns::init();
	GoDevs_Portfolio\Block_Styles::init();
	GoDevs_Portfolio\Enqueue::init();
}
add_action( 'after_setup_theme', 'godevs_portfolio_boot' );
