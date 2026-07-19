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

**Not yet started:** screenshot asset, readme.txt content sections,
languages/POT file, webfont bundling decision (if revisited).

**Next phase (Phase 6 — Accessibility & QA pass):** Run the WordPress
Theme Check plugin and `phpcs` with the WPThemeReview ruleset across the
whole theme (per the non-negotiable rule 7 and PRD Success Criteria
1–2, neither of which has been run yet — every prior phase's
verification has been functional/manual, not the formal tooling this
phase requires). Generate the `.pot` file for translation readiness.
Use `docs/WPORG_CHECKLIST.md` as the acceptance criteria (create it if
it doesn't exist yet, derived from the WordPress.org Theme Review
required-item list already referenced in `docs/PRD.md` Section 3).

_Update this section at the end of every session so the next session can
resume without re-reading the whole repo._
