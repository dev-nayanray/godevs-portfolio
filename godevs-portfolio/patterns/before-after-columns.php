<?php
/**
 * Title: Before & After
 * Slug: godevs-portfolio/before-after-columns
 * Categories: godevs-portfolio-portfolio
 * Description: Static two-column Before/After image comparison (core/columns + core/image, stacks on mobile). Deliberately not a draggable JS slider — see docs/NICHE_DEMOS.md's feasibility note: a real comparison slider needs custom JavaScript, which conflicts with this theme's established zero-custom-JS discipline.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Before & after', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Living room before the renovation', 'godevs-portfolio' ); ?>"/><figcaption class="wp-element-caption"><?php esc_html_e( 'Before', 'godevs-portfolio' ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Living room after the renovation', 'godevs-portfolio' ); ?>"/><figcaption class="wp-element-caption"><?php esc_html_e( 'After', 'godevs-portfolio' ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
