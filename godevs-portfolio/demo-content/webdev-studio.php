<?php
/**
 * webdev-studio demo content — generated from demo-content/godevs-portfolio-demo-webdev-studio.xml
 * by scratchpad/wxr-to-php.php (a one-time authoring tool, not shipped).
 * Do not hand-edit; regenerate from the WXR source if the demo content changes.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create the "webdev-studio" niche's demo pages, navigation, and Reading Settings.
 *
 * @return int|WP_Error Home page ID on success.
 */
function godevs_portfolio_import_demo_webdev_studio() {
	$pages = array();

	$pages[] = array(
		'slug'        => 'home',
		'title'       => 'Home',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_godevs_hero_heading' => 'Websites that work as hard as your business does',
			'_godevs_hero_subtext' => 'We design and build fast, accessible WordPress sites for growing companies — no page-builder bloat, just clean code your team can actually maintain.',
			'_godevs_hero_cta_primary_label' => 'Get a Quote',
			'_godevs_hero_cta_primary_url' => '/contact/',
			'_godevs_hero_cta_secondary_label' => 'See Our Work',
			'_godevs_hero_cta_secondary_url' => '/portfolio/',
			'_godevs_hero_image_alt' => 'Screens showing recent Brightloop Studio website builds',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<p class="has-text-muted-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Trusted by teams at</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|l"}}},"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Solstice Outfitters logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Meridian logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Cobalt Logistics logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Fernbrook Realty logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Alderbrook Financial logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
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
<h3 class="wp-block-heading has-large-font-size">Website Design</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Interface design in Figma built around how your customers actually use the site, not a generic template.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Website Design">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">WordPress &amp; Headless Development</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Full site editing WordPress builds, headless React front-ends, or a hybrid of both — whatever the project actually needs.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about WordPress &amp; Headless Development">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">E-Commerce Development</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">WooCommerce and custom storefronts built to handle real transaction volume without falling over.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about E-Commerce Development">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Ongoing Technical Support</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Server monitoring, security patches, and performance tuning after launch, not just before it.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Ongoing Technical Support">Learn more</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Selected work</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Screenshot of the Solstice Outfitters online store"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Solstice Outfitters</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">E-Commerce Rebuild</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Screenshot of the Meridian booking platform interface"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Meridian Booking Platform</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Web Application</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Screenshot of the Cobalt Logistics operations dashboard"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Cobalt Logistics Dashboard</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Web Development</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Screenshot of the Fernbrook Realty marketing website"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Fernbrook Realty Site</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Web Design</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">80+</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Sites shipped</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">99.9%</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Average uptime</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">8</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Years in business</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">4.8/5</p>
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

<!-- wp:group {"align":"full","gradient":"primary-to-accent","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-contrast-color has-text-color has-primary-to-accent-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"fontSize":"xx-large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center has-primary-contrast-color has-text-color has-xx-large-font-size">Ready to start your next build?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-contrast-color has-text-color has-large-font-size">Tell us about your project and technical requirements — we\'ll follow up within one business day.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/contact/">Get a Quote</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
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
<h2 class="wp-block-heading has-xx-large-font-size">Built by developers who got tired of bloated page builders</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">Brightloop Studio started in 2017 because we were tired of watching good businesses get stuck with slow, hard-to-update websites built on page-builder plugins nobody on the team understood.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>We build differently: block-theme-native WordPress, clean code, and documentation that makes sense to whoever inherits the site after us. No proprietary lock-in, no plugin graveyard — just a site your team can actually maintain.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">Why work with us</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"style":{"typography":{"textAlign":"center"}}} -->
<div class="wp-block-column" style="text-align:center">
<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Code you can hand off</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color">Standard WordPress patterns and documentation, not a tangle only we understand.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"style":{"typography":{"textAlign":"center"}}} -->
<div class="wp-block-column" style="text-align:center">
<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Real technical accountability</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color">A dedicated technical lead on every project, not a rotating cast of subcontractors.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"style":{"typography":{"textAlign":"center"}}} -->
<div class="wp-block-column" style="text-align:center">
<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Built to last past launch</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color">We build for the site\'s whole lifecycle, not just the day it goes live.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Meet the team</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Devon Marsh, Technical Director" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Devon Marsh</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Technical Director</p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Priya Anand, Lead Developer" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Priya Anand</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Lead Developer</p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Theo Kowalski, UI/UX Designer" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Theo Kowalski</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">UI/UX Designer</p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Naomi Osei, Project Manager" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Naomi Osei</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Project Manager</p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","gradient":"primary-to-accent","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-contrast-color has-text-color has-primary-to-accent-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"fontSize":"xx-large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center has-primary-contrast-color has-text-color has-xx-large-font-size">Ready to start your next build?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-contrast-color has-text-color has-large-font-size">Tell us about your project and technical requirements — we\'ll follow up within one business day.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/contact/">Get a Quote</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
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
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
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
<h3 class="wp-block-heading has-large-font-size">Website Design</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Interface design in Figma built around how your customers actually use the site, not a generic template.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Website Design">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">WordPress &amp; Headless Development</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Full site editing WordPress builds, headless React front-ends, or a hybrid of both — whatever the project actually needs.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about WordPress &amp; Headless Development">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">E-Commerce Development</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">WooCommerce and custom storefronts built to handle real transaction volume without falling over.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about E-Commerce Development">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Ongoing Technical Support</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Server monitoring, security patches, and performance tuning after launch, not just before it.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Ongoing Technical Support">Learn more</a></p>
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
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/process-steps"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","gradient":"primary-to-accent","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-contrast-color has-text-color has-primary-to-accent-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"fontSize":"xx-large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center has-primary-contrast-color has-text-color has-xx-large-font-size">Ready to start your next build?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-contrast-color has-text-color has-large-font-size">Tell us about your project and technical requirements — we\'ll follow up within one business day.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/contact/">Get a Quote</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
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
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Selected work</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Screenshot of the Solstice Outfitters online store"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Solstice Outfitters</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">E-Commerce Rebuild</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Screenshot of the Meridian booking platform interface"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Meridian Booking Platform</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Web Application</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Screenshot of the Cobalt Logistics operations dashboard"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Cobalt Logistics Dashboard</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Web Development</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Screenshot of the Fernbrook Realty marketing website"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Fernbrook Realty Site</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Web Design</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<p class="has-text-muted-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Trusted by teams at</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|l"}}},"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Solstice Outfitters logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Meridian logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Cobalt Logistics logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Fernbrook Realty logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Alderbrook Financial logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","gradient":"primary-to-accent","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-contrast-color has-text-color has-primary-to-accent-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"fontSize":"xx-large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center has-primary-contrast-color has-text-color has-xx-large-font-size">Ready to start your next build?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-contrast-color has-text-color has-large-font-size">Tell us about your project and technical requirements — we\'ll follow up within one business day.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/contact/">Get a Quote</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'pricing',
		'title'       => 'Pricing',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-pricing.html',
		),
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Simple, transparent pricing</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}},"verticalAlignment":"stretch"} -->
<div class="wp-block-columns are-vertically-aligned-stretch">
<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Launch</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size">$2,800</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">A production-ready WordPress site built on our shared pattern library — fast to launch, easy to maintain.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>Up to 10 pages</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Block-theme build</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>2 style variations</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>4-week turnaround</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/">Get Started</a></div>
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
<h3 class="wp-block-heading has-primary-contrast-color has-text-color has-large-font-size">Growth</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size">$6,500</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Custom development for teams that need more than a template — integrations, custom patterns, e-commerce.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>Up to 25 pages</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Custom block patterns</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>E-commerce integration</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>8-week turnaround</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/contact/">Choose Growth</a></div>
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
<h3 class="wp-block-heading has-large-font-size">Enterprise</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xx-large"} -->
<p class="has-xx-large-font-size">Let\'s talk</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Ongoing technical partnership for complex builds and multi-site deployments.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>Unlimited pages</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Dedicated technical lead</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>SLA-backed support</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/">Contact Us</a></div>
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
<p>They rebuilt our checkout flow and cut cart abandonment by double digits within the first month. Communication was clear through the whole project.</p>
<!-- /wp:paragraph -->
<cite>Priya Nathan — Founder, Solstice Outfitters</cite>
</blockquote>
<!-- /wp:quote -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph -->
<p>Brightloop took over a legacy WordPress site nobody wanted to touch and modernized it without breaking anything our team relied on.</p>
<!-- /wp:paragraph -->
<cite>Marcus Webb — Operations Lead, Cobalt Logistics</cite>
</blockquote>
<!-- /wp:quote -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:quote {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}}},"backgroundColor":"surface"} -->
<blockquote class="wp-block-quote has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:paragraph -->
<p>Our new booking platform handles ten times the traffic of the old one without blinking. That is the kind of work that actually matters.</p>
<!-- /wp:paragraph -->
<cite>Elena Cho — CTO, Meridian</cite>
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
<!-- wp:pattern {"slug":"godevs-portfolio/footer-cta"} /-->
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
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Let\'s talk about your project</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">We typically reply within one business day. For new project inquiries, tell us a little about your timeline and technical requirements up front — it helps us give you a useful answer faster.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Email</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="mailto:hello@brightloopstudio.example">hello@brightloopstudio.example</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Phone</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="tel:+15555550172">+1 (555) 555-0172</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Studio</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>88 Foundry Lane, Suite 210<br/>Denver, CO 80202</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<p class="has-text-muted-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Trusted by teams at</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|l"}}},"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Solstice Outfitters logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Meridian logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Cobalt Logistics logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Fernbrook Realty logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Alderbrook Financial logo"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
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
<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Process","url":"/process/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Portfolio","url":"/portfolio/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Pricing","url":"/pricing/","kind":"custom"} /-->
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
