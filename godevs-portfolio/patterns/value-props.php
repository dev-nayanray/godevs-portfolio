<?php
/**
 * Title: Value Props
 * Slug: godevs-portfolio/value-props
 * Categories: godevs-portfolio-services
 * Description: Plain, unboxed title/description trust-builder grid with no per-item link — distinct from services-grid's linked, surface-background cards. For an About-page "why choose us" section, not a services list.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_value_props = array(
	array(
		'title'       => __( 'Straightforward communication', 'godevs-portfolio' ),
		'description' => __( 'No jargon, no surprises — you always know what is happening and why.', 'godevs-portfolio' ),
	),
	array(
		'title'       => __( 'Real experience', 'godevs-portfolio' ),
		'description' => __( 'Years of hands-on work, not a template applied to every situation the same way.', 'godevs-portfolio' ),
	),
	array(
		'title'       => __( 'You come first', 'godevs-portfolio' ),
		'description' => __( 'Every recommendation is made with your specific goals in mind, not a one-size-fits-all approach.', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"typography":{"textAlign":"center"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Why work with us', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $godevs_portfolio_value_props as $godevs_portfolio_value_prop ) : ?>
		<!-- wp:column {"style":{"typography":{"textAlign":"center"}}} -->
		<div class="wp-block-column" style="text-align:center">

			<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"textAlign":"center"}}} -->
			<h3 class="wp-block-heading has-text-align-center has-medium-font-size"><?php echo esc_html( $godevs_portfolio_value_prop['title'] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
			<p class="has-text-align-center has-text-muted-color has-text-color"><?php echo esc_html( $godevs_portfolio_value_prop['description'] ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
