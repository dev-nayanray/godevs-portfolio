=== GoDevs Portfolio ===

Contributors: REPLACE_WITH_YOUR_WORDPRESS_ORG_USERNAME
Requires at least: 6.7
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 0.7.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: full-site-editing, block-patterns, style-variations, portfolio, blog, one-column, two-columns, grid-layout, custom-colors, custom-menu, editor-style, featured-images, rtl-language-support, translation-ready, accessibility-ready

A full site editing theme for portfolio-based service businesses — agencies, freelancers, and more.

== Description ==

GoDevs Portfolio is a full site editing theme for portfolio-based service
businesses — agencies, freelancers, consultants, creative studios,
photographers, architects, interior designers, medical practices, and law
firms — who need a credible site without a page builder plugin. One
shared block-pattern library and template set powers 8 independently-
importable demo packages, so a site owner imports exactly the one demo
that matches their business rather than pruning a generic kitchen sink.
Every layout is a block pattern, every design decision a theme.json
token — no Customizer panel, nothing to configure outside the Site
Editor.

Three style variations (Midnight, Sandstone, Emerald) each pair a
distinct color palette with its own type and spacing scale, so switching
variations changes the site's whole mood, not just its accent color.
Self-hosted DM Serif Display (headings) and DM Sans (body) fonts give the
theme an editorial, art-directed identity without any external CDN
dependency.
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

The easiest way: go to Appearance -> GoDevs Portfolio in your WordPress
admin and click "Import" on the demo that matches the kind of site
you're building (Creative Agency, Freelance Designer/Developer, Web
Development Studio, Photographer, Architect, Interior Designer, Medical
Practice, or Law Firm). Import exactly one — importing a second demo
onto the same site is not supported (you'll get an explicit warning if
you try). After importing, one manual step still needs doing yourself:
set the new Home page under Settings -> Reading, since WordPress
doesn't automate that for any import method.

If you're working from the theme's development repository instead, the
same 8 demos are also available as separate WXR files under
`demo-content/` for the standard Tools -> Import screen — see
`demo-content/README.md` there for full details. The Medical Practice
and Law Firm demos are illustrative placeholder content only — replace
all of it with real, reviewed information before publishing either as
a real practice or firm's site.

= Does the "GoDevs Portfolio" admin page change how my site looks? =

No. That page (Appearance -> GoDevs Portfolio) is informational and
one-click-demo-import only — it has no color, typography, layout,
header, or footer controls of any kind, and nothing on it is a design
setting. All design and style changes happen in the Site Editor, the
same as every other WordPress block theme; this theme works completely
normally whether or not you ever visit that page.

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

= 0.7.0 - 2026-08-29 =
* New: self-hosted webfont pairing — DM Serif Display (headings) and
  DM Sans (body), both SIL OFL 1.1 licensed. Replaces the prior system
  font stacks with a distinctive editorial type identity that fits the
  theme's asymmetric, art-directed positioning. No external CDN calls;
  fonts are bundled in assets/fonts/ with full license attribution.
* New: two custom block styles registered via register_block_style():
  "Ghost" button (core/button) for secondary CTAs on gradient or
  primary-colored backgrounds, and "Elevated" group (core/group) for a
  subtle surface-colored raised section. Both use theme.json tokens
  exclusively. Closes the one open RECOMMENDED Theme Check item.
* Update: version bump to 0.7.0.

= 0.6.0 - 2026-07-20 =
* New: a "GoDevs Portfolio" onboarding page under Appearance. It is
  informational and one-click-demo-import only — no color, typography,
  layout, header, or footer controls of any kind; all design and style
  changes still happen exclusively in the Site Editor, exactly as
  before. The page has a short welcome section, a card for each of the
  8 niche demos with a one-click "Import" button, and a Support &
  documentation section. Importing a second demo onto a site that
  already has one shows an explicit warning and requires confirmation
  first — it is never silent, since demos are not designed to coexist
  on the same site (see the FAQ). One-click import uses only WordPress
  core APIs (no bundled or required plugin) and needs no separate
  content download.

= 0.5.1 - 2026-07-20 =
* Bug fix: some niche demo pages could render two H1 headings
  instead of one, specifically on a Home page that used a hero pattern
  with copy hand-written directly into the page (rather than inserted
  as a live, reusable pattern) and that had not yet been set as the
  site's homepage under Settings -> Reading. Affected the Web
  Development Studio, Interior Designer, Architect, Medical Practice,
  and Law Firm demos' Home pages; did not affect Creative Agency,
  Freelance Designer/Developer, or Photographer, whose Home heroes
  were already inserted as live patterns. Root cause: a hand-written
  hero's heading level is fixed at whatever it was when it was
  written, so it couldn't respond to the page not yet being configured
  as the homepage. Fixed by making every niche's Home hero a live
  pattern again, with its per-niche heading, subtext, buttons, and
  image caption now supplied through a new block binding
  (`godevs-portfolio/hero-field`) instead of being hard-coded — the
  pattern now correctly renders as an H1 only when the page is
  actually configured as the site's front page, and as an H2
  everywhere else, exactly as intended. No visible change to the
  Creative Agency demo. Demo content files for the five affected
  niches were regenerated and re-exported.

= 0.5.0 - 2026-07-19 =
* Multi-niche expansion complete: 8 independently-importable demo
  packages (Creative Agency, Freelance Designer/Developer, Web
  Development Studio, Photographer, Architect, Interior Designer,
  Medical Practice, Law Firm) totaling 59 demo pages, all sharing one
  pattern library, one theme.json, and one set of templates. Added a
  Team Member Profile template for individual attorney/doctor-style
  profile pages. 27 of the theme's 30 registered block patterns are
  used across the 8 demos; the remaining 3 are verified, general-
  purpose patterns not tied to a specific demo page (see
  `docs/PATTERN_LIBRARY.md` for the full reconciliation). Full QA pass
  for the larger codebase: Theme Check (zero required-level flags),
  phpcs with WPThemeReview (zero errors), a refreshed .pot (351
  translatable strings), and a repeated accessibility audit (contrast,
  meaningful link text, alt text, keyboard/focus) across every niche.
  The Medical Practice and Law Firm demos use entirely fictional
  placeholder content, written with explicit no-medical-claims and
  no-guaranteed-outcome discipline, and are flagged as such both in
  the demo content itself and in `demo-content/README.md`.

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

This theme bundles the following third-party assets:

* **Fonts** — DM Serif Display (headings) and DM Sans (body), both
  licensed under the SIL Open Font License, Version 1.1. See
  `assets/fonts/LICENSE.md` for full attribution. Self-hosted with
  no external CDN dependency.
* **Images** — all placeholder graphics in `assets/images/` (wide,
  portrait, and logo placeholders) are theme-original, generated
  specifically for this theme during development (not photographs,
  not sourced from any third-party library). Site owners are expected
  to replace them with their own photography.
* **Code** — the theme uses only WordPress core APIs (block patterns,
  Block Bindings API, theme.json, block templates). It does not bundle
  any third-party PHP or JavaScript library.

GoDevs Portfolio WordPress Theme, Copyright 2026 goDevs.
GoDevs Portfolio is distributed under the terms of the GNU General Public
License v2 or later. This theme, like WordPress, is licensed under the
GPL. Use it to make something cool, have fun, and share what you've
learned with others.
