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

		<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'I design and build websites for small businesses', 'godevs-portfolio' ); ?></h2>
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
