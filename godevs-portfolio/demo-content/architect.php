<?php
/**
 * architect demo content — generated from demo-content/godevs-portfolio-demo-architect.xml
 * by scratchpad/wxr-to-php.php (a one-time authoring tool, not shipped).
 * Do not hand-edit; regenerate from the WXR source if the demo content changes.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create the "architect" niche's demo pages, navigation, and Reading Settings.
 *
 * @return int|WP_Error Home page ID on success.
 */
function godevs_portfolio_import_demo_architect() {
	$pages = array();

	$pages[] = array(
		'slug'        => 'home',
		'title'       => 'Home',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_godevs_hero_heading' => 'Buildings designed around how people actually use them',
			'_godevs_hero_subtext' => 'Thornfield Architecture designs residential and commercial buildings that balance ambition with buildability — from first sketch through construction.',
			'_godevs_hero_cta_primary_label' => 'Start a Project',
			'_godevs_hero_cta_primary_url' => '/contact/',
			'_godevs_hero_cta_secondary_label' => 'View Projects',
			'_godevs_hero_cta_secondary_url' => '/projects/',
			'_godevs_hero_image_alt' => 'Exterior photograph of a recent Thornfield Architecture project',
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
<h3 class="wp-block-heading has-large-font-size">Residential Architecture</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Custom homes and additions designed around your site, budget, and how your family actually lives.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Residential Architecture">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Commercial Architecture</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Office, retail, and mixed-use buildings designed to perform for their occupants and their owners.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Commercial Architecture">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Sustainable Design</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Passive design strategies and material choices that cut long-term operating costs, not just a certification plaque.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Sustainable Design">Learn more</a></p>
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
<!-- wp:pattern {"slug":"godevs-portfolio/portfolio-grid-project"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">40+</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Projects completed</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">1.2M sq ft</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Designed and built</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">15</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Years in practice</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-primary-color has-text-color has-xx-large-font-size">3</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color has-small-font-size">Regional design awards</p>
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
		'slug'        => 'about',
		'title'       => 'About',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Built on fifteen years of getting the details right</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">Thornfield Architecture was founded in 2010 by a small group of architects who wanted to work on projects from concept through construction, not hand a design off and walk away.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>We\'re a small firm by choice — small enough that a principal is on every project, large enough to take on serious commercial work.</p>
<!-- /wp:paragraph -->
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
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Halden Voss, Principal Architect" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Halden Voss</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Principal Architect</p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Ines Castellanos, Design Director" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Ines Castellanos</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Design Director</p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Robert Achebe, Project Architect" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Robert Achebe</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Project Architect</p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"text","size":"has-small-icon-size"} -->
<ul class="wp-block-social-links has-icon-color has-small-icon-size"></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"0.25rem"}}} -->
<figure class="wp-block-image size-medium has-custom-border"><img src="GODEVS_URI/assets/images/placeholder-portrait.png" alt="Portrait of Wren Sato, Sustainability Lead" style="border-radius:0.25rem"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Wren Sato</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-small-font-size">Sustainability Lead</p>
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

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'projects',
		'title'       => 'Projects',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/portfolio-grid-project"} /-->
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
<h3 class="wp-block-heading has-large-font-size">Residential Architecture</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Custom homes and additions designed around your site, budget, and how your family actually lives.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Residential Architecture">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Commercial Architecture</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Office, retail, and mixed-use buildings designed to perform for their occupants and their owners.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Commercial Architecture">Learn more</a></p>
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
<h3 class="wp-block-heading has-large-font-size">Sustainable Design</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color">Passive design strategies and material choices that cut long-term operating costs, not just a certification plaque.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/services/" aria-label="Learn more about Sustainable Design">Learn more</a></p>
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
		'slug'        => 'approach',
		'title'       => 'Approach',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Our approach</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">Good architecture solves real constraints — site, budget, code — without losing the ambition that made you want to build in the first place. Here\'s how we think about that balance.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large","style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">How we think about that balance</h2>
<!-- /wp:heading -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"style":{"typography":{"textAlign":"center"}}} -->
<div class="wp-block-column" style="text-align:center">
<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Design meets buildability</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color">We design with construction realities in mind from day one, not as an afterthought.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"style":{"typography":{"textAlign":"center"}}} -->
<div class="wp-block-column" style="text-align:center">
<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">Honest budgets</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color">We tell you what things actually cost before you fall in love with a design you can\'t build.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"style":{"typography":{"textAlign":"center"}}} -->
<div class="wp-block-column" style="text-align:center">
<!-- wp:heading {"level":3,"fontSize":"medium","style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size">On-site through completion</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"text-muted","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color">We stay involved through construction, not just through permitting.</p>
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
<p class="has-text-muted-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Awards &amp; Recognition</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|l"}}},"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="AIA Merit Award badge"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Regional Design Excellence Award badge"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Sustainable Building Council Recognition badge"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium"><img src="GODEVS_URI/assets/images/placeholder-logo.png" alt="Featured in Modern Architecture Quarterly badge"/></figure>
<!-- /wp:image -->
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
		'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Let\'s talk about your project</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color has-large-font-size">We typically reply within one business day. For new project inquiries, tell us a little about your site, timeline, and budget up front — it helps us give you a useful answer faster.</p>
<!-- /wp:paragraph -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Email</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="mailto:hello@thornfieldarchitecture.example">hello@thornfieldarchitecture.example</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Phone</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><a href="tel:+15555550187">+1 (555) 555-0187</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em">Studio</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>45 Kiln Street, Suite 300<br/>Chicago, IL 60607</p>
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
<!-- wp:navigation-link {"label":"Projects","url":"/projects/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Approach","url":"/approach/","kind":"custom"} /-->
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
