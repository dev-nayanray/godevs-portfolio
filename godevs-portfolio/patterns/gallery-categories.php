<?php
/**
 * Title: Gallery Categories
 * Slug: godevs-portfolio/gallery-categories
 * Categories: godevs-portfolio-portfolio
 * Description: Static linked category cards (shoot types, room types, or similar) — explicitly not a JS-filtered single-page gallery. Shared by the Photographer and Interior Designer niches with different copy/images, not a separate pattern per niche.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_gallery_categories = array(
	array(
		'title' => __( 'Weddings', 'godevs-portfolio' ),
		'href'  => '/galleries/weddings/',
	),
	array(
		'title' => __( 'Portraits', 'godevs-portfolio' ),
		'href'  => '/galleries/portraits/',
	),
	array(
		'title' => __( 'Events', 'godevs-portfolio' ),
		'href'  => '/galleries/events/',
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Browse by category', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $godevs_portfolio_gallery_categories as $godevs_portfolio_gallery_category ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
			<figure class="wp-block-image size-large"><a href="<?php echo esc_url( $godevs_portfolio_gallery_category['href'] ); ?>" aria-label="<?php echo esc_attr( sprintf( /* translators: %s: gallery category name. */ __( 'View the %s gallery', 'godevs-portfolio' ), $godevs_portfolio_gallery_category['title'] ) ); ?>"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr( sprintf( /* translators: %s: gallery category name. */ __( 'Preview image for the %s gallery', 'godevs-portfolio' ), $godevs_portfolio_gallery_category['title'] ) ); ?>"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><a href="<?php echo esc_url( $godevs_portfolio_gallery_category['href'] ); ?>"><?php echo esc_html( $godevs_portfolio_gallery_category['title'] ); ?></a></h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
