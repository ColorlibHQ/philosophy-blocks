# Philosophy Blocks — architecture and invariants

The block-theme edition of Philosophy. Separate theme, separate slug: it
installs alongside the classic `philosophy` theme so a site can move across and
switch back without losing anything.

This file is export-ignored: it is in the repository, never in a release zip.

## Layout

```
theme.json            the design system: palette, type, spacing, block styles
style.css             the theme header only
functions.php         supports, enqueues, pattern category
inc/
  block-styles.php    register_block_style() calls
  updates.php         update check over core's Update URI hook
templates/*.html      14 block templates
parts/*.html          header, footer, sidebar — each delegating to a pattern
patterns/*.php        the sections; "hidden-" ones are template-only
styles/*.json         Ink, Paper and Sans style variations
assets/css/           theme.css, editor.css, fonts.css, fontawesome/
assets/js/            the masonry and the scroll reveal
tools/                build and verification scripts
```

## Invariants

**Design decisions belong in theme.json, not in CSS.** `assets/css/theme.css` is
for what the block supports API has no vocabulary for: the masonry positioning,
a few hover states, the header's search field. If a rule could be a theme.json
value, make it one.

**`defaultFontSizes` is false, and has to stay false.** WordPress ships its own
small/medium/large/x-large presets and they win over a theme's entries with the
same slugs, so with it left on, four of this theme's seven sizes were silently
WordPress's — body copy at 20px instead of 16. The scale is stated in rem
against a 16px root: 11 / 15 / 16 / 21 / 24 / 30 / 36px, the same steps the
classic theme and the HTML template use.

**The sans is Metropolis and the body copy is set in it**, with Libre
Baskerville reserved for headings — the other way round is what made this read
as a different theme from the classic edition. Montserrat is bundled latin-ext
only, as the fallback for the letters Metropolis lacks; keep it in the stack.
Do not fetch Libre Baskerville from the Google Fonts CSS API, which answers
weight 400 and weight 700 with the same file and leaves every heading
synthesised — `tools/build-fonts.mjs` uses Fontsource for that reason.

**Never hand-write block markup from memory.** Block comment attributes have to
match what the block's `save` produces exactly, or the editor shows "this block
contains unexpected or invalid content" and offers to recover it. Two blocks in
this theme shipped invalid before anyone opened the editor. Generate the markup
instead: open the Site Editor and run `wp.blocks.serialize( wp.blocks.createBlock( … ) )`
in the console, then paste the result. `tools/validate-blocks.mjs` parses every
template and part and fails on any invalid or missing block; run it after
editing any pattern.

**JSON attributes have unique keys.** `{"style":{…},"className":"…","style":{…}}`
silently drops the first `style`. That is how the footer separator broke.

**The masonry is an enhancement, never a requirement.** The Query Loop renders a
CSS grid that is a complete layout on its own; the script only rebalances the
columns. Nothing may be hidden by CSS that the script is then responsible for
revealing — `.philosophy-reveal` is added by JavaScript for exactly this reason.

**Everything positional is set from JavaScript.** Same rule as the classic
theme: a cached or replaced `theme.css` must not be able to break the grid.

**Contrast is checked, not assumed.** `muted` is `#767676` because `#999999` is
2.85:1 on white and fails WCAG AA. Dark grounds use the separate `subtle` token,
because a grey dark enough for white text is far too dark on the footer.

**A block theme has no Customizer.** WordPress hides it. Anything that feels
like it wants a setting is either a theme.json value, a template part, or page
content.

## Build

```bash
node tools/build-assets.mjs                       # minify CSS and JS
node tools/build-fontawesome.mjs <fa-free-pkg>    # rebuild the icon bundle
python3 tools/verify-icons.py                     # then always verify it
node tools/build-fonts.mjs                        # refetch the webfonts
```

## Release

```bash
git archive --format=zip --prefix=philosophy-blocks/ -o philosophy-blocks.zip HEAD
```

## Updates and the install count

`inc/updates.php` is the same module the classic theme and Academia and Unapp
carry, pointed at `philosophy-blocks.json`. What it sends is listed in the file.
Theme Check flags `Update URI` as REQUIRED-remove; that rule is for themes in
the WordPress.org directory and this is not one.

`https://updates.colorlib.com/theme/philosophy-blocks.json` does not exist yet.

## Relationship to the classic theme

`philosophy` (1.2.x) is the classic theme and still maintained. It keeps its
Customizer. Neither theme's settings are visible to the other, which is the
point: switching is reversible. The classic theme's About/Contact info blocks
were migrated into page content in 1.2.0, so that content survives the move.
