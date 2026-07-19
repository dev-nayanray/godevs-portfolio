=== GoDevs Portfolio ===

Contributors: REPLACE_WITH_YOUR_WORDPRESS_ORG_USERNAME
Requires at least: 6.7
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 0.4.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: full-site-editing, block-patterns, style-variations, portfolio, blog, one-column, two-columns, grid-layout, custom-colors, custom-menu, editor-style, featured-images, rtl-language-support, translation-ready, accessibility-ready

A full site editing theme for agency, freelancer, and consultancy portfolios.

== Description ==

GoDevs Portfolio is a full site editing theme for agencies, freelancers,
consultants, and creative studios who need a credible portfolio site
without a page builder plugin. Every layout is a block pattern, every
design decision a theme.json token — no Customizer panel, nothing to
configure outside the Site Editor.

Three style variations (Midnight, Sandstone, Emerald) each pair a
distinct color palette with its own type and spacing scale, so switching
variations changes the site's whole mood, not just its accent color.
Patterns favor asymmetric, editorial layouts over the centered-box
template most portfolio themes default to, and demo content follows the
real sales funnel of a services business: attract, prove credibility
with a portfolio, build trust with team and testimonials, convert with
pricing and contact.

The theme targets zero Theme Review required-level flags and the
accessibility-ready tag: verified contrast in every style variation,
visible focus states, and no ambiguous interactive elements.

== Installation ==

1. In your WordPress admin, go to Appearance -> Themes -> Add New, search
   for "GoDevs Portfolio," and click Install, then Activate. (Or upload
   the theme .zip via Appearance -> Themes -> Add New -> Upload Theme.)
2. Go to Appearance -> Editor to explore the templates, template parts,
   and patterns, and to switch between the Midnight, Sandstone, and
   Emerald style variations under Design -> Styles.
3. Optional: import the bundled demo content so new pages aren't blank —
   see "How do I get the demo content?" below.

== Frequently Asked Questions ==

= Does this theme require any plugins? =

No. GoDevs Portfolio is fully functional using only WordPress core. It
does not bundle or require any plugin to render correctly.

= How do I get the demo content? =

Demo content (14 pages, 5 blog posts, and a navigation menu) ships as a
WXR file at `demo-content/godevs-portfolio-demo-content.xml` in the
theme's development repository. See `demo-content/README.md` for the
full import steps, including two one-time manual steps the standard
WordPress importer doesn't automate (setting the front page / posts page
under Settings -> Reading, and reselecting the imported navigation menu).

= Does this theme have a working contact form? =

No, by design. The Contact page includes a static contact-details block
(email, phone, studio address) but no submission handler — a real form
needs a dedicated forms plugin (e.g. Contact Form 7, WPForms), which
this theme intentionally does not bundle, per the "no required plugin
dependency" goal above.

= How do I switch between style variations? =

In the Site Editor, go to Design -> Styles and choose Midnight,
Sandstone, or Emerald (or the default "Studio" palette). Each variation
only changes theme.json tokens (color, mostly) — no layout or content
changes, so your own content is unaffected by switching.

= Is this theme accessibility-ready? =

It targets the accessibility-ready tag and has been checked against the
Theme Review accessibility requirements (contrast, focus states,
skip-link, heading hierarchy, meaningful link text, alt text) during
development. Formal accessibility-ready review happens as part of
WordPress.org Theme Review itself.

== Screenshots ==

1. screenshot.png — the front page rendered with the theme's demo
   content, in the default "Studio" style variation.

== Changelog ==

= 0.4.0 - 2026-07-19 =
* Shared pattern library expansion (multi-niche groundwork): 8 new
  core patterns (FAQ list, process steps, testimonial spotlight, team
  member profile, video hero, location & hours, value props, company
  timeline) plus 6 niche-specific portfolio/gallery/before-after
  patterns. Converted the front page and 5 dedicated page templates
  from hardcoded pattern stacks to standard post-content composition
  so multiple business niches can share them. No new demo content in
  this release — patterns and templates only.

= 0.3.0 - 2026-07-19 =
* Packaging pass: complete readme.txt, real screenshot and
  .wordpress-org/ directory assets, version/compatibility headers
  reconciled against the actual WordPress and PHP versions used in
  testing, a final translatable-string sweep across every .html
  template and template part (fixed one real gap: the header's
  "Get in Touch" button text was hard-coded, now a translatable
  pattern), and a full clean-install verification from the packaged
  .zip rather than the development directory.

= 0.2.0 - 2026-07-19 =
* Accessibility and QA pass: WordPress Theme Check plugin (zero
  required-level flags), phpcs with the WPThemeReview ruleset (zero
  errors), full i18n audit and .pot generation, and two real
  accessibility bugs found and fixed (a severe color-contrast failure
  on the transparent header variant, and generic repeated link text
  in the services pattern). Full history in the theme's development
  documentation.

= 0.1.0 - 2026-07-19 =
* Initial public-ready release: full theme.json token set, 3 style
  variations (Midnight, Sandstone, Emerald), all templates and template
  parts, 16 block patterns, and demo content covering the full
  portfolio sales funnel.

== Resources ==

This theme bundles no third-party assets:

* **Images** — all placeholder graphics in `assets/images/` (wide,
  portrait, and logo placeholders) are theme-original, generated
  specifically for this theme during development (not photographs,
  not sourced from any third-party library). Site owners are expected
  to replace them with their own photography.
* **Fonts** — system font stacks only (no bundled webfonts), so there
  is nothing to license or attribute.
* **Code** — the theme uses only WordPress core APIs (block patterns,
  Block Bindings API, theme.json, block templates). It does not bundle
  any third-party PHP or JavaScript library.

GoDevs Portfolio WordPress Theme, Copyright 2026 goDevs.
GoDevs Portfolio is distributed under the terms of the GNU General Public
License v2 or later. This theme, like WordPress, is licensed under the
GPL. Use it to make something cool, have fun, and share what you've
learned with others.
