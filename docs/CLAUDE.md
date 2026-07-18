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

**Phase 0 — Scaffolding**

Repo structure, docs, and empty theme skeleton created. No design
tokens, pattern markup, or template content written yet. `theme.json` is
an empty v3 skeleton (`settings: {}`, `styles: {}`). Style variation
files exist but are empty shells (title only). All PHP files have
docblocks + `ABSPATH` guards; pattern files have correct header comments
(Title/Slug/Categories) with placeholder bodies. `wp-env` config exists
and installs cleanly against latest core.

**Not yet started:** theme.json design tokens, style variation content,
pattern markup, template/template-part markup, demo content, screenshot
asset, readme.txt content sections, languages/POT file.

**Next phase (Phase 1, not started):** Define `theme.json` settings —
color palette, type scale, spacing scale, layout widths — as the
foundation every pattern and style variation will consume. Do not start
writing pattern markup before Phase 1 tokens exist, or patterns will need
rework once tokens land.

_Update this section at the end of every session so the next session can
resume without re-reading the whole repo._
