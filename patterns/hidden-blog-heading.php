<?php
/**
 * Title: Blog heading
 * Slug: philosophy-blocks/hidden-blog-heading
 * Categories: philosophy
 * Inserter: no
 *
 * The blog index has no visible heading of its own -- the masthead is the
 * design -- but a page still needs one h1, and the site title is a paragraph
 * so that inner pages do not end up with two. This supplies it for readers who
 * navigate by heading.
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:heading {"level":1,"className":"screen-reader-text"} -->
<h1 class="wp-block-heading screen-reader-text"><?php echo esc_html_x( 'Latest posts', 'blog index heading', 'philosophy-blocks' ); ?></h1>
<!-- /wp:heading -->
