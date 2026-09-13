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
<!-- wp:group {"className":"philosophy-featured","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"backgroundColor":"night","textColor":"inverse","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group philosophy-featured has-inverse-color has-night-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false,"sticky":"exclude"},"className":"philosophy-featured__query","layout":{"type":"default"}} -->
	<div class="wp-block-query philosophy-featured__query">
		<!-- wp:post-template {"className":"philosophy-featured__list","layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:cover {"useFeaturedImage":true,"minHeight":300,"customGradient":"linear-gradient(0deg, rgba(0,0,0,0.88) 0%, rgba(0,0,0,0.78) 50%, rgba(0,0,0,0.18) 100%)","contentPosition":"bottom left","className":"philosophy-featured__panel","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left philosophy-featured__panel" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(0deg, rgba(0,0,0,0.88) 0%, rgba(0,0,0,0.78) 50%, rgba(0,0,0,0.18) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|inverse"}}}},"textColor":"inverse","fontSize":"x-small"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|inverse"}}}},"textColor":"inverse","fontSize":"x-large"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|inverse"}}}},"textColor":"inverse","fontSize":"small","fontFamily":"sans"} /-->

			<!-- wp:post-date {"textColor":"inverse","fontSize":"small"} /--></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center","textColor":"inverse"} -->
			<p class="has-text-align-center has-inverse-color has-text-color"><?php echo esc_html__( 'Publish a post and it will appear here.', 'philosophy-blocks' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
