<?php
/**
 * Title: Call to Action Banner
 * Slug: godevs-portfolio/cta-banner
 * Categories: godevs-portfolio-cta
 * Description: Full-width closing call-to-action banner, reused across multiple templates.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"full","gradient":"primary-to-accent","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-contrast-color has-text-color has-primary-to-accent-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--m)">

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"level":2,"fontSize":"xx-large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
		<h2 class="wp-block-heading has-text-align-center has-primary-contrast-color has-text-color has-xx-large-font-size"><?php esc_html_e( 'Ready to start your next project?', 'godevs-portfolio' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
		<p class="has-text-align-center has-primary-contrast-color has-text-color has-large-font-size"><?php esc_html_e( 'Tell us about your business and what you\'re trying to build — we\'ll follow up within one business day.', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/contact/"><?php esc_html_e( 'Get a Quote', 'godevs-portfolio' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
