<?php
/**
 * Title: Post meta
 * Slug: philosophy-blocks/hidden-post-meta
 * Categories: philosophy
 * Inserter: no
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group">
	<!-- wp:post-date {"fontSize":"small"} /-->

	<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
	<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'in', 'between a date and a category name', 'philosophy-blocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
</div>
<!-- /wp:group -->
