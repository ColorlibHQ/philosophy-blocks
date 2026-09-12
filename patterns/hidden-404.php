<?php
/**
 * Title: 404 content
 * Slug: philosophy-blocks/hidden-404
 * Categories: philosophy
 * Inserter: no
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"display"} -->
	<h1 class="wp-block-heading has-text-align-center has-display-font-size"><?php echo esc_html__( 'Ooops 404 Error!', 'philosophy-blocks' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html__( 'Either something went wrong or the page doesn&rsquo;t exist anymore.', 'philosophy-blocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'label', 'philosophy-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Type Keywords', 'philosophy-blocks' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'philosophy-blocks' ); ?>","align":"center"} /-->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Go to the home page', 'philosophy-blocks' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
