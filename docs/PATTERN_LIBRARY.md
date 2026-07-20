# Pattern Library — GoDevs Portfolio Multi-Niche Expansion

Written in Phase 9 (planning). The 14 new patterns and the 2 new
categories (`faq`, `process`) were built in Phase 10 — this document is
now a built inventory, not just a plan; see `docs/CLAUDE.md` Phase 10
notes for the live verification. Companion to `docs/NICHE_DEMOS.md`.
Every pattern below is listed once, even when reused by multiple
niches — this is the anti-duplication discipline this document exists
to enforce: **a "variant" must differ in layout or structure, never
just in copy.** Where two niches want the same shape with different
words, that's one pattern, not two.

**27 content-facing patterns** (13 existing + 14 new), plus the 3
existing structural/utility patterns (`blog-heading`, `not-found`,
`header-cta-button`, all `Inserter:false`, not part of the "50+
patterns" headline count since they exist to fix an i18n gap, not to
serve as demo content) — **30 registered patterns total, confirmed live
via `WP_Block_Patterns_Registry` as of Phase 10.** See Step 3 below for
why this is the recommended number instead of 50+.

**Phase 14 reconciliation (all 8 niches now built, 59 pages total):**
every pattern below was re-verified against the actual shipped WXR
content — grepped for live `wp:pattern` references and, for patterns
that were hand-expanded into a page's own `post_content` (see
`docs/CLAUDE.md`'s reference-vs-expand rule), grepped for a
structural fingerprint unique to that pattern's markup, not assumed
from memory or from this document's original Phase 9 plan. Result:
**27 of 30 registered patterns are actively used across the 59 demo
pages.** The "Used by" columns below were corrected in three places
where the original Phase 9 plan didn't match what actually got built
(Phases 11–13 made reasonable in-the-moment substitutions that were
never backported to this doc):
- `hero-freelancer` — Photographer removed from "Used by."
  Photographer's build (Phase 12) used `hero-video.php` live on every
  page needing a hero instead, since it was already photography-scoped
  out of the box. Confirmed via grep: zero `hero-freelancer` structural
  fingerprint anywhere in `godevs-portfolio-demo-photographer.xml`.
- `testimonial-spotlight` — Photographer removed from "Used by."
  Photographer's Testimonials page (Phase 12) expanded
  `testimonials-carousel-static.php` instead (multi-quote grid reads
  better with a photographer's larger, non-solo client base than a
  single spotlight quote). Confirmed via grep: zero
  `testimonial-spotlight` fingerprint in the Photographer WXR; the
  `testimonials-carousel-static` fingerprint appears twice (Home +
  Testimonials pages) instead.
- `team-member-profile` (+ its `page-team-member.html` template) —
  **registered and end-to-end verified, but not used by any shipped
  demo page.** See the dedicated note below — this is a deliberate
  Phase 13 decision, not an oversight.

Two other patterns are registered but **never used by any of the 59
shipped pages at all** (`location-hours`, `company-timeline`) — see
the dedicated notes below for why they stay in the library anyway.

Status column: `existing` (built, Phases 1–7) · `new-core` (Phase 10,
shared across most/all niches) · `new-variant` (layout-distinct
sibling of an existing pattern) · `new-niche` (built for one specific
niche, may be reused by a close sibling niche).

## Core / shared patterns

| Slug | Title | Category | Used by | Status | What makes it distinct |
|---|---|---|---|---|---|
| `hero-agency` | Agency Hero | hero | Agency, Web Dev, Architect, Interior Designer, Medical, Law | existing | Team/studio voice, asymmetric image+text hero, `is_front_page()`-aware H1 |
| `hero-freelancer` | Freelancer Hero | hero | Agency (Team/Contact pages), Freelancer | existing | Solo/personal voice, portrait-forward layout. *Not* used by Photographer — see Phase 14 reconciliation note above; corrected from the original Phase 9 plan. |
| `services-grid` | Services Grid | services | Agency, Web Dev, Architect, Interior Designer, Medical (Conditions), Law (Practice Areas) | existing | Icon/title/description/link cards, `aria-label`-per-card (Phase 6 fix) |
| `pricing-table` | Pricing Table | pricing | Agency, Freelancer, Photographer | existing | 3-tier cards, "Most Popular" text badge (not color-only) |
| `team-grid` | Team Grid | team | Agency, Web Dev, Architect, Medical, Law | existing | Grid of many; see `team-member-profile` below for the single-person alternative |
| `stats-counter` | Stats Counter | social-proof | 7 of 8 niches (all but Interior Designer) | existing | Simple number+label grid |
| `testimonials-carousel-static` | Testimonials (Static) | testimonials | Agency, Web Dev, Photographer | existing | Multi-column `core/quote` grid, zero JS |
| `logo-cloud` | Logo Cloud | social-proof | Agency, Freelancer, Web Dev; reused as-is for Architect's Awards & Recognition | existing | Labeled row of small images — generic enough that "client logos" and "award badges" are the same layout, different copy/images |
| `cta-banner` | CTA Banner | cta | all niches | existing | Gradient background (`primary-to-accent` token pair) |
| `footer-cta` | Footer CTA | cta | all niches | existing | Page-ending closing CTA |
| `contact-info` | Contact Info | contact | all niches | existing | 3-column email/phone/address, static only |
| `header-cta-button` | Header CTA Button | cta | all niches (template part) | existing, utility | `Inserter:false`; fixes an i18n gap, not a content pattern |
| `blog-heading` | Blog Heading | cta-category (utility) | Agency | existing, utility | `Inserter:false`; i18n-gap fix for `home.html`/`index.html` |
| `not-found` | Not Found Message | cta-category (utility) | all niches (404 template) | existing, utility | `Inserter:false`; i18n-gap fix for `404.html` |
| `faq-list` | FAQ List | faq *(new category)* | Medical, Law | new-core | Built on `core/details`/`core/summary` — native HTML5 accordion, zero custom JS, accessible by default |
| `process-steps` | Process Steps | process *(new category)* | Web Dev, Interior Designer | new-core | Numbered sequential steps, distinct from `company-timeline`'s dated-history shape |
| `testimonial-spotlight` | Testimonial Spotlight | testimonials | Freelancer | new-core | One large quote + photo, vs. the carousel pattern's multi-column grid. *Not* used by Photographer — see Phase 14 reconciliation note above; corrected from the original Phase 9 plan. |
| `team-member-profile` | Team Member Profile | team | *(built, verified, not shipped — see note below)* | new-core | Single-person detailed bio (credentials, focus areas), vs. `team-grid`'s grid-of-many; ships with its own `page-team-member.html` template |
| `hero-video` | Video Hero | hero | Photographer, Architect (optional) | new-core | `core/video` in place of `core/image`; ships with **no bundled video file**, same placeholder convention as existing images |
| `location-hours` | Location & Hours | contact | *(built, never used by a shipped demo — see note below)* | new-core | Map-forward layout (static placeholder graphic, not a live embed — see Step 3) + prominent hours, vs. `contact-info`'s 3-column card layout |
| `value-props` | Value Props | services | Freelancer, Web Dev Studio, Architect (About/Approach-page trust section) | new-core | Icon/title/description grid with **no per-item link** — informational trust-builder, vs. `services-grid`'s clickable service cards. "Used by" tightened from "most niches" to the 3 niches actually confirmed via Phase 14 grep. |
| `company-timeline` | Company Timeline | social-proof | *(built, never used by a shipped demo — see note below)* | new-core | Dated milestone timeline, vs. `process-steps`'s undated sequential-steps shape |

## Niche variants and new niche patterns

| Slug | Title | Category | Used by | Status | What makes it distinct |
|---|---|---|---|---|---|
| `portfolio-grid` | Portfolio Grid | portfolio | Agency, Web Dev | existing | Multi-project editorial grid, text+image |
| `portfolio-case-study` | Case Study | portfolio | Agency; reused for Law's Results page | existing | Challenge/Approach/Result structure — maps directly onto Situation/Strategy/Outcome for legal content |
| `portfolio-grid-simple` | Portfolio Grid (Simple) | portfolio | Freelancer | new-variant | 2–3 large signature-project cards, not a dense multi-project grid |
| `portfolio-grid-masonry` | Portfolio Grid (Masonry) | portfolio | Photographer | new-variant | True staggered image grid, minimal/no captions, image is the whole pitch |
| `portfolio-grid-project` | Portfolio Grid (Project) | portfolio | Architect | new-variant | One large image + stat block (location/size/year) per project, not a grid of many |
| `gallery-categories` | Gallery Categories | portfolio | Photographer, Interior Designer | new-niche (shared by 2) | Static linked category cards (shoot types / room types) — explicitly not JS-filtered |
| `before-after-columns` | Before & After | portfolio | Interior Designer | new-niche | Static two-column comparison (`core/columns` + `core/image`), no slider/JS — see feasibility note in `NICHE_DEMOS.md` |
| `new-patients-info` | New Patients Info | cta | Medical | new-niche | Static "call to schedule" block — phone + hours, explicitly no booking form/CPT. Built as `new-patients-info.php` (renamed from the `appointment-cta` working title in Phase 10 to match the "New Patients" page framing) |

## Built but not tied to a specific demo page (Phase 14 dead-weight review)

Three registered patterns are not used by any of the 59 shipped demo
pages. Per the Phase 14 instruction to either use each one somewhere
sensible or explicitly document why it stays general-purpose, all
three are kept — the reasoning is recorded here instead of silently
dropping them, so it isn't re-litigated in Phase 15+.

- **`team-member-profile.php` (+ `page-team-member.html`).** Built in
  Phase 10 specifically for individual attorney/doctor profile pages,
  and genuinely needed by Medical/Law's funnel in principle. Phase 13
  built the template, then proved the pattern+template combination
  works end-to-end with a real temporary page (created, checked live —
  correct H1/H2 structure — then deleted before export). It was
  **deliberately not shipped as a real page** so that Medical's and
  Law's page counts stayed at exactly 7 each, matching the
  pre-committed 45 + 14 = 59 total that every later phase (including
  this one) has verified against. This was a considered tradeoff, not
  an oversight: `team-grid.php` already gives every niche a
  lower-commitment way to introduce a team, and adding individual
  profile pages would mean either growing the total page count (never
  approved) or removing an existing page to make room (a scope change
  beyond QA/packaging). The pattern and template are fully functional
  and available to any site owner who wants to add individual profile
  pages to their own site after importing a demo — kept as a verified,
  general-purpose capability, not filler.
- **`location-hours.php`.** Built in Phase 10 for a "visit us"
  map-forward layout, planned for Medical/Law/Architect/Interior
  Designer's contact needs. In practice, every one of those niches'
  actual builds (Phases 11–13) found `contact-info.php`'s simpler
  3-column layout sufficient for demo-copy contact details, and
  Medical's specific "office hours" need was already covered by
  `new-patients-info.php`. No niche build ever reached for
  `location-hours.php` once actually building the page. Kept as a
  genuinely useful standalone pattern for a real site owner who wants
  a map-forward "visit us" section beyond what any demo currently
  ships — not used in a demo, but not filler either.
- **`company-timeline.php`.** Built in Phase 10 for a dated
  founding-to-today milestone history, planned for Agency/Architect/
  Law/Medical About pages. No About-page build in Phases 3–13 ever
  used it — `stats-counter.php` (a simpler, undated "years in
  practice" number) covered the same "credibility through longevity"
  need in every niche that wanted it, and proved sufficient every
  time. Kept as an available pattern for a real site owner whose About
  page benefits from a fuller dated history than a single stat can
  convey.

## Deliberately not built (considered and rejected, so the reasoning isn't re-litigated in Phase 10+)

- **`newsletter-signup.php`** — any working email-capture needs a
  backend (Mailchimp/ConvertKit embed, or a forms plugin), which
  conflicts with the existing "no required plugin, no bundled
  submission handler" rule (`docs/PRD.md` Non-Goals,
  `contact-info.php`'s Phase 3 precedent). Skipped, not deferred.
- **`pricing-comparison-table.php`** (row-based feature comparison vs.
  `pricing-table`'s card layout) — real layout difference, but thin
  enough that it reads as filler rather than a genuinely needed
  addition for any of the 8 niches. Skipped.
- **`stats-counter-inline.php`** (compact single-row variant) — differs
  from `stats-counter` mainly in compactness, not shape. Skipped as
  likely filler; revisit only if a specific niche build surfaces a real
  need.
- **A literal "Videographer" niche**, separate from Photographer — same
  gallery/masonry structure, same funnel, differs only in "photo" vs.
  "video" copy. This is exactly the near-duplicate problem this
  document exists to avoid; a photographer's demo can already
  accommodate a videographer's positioning without a second niche.
- **Gym/fitness, restaurant, and other non-portfolio local-business
  niches** — out of scope for this expansion. `docs/PRD.md`'s
  differentiation thesis is built specifically around the
  attract→credibility→trust→convert portfolio-sales-funnel; a class
  schedule or a menu is a different information architecture entirely,
  not a copy variant of what this theme already does well.

## Implementation notes for whichever phase actually builds these
(not this phase's job to build, only to flag)

- **`faq-list.php` must use `core/details`**, not a hand-rolled
  JS accordion — this is a real, available core block (native
  `<details>`/`<summary>`) and keeps the theme's zero-custom-JS
  discipline intact.
- **`location-hours.php` must use a static placeholder graphic**, not a
  live Google Maps (or similar) embed — a live embed would be exactly
  the kind of third-party remote call the REQUIRED checklist item "No
  remote/third-party HTTP calls without explicit user action" exists to
  prevent (`docs/WPORG_CHECKLIST.md`).
- **`hero-video.php` ships with no bundled video asset**, same as every
  existing image pattern ships with a small placeholder PNG, not a real
  photo — a bundled video file would also meaningfully bloat the
  theme's package size in a way a placeholder PNG doesn't.
- **`team-member-profile.php` needs one new custom template**
  (`page-team-member.html`), reused across every individual profile
  page the same way `page-case-study.html` is already reused across 4
  different Case Study pages (Phase 5 precedent). One template, many
  pages, distinct per-page content — not one template per person.
- **Every new hero pattern should share the existing
  `is_front_page() ? 1 : 2` heading-level logic**, not reimplement it.
  Recommend extracting it into a small shared helper in `inc/` during
  Phase 10 so `hero-video.php` and any future hero pattern get the
  "exactly one H1, on the actual front page" guarantee for free instead
  of it being re-derived per pattern the way Phase 4 first discovered
  it for `hero-agency.php`.
