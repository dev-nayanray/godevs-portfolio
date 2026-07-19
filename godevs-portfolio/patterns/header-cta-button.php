<?php
/**
 * Title: Header CTA Button
 * Slug: godevs-portfolio/header-cta-button
 * Categories: godevs-portfolio-cta
 * Inserter: false
 * Description: The "Get in Touch" button used by header.html and header-transparent.html. Not meant for manual insertion — same i18n-gap fix as blog-heading.php: static text directly in .html template parts is not picked up by `wp i18n make-pot`.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php esc_html_e( 'Get in Touch', 'godevs-portfolio' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
