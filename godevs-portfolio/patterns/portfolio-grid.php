<?php
/**
 * Title: Portfolio Grid
 * Slug: godevs-portfolio/portfolio-grid
 * Categories: godevs-portfolio-portfolio
 * Description: Editorial, asymmetric project grid linking out to individual case study pages.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Selected work', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
			<figure class="wp-block-image size-large"><a href="/case-studies/northwind-rebrand/"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Screenshot of the Northwind Traders brand identity and website', 'godevs-portfolio' ); ?>"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><a href="/case-studies/northwind-rebrand/"><?php esc_html_e( 'Northwind Rebrand', 'godevs-portfolio' ); ?></a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Brand Identity', 'godevs-portfolio' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
			<figure class="wp-block-image size-large"><a href="/case-studies/globex-mobile-app/"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Screenshot of the Globex mobile app interface', 'godevs-portfolio' ); ?>"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><a href="/case-studies/globex-mobile-app/"><?php esc_html_e( 'Globex Mobile App', 'godevs-portfolio' ); ?></a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Product Design', 'godevs-portfolio' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
			<figure class="wp-block-image size-large"><a href="/case-studies/fabrikam-commerce-platform/"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Screenshot of the Fabrikam e-commerce platform', 'godevs-portfolio' ); ?>"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><a href="/case-studies/fabrikam-commerce-platform/"><?php esc_html_e( 'Fabrikam Commerce Platform', 'godevs-portfolio' ); ?></a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Web Development', 'godevs-portfolio' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
			<figure class="wp-block-image size-large"><a href="/case-studies/contoso-marketing-site/"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Screenshot of the Contoso marketing website', 'godevs-portfolio' ); ?>"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size"><a href="/case-studies/contoso-marketing-site/"><?php esc_html_e( 'Contoso Marketing Site', 'godevs-portfolio' ); ?></a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Web Design', 'godevs-portfolio' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
