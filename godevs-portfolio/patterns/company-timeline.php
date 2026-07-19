<?php
/**
 * Title: Company Timeline
 * Slug: godevs-portfolio/company-timeline
 * Categories: godevs-portfolio-social-proof
 * Description: Dated milestone history (year + event) for an About page — distinct from process-steps' undated, sequential how-we-work shape.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_milestones = array(
	array(
		'year'  => __( '2015', 'godevs-portfolio' ),
		'event' => __( 'Founded with a single client and a shared workspace desk.', 'godevs-portfolio' ),
	),
	array(
		'year'  => __( '2018', 'godevs-portfolio' ),
		'event' => __( 'Moved into our first dedicated studio space and grew to a full team.', 'godevs-portfolio' ),
	),
	array(
		'year'  => __( '2021', 'godevs-portfolio' ),
		'event' => __( 'Recognized with our first industry award for client work.', 'godevs-portfolio' ),
	),
	array(
		'year'  => __( 'Today', 'godevs-portfolio' ),
		'event' => __( 'Still taking on projects we are proud to put our name on.', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Our story so far', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<?php foreach ( $godevs_portfolio_milestones as $godevs_portfolio_milestone ) : ?>
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3xs","left":"var:preset|spacing|m"}},"border":{"bottom":{"width":"1px","color":"var:preset|color|border"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} -->
		<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px">

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:paragraph {"fontSize":"large","textColor":"accent","style":{"typography":{"fontWeight":"700"}}} -->
				<p class="has-accent-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html( $godevs_portfolio_milestone['year'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"80%"} -->
			<div class="wp-block-column" style="flex-basis:80%">
				<!-- wp:paragraph {"textColor":"text-muted"} -->
				<p class="has-text-muted-color has-text-color"><?php echo esc_html( $godevs_portfolio_milestone['event'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
