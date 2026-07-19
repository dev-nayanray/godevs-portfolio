<?php
/**
 * Title: Logo Cloud
 * Slug: godevs-portfolio/logo-cloud
 * Categories: godevs-portfolio-social-proof
 * Description: "Trusted by" row of client logo placeholders, used as social proof.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_logo_cloud_clients = array(
	__( 'Acme Studio', 'godevs-portfolio' ),
	__( 'Northwind Traders', 'godevs-portfolio' ),
	__( 'Contoso', 'godevs-portfolio' ),
	__( 'Fabrikam', 'godevs-portfolio' ),
	__( 'Globex', 'godevs-portfolio' ),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
	<p class="has-text-muted-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Trusted by teams at', 'godevs-portfolio' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|l"}}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<?php foreach ( $godevs_portfolio_logo_cloud_clients as $godevs_portfolio_client_name ) : ?>
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
			<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-logo.png' ); ?>" alt="<?php echo esc_attr( sprintf( /* translators: %s: client name. */ __( '%s logo', 'godevs-portfolio' ), $godevs_portfolio_client_name ) ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
