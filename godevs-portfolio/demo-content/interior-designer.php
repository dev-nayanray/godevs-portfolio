<?php
/**
 * interior-designer demo content — generated from demo-content/godevs-portfolio-demo-interior-designer.xml
 * by scratchpad/wxr-to-php.php (a one-time authoring tool, not shipped).
 * Do not hand-edit; regenerate from the WXR source if the demo content changes.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create the "interior-designer" niche's demo pages, navigation, and Reading Settings.
 *
 * @return int|WP_Error Home page ID on success.
 */
function godevs_portfolio_import_demo_interior_designer() {
	$pages = array();

	$pages[] = array(
		'slug'        => 'home',
		'title'       => 'Home',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_godevs_hero_heading' => 'Spaces that feel like you, not a showroom',
			'_godevs_hero_subtext' => 'Elm & Ash Interiors designs full-service and room-by-room interiors that hold up to real life — kids, pets, and all.',
			'_godevs_hero_cta_primary_label' => 'Start a Project',
			'_godevs_hero_cta_primary_url' => '/contact/',
			'_godevs_hero_cta_secondary_label' => 'See Our Work',
			'_godevs_hero_cta_secondary_url' => '/portfolio/',
			'_godevs_hero_image_alt' => 'A recently completed Elm and Ash Interiors living room design',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Browse by room</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="/galleries/living-rooms/" aria-label="View the Living Rooms gallery"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Preview image for the Living Rooms gallery"/></a></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><a href="/galleries/living-rooms/">Living Rooms</a></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="/galleries/kitchens/" aria-label="View the Kitchens gallery"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Preview image for the Kitchens gallery"/></a></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><a href="/galleries/kitchens/">Kitchens</a></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="/galleries/bedrooms/" aria-label="View the Bedrooms gallery"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Preview image for the Bedrooms gallery"/></a></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><a href="/galleries/bedrooms/">Bedrooms</a></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/before-after-columns"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">What we do</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Full-Service Design</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">From floor plans to final styling, we handle every decision so you don\'t have to.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Full-Service Design">Learn more</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Room Refresh</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">A focused update to one room — new furniture, paint, and layout without a full renovation.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Room Refresh">Learn more</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Design Consultation</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">A single working session to get unstuck on a space that isn\'t coming together.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Design Consultation">Learn more</a></p>
<!-- /wp:paragraph -->
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
<h2 class="wp-block-heading has-xx-large-font-size">Design that starts with how you live</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">Elm &amp; Ash Interiors was founded on a simple idea: a beautiful room only works if it actually fits how you live in it.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>We spend as much time asking about your morning routine as we do picking paint colors, because that\'s where good design actually comes from. We\'re a small studio — big enough to take on full-home projects, small enough that you always work directly with the person designing your space.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/footer-cta"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'portfolio',
		'title'       => 'Portfolio',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-portfolio.html',
		),
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Browse by room</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="/galleries/living-rooms/" aria-label="View the Living Rooms gallery"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Preview image for the Living Rooms gallery"/></a></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><a href="/galleries/living-rooms/">Living Rooms</a></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="/galleries/kitchens/" aria-label="View the Kitchens gallery"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Preview image for the Kitchens gallery"/></a></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><a href="/galleries/kitchens/">Kitchens</a></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="/galleries/bedrooms/" aria-label="View the Bedrooms gallery"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Preview image for the Bedrooms gallery"/></a></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><a href="/galleries/bedrooms/">Bedrooms</a></h3>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/before-after-columns"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /-->
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
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">What we do</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Full-Service Design</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">From floor plans to final styling, we handle every decision so you don\'t have to.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Full-Service Design">Learn more</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Room Refresh</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">A focused update to one room — new furniture, paint, and layout without a full renovation.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Room Refresh">Learn more</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Design Consultation</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">A single working session to get unstuck on a space that isn\'t coming together.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Design Consultation">Learn more</a></p>
<!-- /wp:paragraph -->
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
		'slug'        => 'process',
		'title'       => 'Process',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Our process</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"large","textColor":"accent","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-accent-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Consultation</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">We walk through your space and talk through how you actually live in it, not just how it looks in photos.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"large","textColor":"accent","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-accent-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Design &amp; Mood Board</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">We put together a full concept — layout, palette, and furnishings — before anything gets ordered.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"large","textColor":"accent","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-accent-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Sourcing</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">We source furniture, fabric, and fixtures from our trade network, often at better pricing than retail.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"large","textColor":"accent","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-accent-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700">04</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Installation</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">We install everything in a single day when possible, so your space transforms all at once.</p>
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
		'slug'        => 'contact',
		'title'       => 'Contact',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-contact.html',
		),
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Let\'s talk about your space</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">We typically reply within one business day. Tell us a bit about your space and timeline up front — it helps us give you a useful answer faster.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Email</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="mailto:hello@elmandashinteriors.example">hello@elmandashinteriors.example</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Phone</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="tel:+15555550164">+1 (555) 555-0164</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Studio</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>212 Birchwood Ave, Studio 3<br/>Nashville, TN 37203</p>
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
<!-- wp:navigation-link {"label":"Portfolio","url":"/portfolio/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Process","url":"/process/","kind":"custom"} /-->
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
