<?php
/**
 * Title: FAQ List
 * Slug: godevs-portfolio/faq-list
 * Categories: godevs-portfolio-faq
 * Description: Frequently asked questions built on the native core/details block — real HTML5 details/summary accordion behavior, zero custom JavaScript, keyboard- and screen-reader-accessible by default.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

$godevs_portfolio_faqs = array(
	array(
		'question' => __( 'How do I schedule a consultation?', 'godevs-portfolio' ),
		'answer'   => __( 'Call our office directly using the number on this page, or use the contact details below — we will find a time that works for you.', 'godevs-portfolio' ),
	),
	array(
		'question' => __( 'What should I bring to my first appointment?', 'godevs-portfolio' ),
		'answer'   => __( 'A photo ID and any paperwork relevant to your situation. We will let you know if anything else is needed when you schedule.', 'godevs-portfolio' ),
	),
	array(
		'question' => __( 'How long does a first visit typically take?', 'godevs-portfolio' ),
		'answer'   => __( 'Most first visits run 30 to 60 minutes, depending on what brings you in. We will give you a clearer estimate when you schedule.', 'godevs-portfolio' ),
	),
	array(
		'question' => __( 'Do you offer an initial consultation?', 'godevs-portfolio' ),
		'answer'   => __( 'Yes — reach out using the contact information on this page and we can talk through whether we are a good fit before you commit to anything.', 'godevs-portfolio' ),
	),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Frequently asked questions', 'godevs-portfolio' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<?php foreach ( $godevs_portfolio_faqs as $godevs_portfolio_faq ) : ?>
		<!-- wp:details -->
		<details class="wp-block-details"><summary><?php echo esc_html( $godevs_portfolio_faq['question'] ); ?></summary>
		<!-- wp:paragraph {"textColor":"text-muted"} -->
		<p class="has-text-muted-color has-text-color"><?php echo esc_html( $godevs_portfolio_faq['answer'] ); ?></p>
		<!-- /wp:paragraph --></details>
		<!-- /wp:details -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
