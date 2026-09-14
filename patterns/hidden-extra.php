<?php
/**
 * Title: Footer extra
 * Slug: philosophy-blocks/hidden-extra
 * Categories: philosophy
 * Inserter: no
 *
 * The white band between the content and the dark footer: a short list of
 * posts, a note about the publication, and the tag cloud. In the classic theme
 * this is three widget areas; here it is one pattern, edited in the Site
 * Editor like the rest of the footer.
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:group {"className":"philosophy-extra","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1160px"}} -->
<div class="wp-block-group philosophy-extra has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Popular posts', 'philosophy-blocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:query {"queryId":30,"query":{"perPage":6,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false,"sticky":"exclude"},"className":"philosophy-extra__posts","layout":{"type":"default"}} -->
			<div class="wp-block-query philosophy-extra__posts">
				<!-- wp:post-template {"className":"philosophy-extra__list","layout":{"type":"grid","columnCount":2}} -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
					<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"70px","height":"70px","className":"philosophy-extra__thumb"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"level":3,"fontFamily":"sans","fontSize":"small"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"textColor":"muted","fontFamily":"sans","fontSize":"x-small"} /-->

					<!-- wp:post-date {"textColor":"muted","fontFamily":"sans","fontSize":"x-small"} /--></div>
					<!-- /wp:group --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'About', 'philosophy-blocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'A sentence or two about the publication, the people behind it, and what a reader can expect to find here.', 'philosophy-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#151515","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex"}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://bsky.app/","service":"bluesky"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Tags', 'philosophy-blocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:tag-cloud {"numberOfTags":30,"showTagCounts":false,"smallestFontSize":"0.8125rem","largestFontSize":"0.8125rem","align":"center","className":"philosophy-extra__tags"} /-->

</div>
<!-- /wp:group -->
