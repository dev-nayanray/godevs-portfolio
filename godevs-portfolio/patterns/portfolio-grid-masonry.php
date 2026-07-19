<?php
/**
 * Title: Portfolio Grid (Masonry)
 * Slug: godevs-portfolio/portfolio-grid-masonry
 * Categories: godevs-portfolio-portfolio
 * Description: True staggered image grid with no captions — the photography itself is the pitch. Staggering is achieved with plain core/columns holding an uneven number of stacked images per column (a CSS-only masonry effect), not JavaScript reflow. Distinct from portfolio-grid's text-plus-image editorial layout.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_masonry_columns = array(
	array(
		__( 'Portrait session, natural light', 'godevs-portfolio' ),
		__( 'Golden hour outdoor portrait', 'godevs-portfolio' ),
	),
	array(
		__( 'Candid engagement session', 'godevs-portfolio' ),
		__( 'Studio portrait, black background', 'godevs-portfolio' ),
		__( 'Detail shot, editorial style', 'godevs-portfolio' ),
	),
	array(
		__( 'Wedding ceremony moment', 'godevs-portfolio' ),
		__( 'Family portrait session', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Recent work', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|s","left":"var:preset|spacing|s"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $godevs_portfolio_masonry_columns as $godevs_portfolio_masonry_column ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<?php foreach ( $godevs_portfolio_masonry_column as $godevs_portfolio_masonry_alt ) : ?>
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} -->
			<figure class="wp-block-image size-large" style="margin-bottom:var(--wp--preset--spacing--s)"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr( $godevs_portfolio_masonry_alt ); ?>"/></figure>
			<!-- /wp:image -->
			<?php endforeach; ?>
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
