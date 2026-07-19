<?php
/**
 * Title: Services Grid
 * Slug: godevs-portfolio/services-grid
 * Categories: godevs-portfolio-services
 * Description: Four-column grid presenting core service offerings, each with a heading, description, and link.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_services = array(
	array(
		'title'       => __( 'Brand Strategy', 'godevs-portfolio' ),
		'description' => __( 'Positioning, messaging, and visual identity built on research, not guesswork.', 'godevs-portfolio' ),
	),
	array(
		'title'       => __( 'Web Design & Development', 'godevs-portfolio' ),
		'description' => __( 'Fast, accessible websites built on WordPress — designed to convert, not just look good.', 'godevs-portfolio' ),
	),
	array(
		'title'       => __( 'Product Design', 'godevs-portfolio' ),
		'description' => __( 'UI and UX for web and mobile products, from first wireframe to shipped feature.', 'godevs-portfolio' ),
	),
	array(
		'title'       => __( 'Digital Marketing', 'godevs-portfolio' ),
		'description' => __( 'Campaigns and content that bring the right people to the site you just built.', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'What we do', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $godevs_portfolio_services as $godevs_portfolio_service ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">

				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $godevs_portfolio_service['title'] ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"text-muted"} -->
				<p class="has-text-muted-color has-text-color"><?php echo esc_html( $godevs_portfolio_service['description'] ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="/services/"><?php esc_html_e( 'Learn more', 'godevs-portfolio' ); ?></a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
