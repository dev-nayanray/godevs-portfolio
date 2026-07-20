<?php
/**
 * photographer demo content — generated from demo-content/godevs-portfolio-demo-photographer.xml
 * by scratchpad/wxr-to-php.php (a one-time authoring tool, not shipped).
 * Do not hand-edit; regenerate from the WXR source if the demo content changes.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create the "photographer" niche's demo pages, navigation, and Reading Settings.
 *
 * @return int|WP_Error Home page ID on success.
 */
function godevs_portfolio_import_demo_photographer() {
	$pages = array();

	$pages[] = array(
		'slug'        => 'home',
		'title'       => 'Home',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-video"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/portfolio-grid-masonry"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">What clients say</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph -->
<p>Maya made our wedding day feel effortless. We forgot the camera was even there half the time, and the photos are stunning.</p>
<!-- /wp:paragraph -->
<cite>Priya &amp; Jordan Malik — Wedding clients</cite>
</blockquote>
<!-- /wp:quote -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph -->
<p>Best headshots I\'ve ever had taken. She has a way of putting you at ease that shows in every photo.</p>
<!-- /wp:paragraph -->
<cite>Derek Voss — Portrait client</cite>
</blockquote>
<!-- /wp:quote -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph -->
<p>We hired Juniper Lane for our company retreat and the event photos exceeded what we expected from a corporate shoot.</p>
<!-- /wp:paragraph -->
<cite>Alina Cho — Marketing Director, Fernbrook Events</cite>
</blockquote>
<!-- /wp:quote -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'about',
		'title'       => 'About',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Hi, I\'m Maya Ortiz</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">I\'ve been photographing weddings, portraits, and everything in between for nine years, and I still get a little giddy every time I get to document someone\'s story.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>My style leans candid and light-filled — I\'d rather capture a real laugh than a stiff pose. When I\'m not behind the camera, I\'m probably scouting new locations around Asheville or editing with way too much coffee.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">300+</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Sessions photographed</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">9</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Years behind the camera</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">48hr</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Average preview turnaround</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">5.0/5</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Average client rating</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'galleries',
		'title'       => 'Galleries',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-video"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/gallery-categories"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/portfolio-grid-masonry"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'services',
		'title'       => 'Services',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-services.html',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-video"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Session packages</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}},"verticalAlignment":"stretch"} -->
<div class="wp-block-columns are-vertically-aligned-stretch">
<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Mini Session</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size">$250</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">A 30-minute session, perfect for family updates or fresh headshots.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>30-minute session</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>15 edited digital images</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Online gallery</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>1-week delivery</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a Mini Session</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch">
<!-- wp:group {"backgroundColor":"primary","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<p class="has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Most Popular</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"fontSize":"large","textColor":"primary-contrast"} -->
<h3 class="wp-block-heading has-primary-contrast-color has-text-color has-large-font-size">Full Session</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size">$650</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>A complete 2-hour session for portraits, engagements, or small events.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>2-hour session</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>50 edited digital images</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Online gallery &amp; print release</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>2-week delivery</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/contact/">Book a Full Session</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Wedding Day</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size">Let\'s talk</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Full-day wedding coverage tailored to your timeline.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>8+ hours of coverage</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Second shooter available</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>400+ edited images</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>6-week delivery</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/">Inquire About Your Date</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/footer-cta"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'testimonials',
		'title'       => 'Testimonials',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">What clients say</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph -->
<p>Maya made our wedding day feel effortless. We forgot the camera was even there half the time, and the photos are stunning.</p>
<!-- /wp:paragraph -->
<cite>Priya &amp; Jordan Malik — Wedding clients</cite>
</blockquote>
<!-- /wp:quote -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph -->
<p>Best headshots I\'ve ever had taken. She has a way of putting you at ease that shows in every photo.</p>
<!-- /wp:paragraph -->
<cite>Derek Voss — Portrait client</cite>
</blockquote>
<!-- /wp:quote -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph -->
<p>We hired Juniper Lane for our company retreat and the event photos exceeded what we expected from a corporate shoot.</p>
<!-- /wp:paragraph -->
<cite>Alina Cho — Marketing Director, Fernbrook Events</cite>
</blockquote>
<!-- /wp:quote -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'contact',
		'title'       => 'Contact',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-contact.html',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-video"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Let\'s talk about your session</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">I usually reply within one business day. Tell me a bit about what you\'re looking for and your ideal date, and I\'ll follow up with availability.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Email</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="mailto:hello@juniperlanephoto.example">hello@juniperlanephoto.example</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Phone</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="tel:+15555550193">+1 (555) 555-0193</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Location</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Based in Asheville, NC<br/>Available for travel</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/footer-cta"} /-->
</div>
<!-- /wp:group -->',
	);

	$created = array();
	foreach ( $pages as $page ) {
		$parent_id = 0;
		if ( $page['parent_slug'] && isset( $created[ $page['parent_slug'] ] ) ) {
			$parent_id = $created[ $page['parent_slug'] ];
		}
		$post_id = wp_insert_post(
			array(
				'post_title'   => $page['title'],
				'post_name'    => $page['slug'],
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_parent'  => $parent_id,
				'menu_order'   => $page['menu_order'],
				'post_content' => str_replace( 'GODEVS_URI', GODEVS_PORTFOLIO_URI, $page['content'] ),
			),
			true
		);
		if ( is_wp_error( $post_id ) ) {
			return $post_id;
		}
		foreach ( $page['meta'] as $meta_key => $meta_value ) {
			update_post_meta( $post_id, $meta_key, $meta_value );
		}
		$created[ $page['slug'] ] = $post_id;
	}

	$nav_id = wp_insert_post(
		array(
			'post_title'   => 'Primary Navigation',
			'post_type'    => 'wp_navigation',
			'post_status'  => 'publish',
			'post_content' => '<!-- wp:navigation-link {"label":"Home","url":"/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"About","url":"/about/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Galleries","url":"/galleries/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Testimonials","url":"/testimonials/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Contact","url":"/contact/","kind":"custom"} /-->',
		),
		true
	);

	if ( isset( $created['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $created['home'] );
	}

	return isset( $created['home'] ) ? $created['home'] : 0;
}
