# GoDevs Portfolio — Demo Content

GoDevs Portfolio ships **3 separate, independently-importable demo
packages** — one per business niche — rather than one combined import.
Each is a small, focused WXR (WordPress eXtended RSS) export containing
only that niche's own pages and navigation menu. Import exactly one,
depending on which kind of site you're building. See
[docs/NICHE_DEMOS.md](../docs/NICHE_DEMOS.md) for the full multi-niche
plan (5 more niche demos — Photographer, Architect, Interior Designer,
Medical Practice, Law Firm — are planned for future releases).

## Available demos

| File | Niche | Pages | Notes |
|---|---|---|---|
| `godevs-portfolio-demo-content.xml` | Creative Agency | 14 | The original, most fully-built demo — includes a blog and 4 detailed case studies. Also includes 5 sample blog Posts and 1 media attachment. |
| `godevs-portfolio-demo-freelancer.xml` | Freelance Designer/Developer | 6 | A lean, solo-practitioner site — first-person voice, a focused portfolio, simpler pricing. |
| `godevs-portfolio-demo-webdev-studio.xml` | Web Development Studio | 7 | A small technical studio's site — includes a dedicated "Process" page explaining how engagements run. |

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
runs, which the other two demos don't include.

## How to import

1. Install and activate the **godevs-portfolio** theme.
2. In wp-admin, go to **Tools → Import → WordPress** (install the
   "WordPress Importer" plugin first if prompted).
3. Upload **one** of the 3 XML files above, matching the niche you want.
4. When prompted, assign imported content to an existing user or create
   a new one. For the Creative Agency demo, also check **"Download and
   import file attachments"** (the other two demos have no media to
   import).
5. After import, go to **Settings → Reading** and confirm:
   - "Your homepage displays" → **A static page**
   - **Homepage** → *Home*
   - **Posts page** → only the Creative Agency demo has one; set it to
     *Blog*. The Freelancer and Web Development Studio demos don't
     include a Posts page, so leave this field as-is.

   (The importer preserves page content and hierarchy, but Reading
   Settings are a site-level option, not post content, so WordPress's
   importer does not set these for you — this one-time step is normal
   for any WordPress site, not specific to this theme.)

**Importing more than one demo into the same site is not supported.**
Each demo is meant to be the *only* content on a fresh install — the 3
files were built and verified independently and were never designed to
coexist (they don't share page IDs, slugs are only guaranteed unique
*within* a single demo, and only one Reading Settings / navigation menu
can be active at a time).

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
limitation applies identically to all 3 demos).
