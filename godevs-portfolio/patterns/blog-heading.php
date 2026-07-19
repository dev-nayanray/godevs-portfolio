<?php
/**
 * Title: Blog Heading
 * Slug: godevs-portfolio/blog-heading
 * Categories: godevs-portfolio-cta
 * Inserter: false
 * Description: The "Blog" H1 used by home.html and index.html. Not meant for manual insertion — added in Phase 6 to fix a real i18n gap: static text directly in .html templates is not picked up by `wp i18n make-pot`, only strings inside .php files are.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Blog', 'godevs-portfolio' ); ?></h1>
<!-- /wp:heading -->
