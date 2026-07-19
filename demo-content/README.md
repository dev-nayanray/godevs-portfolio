# GoDevs Portfolio — Demo Content

`godevs-portfolio-demo-content.xml` is a standard WordPress eXtended RSS
(WXR) export containing the theme's full demo content: 14 Pages, 5 Posts,
1 Navigation menu, and 1 media attachment (a placeholder featured image
used by the blog posts).

## What's included

| Content | Count | Notes |
|---|---|---|
| Pages | 14 | Home, About, Services, Portfolio, Team, Pricing, Contact, Testimonials, Blog (posts-page marker), Case Studies (parent), and 4 case study pages (`northwind-rebrand`, `globex-mobile-app`, `fabrikam-commerce-platform`, `contoso-marketing-site`) |
| Posts | 5 | Sample agency-blog content, 2 categorized "Process", 3 "Industry Insights" |
| Navigation menu | 1 | "Primary Navigation" — Home, About, Services, Portfolio, Team, Pricing, Blog, Contact |
| Media | 1 | Placeholder featured image, attached to all 5 posts |

Every page uses the theme's real templates/patterns (see
[docs/PRD.md](../docs/PRD.md) Section 5 for the full template/pattern-stack
mapping) — this is not lorem-ipsum filler, it's realistic (clearly
fictional) agency-portfolio copy meant to prove out every template and
pattern in real use.

## How to import

1. Install and activate the **godevs-portfolio** theme.
2. In wp-admin, go to **Tools → Import → WordPress** (install the
   "WordPress Importer" plugin first if prompted).
3. Upload `godevs-portfolio-demo-content.xml`.
4. When prompted, assign imported content to an existing user or create
   a new one, and check **"Download and import file attachments."**
5. After import, go to **Settings → Reading** and confirm:
   - "Your homepage displays" → **A static page**
   - **Homepage** → *Home*
   - **Posts page** → *Blog*

   (The importer preserves page content and hierarchy, but Reading
   Settings are a site-level option, not post content, so WordPress's
   importer does not set these for you — this one-time step is normal
   for any WordPress site, not specific to this theme.)

## Known limitation: the Navigation menu after import

The theme's `header.html` and `header-transparent.html` template parts
reference the "Primary Navigation" menu by its database post ID, which
is only valid on the site it was created on. A fresh WXR import
generally assigns the imported Navigation post a **new** ID, so the
header's navigation block may fall back to WordPress's default
behavior (showing all published Pages) instead of the curated 8-item
menu, until you manually reselect it.

**To fix after import:** open **Appearance → Editor → Navigation**,
confirm the "Primary Navigation" menu imported with the intended 8
items, then open the header template part and re-select it in the
Navigation block's toolbar. This is a general WordPress platform
limitation around portable Navigation references, not a theme bug —
see `docs/CLAUDE.md` Phase 5 notes for the full explanation.
