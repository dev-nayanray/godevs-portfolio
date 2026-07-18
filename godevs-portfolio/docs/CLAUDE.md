# CLAUDE.md — GoDevs Portfolio

This file is read by Claude Code at the start of every session in this
repo. Keep it current — it is the fast-context alternative to re-reading
the whole repo history.

## Project Summary

GoDevs Portfolio is a WordPress Full Site Editing (FSE) block theme for
business portfolio sites — agencies, freelancers, consultancies, and
studios — built by goDevs for submission to the WordPress.org theme
directory. It is 100% `theme.json`-driven with no Customizer or
theme-options duplication, ships 3+ style variations and 8–10 demo pages
covering the full portfolio sales funnel, and targets zero Theme Review
required-level flags plus the `accessibility-ready` tag. Full detail,
including the differentiation thesis and demo-page pattern stacks, lives
in **[docs/PRD.md](PRD.md)** — read it before making any product or
design-direction decision.

## Non-Negotiable Rules

These rules are not style preferences — violating them either breaks
WordPress.org Theme Review or breaks the "100% FSE" premise of the
product. Do not make exceptions for convenience.

1. **`theme.json` is the single source of truth for every design token.**
   No hard-coded hex colors, raw `px` font sizes, or arbitrary spacing
   values in any pattern, template, or template part. Every color,
   font size, and spacing value must reference a `theme.json`-defined
   preset (`var:preset|color|...`, `var:preset|spacing|...`, etc.).
2. **Every echoed value must be escaped.** `esc_html()`, `esc_attr()`,
   `esc_url()`, or `wp_kses_post()` on every PHP-echoed value, with no
   exceptions for data that "feels trusted" (theme mods, hard-coded
   strings, internal constants included). This is a Theme Review
   required item, not a suggestion.
3. **Every user-facing string must be translatable**, text domain
   `godevs-portfolio` (`__()`, `_e()`, `esc_html__()`, `esc_html_e()`,
   etc.). No raw English strings in markup that reaches the browser.
4. **No theme-side CPT/taxonomy registration.** Registering custom post
   types or taxonomies in a theme breaks content on theme switch — that
   is plugin territory. If a demo page needs structured content, model it
   with core blocks/patterns, not a custom post type.
5. **Block patterns over hard-coded templates.** Every demo page is
   assembled from reusable patterns in `patterns/`. Templates and
   template parts compose patterns; they do not contain one-off markup
   that only that page will ever use.
6. **No settings screen duplicating Site Editor / Customizer
   functionality.** If it can be a `theme.json` setting or a block
   attribute, it does not get a custom PHP admin page.
7. **Never mark a phase done from code review alone.** Passing a visual
   read of the code is not verification. Before updating the "Current
   Phase" section below to advance a phase, actually spin up `wp-env`
   and run the WordPress Theme Check plugin (and `phpcs` with
   WPThemeReview for PHP changes) against the real result.

## File-Naming Conventions

- **Patterns and templates:** kebab-case (`hero-agency.php`,
  `page-services.html`, `portfolio-case-study.php`).
- **CSS custom properties:** `--godevs-portfolio--color--*`,
  `--godevs-portfolio--font-size--*`, etc. — always namespaced with
  `godevs-portfolio` so theme output never collides with another
  theme's or plugin's custom properties.
- **PHP function/hook prefix:** `godevs_portfolio_` for every function,
  action/filter callback, and class-adjacent procedural helper defined
  by this theme.

## Current Phase

**Phase 1 — theme.json design tokens (complete)**

Full v3 token set defined in `theme.json`: 9-slug color palette
(background/surface/border/text/text-muted/primary/primary-contrast/
accent/accent-contrast), 6-step fluid type scale (small→huge, `clamp()`
at 375px→1600px viewport), 8-step spacing scale (3xs→2xl, fluid from
`l` up), layout (`contentSize: 720px`, `wideSize: 1360px`), 2 gradients
(defined once via `var(--wp--preset--color--*)` refs so they auto-adapt
per style variation without duplication), 2 shadow presets, 3 duotone
presets, and global styles for links/headings/buttons including a
`:focus-visible` outline (added as real CSS in `style.css` since
theme.json's schema has no `outline` style property). `styles/*.json`
(Midnight, Sandstone, Emerald) each override **only**
`settings.color.palette` — genuinely minimal diffs, confirmed by reading
back `WP_Theme_JSON_Resolver::get_style_variations()`. System font
stacks used for Phase 1 (serif heading / sans body); bundling an OFL
webfont pairing was explicitly deferred as a future decision, not an
oversight. `inc/class-theme-setup.php` and `inc/class-enqueue.php` were
wired up (add_theme_support, style.css/editor.css enqueue) since the
focus-outline CSS needed to actually load to prove it works.

**Verification actually performed** (wp-env, not code review):
- `wp theme list --status=active` → `godevs-portfolio` active, site
  returns HTTP 200, `wp-content/debug.log` shows no theme-related
  PHP notices/warnings/fatals (only a pre-existing, unrelated
  `wp_update_themes()` network warning from the sandboxed environment
  having no outbound internet access).
- **Bug caught by verification, not visible from the JSON alone:**
  `WP_Theme_JSON_Resolver::get_merged_data()->get_settings()` initially
  showed only 2 of 6 font sizes registered under the theme's own preset
  bucket — WP core ships default font-size presets with the exact same
  slugs (`small`/`medium`/`large`/`x-large`), and `defaultFontSizes`
  hadn't been disabled, so 4 of our 6 sizes were colliding with core's
  stock values instead of being distinct theme presets. Fixed by adding
  `settings.typography.defaultFontSizes: false` and
  `settings.spacing.defaultSpacingSizes: false` (the latter as a
  preventive consistency fix, no visible collision there since our
  slugs don't match core's numeric spacing scale). Re-verified after
  the fix: all 6 font sizes and all 8 spacing sizes now register
  correctly under the theme's own bucket.
- Re-read all three style variations via `get_style_variations()` and
  confirmed each resolves to its exact intended 9-color palette with no
  typos, and that all three differ from the base and from each other.
- **Contrast ratios** (script-computed via Node, WCAG relative-luminance
  formula, not eyeballed) — every pair below is ≥4.5:1 (normal text) in
  all four palettes (Base "Studio", Midnight, Sandstone, Emerald):
  text/background (11.6–17.5:1), text-muted/background (5.8–7.8:1),
  text/surface (10.3–15.7:1), text-muted/surface (5.1–6.9:1),
  primary-contrast/primary i.e. button text (6.5–14.9:1),
  accent-contrast/accent (5.7–9.9:1), primary/background i.e. link use
  (6.0–14.1:1), accent/background i.e. link use (5.3–10.3:1). `border`
  sits at 1.4–2.2:1 against background in all four — intentionally
  decorative-only (hairline dividers, not the sole indicator of any
  interactive boundary; buttons/focus states use `primary`/`accent`
  which already clear 3:1+ by a wide margin), documented in
  [docs/PRD.md](PRD.md) design notes rather than forced to comply.

**Phase 2 — Templates and template parts (complete)**

All 4 `parts/*.html` and all 13 `templates/*.html` built, token-only
(grep-audited: zero hex/px anywhere in `templates/` or `parts/`). 5
custom page templates (`page-services`, `page-portfolio`, `page-team`,
`page-pricing`, `page-contact`) registered in `theme.json`
`customTemplates` with `postTypes: ["page"]`.

**Architecture decisions made along the way** (deviations from a
literal read of the brief, each because the literal reading was
technically impossible or would violate a non-negotiable rule):
- **No custom skip-link code.** WordPress core 7.0+ automatically
  injects a fully accessible, natively-translated skip link for every
  block theme (`_block_template_add_skip_link()` in
  `wp-includes/block-template.php`), and it's smart enough to detect and
  reuse the first `<main>` element's existing `id` as its jump target —
  exactly the `"anchor":"main-content"` set on every template's main
  group. A first implementation attempt added a theme-side
  `wp_body_open` skip link + CSS; verification caught that it produced
  **two** stacked "Skip to content" links (confirmed by reading the
  raw HTML and cross-referencing core's source), so it was removed.
  Kept: the `id="main-content"` anchors (still the actual jump target)
  and the `:focus-visible` outline CSS (unrelated, still needed).
- **Copyright line uses the Block Bindings API**, not a shortcode or
  hardcoded year: a `godevs-portfolio/copyright-year` binding source
  (registered in `class-theme-setup.php`) resolves a paragraph's content
  to "© {current year}" server-side, next to a `core/site-title` block —
  dynamic, no theme-author credit, no yearly manual update needed.
- **`page.html` and `single.html` do NOT hardcode PRD's per-page pattern
  stacks.** `page.html` is WordPress's shared template for *every*
  regular Page — About and Testimonials both use it per the PRD table,
  with different pattern stacks, which are mutually exclusive to bake
  into one shared file. Both templates render `<!-- wp:post-content /-->`
  instead; the specific pattern stacks belong in each demo page's own
  content, built in a later phase. The 5 dedicated `page-*.html`
  templates are different: each is used by exactly one demo page by
  design, so their placeholders ARE hardcoded directly per the PRD table.
- **`single.html` open question, as instructed:** built as a standard
  single-post template (`post-content` + a `portfolio-case-study`
  placeholder comment), deliberately not resolving whether Case Studies
  end up as regular Posts (current single.html), Pages with a custom
  template, or a future companion plugin — theme-side CPT is ruled out
  either way per the non-negotiable rules. **Needs your decision before
  Phase 3 builds `patterns/portfolio-case-study.php`.**
- **`page-contact.html` placeholders a `contact-info` pattern that
  doesn't exist yet.** The PRD's Contact row says "contact block group,"
  which isn't one of the 12 scaffolded `patterns/*.php` files. Marked as
  `<!-- pattern placeholder: contact-info -->` and flagged here as a
  13th pattern Phase 3 needs to either add or fold into an existing one.
- **`archive.html`/`index.html`/`home.html`/`search.html` are
  query-loop templates, not pattern-placeholder templates** — the blog
  listing itself is the dynamic content; only the trailing `footer-cta`
  is a pattern placeholder (search.html has none, results are the
  content). `footer-minimal` used on `search.html`/`404.html` (utility
  pages); full `footer` used everywhere else — this footer split wasn't
  explicitly specified, so flagging the choice here.

**Verification actually performed** (wp-env, not code review):
- All 13 templates register with `source: theme` via
  `get_block_templates()` — no silent "template not found" fallback.
- All 5 custom templates confirmed `postTypes` includes `page` (the
  exact data WP's Page editor reads to decide whether to list a
  template in the Template dropdown).
- Every route tested end-to-end: `/` (front-page, 200), `/sample-page/`
  (page, 200), a post permalink (single, 200), a category archive
  (archive, 200), `/?s=test` (search, 200), a deliberately-broken URL
  (404, 404) — every response contains exactly one `id="main-content"`.
- **Proved a custom template actually applies**, not just registers:
  assigned `page-services` to the sample page via `_wp_page_template`
  post meta and confirmed the rendered HTML contains exactly the 4
  `pattern placeholder` comments in the PRD-specified order
  (hero-agency, services-grid, pricing-table, footer-cta), then reverted
  the test page back to its default template.
- Confirmed via raw HTML inspection that the skip link is the first
  element after `<body>`, before any nav/logo/button link, and that its
  `href` matches the `<main>` element's `id`.
- `wp-content/debug.log` stayed free of theme-related PHP
  notices/warnings/fatals throughout (only the same pre-existing,
  unrelated `wp_update_themes()` sandboxed-network warning as Phase 1,
  plus benign WP-Cron "Automatic updates" log lines).
- Grep audit (`grep -rniE '#[0-9a-f]{3,6}|[0-9]+px' templates/ parts/`)
  returned zero matches.

**Not yet started:** pattern markup (`patterns/*.php` still have
placeholder bodies), demo content, screenshot asset, readme.txt content
sections, languages/POT file, webfont bundling decision (if revisited).

**Open question for you before Phase 3:** how should Case Studies work
— regular Posts (current `single.html`), Pages with a dedicated custom
template (like the 5 `page-*.html` templates), or a future companion
plugin? Whichever it is, no theme-side CPT, per the non-negotiable
rules. This blocks a clean build of `patterns/portfolio-case-study.php`.

**Next phase (Phase 3 — Block patterns):** Build out the 12 scaffolded
`patterns/*.php` files (plus the newly-flagged `contact-info` 13th
pattern) referenced by every `<!-- pattern placeholder: ... -->` comment
across `templates/*.html`. `docs/PRD.md` Section 5 (demo-page pattern
stacks) and this file's Phase 2 notes above are the source of truth for
what each placeholder needs to become. Token-only, same as Phase 2 — no
new hex/px, only `var:preset|...` references. Resolve the case-study
open question above before touching `portfolio-case-study.php`
specifically.

_Update this section at the end of every session so the next session can
resume without re-reading the whole repo._
