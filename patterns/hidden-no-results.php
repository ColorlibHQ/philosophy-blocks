<?php
/**
 * Title: No results
 * Slug: philosophy-blocks/hidden-no-results
 * Categories: philosophy
 * Inserter: no
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Nothing found', 'philosophy-blocks' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html__( 'Nothing matched those terms. Try a different keyword, or start again from the home page.', 'philosophy-blocks' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'label', 'philosophy-blocks' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Type Keywords', 'philosophy-blocks' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'philosophy-blocks' ); ?>","align":"center"} /-->
</div>
<!-- /wp:group -->
