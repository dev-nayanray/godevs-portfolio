<?php
/**
 * Title: New Patients Info
 * Slug: godevs-portfolio/new-patients-info
 * Categories: godevs-portfolio-cta
 * Description: Static "call to schedule" block — phone number and office hours only. Renamed from the original "appointment-cta" working title in Phase 10 to match the "New Patients" page framing in docs/NICHE_DEMOS.md. Explicitly not a booking form, not a booking CPT, not a third-party scheduling integration — informational only, per the non-negotiable no-required-plugin rule.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"wide","backgroundColor":"primary","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--l)">

	<!-- wp:heading {"level":2,"fontSize":"x-large","textColor":"primary-contrast"} -->
	<h2 class="wp-block-heading has-primary-contrast-color has-text-color has-x-large-font-size"><?php esc_html_e( 'New patients welcome', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"medium","textColor":"primary-contrast"} -->
	<p class="has-primary-contrast-color has-text-color has-medium-font-size"><?php esc_html_e( 'Call our office to schedule your first visit — our team will help you find a time that works and let you know what to bring.', 'godevs-portfolio' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"fontWeight":"700"}}} -->
	<p class="has-primary-contrast-color has-text-color has-large-font-size" style="font-weight:700"><a style="color:inherit" href="tel:+15555550125"><?php esc_html_e( '+1 (555) 555-0125', 'godevs-portfolio' ); ?></a></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"small","textColor":"primary-contrast"} -->
	<p class="has-primary-contrast-color has-text-color has-small-font-size"><?php esc_html_e( 'Office hours: Monday–Friday, 9:00 AM–5:00 PM', 'godevs-portfolio' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
