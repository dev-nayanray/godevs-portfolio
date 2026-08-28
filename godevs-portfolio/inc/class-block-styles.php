<?php
/**
 * Custom block style registration (register_block_style).
 *
 * @package GoDevs_Portfolio
 */

namespace GoDevs_Portfolio;

defined( 'ABSPATH' ) || exit;

/**
 * Registers custom core block styles that add real, token-driven
 * alternate treatments beyond what theme.json and core styles cover.
 *
 * Every style uses theme.json tokens exclusively — no hard-coded colors
 * or spacing. These are layout/visual convenience styles for the editor's
 * block style picker, not a disguised settings panel (see docs/CLAUDE.md
 * rule 1 and rule 6).
 */
class Block_Styles {

        /**
         * Hook this class's callbacks into WordPress.
         */
        public static function init() {
                add_action( 'init', [ __CLASS__, 'register_styles' ] );
        }

        /**
         * Register custom block styles.
         *
         * Two styles, both genuinely useful in this theme's pattern
         * context and both impossible to express via theme.json alone
         * (theme.json has no block-style mechanism):
         *
         * 1. "Ghost" button — transparent background with a visible
         *    border, using the theme's contrast tokens. Designed for
         *    secondary CTAs on gradient or primary-colored backgrounds
         *    (e.g. cta-banner pattern, hero patterns) where core's
         *    is-style-outline would use the inherited text color for
         *    the border — which is already the same as the background
         *    on a filled section, making the outline invisible.
         *
         * 2. "Elevated" group — applies the surface color as a subtle
         *    raised-background treatment with standard padding.
         *    Mirrors a pattern already used in multiple patterns
         *    (stats-counter, testimonials sections) but lets a site
         *    owner apply it in the editor without manually setting
         *    background + padding on every group block.
         */
        public static function register_styles() {
                register_block_style(
                        'core/button',
                        array(
                                'name'         => 'ghost',
                                'label'        => __( 'Ghost', 'godevs-portfolio' ),
                                /*
                                 * Inline style attribute is intentionally avoided here.
                                 * The visual treatment lives in style.css via the
                                 * .is-style-ghost selector, using theme.json
                                 * CSS custom properties — keeping this token-
                                 * driven per rule 1. Only the class name is
                                 * registered; the actual CSS rules are in
                                 * style.css so they apply in both the editor
                                 * and the front end.
                                 */
                        )
                );

                register_block_style(
                        'core/group',
                        array(
                                'name'         => 'elevated',
                                'label'        => __( 'Elevated', 'godevs-portfolio' ),
                        )
                );
        }
}
