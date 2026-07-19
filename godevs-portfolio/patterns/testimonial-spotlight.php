<?php
/**
 * Title: Testimonial Spotlight
 * Slug: godevs-portfolio/testimonial-spotlight
 * Categories: godevs-portfolio-testimonials
 * Description: One large client quote with a portrait, for solo practitioners where a single strong endorsement reads more credibly than a rotating multi-client grid.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"wide","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--l)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|xl"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"28%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%">
			<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
			<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-portrait.png' ); ?>" alt="<?php echo esc_attr__( 'Portrait of the client giving this testimonial', 'godevs-portfolio' ); ?>" style="border-radius:0.25rem"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"72%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:72%">
			<!-- wp:quote {"style":{"typography":{"fontSize":"1.5rem"}}} -->
			<blockquote class="wp-block-quote" style="font-size:1.5rem">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Working with them felt less like hiring a vendor and more like adding a teammate. They asked better questions about our business than agencies twice their size, and the result showed it.', 'godevs-portfolio' ); ?></p>
				<!-- /wp:paragraph -->
				<cite><?php esc_html_e( 'Sam Whitfield — Founder, Ledger & Co.', 'godevs-portfolio' ); ?></cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
