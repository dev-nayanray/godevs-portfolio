<?php
/**
 * Title: Not Found Message
 * Slug: godevs-portfolio/not-found
 * Categories: godevs-portfolio-cta
 * Inserter: false
 * Description: The "Page not found" heading + message used by 404.html. Not meant for manual insertion — same i18n-gap fix as blog-heading.php.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Page not found', 'godevs-portfolio' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( "The page you're looking for doesn't exist or has moved.", 'godevs-portfolio' ); ?></p>
<!-- /wp:paragraph -->
