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
✗ not applicable (note explains why).

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
      compatible license declared — present since Phase 0; Stable tag
      and changelog updated to 0.2.0 in Phase 6 (see the theme-version
      finding below). Content sections (Description/Installation/FAQ/
      Screenshots) remain TODO — Phase 7 packaging task, out of this
      phase's scope.
- [x] `screenshot.png` exists at an acceptable aspect ratio — placeholder
      PNG exists (Phase 0, 1200×900, correct 4:3 ratio). Real screenshot
      content is a Phase 7 packaging task.
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

- [x] `.pot` file present and reasonably complete — 220 `msgid` entries
      in `languages/godevs-portfolio.pot`, spot-checked that every
      string fixed in this phase (`"Blog"`, `"Page not found"`,
      `"All rights reserved."`, `"No posts found."`,
      `"No results found."`, the aria-label strings, the new
      `aria-label="Learn more about %s"` string) is present.
- [x] Demo content imports cleanly — unchanged from Phase 5's two
      documented, gracefully-degrading caveats (media re-fetch over
      Docker's network loopback, Reading Settings not surviving WXR) —
      neither is blocking, both are documented in
      `demo-content/README.md`.

_All items above verified during Phase 6 (wp-env, Theme Check plugin,
phpcs WPThemeReview, and direct grep/registry introspection — not code
review alone). Re-confirmed clean on a second, fully fresh `wp-env`
instance in Step Final; see `docs/CLAUDE.md` Phase 6 notes for that
verification's exact results._
