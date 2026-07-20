# GoDevs Portfolio — Demo Content

GoDevs Portfolio ships **8 separate, independently-importable demo
packages** — one per business niche — rather than one combined import.
Each is a small, focused WXR (WordPress eXtended RSS) export containing
only that niche's own pages and navigation menu. Import exactly one,
depending on which kind of site you're building. See
[docs/NICHE_DEMOS.md](../docs/NICHE_DEMOS.md) for the full multi-niche
plan.

**On a real WordPress install, the easiest way to get any of these 8
demos is Appearance → GoDevs Portfolio in wp-admin** (Phase 16) — a
one-click "Import" button per niche, no file download or Tools →
Import step needed. This directory's WXR files remain the source of
truth (the dashboard's own bundled copy, `godevs-portfolio/
demo-content/*.php`, is generated from these — see that directory's own
README.md and `docs/CLAUDE.md`'s Phase 16 notes) and are still the
right path for a developer working directly from this repository via
`Tools → Import`, documented below.

> **⚠️ Medical Practice and Law Firm demos are illustrative placeholder
> content only.** The provider/attorney names, credentials, bios,
> statistics, and case summaries in these two demos are entirely
> fictional and written to be safely generic (no real medical claims,
> no guaranteed legal outcomes, no real credentials or license
> numbers). **Do not publish a real medical practice or law firm site
> using this placeholder copy as-is.** Every page in both demos also
> carries an HTML comment at the top of its content reiterating this —
> replace all copy with real, professionally-reviewed information
> specific to your practice before publishing.

## Available demos

| File | Niche | Pages | Notes |
|---|---|---|---|
| `godevs-portfolio-demo-content.xml` | Creative Agency | 14 | The original, most fully-built demo — includes a blog and 4 detailed case studies. Also includes 5 sample blog Posts and 1 media attachment. |
| `godevs-portfolio-demo-freelancer.xml` | Freelance Designer/Developer | 6 | A lean, solo-practitioner site — first-person voice, a focused portfolio, simpler pricing. |
| `godevs-portfolio-demo-webdev-studio.xml` | Web Development Studio | 7 | A small technical studio's site — includes a dedicated "Process" page explaining how engagements run. |
| `godevs-portfolio-demo-photographer.xml` | Photographer | 6 | A solo photographer's site — video showreel hero, a staggered masonry gallery, and shoot-type gallery categories. |
| `godevs-portfolio-demo-interior-designer.xml` | Interior Designer | 6 | A small design studio's site — room-type gallery categories and a static before/after room comparison. |
| `godevs-portfolio-demo-architect.xml` | Architect | 6 | A small architecture firm's site — large single-project features (not a dense grid) and an awards/recognition section. |
| `godevs-portfolio-demo-medical.xml` | Medical Practice | 7 | A multi-provider practice's site ("Willowbrook Family Medicine") — an informational-only "New Patients" page (hours/insurance/phone, no booking form) and a "Team" page ready to link out to individual `page-team-member.html` profiles. **Placeholder content only — see warning above.** |
| `godevs-portfolio-demo-law-firm.xml` | Law Firm | 7 | A multi-practice-area firm's site ("Ashgrove & Pierce, LLP") — `services-grid.php` reused as "Practice Areas" and `portfolio-case-study.php` reused as a "Results" page with deliberately hedged, non-guaranteed outcome language. **Placeholder content only — see warning above.** |

Every page in every demo uses the theme's real templates and block
patterns (see [docs/PATTERN_LIBRARY.md](../docs/PATTERN_LIBRARY.md) for
the full shared pattern library) — none of this is lorem-ipsum filler;
each demo has its own realistic (clearly fictional) copy written in a
voice appropriate to that niche, not a find-and-replace of another
demo's text.

### Creative Agency (`godevs-portfolio-demo-content.xml`)

Home, About, Services, Portfolio, Team, Pricing, Contact, Testimonials,
Blog (posts-page marker), Case Studies (parent page) plus 4 detailed
case study pages (`northwind-rebrand`, `globex-mobile-app`,
`fabrikam-commerce-platform`, `contoso-marketing-site`), and 5 sample
blog Posts (2 categorized "Process", 3 "Industry Insights").

### Freelance Designer/Developer (`godevs-portfolio-demo-freelancer.xml`)

Home, About, Services, Portfolio, Pricing, Contact — built around a
solo persona ("Riley Chen"), using `hero-freelancer.php` and
`portfolio-grid-simple.php` (a handful of large, personal project
features rather than a dense multi-project grid).

### Web Development Studio (`godevs-portfolio-demo-webdev-studio.xml`)

Home, About, Services, Process, Portfolio, Pricing, Contact — built
around a small technical studio persona ("Brightloop Studio"). The
Process page uses `process-steps.php` to spell out how an engagement
runs.

### Photographer (`godevs-portfolio-demo-photographer.xml`)

Home, About, Galleries, Services, Testimonials, Contact — built around
a solo persona ("Maya Ortiz" of Juniper Lane Photography), using
`hero-video.php` (a video showreel hero, no file bundled — replace with
your own), `portfolio-grid-masonry.php` (a staggered, caption-free image
wall), and `gallery-categories.php` (Weddings / Portraits / Events).

### Interior Designer (`godevs-portfolio-demo-interior-designer.xml`)

Home, About, Portfolio, Services, Process, Contact — built around a
small studio persona ("Elm & Ash Interiors"), using
`gallery-categories.php` (Living Rooms / Kitchens / Bedrooms — the same
pattern as the Photographer demo, different copy and images) and
`before-after-columns.php` (a static, non-JS Before/After room
comparison).

### Architect (`godevs-portfolio-demo-architect.xml`)

Home, About, Projects, Services, Approach, Contact — built around a
small firm persona ("Thornfield Architecture"), using
`portfolio-grid-project.php` (a small number of large, detailed project
features rather than a dense grid) and `logo-cloud.php` reused as an
"Awards & Recognition" section on the Approach page.

### Medical Practice (`godevs-portfolio-demo-medical.xml`)

Home, About, Services, Team, FAQ, New Patients, Contact — built around
a fictional multi-provider persona ("Willowbrook Family Medicine").
Services are described in generic, non-clinical terms ("General
Checkups", "Preventive Care") with no treatment-efficacy claims. The
New Patients page is informational only (office hours, phone, and an
accepted-insurance list) — there is no booking form or appointment CPT.
**Placeholder content only — see warning above.**

### Law Firm (`godevs-portfolio-demo-law-firm.xml`)

Home, About, Practice Areas, Team, Results, FAQ, Contact — built around
a fictional multi-practice-area persona ("Ashgrove & Pierce, LLP").
`services-grid.php` is reused as "Practice Areas" (Family Law, Business
Formation, Estate Planning, Civil Litigation, described in general,
non-jurisdiction-specific terms). `portfolio-case-study.php` is reused
as a "Results" page, rewritten with deliberately hedged outcome
language ("achieved a favorable resolution," never a win/loss or
dollar-figure claim) and an explicit past-results disclaimer.
**Placeholder content only — see warning above.**

## How to import

1. Install and activate the **godevs-portfolio** theme.
2. In wp-admin, go to **Tools → Import → WordPress** (install the
   "WordPress Importer" plugin first if prompted).
3. Upload **one** of the 8 XML files above, matching the niche you want.
4. When prompted, assign imported content to an existing user or create
   a new one. For the Creative Agency demo, also check **"Download and
   import file attachments"** (the other 7 demos have no media to
   import).
5. After import, go to **Settings → Reading** and confirm:
   - "Your homepage displays" → **A static page**
   - **Homepage** → *Home*
   - **Posts page** → only the Creative Agency demo has one; set it to
     *Blog*. The other 7 demos don't include a Posts page, so leave
     this field as-is.

   (The importer preserves page content and hierarchy, but Reading
   Settings are a site-level option, not post content, so WordPress's
   importer does not set these for you — this one-time step is normal
   for any WordPress site, not specific to this theme.)

**Importing more than one demo into the same site is not supported.**
Each demo is meant to be the *only* content on a fresh install — all 8
files were built and verified independently, each in its own genuinely
empty wp-env database, and were never designed to coexist (they don't
share page IDs, slugs are only guaranteed unique *within* a single
demo, and only one Reading Settings / navigation menu can be active at
a time).

**What actually happens if you import more than one anyway (tested in
Phase 14, so this isn't a guess):** every demo assumes it's the only
content on the site, so every demo reuses the same common page slugs
(`home`, `about`, `services`, `contact`, `team`, `portfolio`,
`pricing`, `testimonials`). WordPress's importer resolves the
resulting collisions the normal way — whichever demo you import
*first* keeps the clean slugs, and every later import gets
auto-suffixed (`contact-2`, `contact-3`, and so on). That part is
cosmetic. The real problem is that **every pattern's internal
buttons and links are hardcoded to the clean slug** (e.g. a "Meet Our
Team" button always points to `/team/`, never to the page's own
actual URL) — so once a later-imported demo's own page lands on a
suffixed slug, that demo's own buttons silently start pointing at
*whichever demo got there first* instead of its own content. This
doesn't error or 404 — it just quietly sends visitors to the wrong
business's page. Separately, only one of the resulting navigation
menus can ever be active in the header at a time, so every demo
after the first loses its own curated nav items to whichever menu the
header falls back to, and Reading Settings can only point at one
demo's Home page — every other demo's Home page then renders through
the generic page template instead of the front-page template, which
[due to a template-selection edge case](../docs/CLAUDE.md) can add a
second, unintended `<h1>` to that page. None of this is a bug in the
sense of something to file and fix — it's the direct, now-confirmed
consequence of importing content that was deliberately built and
verified as single-demo-only. If you want to explore more than one
demo, do it on separate fresh installs (or destroy-and-reimport
between each one), not side by side on the same site.

## Known limitation: the Navigation menu after import

Every demo's `header.html` and `header-transparent.html` template parts
reference their "Primary Navigation" menu by its database post ID,
which is only valid on the site it was created on. A fresh WXR import
generally assigns the imported Navigation post a **new** ID, so the
header's navigation block may fall back to WordPress's default
behavior (showing all published Pages) instead of the curated menu,
until you manually reselect it.

**To fix after import:** open **Appearance → Editor → Navigation**,
confirm the "Primary Navigation" menu imported with the intended items
for that demo, then open the header template part and re-select it in
the Navigation block's toolbar. This is a general WordPress platform
limitation around portable Navigation references, not a theme bug —
see `docs/CLAUDE.md`'s Phase 5 notes for the full explanation (the same
limitation applies identically to all 8 demos).
