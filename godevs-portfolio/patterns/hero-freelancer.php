<?php
/**
 * Title: Hero — Freelancer
 * Slug: godevs-portfolio/hero-freelancer
 * Categories: godevs-portfolio-hero
 * Description: Personal, portrait-oriented hero for solo freelancer/consultant pages — heading, intro copy, CTAs, and a portrait image.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/*
 * See godevs_portfolio_hero_heading_level() in functions.php (Phase 10).
 * This pattern was hardcoded to H2 through Phase 9 — harmless while it
 * was only ever used on About/Team/Contact pages (which supply their
 * own post-title H1), but Phase 11+ plans to use this exact pattern as
 * the Home hero for the Freelancer and Photographer niches, whose
 * front-page.html has no post-title of its own. Left un-fixed, those
 * niches would have shipped with zero H1s. Fixed here alongside
 * hero-agency.php's identical logic, before any niche build reaches it.
 */
$godevs_portfolio_hero_freelancer_level = godevs_portfolio_hero_heading_level();
$godevs_portfolio_hero_freelancer_tag   = 'h' . $godevs_portfolio_hero_freelancer_level;
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-columns alignwide">

	<!-- wp:column {"width":"38%"} -->
	<div class="wp-block-column" style="flex-basis:38%">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-portrait.png' ); ?>" alt="<?php echo esc_attr__( 'Portrait of the freelance designer and developer at their desk', 'godevs-portfolio' ); ?>" style="border-radius:0.25rem"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"62%","verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:62%">

		<!-- wp:heading {"level":<?php echo (int) $godevs_portfolio_hero_freelancer_level; ?>,"fontSize":"xx-large"} -->
		<<?php echo esc_attr( $godevs_portfolio_hero_freelancer_tag ); ?> class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'I design and build websites for small businesses', 'godevs-portfolio' ); ?></<?php echo esc_attr( $godevs_portfolio_hero_freelancer_tag ); ?>>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
		<p class="has-text-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'A freelance designer-developer helping founders launch sites they\'re proud of, without the agency overhead or the six-week timeline.', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Start a Project', 'godevs-portfolio' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/portfolio/"><?php esc_html_e( 'See My Work', 'godevs-portfolio' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
