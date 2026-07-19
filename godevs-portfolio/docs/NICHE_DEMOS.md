# Niche Demo Plan — GoDevs Portfolio Multi-Niche Expansion

Written in Phase 9 (planning only — no patterns, templates, or demo
content built yet; see `docs/CLAUDE.md` Phase 10+ for the build
roadmap). Companion to `docs/PATTERN_LIBRARY.md`.

## Architecture recap

Each niche below ships as its **own small, independently-importable WXR
file** under `demo-content/` (e.g.
`demo-content/godevs-portfolio-photographer.xml`), not one combined
50-page import — same model as Astra/Kadence starter templates. A site
owner imports exactly one niche's demo, gets a focused, relevant site,
and never sees the other 49 pages. This is a deliberate choice to avoid
a WP.org "demo content bloat" review flag and to keep every demo
genuinely relevant rather than a generic kitchen-sink import.

All niches share one `patterns/` library and one `theme.json` token
set. A niche is defined by **which patterns it uses, in what stack,
with what copy** — not by separate CSS, separate templates-per-niche,
or a separate style variation. Any of the theme's 4 style variations
(Studio/Midnight/Sandstone/Emerald) can be paired with any niche; style
variations change mood, not layout, per the existing differentiation
thesis in `docs/PRD.md`.

## Final niche list: 8, not 9 — one consolidation from the working list

The working list named 9: Creative Agency, Freelance
Designer/Developer, Marketing Firm, Web Development Studio,
Photographer, Architect, Interior Designer, Medical Practice, Law Firm.

**Recommendation: merge Marketing Firm into Creative Agency rather than
building it as a 9th niche.** Reasoning in full in
`docs/CLAUDE.md`'s Phase 9 feasibility notes and flagged again at the
end of this document for sign-off — in short, a marketing firm's page
structure (Home/About/Services/Portfolio/Team/Pricing/Contact,
case-study-driven) is not structurally distinguishable from a creative
agency's; the only real difference is copy emphasis (channels and
campaign results vs. brand and creative work), which the existing
`patterns/hero-agency.php` + `patterns/portfolio-case-study.php`
already accommodate without a layout change. Building it as a separate
niche would mean shipping a near-duplicate demo package, which conflicts
with this project's own established discipline (see
`docs/PATTERN_LIBRARY.md`'s anti-duplication rule). A middle-ground
option — reinstating Marketing Firm as a 9th niche with one genuinely
new pattern (`results-metrics.php`, a campaign-results stat-card layout
distinct from `stats-counter.php`) — is noted as a real, buildable
alternative if Nayan prefers to stay closer to the original 9-niche
list; see the sign-off section at the end.

| # | Niche | Pages | New/variant patterns needed |
|---|---|---|---|
| 1 | Creative Agency *(built, Phase 3–7)* | 14 | none — baseline |
| 2 | Freelance Designer/Developer | 6 | 1 variant |
| 3 | Web Development Studio | 7 | 0 (reuses core additions) |
| 4 | Photographer | 6 | 1 variant + 1 shared new |
| 5 | Architect | 6 | 1 variant |
| 6 | Interior Designer | 6 | 1 shared new + 1 new |
| 7 | Medical Practice | 7 | 1 new |
| 8 | Law Firm | 7 | 0 (reuses core additions) |
| | **Total** | **59** | **6 new/variant patterns** (see `PATTERN_LIBRARY.md`) |

59 demo pages clears the 50+ target comfortably without inflating any
single niche past what it actually needs (see Step 3 feasibility notes
for why pattern *count* doesn't chase 50 the same way).

---

## 1. Creative Agency (built, no changes this expansion)

**Pages (14):** Home, About, Services, Portfolio, Team, Pricing,
Contact, Testimonials, Blog, Case Studies (parent + 4 children).

**Patterns reused as-is:** all 13 content-facing patterns from Phases
1–7 (`hero-agency`, `services-grid`, `portfolio-grid`,
`portfolio-case-study`, `pricing-table`, `team-grid`, `stats-counter`,
`testimonials-carousel-static`, `logo-cloud`, `cta-banner`,
`footer-cta`, `contact-info`), plus the 3 utility patterns
(`blog-heading`, `not-found`, `header-cta-button`).

**Variants needed:** none. **New patterns needed:** none. Untouched by
this expansion except that its dedicated templates
(`page-services.html`, `page-portfolio.html`, `page-team.html`,
`page-pricing.html`, `page-contact.html`) need converting from
hardcoded pattern stacks to generic post-content composition so other
niches can reuse them — see the Phase 10 architecture note in
`docs/CLAUDE.md`. This is a template-plumbing change, not a
content/pattern change, and should not alter how the existing Agency
demo renders.

---

## 2. Freelance Designer/Developer

**Pages (6):** Home, About, Services, Portfolio, Pricing, Contact.

**Shared patterns reused as-is:** `hero-freelancer` (already built for
exactly this — solo, personal voice), `pricing-table`, `contact-info`,
`cta-banner`, `footer-cta`, `logo-cloud` (past-client logos),
`stats-counter` (years experience / projects shipped).

**Pattern variant needed:** `portfolio-grid-simple.php` — 2–3 large,
personal project cards instead of the Agency grid's denser
multi-project editorial layout. A solo freelancer typically leads with
3–4 signature projects shown big, not a dense portfolio wall; this is a
genuine layout difference (card size and count), not a copy change.

**New pattern needed (shared with other niches, see library doc):**
`testimonial-spotlight.php` — one large client quote instead of the
Agency's multi-column carousel-style grid. A single strong endorsement
reads more credibly for a solo practitioner than a rotating set that
implies more clients than a solo operation typically has.

---

## 3. Web Development Studio

**Pages (7):** Home, About, Services, Process, Portfolio, Pricing,
Contact.

**Shared patterns reused as-is:** `hero-agency`, `portfolio-grid` (a
studio's client-work grid genuinely matches the Agency layout — no
variant needed here), `pricing-table`, `team-grid`, `contact-info`,
`cta-banner`, `footer-cta`, `logo-cloud`, `stats-counter`.

**New core pattern used (shared, see library doc):** `process-steps.php`
— numbered Discovery → Design → Build → Launch steps. This is the one
page that meaningfully differentiates a dev studio from a generic
agency (clients evaluating a technical partner want to see the delivery
process spelled out), and it's built once as a shared core pattern
because Interior Designer needs the same shape ("our process") and
Medical/Law could reuse it later for "what to expect."

**Variants/new patterns needed beyond the shared core set:** none.

---

## 4. Photographer

**Pages (6):** Home, About, Galleries, Services, Testimonials, Contact.

**Shared patterns reused as-is:** `hero-freelancer` (most photography
businesses are solo or very small studios — the personal-voice hero
fits better than the Agency hero), `pricing-table` (session/package
pricing), `contact-info`, `cta-banner`, `footer-cta`,
`testimonials-carousel-static`.

**Pattern variant needed:** `portfolio-grid-masonry.php` — true
staggered/masonry image grid, minimal or no caption text, image-forward.
This is the flagship example of "variant, not duplicate": Agency's
`portfolio-grid` is text-plus-image editorial (project name, client,
short description); a photographer's work should be almost entirely
image, since the photography itself is the pitch.

**New pattern needed (shared with Interior Designer, see library doc):**
`gallery-categories.php` — static category cards (Weddings / Portraits
/ Events, or similar) each linking to a filtered view. Explicitly
**not** a JS-filtered single-page gallery — plain linked cards, styled
with theme.json tokens, no custom JavaScript, consistent with the
project's established no-custom-JS discipline
(`testimonials-carousel-static.php`'s Phase 3 precedent).

---

## 5. Architect

**Pages (6):** Home, About, Projects, Services, Approach, Contact.

**Shared patterns reused as-is:** `hero-agency` (architecture firms
skew toward small teams, not solo — Agency's hero fits), `services-grid`,
`team-grid`, `cta-banner`, `footer-cta`, `contact-info`, `stats-counter`
(projects completed, square footage, awards — see the medical/legal
content-risk note in Step 3 for why these numbers must stay clearly
fictional).

**Pattern variant needed:** `portfolio-grid-project.php` — one large
image plus a short stat block (location, size, year, status) per
project, rather than Agency's multi-project card grid or Photographer's
masonry wall. Architecture portfolios are conventionally shown as a
small number of large, detailed project features, not a dense grid —
a real structural difference from both existing portfolio layouts.

**New core pattern reused (shared, see library doc):**
`awards-certifications.php`... **actually resolved as a reuse, not a
new pattern** — see Step 3 below and the library doc: this reuses
`logo-cloud.php` as-is (a labeled row of small images), just with
different heading copy ("Awards & Recognition") and award-badge images
instead of client logos. Kept here as a reminder not to accidentally
build a duplicate pattern for this.

---

## 6. Interior Designer

**Pages (6):** Home, About, Portfolio, Services, Process, Contact.

**Shared patterns reused as-is:** `hero-agency`, `services-grid`,
`cta-banner`, `footer-cta`, `contact-info`, `process-steps` (shared
core pattern, built for Web Development Studio above — "Consultation →
Design → Sourcing → Install" maps cleanly onto the same numbered-steps
shape).

**New pattern needed:** `before-after-columns.php`. **Naming note,
flagged explicitly per the brief's own instruction to call this out:**
the brief calls this "before-after-slider," but a true draggable
comparison slider requires custom JavaScript, which conflicts with this
project's established no-custom-JS precedent (every interactive-looking
pattern so far — testimonials, navigation — has stayed within core
blocks and native browser behavior). The recommended implementation is
a **static** two-column (stacking on mobile) Before/After image
comparison using `core/columns` + `core/image`, no slider mechanism,
no JS. Same visual idea, zero interactivity risk.

**Pattern reused (shared with Photographer):** `gallery-categories.php`
— room-type categories (Living Rooms / Kitchens / Bedrooms) instead of
Photographer's shoot-type categories. Same pattern, different demo
copy — exactly the kind of reuse this project should keep favoring over
building a near-duplicate.

---

## 7. Medical Practice

**Pages (7):** Home, About, Services *("Conditions Treated" framing)*,
Team, FAQ, New Patients, Contact.

**Naming decision, flagged per the brief's explicit ask to catch this:**
the brief's working idea was a "Book Appointment" page. **Renamed to
"New Patients"** and scoped as purely informational (what to expect at
a first visit, what to bring, office hours, phone number to call) —
see Step 3's feasibility gate below for why an actual booking mechanism
is out of scope.

**Shared patterns reused as-is:** `hero-agency`, `services-grid` (used
for "Conditions Treated" / specialties — structurally identical to a
services list, no new pattern needed), `team-grid` (provider bios),
`contact-info`, `cta-banner`, `footer-cta`, `stats-counter` (years in
practice, patients seen — must stay clearly fictional, see Step 3).

**New core pattern used (shared, see library doc):** `faq-list.php` —
built on the native `core/details` block (HTML5 `<details>`/`<summary>`,
built into WordPress core, zero custom JS, fully keyboard- and
screen-reader-accessible by default). Directly reusable by Law Firm.

**New pattern needed:** `appointment-cta.php` — a static block stating
"Call to schedule" with phone number and office hours. **Explicitly not
a booking form, not a booking CPT, not a third-party booking-plugin
integration** — see Step 3's feasibility gate for the full reasoning.

---

## 8. Law Firm

**Pages (7):** Home, About, Practice Areas, Team, Results, FAQ,
Contact.

**Shared patterns reused as-is:** `hero-agency`, `services-grid` (used
for "Practice Areas" — same structural reasoning as Medical's
"Conditions Treated": a grid of icon/title/description/link cards is
already exactly what a practice-area list needs, no new pattern),
`team-grid` (attorney bios), `contact-info` ("Schedule a Consultation"
framing, same static-only treatment as Medical's appointment pattern),
`cta-banner`, `footer-cta`, `stats-counter` (years practicing, cases
handled — fictional, see Step 3), `faq-list` (shared core pattern from
Medical Practice above).

**Pattern reused with content-only changes:** `portfolio-case-study.php`
— its existing Challenge/Approach/Result structure maps directly onto
a legal case summary (Situation/Strategy/Outcome). Reused for the
Results page. **Content-risk note:** copy must describe outcomes
generically ("achieved a favorable resolution for our client") and
never in guarantee language ("we win every case," specific dollar
settlement figures presented as typical/expected) — see Step 3.

**Variants/new patterns needed:** none beyond what's already listed
above as shared.

---

## Sign-off items (see also `docs/CLAUDE.md` Phase 9 notes and the
final chat report)

1. **Confirm the 8-niche list**, specifically the Marketing Firm
   merge-into-Agency decision (or reinstate it as a 9th niche with the
   proposed `results-metrics.php` pattern — noted above as a real,
   buildable alternative, not a rejection).
2. **Confirm the "New Patients" rename** (was "Book Appointment" in the
   original brief) and the informational-only scope for medical/legal
   consultation pages.
3. **Confirm `before-after-columns.php`** (static) as the
   implementation instead of a literal JS slider.
