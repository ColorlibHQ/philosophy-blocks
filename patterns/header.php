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
<!-- wp:group {"className":"philosophy-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0"}}},"backgroundColor":"night","textColor":"base","layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group philosophy-header has-base-color has-night-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:0">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"philosophy-header__social is-style-logos-only","layout":{"type":"flex"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color philosophy-header__social is-style-logos-only">
			<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://bsky.app/","service":"bluesky"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'label', 'philosophy-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Type Keywords', 'philosophy-blocks' ); ?>","widthUnit":"px","buttonText":"<?php echo esc_attr__( 'Search', 'philosophy-blocks' ); ?>","buttonPosition":"button-only","buttonUseIcon":true,"className":"philosophy-header__search"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:site-logo {"width":220} /-->

		<!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

		<!-- wp:site-tagline {"textAlign":"center","textColor":"subtle","fontFamily":"sans","fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"top":{"color":"#ffffff26","width":"1px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group" style="border-top-color:#ffffff26;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:navigation {"textColor":"base","overlayBackgroundColor":"night","overlayTextColor":"base","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
