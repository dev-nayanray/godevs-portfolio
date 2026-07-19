<?php
/**
 * Title: Stats Counter
 * Slug: godevs-portfolio/stats-counter
 * Categories: godevs-portfolio-social-proof
 * Description: Row of key metrics used as social proof (projects shipped, years active, clients served).
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_stats = array(
	array(
		'value' => __( '120+', 'godevs-portfolio' ),
		'label' => __( 'Projects delivered', 'godevs-portfolio' ),
	),
	array(
		'value' => __( '98%', 'godevs-portfolio' ),
		'label' => __( 'Client retention', 'godevs-portfolio' ),
	),
	array(
		'value' => __( '12', 'godevs-portfolio' ),
		'label' => __( 'Years combined experience', 'godevs-portfolio' ),
	),
	array(
		'value' => __( '4.9/5', 'godevs-portfolio' ),
		'label' => __( 'Average client rating', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide">
	<?php foreach ( $godevs_portfolio_stats as $godevs_portfolio_stat ) : ?>
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size"><?php echo esc_html( $godevs_portfolio_stat['value'] ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
		<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size"><?php echo esc_html( $godevs_portfolio_stat['label'] ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<?php endforeach; ?>
</div>
<!-- /wp:columns -->
