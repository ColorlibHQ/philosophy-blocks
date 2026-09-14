<?php
/**
 * Title: Header
 * Slug: philosophy-blocks/header
 * Categories: philosophy, header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:group {"className":"philosophy-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0"}}},"backgroundColor":"night","textColor":"inverse","layout":{"type":"constrained","contentSize":"1160px"}} -->
<div class="wp-block-group philosophy-header has-inverse-color has-night-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:0">

	<!-- wp:group {"className":"philosophy-header__top","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group philosophy-header__top" style="padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:social-links {"iconColor":"inverse","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"philosophy-header__social is-style-logos-only","layout":{"type":"flex"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color philosophy-header__social is-style-logos-only">
			<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://bsky.app/","service":"bluesky"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:group {"className":"philosophy-header__brand","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group philosophy-header__brand">
			<!-- wp:site-logo {"width":271} /-->

			<!-- wp:site-title {"level":0,"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|inverse"}}}},"textColor":"inverse"} /-->

			<!-- wp:site-tagline {"textAlign":"center","textColor":"subtle","fontFamily":"sans","fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'label', 'philosophy-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Type Keywords', 'philosophy-blocks' ); ?>","widthUnit":"px","buttonText":"<?php echo esc_attr__( 'Search', 'philosophy-blocks' ); ?>","buttonPosition":"button-only","className":"philosophy-header__search"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"#ffffff26","width":"1px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group" style="border-top-color:#ffffff26;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:navigation {"textColor":"inverse","overlayBackgroundColor":"night","overlayTextColor":"base","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
