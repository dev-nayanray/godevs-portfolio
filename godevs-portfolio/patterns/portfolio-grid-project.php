<?php
/**
 * Title: Portfolio Grid (Project)
 * Slug: godevs-portfolio/portfolio-grid-project
 * Categories: godevs-portfolio-portfolio
 * Description: A small number of large, detailed project features (one big image plus a location/size/year stat row each) — distinct from portfolio-grid's denser card grid and portfolio-grid-masonry's image-only wall. Built for architecture-style portfolios where each project warrants its own feature.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_projects = array(
	array(
		'title'    => __( 'Fairview Residence', 'godevs-portfolio' ),
		'location' => __( 'Portland, OR', 'godevs-portfolio' ),
		'size'     => __( '3,200 sq ft', 'godevs-portfolio' ),
		'year'     => __( '2023', 'godevs-portfolio' ),
	),
	array(
		'title'    => __( 'Harborview Office Building', 'godevs-portfolio' ),
		'location' => __( 'Seattle, WA', 'godevs-portfolio' ),
		'size'     => __( '48,000 sq ft', 'godevs-portfolio' ),
		'year'     => __( '2021', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Selected projects', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<?php foreach ( $godevs_portfolio_projects as $godevs_portfolio_project ) : ?>
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--xl)">

		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr( sprintf( /* translators: %s: project title. */ __( 'Exterior photograph of %s', 'godevs-portfolio' ), $godevs_portfolio_project['title'] ) ); ?>"/></figure>
		<!-- /wp:image -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3xs","left":"var:preset|spacing|m"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $godevs_portfolio_project['title'] ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
				<p class="has-text-muted-color has-text-color has-small-font-size">
					<?php
					echo esc_html(
						sprintf(
							/* translators: 1: location, 2: size, 3: year. */
							__( '%1$s · %2$s · %3$s', 'godevs-portfolio' ),
							$godevs_portfolio_project['location'],
							$godevs_portfolio_project['size'],
							$godevs_portfolio_project['year']
						)
					);
					?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
	<?php endforeach; ?>

</div>
<!-- /wp:group -->
