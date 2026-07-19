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

**Case study decision (resolved before Phase 3):** Case Studies are
regular Pages using a dedicated custom template
(`templates/page-case-study.html`, registered in `theme.json`
`customTemplates` as "Case Study"), not Posts and not a CPT. `single.html`
was reverted to a standard blog-post template (`post-title`,
`post-featured-image`, `post-content`, `post-terms`,
`post-navigation-link` prev/next). No comments template part was added —
`docs/PRD.md` doesn't list commenting as a stated goal, so it was
omitted rather than adding unscoped surface area.

**Phase 3 — Block patterns (complete)**

All 12 scaffolded patterns built as real PHP files with genuine
business-portfolio copy (not lorem ipsum), plus a 13th
(`contact-info.php`) to fill the gap the PRD's Contact row left ("contact
block group" didn't name an actual pattern — flagged in Phase 2, built
here since leaving it as a placeholder would have failed this phase's own
"zero placeholders remaining" verification bar). `inc/class-block-patterns.php`
now registers all 9 pattern categories on `init`; the pattern files
themselves need no manual registration — WordPress auto-discovers any
`.php` file in `patterns/` from its header comment. All 31 placeholder
comments across every template replaced with real
`<!-- wp:pattern {"slug":"godevs-portfolio/..."} /-->` references.
Grep-audited clean (zero hex/px in `patterns/`) and `php -l`-linted clean
across every pattern and `inc/` file before touching wp-env.

**Images:** three theme-generated placeholder graphics
(`assets/images/placeholder-{wide,portrait,logo}.png`) — plain, original,
neutral-gray "image placeholder" boxes generated via PowerShell
System.Drawing, not real photos. Chosen over fetching real photos from
openverse.org because this sandbox's outbound DNS was unreliable earlier
in the project (confirmed failing for github.com in an earlier session)
and because it carries zero licensing/attribution burden — this was
explicitly discussed and confirmed before building any patterns, not a
silent substitution. Every image has real, specific alt text describing
what should eventually go there (e.g. "Portrait of Jordan Lee, Creative
Director"), even though the current image is a placeholder graphic.

**Heading hierarchy:** every pattern uses H2 for its own section heading
and H3 for sub-items (service cards, project titles, team names, pricing
tiers) — patterns never assume they're the page's H1, per instruction.
Verified by extracting every `<h1>`–`<h6>` tag from the rendered home
page and the Services page: consistent H2→H3 pairs per section, no
skipped levels anywhere. Front-page.html and the 5 dedicated `page-*.html`
templates have no template-level H1 (no `post-title` block, consistent
with the pattern established in Phase 2) — each page's hero pattern's H2
functions as its visually-prominent title instead. This is a known,
accepted tradeoff in FSE pattern libraries, not an oversight; flagging it
again here since "no H1 at all" is a different concern than "skipped
level" and worth being explicit about.

**Architecture decisions / things flagged along the way:**
- Pricing table's "Growth" tier gets a visible **text** badge ("Most
  Popular"), not just a background-color change — satisfies the
  no-color-alone requirement directly.
- `testimonials-carousel-static.php` is genuinely static: `core/columns`
  + `core/quote`, zero JS/carousel library, per the non-negotiable rules.
- `cta-banner.php` uses the `primary-to-accent` gradient from Phase 1 —
  first real use of a gradient token in the theme, confirms it resolves
  correctly per active style variation (see Phase 4 below).
- All button/link hrefs (`/contact/`, `/portfolio/`, `/services/`,
  `/case-studies/...`) are placeholder paths matching the demo-content
  structure Phase 5 will create; they 404 until then, which is expected.

**Verification actually performed** (wp-env, not code review):
- All 13 patterns + all 9 categories confirmed registered via
  `WP_Block_Patterns_Registry`/`WP_Block_Pattern_Categories_Registry` —
  correct slugs, titles, and category assignments, zero registration
  errors from the pattern PHP files' loops/arrays/sprintf calls.
- Every template's rendered front-end output checked for zero leftover
  `pattern placeholder` comments: home page, all 6 custom-template pages
  (created as real test Pages with `_wp_page_template` meta set, then
  deleted after verification), the category archive, and a 404 — all
  clean, all HTTP 200 (404 correctly returns 404), all exactly one
  `id="main-content"`.
- Confirmed the actual pattern copy renders, not just the wrapper
  structure (e.g., home page contains "Strategy-led design...",
  "Trusted by teams", "120+", etc.; the Services test page contains the
  Starter/Growth/Studio pricing tiers).
- All three placeholder image assets return HTTP 200 from their real
  theme URL.
- **Two false-alarm "bugs" during verification, both testing artifacts
  fixed by re-checking rather than mis-diagnosing the code:** (1) a grep
  for `style.css` inside double-quoted `href="..."` found nothing because
  WordPress emits enqueued stylesheet `<link>` tags with single-quoted
  `href='...'` — the stylesheet was loading correctly all along, and
  `:focus-visible { outline: 2px solid var(--wp--preset--color--accent); }`
  was confirmed present by curling the served `style.css` directly. (2) a
  grep for the literal footer-cta heading text with a straight apostrophe
  found nothing because WordPress's `wptexturize()` renders it as
  `Let&#039;s build...` — the pattern was rendering correctly all along.
  Both are noted here as a reminder that a failed grep during verification
  needs its own follow-up check before it's trusted as a real defect.
- **Focus-visible outline — verified as far as is possible without a
  real browser:** confirmed the CSS rule is present in the served
  stylesheet, confirmed that stylesheet is `<link>`-loaded on every page
  checked, and confirmed every interactive element across all 13
  patterns is a real focusable element (`core/button` anchors,
  `core/social-links` anchors, `core/search` input) — no custom
  non-focusable click targets. Could not literally press Tab in a
  browser in this environment; flagging that as the honest limit of this
  verification rather than claiming a full keyboard walkthrough.
- `wp-content/debug.log` stayed free of theme-related PHP
  notices/warnings/fatals through pattern registration, rendering, and
  the block-bindings/pattern-category `init` hooks (only the same
  pre-existing, unrelated `wp_update_themes()` sandboxed-network warning
  as Phases 1–2, plus benign WP-Cron log lines).

**Phase 4 — H1 fix, style-variation spot-check, and documentation
reconciliation (complete)**

**The missing-H1 fix (front-page.html) — approach chosen and why:**
`hero-agency.php` now decides its own heading level at render time:
`is_front_page() ? 1 : 2`. This is option (a) from the brief
("give the pattern a block-level heading attribute that templates can
override"), implemented via a PHP conditional rather than a literal
block attribute — patterns/*.php execute as real PHP, so this was the
cleanest way to make one reusable pattern context-aware without forking
a duplicate copy of the markup (which would have violated the
patterns-over-hard-coded-markup rule far more than a conditional does).
`is_front_page()` is reliable here regardless of whether Reading
Settings uses "a static page" or "your latest posts", since
front-page.html only ever renders for the actual front-page request —
confirmed live: the rendered home page contains exactly one `<h1>`
("Strategy-led design for brands ready to grow"), and the same pattern
instance renders `<h2>` correctly on page-services.html and
page-portfolio.html (verified via test pages, see below).

**The rest of the H1 fix:**
- `page.html` and all 6 custom `page-*.html` templates (`page-services`,
  `page-portfolio`, `page-team`, `page-pricing`, `page-contact`,
  `page-case-study`) now open with `core/post-title` at `level:1`,
  styled small/muted/uppercase (`fontSize: small`, `textColor:
  text-muted`) rather than prominent — each of these templates already
  has its own visually-prominent hero pattern with an H2, so a
  large H1 would have looked like a duplicate title stacked on top.
  The small H1 reads as an "eyebrow" label instead, satisfying the real
  requirement (exactly one real, visible H1) without visual clutter.
  `page-case-study.html` gets the same treatment even though
  `portfolio-case-study.php` also has its own kicker text + H2 project
  name directly below it — a minor, accepted overlap, not a bug.
- `single.html` already had `post-title` at `level:1` (prominent, huge)
  from the Phase 3 rebuild — left unchanged, since blog posts don't have
  a competing hero pattern.
- `archive.html` and `search.html` already produce H1 via
  `core/query-title`'s own default level (confirmed live: `<h1
  class="wp-block-query-title">`) — no change needed, and confirmed the
  `post-title` block *inside* the query loop on these same pages
  correctly defaults to H2, not H1 (this was the one real risk in this
  phase: if it defaulted to H1, every post in a loop would have produced
  a duplicate H1 — checked live rather than assumed, and it's H2).
- `home.html` and `index.html` had **no H1 at all** — not called out
  explicitly in the brief, but the same "every page needs exactly one
  H1" principle applies, so a plain "Blog" H1 was added to both and
  flagged here rather than left as a silent gap.
- `404.html` already rendered a literal `<h1>` in its saved HTML, but
  the block comment's JSON attributes didn't say `"level":1` — fixed for
  consistency (so the editor doesn't disagree with the front end if this
  template is later opened in the Site Editor).

**Verified live, not assumed:** every route re-checked after the fix —
home page, a sample Page, a blog post, a category archive, search
results, 404, and all 6 custom-templated pages (created as real test
Pages via `_wp_page_template` meta, then deleted) — every single one
renders **exactly one** `<h1>`, confirmed by both `grep -c '<h1'` and by
reading each H1's actual text content to confirm it's the right one.

**Style variation spot-check (Step 1):**
- **Gradient midpoint, not just endpoints** — script-computed (CSS
  `linear-gradient` interpolates RGB channels linearly, so the midpoint
  is the channel-wise average of the two stop colors) for all 4 palettes.
  `primary-contrast` text against the *worst point on the gradient*
  (not just the two ends already checked in Phase 1): Base 5.72:1,
  Midnight 6.91:1, Sandstone 5.95:1, Emerald 5.94:1 — all still clear
  4.5:1 by a comfortable margin. No variation-level fix needed.
- **`text-muted` (portfolio-grid.php's caption text) against
  `background`**, all 4 palettes: Base 7.58:1, Midnight 7.81:1,
  Sandstone 5.75:1, Emerald 6.43:1 — all pass, consistent with Phase 1.
- **Pricing table's "Growth" tier visual distinctness** — structurally
  variation-proof: it's marked with a visible "Most Popular" *text*
  label (not a color-only signal), and its card uses the `primary`
  background token while sibling cards use `surface` — `primary` and
  `surface` are two different palette slugs in every variation by
  definition, so the tier stays visually distinct regardless of which
  variation is active. No per-variation fix needed.
- **Honest limitation:** no real browser/screenshot tool is available in
  this environment, so "does it look intentional" was verified via
  contrast math and structural reasoning (token-slug guarantees), not an
  actual visual screenshot per variation. Flagging this rather than
  claiming a visual review that didn't happen.

**Documentation reconciliation (Steps 2–3), now in `docs/PRD.md`:**
- `contact-info` added explicitly to the Section 5 pattern-stack table
  (13 patterns total, not 12) with a note on how the gap was found.
- Contact form explicitly scoped **out** of this theme — `contact-info`
  is static contact details only; a working submission mechanism is
  Phase 6+/future, via a recommended (not bundled) companion plugin,
  consistent with the existing Non-Goals section.
- The four exact case-study slugs `portfolio-grid.php` hard-codes
  (`northwind-rebrand`, `globex-mobile-app`,
  `fabrikam-commerce-platform`, `contoso-marketing-site`) are now
  written down in PRD.md so Phase 5 creates Pages at those exact slugs
  rather than inventing different ones and silently breaking the links.
  Also noted: `portfolio-case-study.php` currently contains
  Northwind-specific copy from its one Phase 3 worked example — Phase 5
  needs to treat it as a *starting-point* pattern and customize the
  copy per project, not ship four pages that all say "Northwind Rebrand."

**Verification actually performed** (wp-env, not code review): see H1
verification above (live-rendered, not grep-only) plus a full debug.log
check after every change — clean throughout (only the same pre-existing,
unrelated `wp_update_themes()` sandboxed-network warning as every prior
phase).

**Phase 5 — Demo content assembly (complete)**

**Architectural fix made before content could even be written:**
`page-case-study.html` previously hardcoded
`<!-- wp:pattern {"slug":"godevs-portfolio/portfolio-case-study"} /-->`
directly in the template (same pattern as `page-services.html` etc.).
That's correct when a template is used by exactly one demo page, but
`page-case-study.html` is used by **four** — all four would have shown
byte-identical "Northwind Rebrand" text. Fixed by changing that one line
to `<!-- wp:post-content {"layout":{"type":"constrained"}} /-->` (the
same approach as `page.html`), so each of the 4 Case Study pages now
supplies its own content, expanded from the pattern's structure with
real per-project copy. The closing `cta-banner` reference stayed
hardcoded in the template — repeating a generic closing CTA across all
four is normal, unlike repeating an entire case study verbatim.

**Reading Settings & front page (Step 1) — verified live, not
assumed:** `front-page.html` renders at `/` regardless of Reading
Settings — confirmed by testing before AND after setting a static front
page. Final configuration: "Your homepage displays" → **A static page**,
Homepage → **Home**, Posts page → **Blog** (a near-empty marker Page
created specifically so `/blog/` triggers `home.html`, giving that
template a real testable URL rather than only existing as an unused
fallback). Permalink structure set to `/%postname%/`.

**Navigation menu (Step 2):** a real `wp_navigation` post ("Primary
Navigation", 8 items: Home, About, Services, Portfolio, Team, Pricing,
Blog, Contact, each `"kind":"custom"` with a predictable relative URL)
created via `wp_insert_post()`, then wired into both `header.html` and
`header-transparent.html` via an explicit `"ref"` attribute on the
`core/navigation` block. **Found and cleaned up along the way:**
WordPress auto-creates an empty default "Navigation" post (just
`<!-- wp:page-list /-->`) the first time a block theme needs one with no
`ref` set — this had been silently sitting in the database since an
earlier phase. Deleted it before export so the demo package ships with
exactly one, intentional navigation menu. `footer.html`'s nav block was
deliberately left unwired (not requested) — verified live that it
automatically resolves to the one real navigation post that exists
rather than falling back to a page-list, which is a WordPress core
convenience behavior worth knowing about, not something this theme
implements itself.

**Known, accepted fragility — flagging explicitly:** the `"ref"` ID
hardcoded into `header.html`/`header-transparent.html` is a **database
post ID**, which is inherently per-install runtime data, not portable
theme code. This was built as explicitly instructed ("wire header.html's
navigation block to reference this menu explicitly via ref"), but a
fresh WXR import is not guaranteed to recreate the navigation post at
the same ID. In the Step Final 2 test below it coincidentally landed on
the same ID (37) both times — that is a coincidence of this test's
identical content-creation order, not a structural guarantee. If a
future import lands on a different ID, the navigation block falls back
to WordPress's default behavior (shows all Pages) rather than erroring —
a degraded-but-not-broken outcome. `demo-content/README.md` documents
the one-time manual fix (reselect the menu in the Navigation block after
import), which is standard WordPress practice, not unique to this theme.

**Demo Pages created (Step 3)** — exact slugs, matching `docs/PRD.md`:

| Title | Slug | Template | Content source |
|---|---|---|---|
| Home | `home` | `front-page.html` (auto) | unused — template is fully self-contained |
| About | `about` | `page.html` | custom-written intro (not reused hero copy — see below) + `stats-counter`, `team-grid`, `cta-banner` |
| Services | `services` | `page-services.html` | template-owned |
| Portfolio | `portfolio` | `page-portfolio.html` | template-owned |
| Team | `team` | `page-team.html` | template-owned |
| Pricing | `pricing` | `page-pricing.html` | template-owned |
| Contact | `contact` | `page-contact.html` | template-owned |
| Testimonials | `testimonials` | `page.html` | `testimonials-carousel-static`, `logo-cloud`, `stats-counter`, `cta-banner` |
| Blog | `blog` | `home.html` (posts page) | empty (marker page only) |
| Case Studies | `case-studies` | `page.html` | parent page only, not in nav — establishes the `/case-studies/...` URL prefix for its 4 children |
| Northwind Rebrand | `case-studies/northwind-rebrand` | `page-case-study.html` | distinct case-study copy |
| Globex Mobile App | `case-studies/globex-mobile-app` | `page-case-study.html` | distinct case-study copy |
| Fabrikam Commerce Platform | `case-studies/fabrikam-commerce-platform` | `page-case-study.html` | distinct case-study copy |
| Contoso Marketing Site | `case-studies/contoso-marketing-site` | `page-case-study.html` | distinct case-study copy |

**About page deliberately does NOT reuse `hero-freelancer`** even
though `docs/PRD.md`'s table lists it first in About's pattern stack —
`hero-freelancer` is also used verbatim on the Team and Contact pages,
and its specific copy ("I design and build websites for small
businesses") reads as a homepage-style pitch, not company-story
narrative. Reusing it on About would have put identical hero text on 3
pages of the same site. Wrote a custom "Our Story" intro instead, kept
`stats-counter`/`team-grid`/`cta-banner` as genuine reuse (realistic —
real sites commonly preview the team on About and link to a full Team
page). Flagging this as a deliberate content-quality judgment call, not
a literal PRD-table implementation.

**Demo blog Posts (Step 4):** 5 posts, 2 categories ("Process",
"Industry Insights"), all with real short-form agency-blog copy (process
insights / industry tips, per the brief) and a placeholder featured
image: "5 Signs Your Website Redesign Can't Wait", "How We Run a
Discovery Sprint (And Why It Matters)", "Brand Consistency Isn't
Optional Anymore", "What We Look for When Reviewing a Portfolio Site",
and "Inside Our Design-to-Development Handoff Process" (the long one —
4 H2 sections, meant to exercise `post-navigation-link` meaningfully).

**Images:** reused the existing `assets/images/placeholder-*.png`
theme-bundled graphics throughout, per the brief's fallback instruction
— did not attempt an openverse.org fetch given this session's earlier
confirmed-unreliable outbound network, consistent with the Phase 3
decision.

**WXR export (Step 5):** `demo-content/godevs-portfolio-demo-content.xml`
+ `demo-content/README.md` (import steps, and the Reading-Settings /
Navigation-ref caveats documented above). Final export: 14 pages, 5
posts, 1 navigation, 1 attachment — cleaned of the stray auto-generated
Navigation post and WordPress's own default sample content (Sample
Page, Hello World, draft Privacy Policy) before the final export, so the
package ships as exclusively real theme demo content.

**Verification actually performed** (two full wp-env passes, not code
review):

*Pass 1 — current instance, content freshly created:* every one of the
12 non-trivial URLs (About, Services, Portfolio, Team, Pricing, Contact,
Testimonials, Case Studies parent, all 4 case studies) plus the front
page, `/blog/`, a full blog post, search, and 404 — all HTTP 200 (404
correctly 404), all exactly one `<h1>`. Confirmed the 4 case studies
render genuinely distinct text (not verbatim duplicates) by grepping
project-specific phrases from each — first attempt came back empty due
to the same `wptexturize()` apostrophe-encoding false alarm from Phase
3 (grepped `Globex's` instead of `Globex&#8217;s`); re-checked with
apostrophe-free snippets and confirmed all 4 are genuinely distinct.
`debug.log` stayed clean throughout.

*Pass 2 — full destroy + fresh install + WXR import:* `wp-env destroy`,
fresh `wp-env start`, activated the theme, installed the WordPress
Importer plugin (network access to downloads.wordpress.org worked in
this session, unlike the earlier-observed github.com DNS failures —
different host, not assumed to work), imported the WXR file. **Two real
findings, both honestly reportable rather than papered over:**
1. The one media attachment failed to import — `cURL error 7: Failed to
   connect to localhost:8888` — because the WXR references an absolute
   `localhost:8888` URL and, inside the CLI container's own network
   namespace, `localhost` does not resolve to the WordPress container.
   This is a Docker-networking artifact of testing via
   `wp-env run cli wp import` specifically, not a real-world hosting
   issue (on any actual host, the export/import domains differ and the
   HTTP fetch succeeds normally). Confirmed the failure degrades
   gracefully: the affected posts' `_thumbnail_id` meta points to a
   nonexistent attachment, `post-featured-image` simply renders nothing,
   no PHP error, no fatal.
2. Reading Settings did not survive the import (WXR format doesn't
   include site options, only content) — confirmed `/blog/` served
   `page.html` instead of `home.html` immediately post-import, exactly
   as `demo-content/README.md` already anticipated. Manually reapplied
   the same 3 Reading Settings and reconfirmed `/blog/` correctly
   switched to `home.html`'s "Blog" H1.

After those two known, documented, gracefully-degrading issues: all 12
pages + search + 404 re-verified with exactly one H1 each, the
navigation menu resolved correctly (its `ref` coincidentally landed on
the same ID as the original — not a guarantee, see above), and
`wp-content/debug.log` was not even created — a fully clean pass.

**Not yet started (as of end of Phase 5):** screenshot asset, readme.txt
content sections, languages/POT file, webfont bundling decision (if
revisited).

**Phase 6 — Accessibility & QA pass (complete)**

`docs/WPORG_CHECKLIST.md` created as this phase's actual first action
(Phase 5's entry referenced it as if it already existed — an oversight,
noted in the checklist file itself). Every item in it is now checked
off with a verification note; see that file for the full item-by-item
record. This phase's real value was **Step 0's audit surfacing genuine,
previously-undetected bugs** — consistent with non-negotiable rule 7,
nothing below was marked done from code review alone.

**Step 0 — `inc/` audit, before/after state of all 4 files:**
- `class-theme-setup.php` — was implemented (add_theme_support,
  block-bindings registration, copyright-year binding) but missing
  `load_theme_textdomain()` entirely — a real gap for a theme claiming
  `translation-ready`. **Fixed:** added as the first line of `init()`.
  Also extended with 3 new block-binding sources and a `render_block`
  filter for `core/navigation` aria-labels — see the i18n finding below
  for why.
- `class-block-patterns.php` — was fully implemented and working (Step
  0 confirmed all 9 pattern categories genuinely registered via
  `WP_Block_Pattern_Categories_Registry`, not just present in code). No
  functional fix needed; added `phpcs:disable`/`phpcs:enable` comments
  around the category-registration calls in Step 2.
- `class-block-styles.php` — was an **empty stale stub** (`// TODO:
  Phase 2/3`) left over from the Phase 0 scaffold, never implemented and
  never flagged as done in any prior phase's notes — exactly the kind of
  gap this step was designed to catch. Nothing in `docs/PRD.md` or any
  prior phase actually required custom block styles, so this was not a
  missing feature — it was a stale TODO comment with no real work behind
  it. **Fixed:** rewritten as an explicit, documented intentional no-op
  (`init() {}`) so the file states plainly why it does nothing instead
  of implying unfinished work.
- `class-enqueue.php` — was fully implemented (style.css/editor.css
  enqueue, correct versioning). No fix needed. Live-verified
  `get_editor_stylesheets()` resolves the real URL and returns HTTP 200.

**Step 1 — Theme Check plugin:** installed and run headless via
`wp eval-file` (admin-UI-only tool, required manually requiring
`checkbase.php`/`main.php`). Zero REQUIRED-level flags on every run.
One real WARNING (missing copyright/license notice in `style.css`) and
one real INFO (invalid `business` tag not in the WPORG tag whitelist) —
both fixed. Final state, reconfirmed on the Step Final fresh instance:
`PASS: YES`, 38 checks run, 3 non-blocking results — 1 RECOMMENDED
(`register_block_style` not used — intentionally not implemented, no
PRD requirement for custom block styles) and 2 pure INFO (accessibility
review reminder, text-domain confirmation), neither actionable.

**Step 2 — phpcs + WPThemeReview:** installed via Composer outside the
theme directory (scratchpad, correctly not shipped). Real ecosystem gap
hit and worked around: `wptrt/wpthemereview` only supports WPCS ^2.x,
not 3.x — pinned WPCS to `^2.3`. `testVersion` had to be explicitly set
to `7.4-` or phpcs false-flags modern PHP syntax against ancient
defaults. Final run against `functions.php`, `inc/`, and `patterns/`:
**exit code 0, zero errors, zero warnings.** 2 findings suppressed with
documented inline reasons (`register_block_pattern_category()` and
`register_block_bindings_source()` — both current WordPress-core-
endorsed FSE practices the sniff's forbidden-function list predates).

**Step 3 — Accessibility audit beyond prior phases, 2 real bugs found
and fixed:**
1. **Severe contrast failure** in `parts/header-transparent.html`:
   `textColor:primary-contrast` with no background (meant to overlay a
   hero image, per the original Phase 2 design, but that overlay
   positioning was never actually built) rendered against the plain
   page `background` token instead — measured ~1.0–1.1:1 across all 4
   palettes (effectively invisible text). This had survived Phases 1–5
   undetected because no prior verification pass specifically checked
   that exact, unintended token pairing. Fixed with
   `backgroundColor:primary` (an already-verified ≥5.7:1 pairing).
2. **Generic repeated link text** in `services-grid.php` — all 4 service
   cards said identical "Learn more" with no distinguishing context (a
   real WCAG anti-pattern for screen-reader link-list navigation). Fixed
   with a per-card `aria-label` ("Learn more about %s") that keeps the
   concise visible text while making the accessible name descriptive.

Also confirmed clean (no fix needed): `alt` text present and descriptive
on every image across all 15 patterns; no `prefers-reduced-motion` gap
(theme has zero CSS transitions/animations, confirmed by grep); no
unlabeled form inputs (theme has no form markup at all, by design).

**Step 4 — i18n audit, `.pot` generation, and a corrected prior claim:**
`wp i18n make-pot` produced `languages/godevs-portfolio.pot` with **220
msgid entries**. In the process, **empirically disproved a claim this
project made in Phase 2** — that static text in `.html` block
templates/parts is picked up by "WordPress's native block-content i18n
system, the same mechanism core block themes use." It is not:
`make-pot` only extracts strings from `.php` files, never from `.html`
template/part files (confirmed by control-checking that `.php`-pattern
strings appeared in the `.pot` while known `.html`-template strings did
not). This is recorded here as a correction, not silently patched, per
instruction. **Fixed** via: 2 new `Inserter:false` utility patterns
(`blog-heading.php`, `not-found.php`) for the "Blog" and "Page not
found" headings previously hardcoded in `home.html`/`index.html`/
`404.html`; 3 new Block Bindings sources for small inline fragments
("No posts found.", "No results found.", "All rights reserved.");  a
`render_block` filter translating `core/navigation`'s `ariaLabel`
attribute (Block Bindings doesn't support block attributes, only block
content); and removing 2 redundant `core/search` label/buttonText
overrides that duplicated WP core's own already-translated defaults.

**A second, unrelated bug found while debugging the two new patterns:**
they silently failed to register with no PHP error. Root-caused by
reading WordPress core source (`WP_Theme::get_block_patterns()`):
WordPress caches the entire `patterns/` directory scan in a **site
transient** keyed to the theme's `Version` header, invalidated only when
that header string changes. `style.css`'s `Version` had never been
bumped since Phase 0 (still `0.1.0` through Phase 5), so WordPress was
serving a stale cached pattern list. **Fixed by bumping the version**
(`0.1.0` → `0.2.0` in `style.css`, `functions.php`, and `readme.txt`'s
Stable tag) — immediately resolved. **Flagging as a generalizable
lesson for every future phase, not just this one-time fix:** the
`Version` header must be bumped whenever pattern or other cached theme
files change, since this same stale-cache behavior would silently
affect real end users on production sites, not just this dev
environment.

**Step 5:** `docs/WPORG_CHECKLIST.md` updated — every item marked ☑ with
a verification note (see that file; nothing was left unchecked, every
required/recommended/accessibility item was checkable this phase).

**Step Final — genuinely fresh wp-env, not reused from Phase 5 or from
earlier in this phase:** first attempt accidentally ran `wp-env` from
inside `godevs-portfolio/` instead of the repo root, which has no
`.wp-env.json` of its own — wp-env auto-detected the folder as a theme
and spun up a *second, unconfigured* Docker instance rather than using
the project's real config (the repo-root `.wp-env.json`, which lists
`"themes": ["./godevs-portfolio"]`). Caught via `docker ps` (two
differently-hashed instance groups, one holding port 8888). Destroyed
the wrong one, then destroyed the real project's stale instance from
Phase 5 and started genuinely fresh from the repo root
(`c:\Users\USER\Desktop\Godevs-portfoilo`), the correct working
directory for all `wp-env` commands in this project going forward. On
that clean instance: Theme Check re-run — identical clean result
(`PASS: YES`, same 3 non-blocking items). phpcs re-run — identical clean
result (exit 0, zero errors/warnings). Editor styles and all 15 patterns
(13 original + `blog-heading` + `not-found`) confirmed registering
correctly with zero prior cache bias. Demo content WXR imported fresh
(21 items, matching Phase 5's count); Reading Settings reapplied
(same one-time manual step Phase 5 documented, not a new issue).
Full click-through of all 17 real routes (front page, all 8 nav pages,
4 case studies, a blog post, search, and a deliberately-broken URL) —
**discovered mid-check** that `wp_remote_get( home_url() )` fails inside
the `cli` container with a Docker-networking error (`localhost:8888`
doesn't resolve to the WordPress container from the cli container's own
network namespace) — the same class of Docker-networking quirk Phase 5
hit with media re-import, not a theme bug. Worked around by requesting
`http://wordpress/...` (the container's internal Docker-network
hostname) instead. Result: **all 17 routes returned the expected status
code with exactly one `<h1>` each.** `wp-content/debug.log` **did not
even exist** after the full click-through — a fully clean pass, matching
Phase 5's Pass 2 result. All `phase6-*.php` temporary debug/verification
scripts removed from the theme directory before commit. wp-env stopped.

**Exact counts, for the record:**
- Theme Check: 0 REQUIRED (fixed: 0, none ever existed) · 1 WARNING
  fixed (copyright notice) · 1 invalid-tag INFO fixed (`business`) · 1
  RECOMMENDED left with reason (no custom block styles, not required) ·
  2 pure-INFO items requiring no action.
- phpcs WPThemeReview: 0 ERRORS on final run · 0 WARNINGS left · 2
  findings suppressed with documented reasons during Step 2 (both
  WordPress-core-endorsed FSE functions the sniff predates).
- `.pot`: 220 msgid entries.
- Patterns: 15 registered (13 original + 2 new Phase 6 utility
  patterns), all 9 categories correctly wired.

**Phase 7 — Packaging (complete)**

**Step 0 — final translatable-string sweep:** grepped every
`templates/*.html` and `parts/*.html` for literal rendered text
(pattern `>[A-Za-z][^<]*<`, plus a check for `label`/`buttonText`/
`placeholder`/`content` JSON attributes). Found 6 matches; 5 were
false positives already covered by Phase 6's block-bindings work (the
static "No posts found."/"No results found."/"All rights reserved."
text in `.html` files is editor-fallback markup only — a block binding
overrides it at render time, confirmed by checking the block comment's
`metadata.bindings` on each). **The 6th was a real gap Phase 6 missed:**
`header.html` and `header-transparent.html` both hard-coded a literal,
un-translated "Get in Touch" button (`core/button` block, not covered
by any binding). Fixed the same way Phase 6 fixed "Blog"/"Page not
found" — a new `Inserter:false` pattern (`patterns/header-cta-button.php`)
referenced via `<!-- wp:pattern {"slug":"godevs-portfolio/header-cta-button"} /-->`
in both template parts. Re-ran `wp i18n make-pot`: 220 → 222 entries
(2 new: the pattern's auto-extracted title/description; "Get in Touch"
itself was already a known msgid from `footer-cta.php`, so this just
added a second `#:` reference line, not a new string). Live-verified
the button still renders correctly on the front end after the change.

**Step 1 — version & compatibility headers, verified live, not
guessed:** `wp core version` on a running wp-env instance reported
**7.0.2** as the actual current stable core (confirmed independently
against the live `api.wordpress.org/core/version-check/1.7/` response,
which also showed 6.9.5 and 6.8.6 as the preceding release lines).
Set `Tested up to: 7.0` (matches the confirmed live version) and
`Requires at least: 6.7` (a realistic few-versions-back baseline, still
comfortably above the theme's real functional floor — Block Bindings
API needs 6.5+). `php -v` inside the container confirmed PHP 8.3.32;
grepped `inc/` and `patterns/` for PHP 8-only syntax (nullsafe `?->`,
`match()`, `readonly`, `enum`, attributes, named arguments) — zero
matches (all regex hits were CSS/HTML false positives) — so
`Requires PHP: 7.4` stays accurate. Bumped `Version` to **0.3.0** in
`style.css`, `functions.php`, and `readme.txt`'s Stable tag, per Phase
6's own lesson: a new pattern file was added this phase
(`header-cta-button.php`), and the pattern-registry site-transient
cache is keyed to the `Version` header, so skipping the bump would
have silently broken registration again. Live-verified post-bump: all
**16** patterns register, version confirmed via `wp_get_theme()->get('Version')`.

**Also found via the live WP.org feature-tag API
(`api.wordpress.org/themes/info/1.2/?action=feature_list`):** the
`threaded-comments` tag was invalid for this theme specifically — not
because the tag name doesn't exist in the taxonomy (it does), but
because the theme has no comment-display markup anywhere (`single.html`
has no `comment-template` block; grepped the whole theme for
`comment-template`/`comments-query-loop`/`comment-form` block markup,
found none — only a boilerplate `add_theme_support('html5', [...,
'comment-form', ...])` call that doesn't itself render anything).
Removed the tag as inaccurate rather than leave a claim the theme
doesn't back up. Added `style-variations`, a real, verified feature
(3 style variations, tested since Phase 1/4) that had simply been
omitted from the original Phase 0 tag list.

**Step 2 — `readme.txt`, written in full:** Contributors: `wp_nayanray`.
Description trimmed to exactly 150 words (word-counted with a script,
not eyeballed), reflecting `docs/PRD.md`'s differentiation thesis.
Installation, FAQ (6 questions — the 2 minimum specified plus 4 more
covering the no-contact-form scope decision, style-variation switching,
and the accessibility-ready claim), Screenshots, and Resources sections
written. **Changelog dates are real, not fabricated:** pulled from
`git log --date=short` — every phase's commit landed on the same
calendar day (2026-07-19), so the changelog collapses the internal
phase history into the three version numbers that actually matter
publicly (0.1.0 initial scaffold, 0.2.0 Phase 6 QA pass, 0.3.0 this
packaging pass) rather than inventing distinct per-phase dates that
don't exist. Resources section explicitly states zero third-party
assets (placeholder images theme-original since Phase 3, system fonts
only, no bundled code libraries) rather than leaving it to silence.

**Step 2b — `screenshot.png` and `.wordpress-org/` assets, captured
with a real browser, not mocked up:** Playwright (with its bundled
Chromium) turned out to be available in this environment — installed
into a scratchpad Node project, confirmed the host machine (unlike the
`cli` Docker container) can reach `localhost:8888` directly. Captured
`screenshot.png` as a real 1200×900 PNG of the live front page rendered
with actual demo content (confirmed via reading the PNG header bytes,
not just trusting the capture call). This is a genuine capability
upgrade over every prior phase's honestly-flagged "no real
browser/screenshot tool available" limitation — worth knowing for any
future phase that needs visual verification. Built `icon-256x256.png` +
`icon.svg` (a serif "G." monogram, primary/accent palette) and
`banner-1544x500.png` + `banner-772x250.png` (asymmetric editorial
layout echoing the PRD's differentiation thesis) as hand-written
HTML/CSS pages styled with the exact `theme.json` token values, then
screenshotted at exact required dimensions. All theme-original, not
third-party. Placed at `godevs-portfolio/.wordpress-org/` — Phase 0's
scaffold had already left a `.gitkeep` there establishing that as the
intended location (not the repo root, which is where they were first,
briefly, mistakenly created).

**Step 3 — clean distribution zip:** staged a directory containing only
the 12 required paths (`style.css`, `theme.json`, `functions.php`,
`readme.txt`, `screenshot.png`, `templates/`, `parts/`, `patterns/`,
`styles/`, `assets/`, `inc/`, `languages/`), stripped `.gitkeep`
placeholders, explicitly excluding `docs/`, `.wordpress-org/`,
`demo-content/` (lives at the repo root, never inside the theme
folder), `.wp-env.json`, and any Composer/phpcs tooling (already
correctly outside the theme directory since Phase 6). **Found and fixed
a real, generalizable bug in the zip-building process itself:**
PowerShell's `Compress-Archive`, and even .NET's own
`[System.IO.Compression.ZipFile]::CreateFromDirectory()`, both wrote
zip entries with literal **backslash** path separators
(`godevs-portfolio\style.css`) on this Windows machine — confirmed via
an independent Node-based zip reader (`adm-zip`), not just trusting
either tool's own listing output. Backslash is not a valid zip-entry
path separator per spec; on Linux (inside the Docker container),
`ZipArchive` doesn't treat it as a directory separator at all, so it
extracts as one bizarre flat filename with literal backslashes in it
instead of a real nested folder — a silent, serious packaging bug that
would have shipped a `.zip` no WordPress.org install (or any real
Linux-hosted site) could install, only ever tested by someone unzipping
by hand or in a GUI on Windows, which happens to hide the problem.
**Fixed** by rebuilding with `adm-zip` (a pure-JS implementation that
correctly writes forward slashes) instead of either Windows-native
option. Flagging this prominently: **any future packaging on this
machine must not use `Compress-Archive` or .NET's `ZipFile` class for
files destined for a Linux host** — verified the fix by reading the
zip's raw entries with a second, independent tool, not just re-running
the same buggy tool and hoping.

**Step 4 — real-host media-import verification:** could not be
completed. No SSH/FTP credentials, deploy scripts, or reachable
external hosting were present in this environment; the only
plausibly-relevant integration (a WordPress.com MCP connector) requires
an OAuth flow this non-interactive session cannot run. **Flagging as an
explicit open item, not resolved:** whether the Phase 5 media-import
failure was genuinely Docker-sandbox-only (as suspected, and as its own
error message strongly implied — a `localhost:8888` DNS resolution
failure specific to the `cli` container's network namespace) has still
never been verified against a real, non-Docker host. Nayan should
either test the WXR import on a real WordPress install before
submission, or accept the risk given how specific and well-understood
the suspected cause already is.

**Step Final — full clean-install verification from the packaged `.zip`
itself, not the dev directory:** stopped the dev wp-env instance,
started a second, separate, minimal wp-env instance (no theme
bind-mount) from a scratchpad config, and used `wp theme install
<zip>` — the same code path a real WordPress.org install would use —
rather than the dev bind-mount every prior phase relied on. **This is
exactly where the backslash zip bug above was actually caught**: the
first `wp theme install` attempt (before the zip fix) failed with "The
theme is missing the style.css stylesheet," which took real debugging
(comparing `unzip_file()`'s output against `Theme_Upgrader::run()`'s
raw `source_files` list, discovering stale broken debris left in
`wp-content/themes/godevs-portfolio/` from the first failed attempt was
contaminating later attempts) to root-cause correctly rather than
mis-diagnose. After cleaning the stale debris and fixing the zip:
`wp theme install godevs-portfolio.zip --activate` succeeded cleanly.
Theme Check re-run against the zip-installed theme: identical clean
result to Phase 6 (`PASS: YES`, same 3 non-blocking items). `phpcs`
re-run directly against the staged zip contents (not the dev directory
— the exact bytes that got zipped): exit 0, zero errors/warnings.
Demo content imported fresh (21 items, matching every prior phase).
Full 17-route click-through: all expected status codes, exactly one
`<h1>` each, including confirming the new "Get in Touch" button
translation fix renders correctly. `debug.log` contained zero entries
newer than an earlier `wp plugin install` command's own unrelated
wp-cli/Symfony PHP-8.3-deprecation noise (that tooling's own internal
code, not the theme's) — nothing from the import, Reading Settings
change, permalink change, or the full click-through itself.
`readme.txt` structurally validated clean via a script checking every
required header field, all 6 standard sections, FAQ sub-heading levels,
and that the Stable tag has a matching changelog entry — WP.org's own
web-based readme validator should still be run once more at actual
submission time as a final sanity check, since this script-based check
isn't a substitute for their canonical parser. Destroyed the temporary
verification instance and stopped the dev instance when done. Final
verified zip copied to `dist/godevs-portfolio-0.3.0.zip` (git-ignored
build output, matching the repo's existing `.gitignore` convention).

**Exact counts, for the record:**
- `.pot`: 222 msgid entries (was 220 after Phase 6).
- Patterns: 16 registered (15 after Phase 6 + `header-cta-button`).
- Theme version: 0.2.0 → 0.3.0.
- Zip: 46 files, 12 top-level paths, no `.git`/`docs/`/`.wordpress-org/`/dev-tooling.

**Phase 8 — Final Submission Readiness (checklist reconciliation
complete)**

**Step 1 — full checklist reconciliation performed, not rubber-stamped:**
re-read every item in `docs/WPORG_CHECKLIST.md` and, rather than trust
the existing ☑ marks, re-verified a cross-section of them live and
diffed the theme's actual header fields across `style.css`/`readme.txt`/
`functions.php` for drift. **Found and fixed 2 real, previously-uncaught
issues** in the process (both inside items Phase 7 had already marked
☑, which is exactly the kind of gap this reconciliation pass exists to
catch):
1. `style.css`'s header `Description:` field was still the literal
   Phase 0 placeholder text ("Placeholder description — expand in
   Phase 5") — Phase 7 wrote a real description into `readme.txt` but
   never synced `style.css`'s own header field, which is what actually
   shows in wp-admin's theme list/details screen. Fixed to match.
2. `readme.txt`'s `Contributors: wp_nayanray` **does not correspond to
   a real WordPress.org account** — checked live against
   `profiles.wordpress.org/wp_nayanray/`, which returns HTTP 404. This
   value was written in Phase 7 without ever being verified against
   reality. Replaced with an unmissable placeholder
   (`REPLACE_WITH_YOUR_WORDPRESS_ORG_USERNAME`) rather than a
   different guessed username, since a wrong-but-plausible-looking
   username is a worse failure mode than an obvious one — **this is
   now a required manual step for Nayan**: he must have (or create) a
   real wordpress.org/WordPress.com account and put its actual
   username here before submitting, since Contributors must match the
   submitting account.

Every other item in `docs/WPORG_CHECKLIST.md` reconfirmed CONFIRMED, no
other drift found. Full item-by-item reconciliation reported to Nayan
in this phase's chat response (not duplicated here in full — see that
response or re-read `docs/WPORG_CHECKLIST.md` directly, which is now
the authoritative source of truth for status).

**Exactly one item remains genuinely OPEN:** real-host (non-Docker)
media-import verification, unchanged from Phase 7 — still blocked on
no external host being reachable from this environment. Needs Nayan to
test the WXR import on a real WordPress install (or explicitly accept
the risk) before submitting.

**Step 2 — pre-submission housekeeping:**
- **Slug/name collision, checked live against the official WordPress.org
  Themes API**, not assumed from the Phase 0 flag alone: direct slug
  lookup (`api.wordpress.org/themes/info/1.2/?action=theme_information&request[slug]=godevs-portfolio`)
  → `{"error":"Theme not found"}`. `wordpress.org/themes/godevs-portfolio/`
  → HTTP 404. Directory search for "GoDevs Portfolio" and for "godevs"
  → zero results both times. **Confirmed clear as of 2026-07-19** —
  reconfirmed rather than trusted from however long ago Phase 0 first
  raised it, since the prompt correctly noted real theme slugs can get
  taken over a multi-week build.
- **`dist/godevs-portfolio-0.3.0.zip` re-verified, and rebuilt after
  the 2 fixes above** (so it is deliberately *not* byte-identical to
  the zip Phase 7 originally produced — the 2 real issues found this
  phase are now baked in). Rebuilt with the same `adm-zip` tool Phase 7
  established as the only reliable option on this machine (51 file
  entries, forward-slash paths, confirmed via an independent reader).
  Re-ran the full Phase 7 Step Final gauntlet against the rebuilt zip
  on a fresh, separate wp-env instance: `wp theme install` succeeded
  clean on the first try, Theme Check `PASS: YES` (identical 3
  non-blocking items as every prior run), phpcs exit 0, `readme.txt`
  structural validation clean, `debug.log` clean (only the same
  unrelated wp-cli/Symfony tooling noise as Phase 7). Final SHA-256:
  `73bd8bfe3fd9d897a26bff7630e663ee27689d2a42dd82bf33ca3a99612a9b03`
  (51 files).
- **Minor, non-blocking note for Nayan:** `Theme URI`
  (`https://godevs.net/themes/godevs-portfolio`) 404s — the root domain
  `godevs.net` itself is live (HTTP 200), just not that specific
  sub-page yet. Not a Theme Review blocker (many themes' dedicated
  theme pages go live after acceptance), but worth building before or
  shortly after submission so the link isn't dead indefinitely.
- Full "Submission steps for Nayan" writeup delivered in this phase's
  chat response: WordPress.org account creation/login, the theme
  submission page, upload flow, and what to expect from the review
  queue (single-theme-at-a-time, typical turnaround, common
  even-on-clean-themes feedback categories like licensing/credit-line
  phrasing).

**Step 3 — post-submission plan, for whichever future session picks
this up:** a reviewer requesting changes is a **normal, expected
outcome**, not a failure state, even for a theme this thoroughly
verified — Theme Review is manual and reviewers sometimes flag
stylistic/phrasing preferences beyond what automated Theme Check/phpcs
catch. When that happens: **read the reviewer's actual ticket comments
first**, treat each one exactly like any other phase's verification
finding in this project (root-cause it, fix it for real, re-verify live
via wp-env — not a surface-level patch), bump the `Version` header
again (per the Phase 6 lesson — the pattern-cache bug applies to real
end users too), rebuild `dist/godevs-portfolio-*.zip` with the same
`adm-zip` approach, and **reply on the existing ticket** with what
changed. Do not create a new submission or a new theme slug — WP.org
review tickets are iterative, not one-shot.

**Project status: submission-ready, pending only Nayan's manual
account-level steps** (creating/confirming his WordPress.org account,
filling in the real `Contributors` username, optionally the real-host
media-import test, and actually clicking submit — none of which this
environment can do on his behalf).

**Phase 9 — Multi-Niche Expansion Planning (complete, planning only —
no patterns/templates/content built)**

Produced two new planning documents:
**[docs/NICHE_DEMOS.md](NICHE_DEMOS.md)** (final niche list, per-niche
page/pattern breakdown) and
**[docs/PATTERN_LIBRARY.md](PATTERN_LIBRARY.md)** (full shared pattern
library by category, existing + new). `docs/PRD.md` Sections 1, 3, 4,
5, 6 updated for multi-niche scope, plus a new Section 8 covering the
shared-library architecture rule and medical/legal content guidelines.

**Niche list: 8, one consolidation from the 9-item working list.**
Merged "Marketing Firm" into "Creative Agency" — not structurally
distinguishable from it (same page structure, same funnel, only copy
differs), and building it separately would mean shipping a
near-duplicate demo package, which conflicts with this project's own
anti-duplication discipline. Flagged as a sign-off item for Nayan, with
a documented middle-ground option (reinstate as a 9th niche with one
genuinely new pattern, `results-metrics.php`) if he'd rather stay at 9.

**Pattern count: recommending ~27 content-facing patterns (30 total
incl. 3 existing utility patterns), not 50+.** The brief explicitly
invited pushing back on the 50+ target if it didn't hold up — it
doesn't, without padding. 8 well-differentiated niches, built on top of
an already-thorough 13-pattern shared core, genuinely need roughly 14
new patterns (8 new core + 6 niche variants) to cover every real
structural gap identified per-niche. Getting to 50 would mean building
near-identical siblings that differ only in copy — exactly what
`docs/PATTERN_LIBRARY.md`'s reuse table is designed to prevent (e.g.
Medical's "Conditions Treated" and Law's "Practice Areas" both reuse
`services-grid.php` as-is rather than getting their own pattern; a
would-be `awards-certifications.php` turned out to be `logo-cloud.php`
with different copy). **Page count (59) clears 50+ comfortably** without
this problem, since pages recombine a shared pattern set rather than
each needing a unique pattern.

**Two real architectural findings surfaced during planning, both
required Phase 10 groundwork before any niche-specific building
starts:**
1. The 5 existing dedicated templates (`page-services.html`,
   `page-portfolio.html`, `page-team.html`, `page-pricing.html`,
   `page-contact.html`) currently hardcode the Creative Agency's
   specific pattern stack directly in the template file — correct when
   each was used by exactly one demo page (Phase 2's rule), but now
   multiple niches need a "Services" page with *different* pattern
   stacks. These need converting to generic post-content composition
   (matching `page.html`), the same fix already applied to
   `page-case-study.html` in Phase 5 for the same reason (it went from
   1 page to 4). Kept as separate named templates rather than
   collapsed into `page.html`, purely for Site Editor template-picker
   UX once there are 59+ pages across 8 niches to organize.
2. `front-page.html` currently hardcodes the Agency's home-page pattern
   stack too, and each niche needs a different one. Same fix: convert
   to post-content, and each niche's WXR ships its own "Home" Page;
   the demo `README.md` for each niche adds the same one-time Reading
   Settings step already documented for the Agency's Blog/posts-page
   assignment (Phase 5 precedent) — nothing new to invent, same
   established pattern. Also recommending `hero-agency.php`'s
   `is_front_page() ? 1 : 2` heading-level logic (Phase 4) get
   extracted into a shared `inc/` helper before more hero patterns
   (`hero-video.php`, any future niche hero) each reimplement it
   ad-hoc.

**Feasibility gate findings (full reasoning in `docs/PATTERN_LIBRARY.md`
and `docs/NICHE_DEMOS.md`):**
- Medical's "Book Appointment" idea renamed to **"New Patients"** and
  scoped purely informational (phone + hours + what to expect) — no
  booking form, no appointment CPT, no scheduling plugin integration,
  consistent with non-negotiable rule 4 and the existing no-required-
  plugin stance. `appointment-cta.php` is a static call-to-call block,
  nothing more.
- The brief's "before-after-slider" idea for Interior Designer would
  need custom JavaScript for a real draggable comparison — conflicts
  with the project's established zero-custom-JS precedent
  (`testimonials-carousel-static.php`, Phase 3). Recommending a static
  `before-after-columns.php` (two `core/columns`, no JS) instead — same
  visual idea, no interactivity risk. Flagged explicitly as a
  brief-vs-implementation naming difference, not a silent substitution.
- `gallery-categories.php` (Photographer, Interior Designer) must be
  static linked category cards, not a JS-filtered single-page gallery —
  same reasoning.
- `location-hours.php` must use a static placeholder graphic, not a
  live map embed — a live embed is exactly the third-party remote call
  the REQUIRED "no remote HTTP calls" checklist item exists to prevent.
- `newsletter-signup.php` considered and rejected outright (not
  deferred) — any working version needs a backend, conflicting with the
  no-required-plugin rule the same way a real contact form already
  does.
- Medical/Law demo copy guidelines (fictional-only credentials/stats,
  no real clinical claims, no guaranteed-outcome legal language, no
  implied compliance claims) now written into `docs/PRD.md` Section 8.

**Proposed phase breakdown for Phase 10+ (batched so no phase builds
20+ patterns at once, matching how every prior phase stayed scoped and
independently verifiable):**

- **Phase 10 — Shared library groundwork.** Build the 8 new core
  patterns (`faq-list`, `process-steps`, `testimonial-spotlight`,
  `team-member-profile`, `hero-video`, `location-hours`, `value-props`,
  `company-timeline`) plus the required template-architecture
  groundwork above (convert the 5 dedicated templates + `front-page.html`
  to post-content, add the new `page-team-member.html` template, extract
  the shared hero-heading-level helper). No niche-specific demo content
  yet. Verification: Theme Check + phpcs + contrast re-check for every
  new pattern, exactly like Phase 3's original 13-pattern build.
- **Phase 11 — Niche Group A: Freelance Designer/Developer + Web
  Development Studio.** Closest siblings to the already-built Agency
  demo, lowest new-pattern risk (`portfolio-grid-simple` only) — a
  deliberate warm-up group before the higher-risk niches. Builds both
  niches' demo pages, patterns, and separate WXR exports.
- **Phase 12 — Niche Group B: Photographer + Interior Designer +
  Architect.** Grouped because they share `gallery-categories.php` and
  the "visual portfolio of physical work" funnel shape. New patterns:
  `portfolio-grid-masonry`, `portfolio-grid-project`,
  `gallery-categories`, `before-after-columns`.
- **Phase 13 — Niche Group C: Medical Practice + Law Firm.** Kept as
  its own phase despite light new-pattern work (`appointment-cta` only)
  specifically because of the content-risk review these two niches
  need — bundling them into a bigger phase risks that review getting
  rushed.
- **Phase 14 — Multi-niche QA & packaging.** This expansion's version
  of Phases 6+7 combined: Theme Check + phpcs across every new pattern
  and niche, a full i18n sweep of the new copy, a WCAG contrast
  re-check for any new token combinations the new patterns introduce, a
  fresh-wp-env import test for all 8 separate WXR files (not just the
  Agency one), updated `readme.txt`, and a final packaged `.zip`.

_Update this section at the end of every session so the next session can
resume without re-reading the whole repo._
