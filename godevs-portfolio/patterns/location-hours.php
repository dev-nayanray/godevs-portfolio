<?php
/**
 * Title: Location & Hours
 * Slug: godevs-portfolio/location-hours
 * Categories: godevs-portfolio-contact
 * Description: Map-forward layout with prominent hours, for a "visit us" section — distinct from contact-info's 3-column email/phone/address cards. Uses a static placeholder graphic in place of a map, not a live embed, so the theme makes no third-party remote calls.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_hours = array(
	array(
		'day'   => __( 'Monday – Friday', 'godevs-portfolio' ),
		'hours' => __( '9:00 AM – 5:00 PM', 'godevs-portfolio' ),
	),
	array(
		'day'   => __( 'Saturday', 'godevs-portfolio' ),
		'hours' => __( '10:00 AM – 2:00 PM', 'godevs-portfolio' ),
	),
	array(
		'day'   => __( 'Sunday', 'godevs-portfolio' ),
		'hours' => __( 'Closed', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-columns alignwide">

	<!-- wp:column {"width":"58%"} -->
	<div class="wp-block-column" style="flex-basis:58%">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Map placeholder — replace with your own map embed or image', 'godevs-portfolio' ); ?>"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"42%","verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">

		<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Visit us', 'godevs-portfolio' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( '123 Market Street, Suite 400', 'godevs-portfolio' ); ?><br/><?php esc_html_e( 'Portland, OR 97201', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"text-muted"} -->
		<h3 class="wp-block-heading has-text-muted-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Hours', 'godevs-portfolio' ); ?></h3>
		<!-- /wp:heading -->

		<?php foreach ( $godevs_portfolio_hours as $godevs_portfolio_day ) : ?>
		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p style="margin-top:0;margin-bottom:0"><strong><?php echo esc_html( $godevs_portfolio_day['day'] ); ?>:</strong> <?php echo esc_html( $godevs_portfolio_day['hours'] ); ?></p>
		<!-- /wp:paragraph -->
		<?php endforeach; ?>

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
