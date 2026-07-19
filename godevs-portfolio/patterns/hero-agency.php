<?php
/**
 * Title: Hero — Agency
 * Slug: godevs-portfolio/hero-agency
 * Categories: godevs-portfolio-hero
 * Description: Asymmetric two-column hero for agency/studio pages — heading, supporting copy, two CTAs, and a side image.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/*
 * Patterns don't own page-level structure, so they default to H2 (see
 * docs/CLAUDE.md Phase 3 notes). front-page.html is the one exception:
 * it has no post-title to supply the page's H1, so when this exact
 * pattern instance is rendered as the front page's hero, it promotes
 * itself to H1 — is_front_page() is reliable here regardless of whether
 * Reading Settings uses "a static page" or "your latest posts", since
 * front-page.html only ever renders for the actual front-page request.
 * This keeps hero-agency a single reusable pattern (also used, as H2,
 * on page-services.html and page-portfolio.html) rather than forking a
 * duplicate copy of the markup just to change one tag.
 */
$godevs_portfolio_hero_agency_level = is_front_page() ? 1 : 2;
$godevs_portfolio_hero_agency_tag   = 'h' . $godevs_portfolio_hero_agency_level;
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-columns alignwide">

	<!-- wp:column {"width":"58%","verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">

		<!-- wp:heading {"level":<?php echo (int) $godevs_portfolio_hero_agency_level; ?>,"fontSize":"huge"} -->
		<<?php echo esc_attr( $godevs_portfolio_hero_agency_tag ); ?> class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Strategy-led design for brands ready to grow', 'godevs-portfolio' ); ?></<?php echo esc_attr( $godevs_portfolio_hero_agency_tag ); ?>>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
		<p class="has-text-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'We partner with ambitious companies to design, build, and launch digital experiences that convert — from brand identity through to the finished product.', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Get a Quote', 'godevs-portfolio' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/portfolio/"><?php esc_html_e( 'View Work', 'godevs-portfolio' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"42%"} -->
	<div class="wp-block-column" style="flex-basis:42%">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Collage of recent agency project screens displayed on a designer\'s desk', 'godevs-portfolio' ); ?>"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
