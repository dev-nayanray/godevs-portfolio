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

define( 'GODEVS_PORTFOLIO_VERSION', '0.1.0' );
define( 'GODEVS_PORTFOLIO_DIR', get_template_directory() );
define( 'GODEVS_PORTFOLIO_URI', get_template_directory_uri() );

require_once GODEVS_PORTFOLIO_DIR . '/inc/class-theme-setup.php';
require_once GODEVS_PORTFOLIO_DIR . '/inc/class-block-patterns.php';
require_once GODEVS_PORTFOLIO_DIR . '/inc/class-block-styles.php';
require_once GODEVS_PORTFOLIO_DIR . '/inc/class-enqueue.php';

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
