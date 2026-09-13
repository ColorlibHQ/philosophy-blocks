<?php
/**
 * Title: Footer
 * Slug: philosophy-blocks/footer
 * Categories: philosophy, footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:group {"className":"philosophy-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"}}},"backgroundColor":"footer","textColor":"inverse","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group philosophy-footer has-inverse-color has-footer-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":2,"textColor":"inverse","fontSize":"x-small"} -->
			<h2 class="wp-block-heading has-inverse-color has-text-color has-x-small-font-size"><?php echo esc_html__( 'Popular posts', 'philosophy-blocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":70,"featuredImageSizeHeight":70,"style":{"elements":{"link":{"color":{"text":"var:preset|color|inverse"}}}},"textColor":"inverse"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":2,"textColor":"inverse","fontSize":"x-small"} -->
			<h2 class="wp-block-heading has-inverse-color has-text-color has-x-small-font-size"><?php echo esc_html__( 'About', 'philosophy-blocks' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"subtle","fontSize":"small"} -->
			<p class="has-subtle-color has-text-color has-small-font-size"><?php echo esc_html__( 'A sentence or two about the publication, the people behind it, and what a reader can expect to find here.', 'philosophy-blocks' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"inverse","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex"}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://bsky.app/","service":"bluesky"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide","style":{"color":{"text":"#ffffff26"},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity has-text-color is-style-wide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--40)"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center","textColor":"subtle","fontFamily":"sans","fontSize":"small"} -->
	<p class="has-text-align-center has-subtle-color has-text-color has-sans-font-family has-small-font-size">
		<?php
		printf(
			/* translators: 1: current year, 2: opening anchor tag, 3: closing anchor tag. */
			esc_html__( 'Copyright &copy; %1$s All rights reserved. | This template is made with love by %2$sColorlib%3$s', 'philosophy-blocks' ),
			esc_html( wp_date( 'Y' ) ),
			'<a href="https://colorlib.com" rel="nofollow noopener" target="_blank">',
			'</a>'
		);
		?>
	</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
