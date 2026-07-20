<?php
/**
 * medical demo content — generated from demo-content/godevs-portfolio-demo-medical.xml
 * by scratchpad/wxr-to-php.php (a one-time authoring tool, not shipped).
 * Do not hand-edit; regenerate from the WXR source if the demo content changes.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create the "medical" niche's demo pages, navigation, and Reading Settings.
 *
 * @return int|WP_Error Home page ID on success.
 */
function godevs_portfolio_import_demo_medical() {
	$pages = array();

	$pages[] = array(
		'slug'        => 'home',
		'title'       => 'Home',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_godevs_hero_heading' => 'Comprehensive care for your whole family',
			'_godevs_hero_subtext' => 'Willowbrook Family Medicine provides same-day appointments, preventive care, and ongoing health management for patients of all ages.',
			'_godevs_hero_cta_primary_label' => 'New Patients',
			'_godevs_hero_cta_primary_url' => '/new-patients/',
			'_godevs_hero_cta_secondary_label' => 'Meet Our Team',
			'_godevs_hero_cta_secondary_url' => '/team/',
			'_godevs_hero_image_alt' => 'Photograph of the Willowbrook Family Medicine waiting room',
		),
		'content'     => '<!-- Demo content only — replace with real, reviewed practice information before publishing. -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Conditions &amp; services</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">General Checkups</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Routine wellness visits to help you stay ahead of your health, not just react to it.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about General Checkups">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Preventive Care</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Screenings and vaccinations scheduled around guidelines appropriate for your age and history.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Preventive Care">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Chronic Condition Management</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Ongoing support for managing long-term health conditions alongside your care team.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Chronic Condition Management">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Same-Day Appointments</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Availability held each day for urgent, non-emergency concerns that can\'t wait for a scheduled visit.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Same-Day Appointments">Learn more</a></p>
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
<h2 class="wp-block-heading has-xx-large-font-size">Meet our providers</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Dr. Renata Salgado, Family Medicine" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Dr. Renata Salgado</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Family Medicine</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Dr. Julian Ferro, Internal Medicine" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Dr. Julian Ferro</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Internal Medicine</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Dr. Naomi Vance, Pediatrics" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Dr. Naomi Vance</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Pediatrics</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Alex Kim, PA-C, Physician Assistant" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Alex Kim, PA-C</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Physician Assistant</p>
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
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">5</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Providers on staff</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">20+</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Years serving the community</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">Same-day</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Appointments available</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">4.8/5</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Average patient rating</p>
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
<h2 class="wp-block-heading has-text-align-center has-primary-contrast-color has-text-color has-xx-large-font-size">Ready to become a patient?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-contrast-color has-text-color has-large-font-size">Call our office or review our new patient information to get started — we\'re currently accepting new patients.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/new-patients/">New Patients</a></div>
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
		'content'     => '<!-- Demo content only — replace with real, reviewed practice information before publishing. -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Family medicine, close to home</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">Willowbrook Family Medicine has served the local community for over two decades, offering primary care for patients at every stage of life.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Our team of providers works together to give every patient consistent, unhurried care — whether that\'s a same-day visit for something urgent or an annual checkup. We believe good primary care is about building a relationship over time, not just treating whatever brought you in today.</p>
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
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">5</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Providers on staff</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">20+</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Years serving the community</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">Same-day</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Appointments available</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">4.8/5</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Average patient rating</p>
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
	$pages[] = array(
		'slug'        => 'services',
		'title'       => 'Services',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-services.html',
		),
		'content'     => '<!-- Demo content only — replace with real, reviewed practice information before publishing. -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Conditions &amp; services</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"blockGap":"var:preset|spacing|2xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">General Checkups</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Routine wellness visits to help you stay ahead of your health, not just react to it.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about General Checkups">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Preventive Care</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Screenings and vaccinations scheduled around guidelines appropriate for your age and history.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Preventive Care">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Chronic Condition Management</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Ongoing support for managing long-term health conditions alongside your care team.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Chronic Condition Management">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Same-Day Appointments</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Availability held each day for urgent, non-emergency concerns that can\'t wait for a scheduled visit.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Same-Day Appointments">Learn more</a></p>
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
		'slug'        => 'team',
		'title'       => 'Team',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-team.html',
		),
		'content'     => '<!-- Demo content only — replace with real, reviewed practice information before publishing. -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Meet our providers</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Dr. Renata Salgado, Family Medicine" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Dr. Renata Salgado</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Family Medicine</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Dr. Julian Ferro, Internal Medicine" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Dr. Julian Ferro</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Internal Medicine</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Dr. Naomi Vance, Pediatrics" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Dr. Naomi Vance</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Pediatrics</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Alex Kim, PA-C, Physician Assistant" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Alex Kim, PA-C</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Physician Assistant</p>
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
<h2 class="wp-block-heading has-text-align-center has-primary-contrast-color has-text-color has-xx-large-font-size">Ready to become a patient?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-contrast-color has-text-color has-large-font-size">Call our office or review our new patient information to get started — we\'re currently accepting new patients.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-contrast","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-primary-contrast-background-color has-text-color has-background wp-element-button" href="/new-patients/">New Patients</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'faq',
		'title'       => 'FAQ',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- Demo content only — replace with real, reviewed practice information before publishing. -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Frequently asked questions</h2>
<!-- /wp:heading -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:details -->
<details class="wp-block-details"><summary>Do you accept my insurance?</summary>
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">We accept most major insurance plans. Call our office with your insurance information and we\'ll confirm your coverage before your visit.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details -->
<details class="wp-block-details"><summary>What should I bring to my first appointment?</summary>
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">A photo ID, your insurance card, and a list of any current medications. We\'ll let you know if anything else is needed when you schedule.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details -->
<details class="wp-block-details"><summary>How do I request a prescription refill?</summary>
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Call our office directly — refill requests are typically processed within one to two business days.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details -->
<details class="wp-block-details"><summary>Do you see patients of all ages?</summary>
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Yes, our providers see patients across all age groups. Let us know when scheduling if you have a specific provider preference.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/footer-cta"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'new-patients',
		'title'       => 'New Patients',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- Demo content only — replace with real, reviewed practice information before publishing. -->

<!-- wp:group {"align":"wide","backgroundColor":"primary","textColor":"primary-contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-contrast-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--l)">
<!-- wp:heading {"level":2,"fontSize":"x-large","textColor":"primary-contrast"} -->
<h2 class="wp-block-heading has-primary-contrast-color has-text-color has-x-large-font-size">New patients welcome</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"medium","textColor":"primary-contrast"} -->
<p class="has-primary-contrast-color has-text-color has-medium-font-size">Call our office to schedule your first visit — our team will help you find a time that works and let you know what to bring.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"large","textColor":"primary-contrast","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-primary-contrast-color has-text-color has-large-font-size" style="font-weight:700"><a style="color:inherit" href="tel:+15555550142">+1 (555) 555-0142</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"primary-contrast"} -->
<p class="has-primary-contrast-color has-text-color has-small-font-size">Office hours: Monday–Friday, 8:00 AM–5:00 PM</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Insurance we accept</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">We accept most major insurance plans, including (replace with your actual accepted plans before publishing):</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>Blue Cross Blue Shield</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Aetna</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Cigna</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>UnitedHealthcare</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Medicare</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Don\'t see your plan listed? Call our office — we may still be able to see you as a self-pay or out-of-network patient.</p>
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
		'slug'        => 'contact',
		'title'       => 'Contact',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-contact.html',
		),
		'content'     => '<!-- Demo content only — replace with real, reviewed practice information before publishing. -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Contact our office</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">For appointment scheduling, prescription refills, or general questions, reach out using the information below.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Email</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="mailto:hello@willowbrookfamilymed.example">hello@willowbrookfamilymed.example</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Phone</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="tel:+15555550142">+1 (555) 555-0142</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Office</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>4400 Willowbrook Pkwy, Suite 100<br/>Columbus, OH 43215</p>
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
<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Team","url":"/team/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"FAQ","url":"/faq/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"New Patients","url":"/new-patients/","kind":"custom"} /-->
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
