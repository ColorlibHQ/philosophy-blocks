<?php
/**
 * Title: Masonry post grid
 * Slug: philosophy-blocks/hidden-masonry
 * Categories: philosophy
 * Inserter: no
 *
 * Philosophy's blog grid. The Query Loop renders a plain grid, which is a
 * perfectly good layout on its own; assets/js/philosophy-blocks.js rebalances
 * the columns into a masonry when it runs. Nothing here depends on the script.
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:query {"queryId":0,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"philosophy-masonry","layout":{"type":"default"}} -->
<div class="wp-block-query philosophy-masonry">
	<!-- wp:post-template {"className":"philosophy-masonry__list","layout":{"type":"grid","minimumColumnWidth":"320px"}} -->
		<!-- wp:group {"className":"philosophy-masonry__brick","style":{"spacing":{"blockGap":"0px","padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group philosophy-masonry__brick" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"philosophy-masonry__thumb"} /-->

		<!-- wp:group {"className":"philosophy-masonry__text","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"3rem","right":"2.8rem","bottom":"3.6rem","left":"2.8rem"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
		<div class="wp-block-group philosophy-masonry__text has-base-background-color has-background" style="padding-top:3rem;padding-right:2.8rem;padding-bottom:3.6rem;padding-left:2.8rem"><!-- wp:post-date {"fontSize":"small"} /-->

		<!-- wp:post-title {"isLink":true,"level":2,"fontSize":"x-large"} /-->

		<!-- wp:post-excerpt {"moreText":"","excerptLength":30} /-->

		<!-- wp:read-more {"content":"<?php echo esc_attr__( 'Read More', 'philosophy-blocks' ); ?>","fontSize":"x-small","fontFamily":"sans"} /-->

		<!-- wp:post-terms {"term":"category","fontSize":"x-small"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
	<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous {"label":"<?php echo esc_attr__( 'Newer Posts', 'philosophy-blocks' ); ?>","className":"philosophy-pagination__arrow"} /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next {"label":"<?php echo esc_attr__( 'Older Posts', 'philosophy-blocks' ); ?>","className":"philosophy-pagination__arrow"} /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"philosophy-blocks/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
