<?php
/**
 * Title: Featured posts
 * Slug: philosophy-blocks/hidden-featured
 * Categories: philosophy
 * Inserter: no
 *
 * The three panels at the top of the blog: one large, two stacked beside it,
 * each a post with its featured image behind the title. In the classic theme
 * this was a Customizer setting that picked a category and a bespoke WP_Query.
 * Here it is a Query Loop, so which posts appear is edited in the Site Editor
 * like anything else.
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:group {"className":"philosophy-featured","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"backgroundColor":"night","textColor":"base","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group philosophy-featured has-base-color has-night-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false,"sticky":"exclude"},"className":"philosophy-featured__query","layout":{"type":"default"}} -->
	<div class="wp-block-query philosophy-featured__query">
		<!-- wp:post-template {"className":"philosophy-featured__list","layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"night","minHeight":300,"className":"philosophy-featured__panel","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover philosophy-featured__panel" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-night-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-small"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-large"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small","fontFamily":"sans"} /-->

			<!-- wp:post-date {"textColor":"base","fontSize":"small"} /--></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center","textColor":"base"} -->
			<p class="has-text-align-center has-base-color has-text-color"><?php echo esc_html__( 'Publish a post and it will appear here.', 'philosophy-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
