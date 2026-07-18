# Product Requirements Document — GoDevs Portfolio

**Theme slug:** `godevs-portfolio`
**Author:** goDevs
**Status:** Draft — Phase 0 (Scaffolding)
**Last updated:** 2026-07-18

---

## 1. Overview & Target Customer

GoDevs Portfolio is a WordPress Full Site Editing (FSE) block theme built for
small business portfolio sites: **agencies, freelancers, independent
consultants, and creative studios** that need to present their work,
services, team, and pricing without hiring a developer or wiring up a page
builder.

The target customer is a non-technical or semi-technical site owner who:

- Wants a credible, modern-looking portfolio/agency site live within an
  afternoon, using nothing but the WordPress Site Editor.
- Does not want to learn a third-party page builder (Elementor, Divi, etc.)
  or manage another plugin's update cycle just to lay out a homepage.
- Needs more than one visual "mood" to choose from — a solo freelancer's
  site should not look identical to a 12-person creative studio's site —
  without touching CSS.
- Cares about page speed and accessibility but doesn't know those terms;
  they just want the site to "feel fast and look professional."

Secondary audience: developers and agencies who install GoDevs Portfolio as
a client-site starting point specifically because it is pure FSE (no
proprietary shortcodes or theme-options lock-in to migrate away from
later).

## 2. Differentiation Thesis

The WordPress.org theme directory already has thousands of "business" and
"portfolio" themes, and the overwhelming majority converge on the same
template: full-width hero with a centered headline and two buttons,
followed by a three-column icon-box grid, followed by a testimonial
carousel. That pattern is not wrong, but it is not a *reason to choose this
theme over the other four thousand* — it's the default output of every
starter kit, and it reads as generic to anyone who has browsed the
directory for five minutes.

GoDevs Portfolio's differentiation is not a feature list; it's a distinct
visual identity, expressed through three concrete commitments:

1. **Asymmetric, editorial layouts over centered-box layouts.** Patterns
   lean on off-center hero compositions, mixed column ratios, and
   deliberate whitespace rather than the safe centered-content-block
   default. The goal is a portfolio site that looks art-directed, not
   templated.
2. **Style variations that change mood, not just color.** The three
   launch style variations (Midnight, Sandstone, Emerald) are not a
   single layout with three palettes swapped in. Each variation pairs a
   distinct color story with distinct type pairing and spacing scale via
   `theme.json`, so a freelancer's "Sandstone" site and a studio's
   "Midnight" site feel like different products, not the same product in
   different colors.
3. **Portfolio-funnel-first information architecture.** Most business
   themes design for "any small business." This theme designs
   specifically for the sales funnel of a portfolio-based service
   business: attract → prove credibility (portfolio/case studies) →
   build trust (team/testimonials) → convert (pricing/contact). Every
   demo page and pattern exists to serve one step of that funnel, rather
   than being a generic page type included because "most themes have
   one."

This is a bet on craft and a specific point of view, not on a longer
feature checklist.

## 3. Goals

- **100% FSE.** Every design decision is expressed through `theme.json`
  and block patterns. There is no Customizer panel, no theme-options page,
  and no PHP-rendered settings UI that duplicates what the Site Editor
  already does. `theme.json` is the single source of truth for every
  design token (color, type, spacing, border) used anywhere in the theme.
- **3+ style variations via `theme.json`.** Midnight, Sandstone, and
  Emerald ship as `styles/*.json` variations selectable from the Site
  Editor's built-in style switcher — never as a custom settings panel or
  PHP branch.
- **8–10 demo pages covering the full portfolio funnel.** See the table in
  Section 5. Demo content must import cleanly via the standard WordPress
  content-import path and use only patterns bundled with the theme.
- **WordPress.org Theme Review compliance with zero REQUIRED flags.**
  The theme must pass the [Theme Review Team's requirements](https://make.wordpress.org/themes/handbook/review/required/)
  with zero required-level violations, so it is eligible for the
  directory without a back-and-forth review cycle on structural issues.
- **Accessibility-ready tag.** The theme targets the `accessibility-ready`
  tag: sufficient color contrast in every style variation, visible focus
  states, skip-to-content link, keyboard-operable navigation, and no
  motion that can't be disabled.

## 4. Non-Goals

- **No page builder.** No drag-and-drop layout engine beyond what core
  Gutenberg / the Site Editor already provides. Patterns are the layout
  mechanism, not a bundled builder plugin.
- **No bundled plugin dependency.** The theme must be fully functional
  using only WordPress core. It may *recommend* companion plugins (e.g.,
  a forms plugin for the Contact page) but must never require one to
  render correctly or to satisfy Theme Review.
- **No theme-options screen that duplicates Site Editor functionality.**
  No PHP admin page for colors, fonts, layout toggles, or logo upload —
  all of that already exists in the Site Editor and is driven by
  `theme.json`. If a setting can be expressed as a `theme.json` token or
  a block attribute, it does not get a custom UI.

## 5. Demo Pages

Demo content covers the full portfolio funnel end to end: discovery,
credibility, trust, and conversion. Each page is assembled entirely from
reusable block patterns — no one-off, page-specific markup.

| Page | Template | Pattern Stack |
|---|---|---|
| Home | `front-page.html` | `hero-agency` (or `hero-freelancer`), `logo-cloud`, `services-grid`, `portfolio-grid`, `stats-counter`, `testimonials-carousel-static`, `cta-banner` |
| About | `page.html` | `hero-freelancer`, `stats-counter`, `team-grid`, `cta-banner` |
| Services | `page-services.html` | `hero-agency`, `services-grid`, `pricing-table`, `footer-cta` |
| Portfolio | `page-portfolio.html` | `hero-agency`, `portfolio-grid`, `logo-cloud`, `cta-banner` |
| Case Study (single) | `single.html` | `portfolio-case-study`, `stats-counter`, `testimonials-carousel-static`, `footer-cta` |
| Team | `page-team.html` | `hero-freelancer`, `team-grid`, `stats-counter`, `cta-banner` |
| Pricing | `page-pricing.html` | `pricing-table`, `testimonials-carousel-static`, `footer-cta` |
| Testimonials | `page.html` | `testimonials-carousel-static`, `logo-cloud`, `stats-counter`, `cta-banner` |
| Blog | `archive.html` / `index.html` | standard post-list layout, `footer-cta` |
| Contact | `page-contact.html` | `hero-freelancer` (compact), contact block group, `logo-cloud` |
| 404 | `404.html` | minimal not-found block group, `cta-banner` |

## 6. Success Criteria

The theme is considered ready to submit / ready to advance a phase only
when *all* of the following are independently verified (see
`docs/CLAUDE.md` — never marked done from code review alone):

1. **Theme Check plugin** reports zero errors and zero warnings that map
   to a Theme Review *required* item.
2. **`phpcs` with the WPThemeReview ruleset** reports zero errors across
   all PHP files (`inc/`, `functions.php`, `patterns/*.php`).
3. **WCAG AA contrast** (4.5:1 for body text, 3:1 for large text/UI
   components) is verified for every text/background color pairing in
   `theme.json` and in each of the three style variations.
4. **Demo content imports cleanly** on a fresh `wp-env` install with no
   PHP notices/warnings/fatals and no missing-pattern placeholders.
5. **All three style variations** render the same demo content without
   layout breakage — style variations change tokens, not structure.
6. **No hard-coded design values** (hex colors, raw px font sizes,
   arbitrary spacing) exist in any pattern, template, or template part —
   confirmed by grep audit, not visual inspection alone.

Full technical rules that keep the theme aligned with these criteria
during day-to-day development live in `docs/CLAUDE.md`.
