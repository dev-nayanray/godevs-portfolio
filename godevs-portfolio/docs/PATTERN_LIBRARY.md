# Pattern Library — GoDevs Portfolio Multi-Niche Expansion

Written in Phase 9 (planning only). Companion to `docs/NICHE_DEMOS.md`.
Every pattern below is listed once, even when reused by multiple
niches — this is the anti-duplication discipline this document exists
to enforce: **a "variant" must differ in layout or structure, never
just in copy.** Where two niches want the same shape with different
words, that's one pattern, not two.

Target: **27 content-facing patterns** (13 existing + 14 new), plus the
3 existing structural/utility patterns (`blog-heading`, `not-found`,
`header-cta-button`, all `Inserter:false`, not part of the "50+
patterns" headline count since they exist to fix an i18n gap, not to
serve as demo content) — **30 registered patterns total.** See Step 3
below for why this is the recommended number instead of 50+.

Status column: `existing` (built, Phases 1–7) · `new-core` (Phase 10,
shared across most/all niches) · `new-variant` (layout-distinct
sibling of an existing pattern) · `new-niche` (built for one specific
niche, may be reused by a close sibling niche).

## Core / shared patterns

| Slug | Title | Category | Used by | Status | What makes it distinct |
|---|---|---|---|---|---|
| `hero-agency` | Agency Hero | hero | Agency, Web Dev, Architect, Interior Designer, Medical, Law | existing | Team/studio voice, asymmetric image+text hero, `is_front_page()`-aware H1 |
| `hero-freelancer` | Freelancer Hero | hero | Freelancer, Photographer | existing | Solo/personal voice, portrait-forward layout |
| `services-grid` | Services Grid | services | Agency, Web Dev, Architect, Interior Designer, Medical (Conditions), Law (Practice Areas) | existing | Icon/title/description/link cards, `aria-label`-per-card (Phase 6 fix) |
| `pricing-table` | Pricing Table | pricing | Agency, Freelancer, Photographer | existing | 3-tier cards, "Most Popular" text badge (not color-only) |
| `team-grid` | Team Grid | team | Agency, Web Dev, Architect, Medical, Law | existing | Grid of many; see `team-member-profile` below for the single-person alternative |
| `stats-counter` | Stats Counter | social-proof | most niches | existing | Simple number+label grid |
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
| `testimonial-spotlight` | Testimonial Spotlight | testimonials | Freelancer, Photographer | new-core | One large quote + photo, vs. the carousel pattern's multi-column grid |
| `team-member-profile` | Team Member Profile | team | Medical, Law (individual attorney/doctor pages) | new-core | Single-person detailed bio (credentials, focus areas), vs. `team-grid`'s grid-of-many; needs its own template, see roadmap note |
| `hero-video` | Video Hero | hero | Photographer, Architect (optional) | new-core | `core/video` in place of `core/image`; ships with **no bundled video file**, same placeholder convention as existing images |
| `location-hours` | Location & Hours | contact | Medical, Law, Architect, Interior Designer | new-core | Map-forward layout (static placeholder graphic, not a live embed — see Step 3) + prominent hours, vs. `contact-info`'s 3-column card layout |
| `value-props` | Value Props | services | most niches (About-page trust section) | new-core | Icon/title/description grid with **no per-item link** — informational trust-builder, vs. `services-grid`'s clickable service cards |
| `company-timeline` | Company Timeline | social-proof | Agency, Architect, Law, Medical (About pages) | new-core | Dated milestone timeline, vs. `process-steps`'s undated sequential-steps shape |

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
| `appointment-cta` | Appointment Info | cta | Medical | new-niche | Static "call to schedule" block — phone + hours, explicitly no booking form/CPT |

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
