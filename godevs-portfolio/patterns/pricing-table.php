<?php
/**
 * Title: Pricing Table
 * Slug: godevs-portfolio/pricing-table
 * Categories: godevs-portfolio-pricing
 * Description: Three-tier pricing cards with a "Most Popular" tier — labeled with visible text, not color alone.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Simple, transparent pricing', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}},"verticalAlignment":"stretch"} -->
	<div class="wp-block-columns are-vertically-aligned-stretch">

		<!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Starter', 'godevs-portfolio' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"xx-large"} -->
				<p class="has-xx-large-font-size"><?php esc_html_e( '$1,200', 'godevs-portfolio' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-muted"} -->
				<p class="has-text-muted-color has-text-color"><?php esc_html_e( 'A focused single-purpose site — perfect for validating a new offer or launching a landing page fast.', 'godevs-portfolio' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Up to 5 pages', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Mobile-responsive design', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( '2-week turnaround', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Get Started', 'godevs-portfolio' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"backgroundColor":"primary","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-primary-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
				<p class="has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Most Popular', 'godevs-portfolio' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"fontSize":"large","textColor":"primary-contrast"} -->
				<h3 class="wp-block-heading has-primary-contrast-color has-text-color has-large-font-size"><?php esc_html_e( 'Growth', 'godevs-portfolio' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"xx-large"} -->
				<p class="has-xx-large-font-size"><?php esc_html_e( '$3,800', 'godevs-portfolio' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'A full marketing site with the pages and structure a growing team actually needs.', 'godevs-portfolio' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Up to 15 pages', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Custom block patterns', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Blog & case study setup', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( '4-week turnaround', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/contact/"><?php esc_html_e( 'Choose Growth', 'godevs-portfolio' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"stretch"} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Studio', 'godevs-portfolio' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"xx-large"} -->
				<p class="has-xx-large-font-size"><?php esc_html_e( 'Let\'s talk', 'godevs-portfolio' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-muted"} -->
				<p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Ongoing design and development support, scoped around your team\'s roadmap.', 'godevs-portfolio' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul class="wp-block-list">
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Unlimited pages', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Dedicated project lead', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><?php esc_html_e( 'Monthly retainer', 'godevs-portfolio' ); ?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-outline","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Contact Us', 'godevs-portfolio' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
