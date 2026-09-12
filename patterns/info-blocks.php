<?php
/**
 * Title: Info blocks
 * Slug: philosophy-blocks/info-blocks
 * Categories: philosophy, columns, text
 * Block Types: core/columns
 *
 * The layout the classic theme's About and Contact pages produced from a
 * Customizer repeater. A pattern, so it is edited like the rest of the page.
 *
 * @package Philosophy_Blocks
 */

?>
<!-- wp:columns {"className":"philosophy-info-blocks","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns philosophy-info-blocks" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":2,"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Who we are', 'philosophy-blocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'A paragraph about the people behind the site.', 'philosophy-blocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":2,"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'What we do', 'philosophy-blocks' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'A paragraph about the work.', 'philosophy-blocks' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
