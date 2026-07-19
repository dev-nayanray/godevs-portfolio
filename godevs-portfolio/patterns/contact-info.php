<?php
/**
 * Title: Contact Info
 * Slug: godevs-portfolio/contact-info
 * Categories: godevs-portfolio-contact
 * Description: Address, phone, and email in a three-column layout. Added in Phase 3 — not part of the original 12 scaffolded patterns; docs/PRD.md's Contact row described "contact block group" without naming a pattern, so this fills that gap. Flagged for confirmation.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( "Let's talk about your project", 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
	<p class="has-text-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'We typically reply within one business day. For new project inquiries, tell us a little about your timeline and budget up front — it helps us give you a useful answer faster.', 'godevs-portfolio' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Email', 'godevs-portfolio' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><a href="mailto:hello@godevs.example"><?php esc_html_e( 'hello@godevs.example', 'godevs-portfolio' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Phone', 'godevs-portfolio' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><a href="tel:+15555550125"><?php esc_html_e( '+1 (555) 555-0125', 'godevs-portfolio' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Studio', 'godevs-portfolio' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( '123 Market Street, Suite 400', 'godevs-portfolio' ); ?><br/><?php esc_html_e( 'Portland, OR 97201', 'godevs-portfolio' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
