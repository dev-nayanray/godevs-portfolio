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

**Not yet started:** pattern markup, template/template-part markup
(templates still have `<!-- TODO -->` placeholders), demo content,
screenshot asset, readme.txt content sections, languages/POT file,
webfont bundling decision (if revisited).

**Next phase (Phase 2 — Templates and template parts):** Build out
`templates/*.html` and `parts/*.html` to compose patterns and template
parts using **only** the tokens defined in this phase (`var:preset|...`
references — no new hex/px values). Leave placeholder Group blocks
commented `<!-- pattern placeholder: [pattern-slug] -->` where Phase 3
patterns will later be inserted, rather than writing real pattern markup
now. Do not invent new colors/sizes/spacing in Phase 2 — if something
seems to need a value not in the Phase 1 scale, that's a signal to come
back and extend the scale deliberately, not to hardcode.

_Update this section at the end of every session so the next session can
resume without re-reading the whole repo._
