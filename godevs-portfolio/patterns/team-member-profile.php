<?php
/**
 * Title: Team Member Profile
 * Slug: godevs-portfolio/team-member-profile
 * Categories: godevs-portfolio-team
 * Description: Single-person detailed bio with portrait, credentials, and a longer background paragraph — for an individual attorney/doctor/team-member page, distinct from team-grid's grid-of-many. Needs its own dedicated template (page-team-member.html) before individual profile pages can be built; not part of this phase's scope, see docs/CLAUDE.md Phase 10 notes.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-columns alignwide">

	<!-- wp:column {"width":"32%"} -->
	<div class="wp-block-column" style="flex-basis:32%">
		<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-portrait.png' ); ?>" alt="<?php echo esc_attr__( 'Portrait of Dr. Avery Bennett', 'godevs-portfolio' ); ?>" style="border-radius:0.25rem"/></figure>
		<!-- /wp:image -->

		<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
		<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"68%"} -->
	<div class="wp-block-column" style="flex-basis:68%">

		<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Dr. Avery Bennett', 'godevs-portfolio' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
		<p class="has-text-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Family Medicine', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"text-muted"} -->
		<p class="has-text-muted-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em"><?php esc_html_e( 'Credentials (placeholder — replace with real details)', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:list -->
		<ul class="wp-block-list">
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'Board Certified, Family Medicine', 'godevs-portfolio' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( 'M.D., Fictional State University School of Medicine', 'godevs-portfolio' ); ?></li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li><?php esc_html_e( '10+ years in practice', 'godevs-portfolio' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:paragraph {"textColor":"text-muted"} -->
		<p class="has-text-muted-color has-text-color"><?php esc_html_e( 'Dr. Bennett focuses on whole-person, preventive care and takes time to make sure every visit answers the questions that brought you in. Outside the office, they volunteer with the local community health clinic.', 'godevs-portfolio' ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
