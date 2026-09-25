=== Philosophy Blocks ===

Contributors: colorlib
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 2.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, one-column, two-columns, block-patterns, block-styles, full-site-editing, custom-colors, custom-logo, custom-menu, editor-style, featured-images, style-variations, template-editing, threaded-comments, translation-ready, wide-blocks

The block edition of Philosophy: a masonry blog theme for the Site Editor.

== Description ==

Philosophy Blocks is Philosophy rebuilt as a block theme. Every template, the
header, the footer and each section are blocks, and the design system lives in
theme.json, so the whole site is edited in one place: Appearance > Editor.

It keeps what made Philosophy recognisable — the dark masthead, the featured
panels, the masonry blog grid and the Libre Baskerville and Metropolis pairing —
and expresses all of it with core blocks.

* Fourteen block templates, including page and post layouts with a sidebar
* A featured area driven by a Query Loop, so which posts appear is editable
* A masonry post grid that degrades to a plain grid without JavaScript
* Three style variations: Ink, Paper and Sans
* Four block styles and a set of patterns for the sections
* Self-hosted webfonts and a trimmed icon set: no third-party requests
* Translation ready

== Installation ==

1. In your admin panel, go to Appearance > Themes and click Add New.
2. Click Upload Theme, choose philosophy-blocks.zip, then Install Now.
3. Click Activate, then go to Appearance > Editor to make it yours.

== Frequently Asked Questions ==

= I use the classic Philosophy theme. What happens to my site? =

Nothing, until you choose. Philosophy Blocks is a separate theme with its own
directory, so it installs alongside the classic Philosophy without touching it.
Activating it switches your site over; switching back restores the classic theme
and every one of its settings, which are untouched while you are away.

= Where did the Customizer go? =

WordPress hides the Customizer for block themes because everything it used to do
is now in one editor. Colours, fonts and spacing are under Appearance > Editor >
Styles. The header, footer and every template are under Templates and Patterns.

= Where are the About and Contact page settings? =

They are page content. Add a page, insert the Info blocks pattern, and edit it
like the rest of the page. The classic theme kept that content in a Customizer
repeater; this one does not need to.

= How do I change which posts appear in the featured area? =

Appearance > Editor > Templates > Blog Home, then select the Query Loop inside
the featured section. Its filters are the standard Query Loop ones.

= The masonry grid looks like a plain grid =

The grid is rendered by the Query Loop and rebalanced into a masonry by a small
script. If scripts are blocked you get the plain grid, which is a complete and
correct layout on its own.

== Changelog ==


= 2.1.1 =
* Update requests no longer name the site. WordPress's default User-Agent carries the site address; the update check and core's package download to updates.colorlib.com now send only the theme and WordPress versions, so the one-way site identifier is the only thing that tells installs apart.

= 2.1.0 =
2.0.1 to 2.0.7 were version numbers used while iterating on the design; 2.1.0
is the release that follows 2.0.0.

* Fixed the Ink style variation, where the site title, navigation, featured
  headlines and footer headings rendered black on black. A new inverse colour
  keeps text on dark grounds light in every variation.
* Fixed a 16px white seam between the masthead and the featured area.
* Featured panel text stays legible over pale photographs: the panels use the
  cover block's gradient overlay, and every line passes WCAG AA.
* Every page has exactly one h1. The site title is a paragraph.
* The block edition now matches the design and the classic theme: body copy in
  the sans, the theme's own font sizes instead of WordPress's defaults,
  Metropolis and a real Libre Baskerville Bold, and grid posts on white cards.
* The front page ends as the design does, with centred pagination, a white band
  carrying recent posts, a note and the tag cloud, and a four-column footer.
* The featured area is one story at two thirds beside two at one third, with
  solid category chips. The navigation dims and highlights the current section.
* The masthead sits on one row, the page is 1160px wide, and a site with a logo
  no longer also prints its name and tagline.
* The header search opens a full-page overlay, as in the classic theme.
* The wordmark is capped in size on phones.
* The footer rule is a 1px line at 10% white instead of 2px of light grey.
* Removed a MediaElement sprite the block theme never used.

= 2.0.0 =
* First release of the block edition.

== Notes for maintainers ==

Theme Check reports one REQUIRED item: the `Update URI` header. That rule is for
themes *in* the WordPress.org directory, which must not carry it. This theme is
distributed from colorlib.com, which is the case the header exists for. If it is
ever submitted to the directory, drop the header and `inc/updates.php` together.

`https://updates.colorlib.com/theme/philosophy-blocks.json` has to be published
for update checks to report anything. Until it is, the check fails closed.

== Copyright ==

Philosophy Blocks WordPress Theme, Copyright 2018-2026 Colorlib
Philosophy Blocks is distributed under the terms of the GNU GPL v2 or later.

== Resources ==

Font Awesome Free 7.3.1
* Copyright Fonticons, Inc.
* Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License
* https://fontawesome.com/license/free
* Bundled in assets/css/fontawesome/, trimmed by tools/build-fontawesome.mjs

Metropolis
* Copyright Chris Simpson
* The Unlicense (public domain)
* https://github.com/dw5/Metropolis

Libre Baskerville
* Copyright Impallari Type
* SIL Open Font License, 1.1
* https://fonts.google.com/specimen/Libre+Baskerville

Montserrat
* Copyright The Montserrat Project Authors
* SIL Open Font License, 1.1
* https://fonts.google.com/specimen/Montserrat
* latin-ext only, as the fallback for the few letters Metropolis does not draw

The theme ships no photographs. The images in screenshot.png are a rendering of
the theme with demo content and are not part of the theme files.
