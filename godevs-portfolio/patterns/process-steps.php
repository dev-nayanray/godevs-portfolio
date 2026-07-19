<?php
/**
 * Title: Process Steps
 * Slug: godevs-portfolio/process-steps
 * Categories: godevs-portfolio-process
 * Description: Numbered sequential steps describing how an engagement runs from first contact to delivery — distinct from company-timeline's dated-history shape.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_steps = array(
	array(
		'number'      => __( '01', 'godevs-portfolio' ),
		'title'       => __( 'Discovery', 'godevs-portfolio' ),
		'description' => __( 'We start with a conversation about your goals, timeline, and budget so the plan fits the real project, not a generic template.', 'godevs-portfolio' ),
	),
	array(
		'number'      => __( '02', 'godevs-portfolio' ),
		'title'       => __( 'Plan & Design', 'godevs-portfolio' ),
		'description' => __( 'We map out the approach and share concepts early, so there are no surprises once work is underway.', 'godevs-portfolio' ),
	),
	array(
		'number'      => __( '03', 'godevs-portfolio' ),
		'title'       => __( 'Build', 'godevs-portfolio' ),
		'description' => __( 'We execute against the agreed plan with regular check-ins, so you always know where things stand.', 'godevs-portfolio' ),
	),
	array(
		'number'      => __( '04', 'godevs-portfolio' ),
		'title'       => __( 'Deliver', 'godevs-portfolio' ),
		'description' => __( 'We hand off a finished result — and stay reachable afterward for questions or follow-up work.', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'How we work', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $godevs_portfolio_steps as $godevs_portfolio_step ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:paragraph {"fontSize":"large","textColor":"accent","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
			<p class="has-accent-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html( $godevs_portfolio_step['number'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $godevs_portfolio_step['title'] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color"><?php echo esc_html( $godevs_portfolio_step['description'] ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
