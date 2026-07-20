# WordPress.org Theme Review Checklist — GoDevs Portfolio

Derived from the [Theme Review Team's required](https://make.wordpress.org/themes/handbook/review/required/)
and [recommended](https://make.wordpress.org/themes/handbook/review/recommended/)
items, plus the [accessibility-ready](https://make.wordpress.org/themes/handbook/review/accessibility/accessibility-ready/)
requirements (this theme's `style.css` Tags line claims
`accessibility-ready`, so those items are REQUIRED for us, not optional).

This file did not exist before Phase 6 — `docs/CLAUDE.md`'s Phase 5 entry
referenced it as if it already existed, which was an oversight; created
as Phase 6's actual first action, before Step 0.

Status legend: ☐ not yet verified · ☑ verified (note explains how) ·
✗ not applicable (note explains why) · ~ blocked, needs manual
follow-up outside this environment (note explains what and why).

## REQUIRED

- [x] No hard-coded design values outside `theme.json` (hex/px in
      patterns/templates/parts) — full-repo grep re-audit (including the
      new Phase 6 files: `blog-heading.php`, `not-found.php`, the
      `inc/` edits) returned zero matches. `header-transparent.html`'s
      contrast bug (Step 3) was a *token misuse* bug, not a hard-coded
      value — still token-driven, just the wrong token for its actual
      background.
- [x] Every echoed PHP value is escaped — confirmed by phpcs
      WPThemeReview (Step 2), zero errors, exit code 0, both before and
      after Steps 3–4's new code.
- [x] Every user-facing string is translatable, text domain
      `godevs-portfolio` matching the `style.css` header — `.pot` has
      220 entries (Step 4). Real gap found and fixed: `wp i18n make-pot`
      does not extract *any* string (content or attribute) from `.html`
      template/part files, only from `.php` files — confirmed empirically
      (control check: PHP pattern strings present; template strings
      absent). Fixed via two new `Inserter:false` patterns
      (`blog-heading.php`, `not-found.php`) for substantial content, 3
      new Block Bindings sources for small inline fragments ("No posts
      found.", "No results found.", "All rights reserved."), a
      `render_block` filter for `core/navigation`'s `ariaLabel` (Block
      Bindings doesn't support that attribute), and removing 2 redundant
      `core/search` label/buttonText overrides that duplicated WP core's
      own already-translated defaults. Grep audit for `esc_html(`/
      `esc_attr(` called on a string literal (as opposed to a variable) —
      zero matches, confirming no remaining un-wrapped static string in
      any `.php` file.
- [x] No theme-side CPT/taxonomy registration — grep for
      `register_post_type`/`register_taxonomy` across the whole theme:
      zero matches.
- [x] No settings page duplicating Site Editor/Customizer — grep for
      `add_theme_page`/`add_options_page`/`register_setting`: zero
      matches.
- [x] No unsanitized use of `$_GET`/`$_POST`/`$_REQUEST`/`$_SERVER` —
      phpcs WPThemeReview (which includes superglobal-sanitization
      sniffs) reports zero errors; theme also has zero direct superglobal
      reads (grep-confirmed).
- [x] No `eval()`, obfuscated code, or base64-decoded dynamic execution —
      grep-confirmed zero matches for `eval(`, `base64_decode(`,
      `assert(`.
- [x] No direct database queries bypassing the WP API — grep for
      `$wpdb->query`/`$wpdb->get_results` etc.: zero matches, theme uses
      only `wp_insert_post()`/`WP_Query`/core APIs throughout.
- [x] No PHP short tags — phpcs WPThemeReview flags this
      (`Generic.PHP.DisallowShortOpenTag`); zero errors.
- [x] No deprecated WordPress functions — phpcs WPThemeReview flags
      this; zero errors. (Separately: the *tooling* itself hit a real
      PHP 8.1+ deprecation incompatibility in WPCS 2.x's
      `PrefixAllGlobalsSniff` — worked around by suppressing PHP
      deprecation notices at the CLI level when invoking phpcs; this is
      a phpcs-vs-PHP-version issue, not a finding about our code.)
- [x] No remote/third-party HTTP calls without explicit user action —
      grep for `wp_remote_get`/`wp_remote_post`/`curl_init`: zero
      matches.
- [x] `readme.txt` has a valid WordPress.org header block and a GPL-
      compatible license declared — Phase 7 wrote the complete file
      (Description/Installation/FAQ/Screenshots/Changelog/Resources),
      structurally validated clean via script (all required headers,
      all 6 standard sections, correct FAQ sub-heading levels, Stable
      tag has a matching changelog entry). Stable tag 0.3.0. **Phase 8
      found and fixed 2 real issues this item's Phase 7 sign-off
      missed:** (1) `style.css`'s header `Description:` field was still
      the Phase 0 placeholder text ("Placeholder description — expand
      in Phase 5"), never synced with the real description Phase 7
      wrote into `readme.txt` — fixed to match. (2) `readme.txt`'s
      `Contributors: wp_nayanray` was checked against the live
      WordPress.org profile API (`profiles.wordpress.org/wp_nayanray/`
      → 404) and does not correspond to a real account — this value was
      apparently invented in Phase 7 without verification. Replaced with
      an unmissable placeholder
      (`REPLACE_WITH_YOUR_WORDPRESS_ORG_USERNAME`) since a wrong-but-
      real-looking username is worse than an obvious placeholder; this
      is now a required manual step for Nayan before submission (see
      `docs/CLAUDE.md` Phase 8 notes). Zip rebuilt and re-verified
      (`wp theme install` + Theme Check + phpcs + readme structural
      validation, all clean) after both fixes.
- [x] `screenshot.png` exists at an acceptable aspect ratio — Phase 7
      replaced the placeholder with a real 1200×900 PNG captured live
      via Playwright/Chromium from the actual rendered demo home page
      (dimensions confirmed by reading the PNG header bytes).
- [x] Text domain in `style.css` header matches the theme slug exactly —
      confirmed (`godevs-portfolio` both places), and Theme Check's own
      INFO-level check confirms this independently ("Only one
      text-domain is being used... The domain found is
      godevs-portfolio").
- [x] License/attribution for bundled third-party assets — theme bundles
      zero third-party assets (system fonts only, `assets/images/*.png`
      are self-generated placeholder graphics, not third-party). No
      Resources-section entry needed; existing "no third-party assets"
      statement in `readme.txt` remains accurate.
- [x] WordPress Theme Check plugin reports zero REQUIRED-level flags —
      confirmed: zero REQUIRED items were ever present across any run.
      One real WARNING (missing copyright notice) and one real INFO
      (invalid `business` tag) were found and fixed; see Step 1 below.
- [x] Theme slug/name does not collide with an existing WordPress.org
      theme — Phase 8: checked live against the official WordPress.org
      Themes API (`api.wordpress.org/themes/info/1.2/`). Direct slug
      lookup for `godevs-portfolio` → `{"error":"Theme not found"}`.
      `wordpress.org/themes/godevs-portfolio/` → HTTP 404. Directory
      search for both "GoDevs Portfolio" and "godevs" → zero results
      each. Slug and name both confirmed free as of 2026-07-19.

## RECOMMENDED

- [x] phpcs WPThemeReview ruleset reports zero errors — confirmed, exit
      code 0, full report empty, after fixing the `testVersion` default
      (was flagging PHP-5.2-incompatible syntax against our actual
      `Requires PHP: 7.4`) and suppressing 2 findings from
      `WPThemeReview.PluginTerritory.ForbiddenFunctions` with documented
      reasons (`register_block_pattern_category()` and
      `register_block_bindings_source()` — both are WordPress-core-
      endorsed FSE practices this sniff's forbidden-list predates; see
      the inline `phpcs:disable`/`phpcs:ignore` comments in
      `inc/class-block-patterns.php` and `inc/class-theme-setup.php` for
      the full reasoning). Zero warnings left unaddressed.
- [x] Semantic HTML5 structure — unchanged since Phase 2, still true.
- [x] Editor styles loaded — Step 0 finding: `add_editor_style()`
      correctly registers `assets/css/editor.css`, confirmed via
      `get_editor_stylesheets()` returning the resolved URL and the file
      itself returning HTTP 200. The file's content was just a stale
      "TODO: Phase 1/2" comment with no actual rules (correctly empty —
      theme.json's global styles already apply inside the editor
      automatically for any block theme, nothing extra was ever needed);
      docblock updated to state this explicitly instead of leaving a
      dangling TODO.
- [x] Pattern categories registered — Step 0 finding: all 9 categories
      referenced across pattern headers were, in fact, already
      registered (cross-referenced every `Categories:` header value
      against `WP_Block_Pattern_Categories_Registry` programmatically,
      not just by inspection). The "Phase 3 complete" claim held up.
      What did NOT hold up under this phase's scrutiny: the theme's
      Version header had never been bumped since Phase 0, and WordPress
      caches the entire patterns/ directory scan in a *site transient*
      keyed to that version — meaning the 2 new patterns added *in this
      phase* silently failed to register until the version was bumped.
      Documented prominently in `docs/CLAUDE.md` as a recurring risk for
      future phases, not just a one-time fix.

## ACCESSIBILITY-READY (required because the theme claims this tag)

- [x] Sufficient color contrast against real rendered content — **found
      and fixed a real, severe bug**: `header-transparent.html` set
      `textColor:primary-contrast` with no background (intended to
      overlay a hero image, per Phase 2's design, but that overlay
      positioning was never actually implemented), so its text rendered
      against the plain page `background` token instead — measured
      ~1.0–1.1:1 contrast (effectively invisible) across all 4 palettes.
      Fixed by giving it `backgroundColor:primary`, a pairing already
      verified ≥5.7:1 in every palette since Phase 1. Systematically
      cross-checked every other `textColor`+`backgroundColor` combination
      actually used across `patterns/` and `parts/` against the existing
      Phase 1/4 ratio tables — no other overlooked pairing found.
- [x] Visible keyboard focus indicator — confirmed the `:focus-visible`
      CSS rule is present in the served stylesheet (unchanged from
      Phase 1/3 verification).
- [x] Skip-to-content link — unchanged since Phase 2 (WordPress core
      7.0+ provides this automatically); re-confirmed still active.
- [x] No keyboard traps — theme has no custom JS/modal/focus-trapping
      code of any kind (grep-confirmed `assets/js/` is empty).
- [x] Every meaningful image has real, descriptive alt text — multiline
      grep across all 15 `patterns/*.php` (12 original + `contact-info`
      + the 2 new Phase 6 patterns) confirmed all `<img>` tags include a
      real, specific `alt` attribute; zero instances of `alt=""` or a
      missing `alt` attribute anywhere in the repo.
- [x] Correct heading hierarchy, no skipped levels — unchanged since
      Phase 4 (H1 fix); the Phase 6 pattern-based fixes for "Blog" and
      "Page not found" preserve the exact same heading levels the
      hardcoded template markup had.
- [x] Meaningful link/button text — **found and fixed a real issue**:
      `services-grid.php` repeated identical "Learn more" link text
      across all 4 service cards with no distinguishing context (a
      screen-reader "links list" navigation would hear 4 indistinguishable
      "Learn more" entries). Fixed with a per-card `aria-label`
      ("Learn more about %s") that keeps the concise visible text while
      making the accessible name fully descriptive — confirmed live,
      correct label on all 4 cards. No other generic link text
      ("click here", "read more", bare "here") found elsewhere.
- [x] `prefers-reduced-motion` — ✗ not applicable, confirmed by grep: the
      theme has zero CSS `transition`/`animation`/`@keyframes` rules
      anywhere (`style.css`, `assets/css/editor.css`, or any inline
      pattern style), so there is no motion to guard against.
- [x] Form inputs have associated labels — ✗ not applicable, confirmed:
      `contact-info.php` and `page-contact.html` contain zero
      `<input>`/`<textarea>`/`<select>`/`<form>` markup (grep-confirmed);
      the theme has no working contact form by design (see
      `docs/PRD.md`), so there is nothing to label.

## INFO / not yet applicable

- [x] `.pot` file present and reasonably complete — 222 `msgid` entries
      as of Phase 7 (was 220 after Phase 6; +2 from the `header-cta-button`
      pattern's auto-extracted title/description strings after Phase 7's
      Step 0 sweep found and fixed the un-translated "Get in Touch"
      button text).
- [x] Demo content imports cleanly — re-confirmed in Phase 7 on a
      completely separate wp-env instance installed from the packaged
      `.zip` (not the dev directory) — 21 items imported, matching every
      prior phase. Same two documented, gracefully-degrading caveats as
      Phase 5 (media re-fetch over Docker's network loopback, Reading
      Settings not surviving WXR) — neither is blocking, both documented
      in `demo-content/README.md`.
- [x] Distribution `.zip` installs cleanly via `wp theme install` (the
      real-world install path) — Phase 7 found and fixed a serious,
      previously-invisible packaging bug: Windows zip tools
      (`Compress-Archive` and .NET's `ZipFile` class) wrote invalid
      backslash path separators that silently broke installation on
      Linux; rebuilt with a spec-compliant tool and verified the fix by
      actually running `wp theme install` against the rebuilt zip on a
      from-scratch wp-env instance, not just re-inspecting the zip.
- [~] Real-host (non-Docker-sandbox) media-import verification — NOT
      resolved. No external host was reachable from this environment.
      Flagged as an explicit open item for Nayan in `docs/CLAUDE.md`'s
      Phase 7 notes; covers whether the Phase 5 media-import failure
      was genuinely Docker-networking-only (strongly suspected, not
      independently confirmed).

_REQUIRED, RECOMMENDED, and ACCESSIBILITY-READY sections verified during
Phase 6 (wp-env, Theme Check plugin, phpcs WPThemeReview, and direct
grep/registry introspection — not code review alone) and re-verified
during Phase 7 against the actual packaged `.zip`, not just the dev
directory. The two items above still open (readme.txt content and
screenshot.png, previously deferred to "Phase 7 packaging") are now
closed; only the real-host media-import item remains genuinely open,
requiring Nayan's manual verification since no external host exists in
this environment. See `docs/CLAUDE.md` Phase 7 notes for full detail._

## Phase 14 re-verification (multi-niche expansion, 8 demos / 59 pages)

Every REQUIRED/RECOMMENDED/ACCESSIBILITY-READY item above was
re-verified from scratch against the current, much larger codebase (30
registered patterns vs. Phase 6/7's 15, 7 custom templates vs. 5) — not
assumed to still hold just because it held at a smaller scale:

- **Theme Check:** `PASS: YES`, 38 checks, identical 3 non-blocking
  items as every prior phase (1 RECOMMENDED — no `register_block_style`,
  still intentionally not implemented — and 2 pure-INFO items). Re-run
  twice: once against the dev directory, once against a theme installed
  from the packaged `.zip` on a completely separate, minimal wp-env
  instance with no dev bind-mount. Identical result both times.
- **phpcs WPThemeReview:** exit 0, zero errors, zero warnings across
  all 35 PHP files (`functions.php`, 4 `inc/` files, all 30
  `patterns/*.php`). Re-run against the extracted `.zip` contents
  specifically (not the dev directory) with an identical clean result.
  A real, transient tooling problem was hit and fixed during this
  phase, worth recording: the Composer-installed `squizlabs/
  php_codesniffer` package's own bundled `Generic` standard (referenced
  internally by `WPThemeReview`'s ruleset) went missing mid-session —
  `Generic/ruleset.xml` was absent from `vendor/` even though the
  `Generic/` directory itself still existed, most likely from a partial
  extraction during the original `composer require`. Fixed by removing
  and reinstalling just that one package (`composer install` after
  deleting `vendor/squizlabs`) — not a finding about the theme's code.
- **`.pot` file:** 351 `msgid` entries (up from Phase 7's 222), and
  confirmed **byte-identical** to the already-shipped file — the
  existing `.pot` was already fully current from Phase 10 onward, no
  drift had crept in. Fresh grep audit for hardcoded English strings
  across all `patterns/`, `inc/`, and `.html` templates/parts (the
  known `make-pot`-can't-scan-`.html` gap from Phase 6): zero hits
  anywhere.
- **Alt text:** re-confirmed across all 30 patterns (up from 15) —
  every single `<img>` tag's `alt=` count matches the file's `<img>`
  count exactly, zero empty/missing alt text anywhere.
- **Meaningful link text:** re-confirmed across all 59 shipped demo
  pages (not just the pattern source) — every "Learn more" instance in
  every WXR file has a matching `aria-label="Learn more about..."`;
  zero generic "click here"/"read more" text found anywhere.
- **Contrast:** every unique `textColor`+`backgroundColor`/`gradient`
  pairing actually used across all 30 patterns (3 total: `primary`/
  `primary-contrast`, and `primary-to-accent` gradient/`primary-
  contrast`) computed against all 4 style variations (Studio, Midnight,
  Sandstone, Emerald) — all 12 combinations pass WCAG AA with real
  margin (minimum 5.72:1 against a 4.5:1 requirement). Zero hardcoded
  hex colors found anywhere outside `theme.json`/`styles/*.json`
  (grep-confirmed).
- **Keyboard/focus:** zero `<script>` tags, zero `onclick`/`onkeydown`
  handlers, zero `tabindex="-1"` traps anywhere in `patterns/`,
  `templates/`, or `parts/` — the zero-custom-JS discipline held
  through all of Phases 10–13's additions. `:focus-visible` CSS
  unchanged since Phase 1. `faq-list.php` confirmed still using native
  `core/details`.

**New: the sequential multi-demo import test (never run before this
phase).** Importing all 8 niche WXR files onto a single site — a
scenario `demo-content/README.md` already documented as unsupported,
but had never actually been executed — confirms that assessment and
surfaces exactly what breaks: page-slug collisions cause every
pattern's hardcoded internal links to silently point at whichever demo
happened to import first (not 404s — silent misdirection), only one of
the resulting 8 navigation menus can be active in the header at a time,
Reading Settings can only point at one demo's Home page, and any other
demo's Home page — if it uses a hand-expanded (not live-referenced)
hero pattern — then renders through the generic page template instead
of `front-page.html`, producing an unintended second `<h1>` on that
page. This is a confirmed consequence of importing content designed to
be single-demo-only, not a defect in the shipped single-demo experience
(re-verified separately, per demo, in Phases 11–13 and again in this
phase's Agency/Medical/Law Firm fresh-import passes) — but it's now
documented with specifics in `demo-content/README.md` instead of just
asserted. See `docs/CLAUDE.md` Phase 14 notes for the full investigation.

## Phase 15 update (double-H1 defect fixed, v0.5.1)

The "Correct heading hierarchy, no skipped levels" ACCESSIBILITY-READY
item above was re-verified specifically, not just re-asserted: a real
latent bug was found (5 of the theme's demo niches could render two
`<h1>` elements on their Home page, specifically before Reading
Settings had been configured to point at that page — see
`docs/CLAUDE.md` Phase 15 notes for the full root-cause and fix). Fixed
by making every niche's Home hero pattern a live `wp:pattern` reference
again (driven by a new `godevs-portfolio/hero-field` block binding
source for per-niche copy) instead of hand-expanded static markup — a
live reference's heading level responds correctly to
`is_front_page()` on every request, a hand-expanded one cannot. Two
niches (Medical, Law Firm) were explicitly tested via fresh WXR import
in both the pre- and post-Reading-Settings state, confirming exactly
one `<h1>` in each state; the sequential 8-demo import test from Phase
14 was re-run from scratch and confirmed all 8 niches now show exactly
one `<h1>`, with the separate (and already correctly documented)
cross-niche link-collision limitation unchanged. Theme Check and phpcs
were both re-confirmed clean against the fix. Version bumped 0.5.0 →
0.5.1.

## Phase 16 update (onboarding dashboard + one-click demo import, v0.6.0)

- [x] **No settings page duplicating Site Editor/Customizer** —
      re-verified against the new `Appearance → GoDevs Portfolio` page
      specifically, not just re-asserted: grepped
      `inc/class-dashboard.php` for `set_theme_mod`/`update_option`/
      `add_option` — exactly one match, a bookkeeping option recording
      which demo(s) have been imported (not a color/typography/
      spacing/layout value); confirmed only `add_theme_page()` is used
      (no `add_menu_page()`/`add_options_page()`, so no new top-level
      admin menu); confirmed no "Save Changes"-style persisted design
      state anywhere on the page. The theme works fully whether or not
      this page is ever visited.
- [x] **No `.xml` files in the theme package** — a REQUIRED item not
      previously listed here because no prior phase had ever bundled a
      non-`.php`/`.css`/`.json`/`.png`/`.txt` file type in the package.
      **Found the hard way, not assumed:** this phase's first working
      version of the demo-import feature bundled the existing
      `demo-content/*.xml` WXR exports directly inside the theme
      package, and Theme Check flagged it immediately — "XML file
      found. This file must not be in the production version of the
      theme." Fixed by converting the bundled demo content to plain
      PHP functions (`demo-content/*.php`, generated once from the
      same reviewed WXR content) that call `wp_insert_post()` directly
      — no XML, no WXR parsing, anywhere in the shipped theme.
      Re-confirmed clean on the next Theme Check pass. Added as its
      own checklist line so this specific constraint isn't
      rediscovered the hard way again in a future phase.
- [x] **No required plugin dependency** — re-confirmed for this new
      feature specifically: one-click demo import uses only
      `wp_insert_post()`/`update_post_meta()`/core APIs, no plugin of
      any kind (the original approach considered using the WordPress
      Importer plugin's own `WP_Import` class was abandoned entirely
      as part of resolving the `.xml`-in-package issue above — a
      strictly stronger position for this goal, not just a workaround).
- [x] **Theme Check full re-run** — `PASS: YES`, 38 checks, identical 3
      non-blocking items as every prior phase, confirmed after the fix
      above (and confirmed **failing** with 1 REQUIRED before it, for
      the record — this item genuinely caught something).
- [x] **phpcs WPThemeReview** — exit 0, zero errors, zero warnings
      across `inc/class-dashboard.php`, `functions.php`, and all 8 new
      `demo-content/*.php` files, both dev directory and the packaged
      `.zip`'s actual extracted bytes.
- [x] **`.pot` file** — 391 msgid entries (up from Phase 15's 351),
      new dashboard strings spot-checked present.

_All sections above remain accurate as of Phase 16 (v0.6.0). Only the
real-host media-import item (Phase 7) is still genuinely open._
