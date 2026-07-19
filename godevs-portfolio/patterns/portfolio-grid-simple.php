<?php
/**
 * Title: Portfolio Grid (Simple)
 * Slug: godevs-portfolio/portfolio-grid-simple
 * Categories: godevs-portfolio-portfolio
 * Description: 2-3 large, personal signature-project cards for a solo practitioner — distinct from portfolio-grid's denser, multi-project editorial layout built for a team-sized body of work.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_simple_projects = array(
	array(
		'title'       => __( 'Ledger & Co. Rebrand', 'godevs-portfolio' ),
		'description' => __( 'A full brand and website refresh for a boutique accounting firm — new identity, new site, launched in five weeks.', 'godevs-portfolio' ),
	),
	array(
		'title'       => __( 'Harbor Supply Co. Website', 'godevs-portfolio' ),
		'description' => __( 'A fast, accessible e-commerce rebuild that cut page load time in half and lifted conversion the following quarter.', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Recent work', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|l"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $godevs_portfolio_simple_projects as $godevs_portfolio_simple_project ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr( sprintf( /* translators: %s: project title. */ __( 'Screenshot of the %s project', 'godevs-portfolio' ), $godevs_portfolio_simple_project['title'] ) ); ?>"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $godevs_portfolio_simple_project['title'] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color"><?php echo esc_html( $godevs_portfolio_simple_project['description'] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
