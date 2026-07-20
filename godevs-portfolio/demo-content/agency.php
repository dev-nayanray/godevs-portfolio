<?php
/**
 * agency demo content — generated from demo-content/godevs-portfolio-demo-agency.xml
 * by scratchpad/wxr-to-php.php (a one-time authoring tool, not shipped).
 * Do not hand-edit; regenerate from the WXR source if the demo content changes.
 *
 * @package GoDevs_Portfolio
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create the "agency" niche's demo pages, navigation, and Reading Settings.
 *
 * @return int|WP_Error Home page ID on success.
 */
function godevs_portfolio_import_demo_agency() {
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
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/logo-cloud"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/services-grid"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/portfolio-grid"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/stats-counter"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/testimonials-carousel-static"} /-->
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
		'content'     => '
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"var:preset|spacing|s"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size">We started as three freelancers sharing a WeWork desk</h2><!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">GoDevs Portfolio Studio was founded in 2014 by three freelance designers who kept referring overflow work to each other. Three years later we had a shared studio, a shared client roster, and a shared conviction: process beats talent when it comes to consistently shipping great work.</p><!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Today we\'re a twelve-person team split across brand strategy, product design, and engineering — small enough that founders still work every project, large enough to take on the kind of engagements that used to be out of reach.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:pattern {"slug":"godevs-portfolio/stats-counter"} /--></div><!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:pattern {"slug":"godevs-portfolio/team-grid"} /--></div><!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /--></div><!-- /wp:group -->
',
	);
	$pages[] = array(
		'slug'        => 'services',
		'title'       => 'Services',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-services',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/services-grid"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/pricing-table"} /-->
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
			'_wp_page_template' => 'page-portfolio',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-agency"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/portfolio-grid"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/logo-cloud"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'team',
		'title'       => 'Team',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-team',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-freelancer"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/team-grid"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/stats-counter"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /-->
</div>
<!-- /wp:group -->',
	);
	$pages[] = array(
		'slug'        => 'pricing',
		'title'       => 'Pricing',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-pricing',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/pricing-table"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/testimonials-carousel-static"} /-->
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
			'_wp_page_template' => 'page-contact',
		),
		'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/hero-freelancer"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/contact-info"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"godevs-portfolio/logo-cloud"} /-->
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
		'content'     => '
<!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:pattern {"slug":"godevs-portfolio/testimonials-carousel-static"} /--></div><!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:pattern {"slug":"godevs-portfolio/logo-cloud"} /--></div><!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:pattern {"slug":"godevs-portfolio/stats-counter"} /--></div><!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"}} --><div class="wp-block-group"><!-- wp:pattern {"slug":"godevs-portfolio/cta-banner"} /--></div><!-- /wp:group -->
',
	);
	$pages[] = array(
		'slug'        => 'blog',
		'title'       => 'Blog',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '',
	);
	$pages[] = array(
		'slug'        => 'case-studies',
		'title'       => 'Case Studies',
		'parent_slug' => '',
		'menu_order'  => 0,
		'meta'        => array(
		),
		'content'     => '
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"fontSize":"xx-large"} --><h2 class="wp-block-heading has-xx-large-font-size">Case Studies</h2><!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size">Selected projects, in more depth than the portfolio grid allows.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
',
	);
	$pages[] = array(
		'slug'        => 'northwind-rebrand',
		'title'       => 'Northwind Rebrand',
		'parent_slug' => 'case-studies',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-case-study',
		),
		'content'     => '
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"var:preset|spacing|2xs"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Brand Identity · Web Design</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"fontSize":"huge"} --><h2 class="wp-block-heading has-huge-font-size">Northwind Rebrand</h2><!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image alignwide size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Northwind Rebrand hero image"/></figure><!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns">
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Challenge</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Northwind Traders had outgrown its decade-old identity. The brand no longer matched the quality of the work, and the website was actively losing them enterprise leads to competitors with a sharper first impression.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Approach</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>We ran a two-week discovery sprint with their sales and leadership teams, then rebuilt the identity system, messaging, and website in parallel so nothing shipped out of sync with the rest.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Result</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>A brand and site that finally read as enterprise-grade. Sales now leads with the website in pitch meetings instead of working around it.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">+180%</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Organic traffic</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">3.2×</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Conversion rate</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">6 weeks</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Concept to launch</p><!-- /wp:paragraph --></div><!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:gallery {"columns":3,"align":"wide","linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped alignwide"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Northwind Traders new logo and stationery mockup"/></figure><!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Northwind Traders homepage shown on a laptop screen"/></figure><!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Northwind Traders product page shown on a mobile phone"/></figure><!-- /wp:image --></figure>
<!-- /wp:gallery -->
',
	);
	$pages[] = array(
		'slug'        => 'globex-mobile-app',
		'title'       => 'Globex Mobile App',
		'parent_slug' => 'case-studies',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-case-study',
		),
		'content'     => '
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"var:preset|spacing|2xs"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Product Design · Mobile</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"fontSize":"huge"} --><h2 class="wp-block-heading has-huge-font-size">Globex Mobile App</h2><!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image alignwide size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Globex Mobile App hero image"/></figure><!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns">
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Challenge</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Globex&#039;s field technicians were still filling out paper work orders because the existing mobile app took longer to use than the process it replaced. Adoption across their 40-person field team had stalled below 20%.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Approach</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>We shadowed six technicians on real job sites before sketching a single screen, then rebuilt the core work-order flow around three taps instead of twelve. Engineering shipped a working prototype to the field team two weeks into the project, not two months.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Result</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Field adoption passed 90% within a month of rollout, and Globex&#039;s dispatch team reports work orders now close same-day instead of next-day.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">90%</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Field adoption</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">4.5×</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Faster work-order completion</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">4 weeks</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Prototype to field test</p><!-- /wp:paragraph --></div><!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:gallery {"columns":3,"align":"wide","linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped alignwide"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Globex mobile app work-order screen mockup"/></figure><!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Field technician using the Globex app on a tablet"/></figure><!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Globex app dispatch dashboard shown on a laptop"/></figure><!-- /wp:image --></figure>
<!-- /wp:gallery -->
',
	);
	$pages[] = array(
		'slug'        => 'fabrikam-commerce-platform',
		'title'       => 'Fabrikam Commerce Platform',
		'parent_slug' => 'case-studies',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-case-study',
		),
		'content'     => '
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"var:preset|spacing|2xs"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Web Development · E-commerce</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"fontSize":"huge"} --><h2 class="wp-block-heading has-huge-font-size">Fabrikam Commerce Platform</h2><!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image alignwide size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Fabrikam Commerce Platform hero image"/></figure><!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns">
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Challenge</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Fabrikam&#039;s storefront was built on a discontinued e-commerce platform that no longer received security updates, and checkout abandonment sat above 70% on mobile.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Approach</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>We migrated the catalog to a modern, WordPress-based commerce stack over a six-week phased rollout, rebuilding checkout as a single-page flow and cutting the number of required fields from nineteen to seven.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Result</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Mobile checkout abandonment dropped to 41%, and Fabrikam&#039;s team can now ship new product listings themselves instead of filing a developer ticket.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">41%</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Mobile abandonment (down from 70%)</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">2.1×</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Mobile conversion rate</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">6 weeks</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Migration timeline</p><!-- /wp:paragraph --></div><!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:gallery {"columns":3,"align":"wide","linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped alignwide"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Fabrikam storefront product listing page"/></figure><!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Fabrikam single-page checkout flow on mobile"/></figure><!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Fabrikam admin product editor shown on a laptop"/></figure><!-- /wp:image --></figure>
<!-- /wp:gallery -->
',
	);
	$pages[] = array(
		'slug'        => 'contoso-marketing-site',
		'title'       => 'Contoso Marketing Site',
		'parent_slug' => 'case-studies',
		'menu_order'  => 0,
		'meta'        => array(
			'_wp_page_template' => 'page-case-study',
		),
		'content'     => '
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"var:preset|spacing|2xs"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Web Design · Content Strategy</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"fontSize":"huge"} --><h2 class="wp-block-heading has-huge-font-size">Contoso Marketing Site</h2><!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image alignwide size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Contoso Marketing Site hero image"/></figure><!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|l","left":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns">
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Challenge</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Contoso&#039;s marketing site hadn&#039;t been meaningfully updated in five years and no longer reflected the three new product lines driving most of the company&#039;s revenue.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Approach</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>We restructured the site around buyer journey rather than org chart, consolidating ten scattered product pages into four journey-based landing pages, each built from the same pattern library so Contoso&#039;s marketing team could launch the next one without design support.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="wp-block-heading has-large-font-size">The Result</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Organic demo requests are up, and Contoso&#039;s marketing team has independently shipped two new landing pages since launch using the pattern library we handed off.</p><!-- /wp:paragraph -->
</div><!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|m","left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">+65%</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Demo requests</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">10→4</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Product pages consolidated</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xx-large","textColor":"primary"} --><p class="has-primary-color has-text-color has-xx-large-font-size">2</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"small","textColor":"text-muted"} --><p class="has-text-muted-color has-text-color has-small-font-size">Pages shipped independently since launch</p><!-- /wp:paragraph --></div><!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:gallery {"columns":3,"align":"wide","linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped alignwide"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Contoso marketing site new landing page design"/></figure><!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Contoso product journey page shown on a laptop"/></figure><!-- /wp:image --><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="GODEVS_URI/assets/images/placeholder-wide.png" alt="Contoso pattern library documentation screenshot"/></figure><!-- /wp:image --></figure>
<!-- /wp:gallery -->
',
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

	$posts = array();
	$posts[] = array(
		'slug'       => '5-signs-your-website-redesign-cant-wait',
		'title'      => '5 Signs Your Website Redesign Can\'t Wait',
		'categories' => array('Industry Insights'),
		'content'    => '
<!-- wp:paragraph --><p>A website redesign is expensive enough that "maybe next year" is always the comfortable answer. Here are five signs that answer is costing you more than the redesign would.</p><!-- /wp:paragraph -->
<!-- wp:list --><ul class="wp-block-list">
<li><strong>Your bounce rate on mobile is meaningfully worse than desktop.</strong> If mobile visitors leave within seconds while desktop visitors stick around, the site is actively working against the majority of your traffic.</li>
<li><strong>You\'re embarrassed to send the homepage link in a sales email.</strong> If your own team routes prospects around the site instead of through it, your visitors have noticed too.</li>
<li><strong>Every content change requires a developer.</strong> A site your marketing team can\'t update independently slows down every campaign you run.</li>
<li><strong>Your competitors\' sites load twice as fast.</strong> Page speed is now a ranking factor and a trust signal — visitors read a slow site as a sign of a slow company.</li>
<li><strong>The design still reflects who you were three product launches ago.</strong> If your positioning has moved on and the site hasn\'t, you\'re marketing yesterday\'s company.</li>
</ul><!-- /wp:list -->
<!-- wp:paragraph --><p>None of these alone is an emergency. Two or three together usually means the redesign has already paid for itself in lost opportunities — you just haven\'t measured it yet.</p><!-- /wp:paragraph -->
',
	);
	$posts[] = array(
		'slug'       => 'how-we-run-a-discovery-sprint',
		'title'      => 'How We Run a Discovery Sprint (And Why It Matters)',
		'categories' => array('Process'),
		'content'    => '
<!-- wp:paragraph --><p>Every engagement we run starts with a discovery sprint, and clients are sometimes surprised we spend two full weeks on it before a single mockup exists. Here\'s why we protect that time.</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Day One: Listen, Don\'t Pitch</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>We spend the first days in stakeholder interviews, not strategy decks. The goal is to hear the same problem described three different ways by sales, support, and leadership — the gaps between those versions are usually where the real brief lives.</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Day Two: Stress-Test the Brief</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>Whatever brief we walked in with gets rewritten at least once during discovery. We\'d rather have an uncomfortable conversation about scope in week one than discover a wrong assumption in week five, after design and engineering have both built on top of it.</p><!-- /wp:paragraph -->
<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">What You Walk Away With</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>A discovery sprint ends with a written brief, a prioritized feature list, and a timeline everyone has actually agreed to — not just the version the loudest stakeholder wanted. It\'s the least glamorous two weeks of any project, and consistently the highest-leverage.</p><!-- /wp:paragraph -->
',
	);
	$posts[] = array(
		'slug'       => 'brand-consistency-isnt-optional-anymore',
		'title'      => 'Brand Consistency Isn\'t Optional Anymore',
		'categories' => array('Industry Insights'),
		'content'    => '
<!-- wp:paragraph --><p>We used to treat brand consistency as a nice-to-have — the kind of polish you add once the fundamentals are solid. We don\'t anymore.</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>Buyers now encounter a company across six or seven touchpoints before they ever talk to a salesperson: the website, a LinkedIn post, a G2 review page, a case study PDF, an email signature. Every inconsistency between those touchpoints is a small tax on trust, paid once per touchpoint.</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>The fix isn\'t a 200-page brand guideline nobody reads. It\'s a small, enforced token system — the same color palette, type scale, and spacing rules expressed once and referenced everywhere, so consistency is the default instead of a discipline someone has to maintain by hand.</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>That\'s the same principle behind how this theme\'s own design system works: every value traces back to one definition, so nothing drifts out of sync page by page.</p><!-- /wp:paragraph -->
',
	);
	$posts[] = array(
		'slug'       => 'what-we-look-for-in-a-portfolio-site',
		'title'      => 'What We Look for When Reviewing a Portfolio Site',
		'categories' => array('Industry Insights'),
		'content'    => '
<!-- wp:paragraph --><p>We review a lot of portfolio sites — both when hiring and when sizing up how a prospective client thinks about design. A few things separate the ones that get a second look.</p><!-- /wp:paragraph -->
<!-- wp:list --><ul class="wp-block-list">
<li><strong>Process, not just polish.</strong> Anyone can show a beautiful final screen. Show the messy middle — the sketches, the rejected direction, the reason you changed course.</li>
<li><strong>Real constraints, named honestly.</strong> "The client\'s brand guidelines were five years old and contradicted each other" is a more useful case study than a project with no visible friction.</li>
<li><strong>Outcomes, even approximate ones.</strong> A number — even a rough, directional one — says more than another paragraph of adjectives.</li>
</ul><!-- /wp:list -->
<!-- wp:paragraph --><p>The best portfolios read like case studies, not galleries. That\'s the whole idea behind this theme\'s case study pattern — a place to answer "so what happened" instead of just "here\'s what it looked like."</p><!-- /wp:paragraph -->
',
	);
	$posts[] = array(
		'slug'       => 'inside-our-design-to-development-handoff-process',
		'title'      => 'Inside Our Design-to-Development Handoff Process',
		'categories' => array('Process'),
		'content'    => '
<!-- wp:paragraph --><p>A design-to-development handoff is where most web projects quietly lose their best ideas — not because anyone drops the ball, but because the handoff itself is treated as a file transfer instead of a conversation. Here\'s the process we\'ve settled on after several handoffs that went badly.</p><!-- /wp:paragraph -->

<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Why Handoffs Usually Break</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>The classic failure mode: a designer finishes a polished file, exports specs, and moves to the next project. A developer opens the file weeks later with no context for the decisions behind it, and starts filling gaps with guesses. Neither side is wrong — the process just never gave them a reason to talk.</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>The second-most-common failure: the opposite problem, where design and development happen so tightly coupled that nobody ever steps back to check the whole system still makes sense once every screen is built.</p><!-- /wp:paragraph -->

<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Our Four-Step Handoff</h2><!-- /wp:heading -->
<!-- wp:list {"ordered":true} --><ol class="wp-block-list">
<li><strong>Token audit before screens.</strong> Before any screen is built, we confirm every color, spacing value, and type size in the design maps to a named token in the design system — not a one-off value picked for that screen alone.</li>
<li><strong>Component walkthrough, not a spec sheet.</strong> Instead of a static handoff document, the designer walks the development team through each component live, including the states nobody designed (empty, loading, error).</li>
<li><strong>Build in parallel on a shared instance.</strong> Design and development work against the same staging environment from day one, so a spacing inconsistency gets caught the day it\'s built, not in a QA pass six weeks later.</li>
<li><strong>A joint review before anything ships.</strong> Designer and developer review the finished build together against the original intent — not against the static mockup, which by this point has usually evolved.</li>
</ol><!-- /wp:list -->

<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Tools We Use</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>Less important than the process itself, but worth naming: we design directly in the block editor wherever possible, specifically so the handoff gap is smaller — a component built in Figma still has to be rebuilt from scratch, while a block pattern is already real markup.</p><!-- /wp:paragraph -->

<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">What This Means for Clients</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>In practice: fewer surprises at launch, a shorter gap between "design approved" and "feature shipped," and a site that a client\'s own team can maintain afterward without guessing what a designer meant six months ago.</p><!-- /wp:paragraph -->
<!-- wp:paragraph --><p>None of this is exotic. It\'s mostly just refusing to let design and development become two separate projects that happen to ship on the same day.</p><!-- /wp:paragraph -->
',
	);
	foreach ( $posts as $post ) {
		$cat_ids = array();
		foreach ( $post['categories'] as $cat_name ) {
			$term = term_exists( $cat_name, 'category' );
			if ( ! $term ) {
				$term = wp_insert_term( $cat_name, 'category' );
			}
			if ( ! is_wp_error( $term ) && isset( $term['term_id'] ) ) {
				$cat_ids[] = (int) $term['term_id'];
			}
		}
		$post_id = wp_insert_post(
			array(
				'post_title'   => $post['title'],
				'post_name'    => $post['slug'],
				'post_type'    => 'post',
				'post_status'  => 'publish',
				'post_category'=> $cat_ids,
				'post_content' => str_replace( 'GODEVS_URI', GODEVS_PORTFOLIO_URI, $post['content'] ),
			),
			true
		);
		if ( ! is_wp_error( $post_id ) ) {
			$created[ 'post:' . $post['slug'] ] = $post_id;
		}
	}

	$nav_id = wp_insert_post(
		array(
			'post_title'   => 'Primary Navigation',
			'post_type'    => 'wp_navigation',
			'post_status'  => 'publish',
			'post_content' => '
<!-- wp:navigation-link {"label":"Home","url":"/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"About","url":"/about/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Services","url":"/services/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Portfolio","url":"/portfolio/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Team","url":"/team/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Pricing","url":"/pricing/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Blog","url":"/blog/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Contact","url":"/contact/","kind":"custom"} /-->
',
		),
		true
	);

	if ( isset( $created['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $created['home'] );
		if ( isset( $created['blog'] ) ) {
			update_option( 'page_for_posts', $created['blog'] );
		}
	}

	return isset( $created['home'] ) ? $created['home'] : 0;
}
