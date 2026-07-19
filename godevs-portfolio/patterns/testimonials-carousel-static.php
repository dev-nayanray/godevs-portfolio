<?php
/**
 * Title: Testimonials Carousel (Static)
 * Slug: godevs-portfolio/testimonials-carousel-static
 * Categories: godevs-portfolio-testimonials
 * Description: Static (non-JS) three-column testimonial layout using core/columns and core/quote — no carousel library dependency.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_testimonials = array(
	array(
		'quote' => __( 'They rebuilt our site in six weeks and it still outperforms agencies twice their size. Communication was clear from day one to launch.', 'godevs-portfolio' ),
		'name'  => __( 'Priya Sharma', 'godevs-portfolio' ),
		'role'  => __( 'Founder, Northwind Traders', 'godevs-portfolio' ),
	),
	array(
		'quote' => __( 'Our conversion rate more than tripled after the redesign. They understood our customers better than we did.', 'godevs-portfolio' ),
		'name'  => __( 'Daniel Okoye', 'godevs-portfolio' ),
		'role'  => __( 'Marketing Lead, Fabrikam', 'godevs-portfolio' ),
	),
	array(
		'quote' => __( 'Working with a freelancer felt riskier on paper, but the process was more organized than any agency we\'d hired before.', 'godevs-portfolio' ),
		'name'  => __( 'Elena Novak', 'godevs-portfolio' ),
		'role'  => __( 'COO, Globex', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'What clients say', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $godevs_portfolio_testimonials as $godevs_portfolio_testimonial ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
			<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
				<!-- wp:paragraph -->
				<p><?php echo esc_html( $godevs_portfolio_testimonial['quote'] ); ?></p>
				<!-- /wp:paragraph -->
				<cite><?php echo esc_html( $godevs_portfolio_testimonial['name'] ) . ' — ' . esc_html( $godevs_portfolio_testimonial['role'] ); ?></cite>
			</blockquote>
			<!-- /wp:quote -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
