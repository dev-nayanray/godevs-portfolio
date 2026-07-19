<?php
/**
 * Title: Portfolio Case Study
 * Slug: godevs-portfolio/portfolio-case-study
 * Categories: godevs-portfolio-portfolio
 * Description: Single-project case study layout — hero image, challenge/approach/result sections, results stats, and an image gallery. Intended as the primary content of a page-case-study.html page, so its own heading acts as the page's visually-prominent title.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_case_study_stats = array(
	array(
		'value' => __( '+180%', 'godevs-portfolio' ),
		'label' => __( 'Organic traffic', 'godevs-portfolio' ),
	),
	array(
		'value' => __( '3.2×', 'godevs-portfolio' ),
		'label' => __( 'Conversion rate', 'godevs-portfolio' ),
	),
	array(
		'value' => __( '6 weeks', 'godevs-portfolio' ),
		'label' => __( 'Concept to launch', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"var:preset|spacing|2xs"}}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
	<p class="has-text-muted-color has-text-color has-small-font-size"><?php esc_html_e( 'Brand Identity · Web Design', 'godevs-portfolio' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"fontSize":"huge"} -->
	<h2 class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Northwind Rebrand', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image alignwide size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Wide hero photo of the finished Northwind Traders brand identity and website', 'godevs-portfolio' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns">

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":3,"fontSize":"large"} -->
		<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'The Challenge', 'godevs-portfolio' ); ?></h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Northwind Traders had outgrown its decade-old identity. The brand no longer matched the quality of the work, and the website was actively losing them enterprise leads to competitors with a sharper first impression.', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":3,"fontSize":"large"} -->
		<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'The Approach', 'godevs-portfolio' ); ?></h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'We ran a two-week discovery sprint with their sales and leadership teams, then rebuilt the identity system, messaging, and website in parallel so nothing shipped out of sync with the rest.', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":3,"fontSize":"large"} -->
		<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'The Result', 'godevs-portfolio' ); ?></h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'A brand and site that finally read as enterprise-grade. Sales now leads with the website in pitch meetings instead of working around it.', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide">
	<?php foreach ( $godevs_portfolio_case_study_stats as $godevs_portfolio_stat ) : ?>
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} -->
		<p class="has-primary-color has-text-color has-xx-large-font-size"><?php echo esc_html( $godevs_portfolio_stat['value'] ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
		<p class="has-text-muted-color has-text-color has-small-font-size"><?php echo esc_html( $godevs_portfolio_stat['label'] ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<?php endforeach; ?>
</div>
<!-- /wp:columns -->

<!-- wp:gallery {"columns":3,"align":"wide","linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped alignwide">
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Northwind Traders new logo and stationery mockup', 'godevs-portfolio' ); ?>"/></figure>
	<!-- /wp:image -->
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Northwind Traders homepage shown on a laptop screen', 'godevs-portfolio' ); ?>"/></figure>
	<!-- /wp:image -->
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>" alt="<?php echo esc_attr__( 'Northwind Traders product page shown on a mobile phone', 'godevs-portfolio' ); ?>"/></figure>
	<!-- /wp:image -->
</figure>
<!-- /wp:gallery -->
