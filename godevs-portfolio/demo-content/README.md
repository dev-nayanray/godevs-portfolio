# Bundled demo content (theme-internal copy)

The 8 files in this directory (`agency.php`, `freelancer.php`,
`webdev-studio.php`, `photographer.php`, `interior-designer.php`,
`architect.php`, `medical.php`, `law-firm.php`) power the one-click
"Import Demo Content" buttons on **Appearance → GoDevs Portfolio**
(`inc/class-dashboard.php`). Each file defines one function
(`godevs_portfolio_import_demo_{niche}()`) that creates that niche's
pages and navigation directly via `wp_insert_post()` — plain PHP, no
XML, no WXR parser, no plugin dependency.

**These are generated files, not hand-authored.** They were produced
once, by `scratchpad/wxr-to-php.php` (a one-time authoring tool that is
not part of this repo or the shipped theme), from the same content
already reviewed and shipped as WXR exports in the repository root's
`demo-content/*.xml` files — that directory remains the source of
truth for a developer working from the repo, and its own `README.md`
documents the `Tools → Import` path those files support.

**Why PHP instead of bundling the existing `.xml` files directly:**
WordPress.org Theme Review disallows `.xml` files in a theme package.
This was not assumed — it was caught directly by running the Theme
Check plugin against an earlier version of this feature that bundled
the WXR files as-is, which flagged a REQUIRED-level "XML file found."
violation. Converting to plain PHP functions resolved that violation
and, as a side benefit, removed the WordPress Importer plugin as a
dependency for this feature entirely.

**If the repo-root demo content changes**, regenerate these files by
re-running `scratchpad/wxr-to-php.php` against the updated
`demo-content/*.xml` exports (adjust its hardcoded paths first) rather
than hand-editing the output — see that script's own comments, and
`docs/CLAUDE.md`'s Phase 16 notes, for the full generation process.
