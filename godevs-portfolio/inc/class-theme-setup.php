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
 * wp_set_script_translations() is intentionally not called anywhere in
 * this theme: it has no custom JavaScript (assets/js/ is empty), so
 * there are no script-side translatable strings to wire up. Revisit if
 * a future phase adds theme JS.
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
		load_theme_textdomain( 'godevs-portfolio', GODEVS_PORTFOLIO_DIR . '/languages' );

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
		add_filter( 'render_block', array( __CLASS__, 'translate_navigation_aria_labels' ), 10, 2 );
	}

	/**
	 * Register block binding sources used by templates/*.html.
	 *
	 * Phase 6 finding: `wp i18n make-pot` does not extract strings from
	 * .html template/part files at all — neither free block content nor
	 * block attribute values (confirmed empirically: "Blog", "No posts
	 * found.", "Search", and navigation's ariaLabel values were all
	 * absent from the generated .pot, while identical-style strings in
	 * patterns/*.php were present). Substantial standalone content
	 * (the "Blog" H1, the 404 message) was moved into small
	 * Inserter:false patterns instead (patterns/blog-heading.php,
	 * patterns/not-found.php); these three tiny inline fragments, sitting
	 * alongside the existing copyright-year binding, use Block Bindings
	 * the same way rather than justifying a whole pattern each.
	 *
	 * Same "plugin territory" phpcs reasoning as
	 * register_block_pattern_category() in class-block-patterns.php: a
	 * block binding source is a presentation-layer registration, not
	 * user content, so losing it on theme switch is expected, not a
	 * functionality regression. The Block Bindings API postdates this
	 * sniff's forbidden-functions list.
	 */
	public static function register_block_bindings() {
		// phpcs:disable WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_bindings_source
		register_block_bindings_source(
			'godevs-portfolio/copyright-year',
			array(
				'label'              => __( 'Copyright Year', 'godevs-portfolio' ),
				'get_value_callback' => array( __CLASS__, 'get_copyright_year' ),
			)
		);
		register_block_bindings_source(
			'godevs-portfolio/all-rights-reserved',
			array(
				'label'              => __( 'All Rights Reserved Text', 'godevs-portfolio' ),
				'get_value_callback' => array( __CLASS__, 'get_all_rights_reserved' ),
			)
		);
		register_block_bindings_source(
			'godevs-portfolio/no-posts-text',
			array(
				'label'              => __( 'No Posts Found Text', 'godevs-portfolio' ),
				'get_value_callback' => array( __CLASS__, 'get_no_posts_text' ),
			)
		);
		register_block_bindings_source(
			'godevs-portfolio/no-results-text',
			array(
				'label'              => __( 'No Search Results Text', 'godevs-portfolio' ),
				'get_value_callback' => array( __CLASS__, 'get_no_results_text' ),
			)
		);
		// phpcs:enable WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_bindings_source
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

	/**
	 * Block binding value callback for the footer's "All rights
	 * reserved." text (parts/footer.html, parts/footer-minimal.html).
	 */
	public static function get_all_rights_reserved() {
		return esc_html__( 'All rights reserved.', 'godevs-portfolio' );
	}

	/**
	 * Block binding value callback for the blog listing's empty-state
	 * text (templates/archive.html, home.html, index.html).
	 */
	public static function get_no_posts_text() {
		return esc_html__( 'No posts found.', 'godevs-portfolio' );
	}

	/**
	 * Block binding value callback for search's empty-state text
	 * (templates/search.html).
	 */
	public static function get_no_results_text() {
		return esc_html__( 'No results found.', 'godevs-portfolio' );
	}

	/**
	 * Translate core/navigation's ariaLabel at render time.
	 *
	 * The Block Bindings API doesn't support core/navigation's ariaLabel
	 * attribute (it only covers a specific allowlist of block/attribute
	 * pairs — paragraph/heading content, image url/alt, button url/text,
	 * etc.), so the same Phase 6 i18n gap this class's other bindings fix
	 * can't be closed the same way here. This render_block filter is the
	 * next-cleanest option: it swaps the literal ariaLabel values this
	 * theme's own parts/header.html, parts/header-transparent.html, and
	 * parts/footer.html use ("Primary", "Footer") for their translated
	 * equivalents in the final HTML output, without touching any other
	 * navigation block on the site.
	 *
	 * @param string $block_content Rendered block HTML.
	 * @param array  $block         Parsed block data.
	 * @return string
	 */
	public static function translate_navigation_aria_labels( $block_content, $block ) {
		if ( 'core/navigation' !== $block['blockName'] ) {
			return $block_content;
		}

		$known_labels = array(
			'Primary' => __( 'Primary', 'godevs-portfolio' ),
			'Footer'  => __( 'Footer', 'godevs-portfolio' ),
		);

		$aria_label = $block['attrs']['ariaLabel'] ?? '';
		if ( ! isset( $known_labels[ $aria_label ] ) ) {
			return $block_content;
		}

		return str_replace(
			'aria-label="' . esc_attr( $aria_label ) . '"',
			'aria-label="' . esc_attr( $known_labels[ $aria_label ] ) . '"',
			$block_content
		);
	}
}
