<?php
/**
 * Title: Team Grid
 * Slug: godevs-portfolio/team-grid
 * Categories: godevs-portfolio-team
 * Description: Team member grid with portrait, name, role, and social links.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_team = array(
	array(
		'name' => __( 'Jordan Lee', 'godevs-portfolio' ),
		'role' => __( 'Creative Director', 'godevs-portfolio' ),
	),
	array(
		'name' => __( 'Morgan Reyes', 'godevs-portfolio' ),
		'role' => __( 'Lead Developer', 'godevs-portfolio' ),
	),
	array(
		'name' => __( 'Casey Kim', 'godevs-portfolio' ),
		'role' => __( 'Brand Strategist', 'godevs-portfolio' ),
	),
	array(
		'name' => __( 'Amara Okafor', 'godevs-portfolio' ),
		'role' => __( 'Project Manager', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Meet the team', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $godevs_portfolio_team as $godevs_portfolio_member ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
			<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( GODEVS_PORTFOLIO_URI . '/assets/images/placeholder-portrait.png' ); ?>" alt="<?php echo esc_attr( sprintf( /* translators: 1: name, 2: role. */ __( 'Portrait of %1$s, %2$s', 'godevs-portfolio' ), $godevs_portfolio_member['name'], $godevs_portfolio_member['role'] ) ); ?>" style="border-radius:0.25rem"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3,"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html( $godevs_portfolio_member['name'] ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
			<p class="has-text-muted-color has-text-color has-small-font-size"><?php echo esc_html( $godevs_portfolio_member['role'] ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
			<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
