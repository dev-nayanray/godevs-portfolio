<?php
/**
 * Title: Hero — Video
 * Slug: godevs-portfolio/hero-video
 * Categories: godevs-portfolio-hero
 * Description: Asymmetric hero using core/video in place of a static image — for niches (photography, architecture) where a showreel makes a stronger first impression. Ships with no bundled video file, only a poster frame using the existing placeholder image, same convention as every image pattern shipping a placeholder graphic instead of a real photo.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/*
 * See godevs_portfolio_hero_heading_level() in functions.php (Phase 10) —
 * shared with hero-agency.php and hero-freelancer.php so every hero
 * pattern gets the "exactly one H1, on the actual front page" guarantee
 * without re-deriving it per pattern.
 */
$godevs_portfolio_hero_video_level = godevs_portfolio_hero_heading_level();
$godevs_portfolio_hero_video_tag   = 'h' . $godevs_portfolio_hero_video_level;
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-columns alignwide">

	<!-- wp:column {"width":"52%","verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">

		<!-- wp:heading {"level":<?php echo (int) $godevs_portfolio_hero_video_level; ?>,"fontSize":"huge"} -->
		<<?php echo esc_attr( $godevs_portfolio_hero_video_tag ); ?> class="wp-block-heading has-huge-font-size"><?php esc_html_e( 'Work that speaks for itself', 'godevs-portfolio' ); ?></<?php echo esc_attr( $godevs_portfolio_hero_video_tag ); ?>>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
		<p class="has-text-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'A short look at recent work — replace this with your own showreel or walkthrough video.', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Get in Touch', 'godevs-portfolio' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"48%"} -->
	<div class="wp-block-column" style="flex-basis:48%">
		<!-- wp:video {"poster":"<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>"} -->
		<figure class="wp-block-video"><video controls poster="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-wide.png' ); ?>"></video><figcaption class="wp-element-caption"><?php esc_html_e( 'Replace with your own video — no file is bundled with the theme.', 'godevs-portfolio' ); ?></figcaption></figure>
		<!-- /wp:video -->
	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
